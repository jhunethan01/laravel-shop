<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'sku','product_name','weight','point_1','point_2','point_3','image','colour','material','range','size','type','Oven_safe','dishwasher_safe','wash_by_hand','guarantee_period','price','stock',
    ];
    public $timestamps = true;
}
