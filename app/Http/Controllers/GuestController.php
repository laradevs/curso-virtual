<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Category,Post};
use App\DataCache\PaginateCache;
class GuestController extends Controller
{



    public function index(){
    	return view('welcome')
    	->with(['categories'=>PaginateCache::getCategoriesWithCountPost()]);
    }

    public function postByCategory(Category $category){
    	return view('guest.posts-by-category',compact('category'))->with([
    		'posts'=>$category->posts()->with('user')->orderBy('created_at','DESC')->paginate()
    	]);
    }

    public function viewPost(Post $post){
    	return view('guest.view-post',compact('post'));
    }

}