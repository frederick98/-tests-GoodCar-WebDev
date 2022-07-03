<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 't_transaction';
    public $timestamps = false;
    public $incrementing = false;
    protected $dates = ['created_time', 'updated_time', 'deleted_time'];
}
