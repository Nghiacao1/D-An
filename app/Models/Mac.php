<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mac extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fullname',
        'email',
        'address',
        'purchaseDate',
        'sellDate',
        'saleMan',
        'status',
        'provider',
        'updatedDate',
        'lockName',
        'buyerName',
        'buyerEmail',
        'buyerPhone',
        'buyerAddress',
    ];
    public $timestamps = false;
}
