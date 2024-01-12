<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Product extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'product_id',
        'images',
        'introduce',
        'description',
        'price',
        'salient_features',
        'connect',
        'access_mode',
        'support_system',
        'power',
        'lowbattery_warning',
        'security',
        'img_description',
    ];
    public $timestamps = false;
}