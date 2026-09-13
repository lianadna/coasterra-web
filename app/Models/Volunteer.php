<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = ['image', 'name', 'role', 'instagram_url', 'linkedin_url', 'summary'];
}
