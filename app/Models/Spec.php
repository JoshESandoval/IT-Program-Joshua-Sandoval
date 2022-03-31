<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Spec extends Model
{
    protected $fillable =['equiptmentId','ram','memory','display','processor','graphics','misc'];

    public function equiptment(){
        return $this->belongsTo(Equiptment::class);
    }
    use HasFactory,SoftDeletes;
}
