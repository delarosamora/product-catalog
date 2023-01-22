<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    #region RELATIONS
        /**
     * Get the post that owns the comment.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    #endregion

    #region ACCESORS
    public function getCodeTagAttribute() : string
    {
        $id = $this->id;
        $categoryCode = $this->category->code;
        return "$categoryCode-$id";
    }
    #endregion
}