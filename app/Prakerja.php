<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prakerja extends Model
{
    use SoftDeletes;
    protected $fillable = ['nama','email','nohp','password','agen','tagihan','status'];

}
