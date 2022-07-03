<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transmission extends Model
{
    use HasFactory;
    protected $table = 'm_trans';
    public $timestamps = false;
    public $incrementing = false;
    protected $dates = ['created_time', 'updated_time', 'deleted_time'];
}
