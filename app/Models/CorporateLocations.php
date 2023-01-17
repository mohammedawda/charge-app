<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CorporateLocations extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['description', 'location_coordinates', 'address', 'contract_id', 'governorate_id'];
}
