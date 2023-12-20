<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'code',
        'fullname',
        'email',
        'password',
        'username',
        'neolock_username',
        'phone',
        'address',
        'country',
        'district',
        'city',
        'status',
        'created_date',
        'avatar',
        'token',
        'point',
        'webcloud_enable',
        'security_key',
        'fcm',
        'social_id',
        'last_login',
        'access_token',
        'refresh_token',
        'open_id',
        'scope',
        'expires_in',
        'identification_number',
        'identification_img_1',
        'identification_img_2',
        'balance',
        'receiveFcm',
        'roles',
        'emailVerify',
        'mobileVerify',
        'remake',
        'is_deleted',
        'commission',
        'parent',
        'CCCD',
        'product_type',
        'is_receive_email',
    ];
    public $timestamps = false;

}