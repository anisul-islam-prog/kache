<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'owner',
        'name',
        'platform',
        'created_by',
        'discount',
        'type',
        'discount_validity',
        'discount_code',
        'refer_link',
    ];
}
