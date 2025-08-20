<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    // fillable itu artinya nandain kolom mana aj yg di isi
    protected $fillable = [
        "category_id",
        "name",
        "price",
        "facility",
        "description",
        "image_cover"
    ];

    public function category() {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}
