<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    use HasFactory;

    protected  $fillable=[
        'product_id',
        'keywords',
        'meta_description'
    ];

    public  function product(){
        return $this->belongsTo(Product::class);
    }
}
