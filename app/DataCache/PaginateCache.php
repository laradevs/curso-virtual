<?php

namespace App\DataCache;
use Cache;
use App\Category;
class PaginateCache
{
    public static function getCategoriesWithCountPost(){
		return Cache::remember('categoriesWithCountPost', 120, function () {
				return Category::withCount('posts')->get();
		});
    }
}

