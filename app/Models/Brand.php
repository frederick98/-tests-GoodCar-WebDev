<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'm_brand';
    public $timestamps = false;
    public $incrementing = false;
    protected $dates = ['created_time', 'updated_time', 'deleted_time'];
}
