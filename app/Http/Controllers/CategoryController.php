<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Auth;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('users.category.add-category');
    }

    public function newCategory(Request $request)
    {
        $category = new Category();
        $category->user_id = Auth::user()->id;
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('add-category')->with('message','category info save successfully');


    }
}
