<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContractPrices extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['vehicle_type_id', 'starting_date', 'ending_date', 'price', 'contract_id', 'corporate_id'];
}
