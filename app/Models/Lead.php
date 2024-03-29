<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'user_id',
        'title',
        'name',
        'contact_ref',
        'contact_one',
        'contact_two',
        'status',
        'product_type',
        'service_type',
        'type',
        'budget',
        'area',
        'advice',
        'city',
        'lat',
        'lon',
        'pincode',
        'description',
        'profit',
        'is_hotdeal',
        'confirmed_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'advice' => 'boolean',
        'confirmed_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}