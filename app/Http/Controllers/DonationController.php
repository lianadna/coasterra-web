<?php

namespace App\Http\Controllers;

use App\Models\Camping;
use App\Models\Donation;
use App\Models\Donatur;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DonationController extends Controller
{
    /**
     * Record a donation pledged from the landing page.
     *
     * No payment gateway is wired up yet, so the donation and its payment row
     * are stored as PENDING for an admin to confirm from the panel.
     */
    public function store(Request $request, Camping $camping)
    {
        $validated = $request->validateWithBag('donation', [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'amount' => ['required', 'integer', 'min:1000'],
            'method' => ['nullable', 'string', 'max:255'],
        ]);

        DB::transaction(function () use ($validated, $camping) {
            $donor = Donatur::firstOrCreate(
                ['email' => $validated['email'] ?? null, 'name' => $validated['name']],
                ['phone' => $validated['phone'] ?? null]
            );

            $donation = Donation::create([
                'camping_id' => $camping->id,
                'donor_id' => $donor->id,
                'amount' => $validated['amount'],
                'date' => now(),
                'status' => 'PENDING',
            ]);

            Payment::create([
                'donation_id' => $donation->id,
                'method' => $validated['method'] ?? 'manual transfer',
                'date' => now(),
                'code' => 'CST-'.Str::upper(Str::random(8)),
                'status' => 'PENDING',
            ]);
        });

        return back()->with(
            'donation_success',
            'Thank you! Your donation has been recorded and is awaiting confirmation.'
        );
    }
}
