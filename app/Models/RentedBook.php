<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentedBook extends Model
{
    use HasFactory;
    public $table = 'rentedbooks';
    public $fillable = [
        'barcode',
        'floor',
        'room_number',
        'rent_at',
        'return_at',
        'checkout',
    ];
}
