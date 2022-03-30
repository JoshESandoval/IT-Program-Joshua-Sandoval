<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    protected $fillable=['equiptmentId','location','price','purchaseDate'];

    public function equiptment(){
        return $this.BelongsTo(Equiptment::class);
    }

    use HasFactory,SoftDeletes;
}
