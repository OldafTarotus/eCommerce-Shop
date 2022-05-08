<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MainCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name_en', 'description_en', 'name_ar', 'description_ar', 'file_img'];
    // /**
    //  * Get all of the sub_categories for the MainCategory
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function sub_categories(): HasMany
    // {
    //     // return $this->hasMany(SubCategory::class, 'main_id');
    //     return $this->hasMany(SubCategory::class, 'sub_categories', 'main_id', 'id');
    // }
}
