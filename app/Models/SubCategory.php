<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name_en', 'description_en', 'name_ar', 'description_ar', 'main_categories_id', 'file_img'];

    // /**
    //  * Get the main_categories that owns the subCategory
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  */
    // public function main_categories(): BelongsTo
    // {
    //     // return $this->belongsTo(MainCategory::class, 'main_id');
    //     return $this->belongsTo(MainCategory::class, 'main_categories', 'id', 'main_id');
    // }
}
