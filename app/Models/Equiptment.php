<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equiptment extends Model
{
    protected $fillable = ['manufactureId','userId','catagory'];

    public function invoice(){
        return $this->hasOne(Invoice::class);
    }
    public function spec(){
        return $this->hasOne(Spec::class);
    }

    public function note(){
        return $this->hasMany(Notes::class);
    }
    use HasFactory;
}
