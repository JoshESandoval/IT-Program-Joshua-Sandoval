<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{

    protected $fillable = ['equiptmentId','type','desctiption'];

    public function equiptment(){
        return $this->belongsTo(Equiptment::class);
    }


    use HasFactory,SoftDeletes;
}
