<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_request extends Model
{
    use HasFactory;
    protected $fillable = ['name',
    'email',
    'number',
    'address',
    'service_request',
    'experience',
    'problem',
    'solution', 'flood_experience', 'farm_location', 'flood_impact', 'recovery', 'cost_peryear', 'profit_made',];
}
