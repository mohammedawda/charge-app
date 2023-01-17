<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExtraServices extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['service_description', 'starting_date', 'ending_date', 'service_price', 'price_id'];

}
