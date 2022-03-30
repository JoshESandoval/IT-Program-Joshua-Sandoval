<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manufacture extends Model
{
    protected $fillable = ['title','salesEmail','salesNumber','techEmail','techNumber'];

    use HasFactory,SoftDeletes;
}
