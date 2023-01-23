<?php

namespace App\Models;

use File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

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

    public function getSafeImageAttribute() : string
    {
        return (is_null($this->image) || !Storage::disk('public')->exists('products/' . $this->image)) ?
        'default.jpg' : $this->image;
    }
    #endregion
}