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
        return redirect('add-category')->with('message', 'category info save successfully');
    }

    public function manageCategory()
    {
        $categoryByUser = Category::where('user_id', Auth::user()->id)->get();
        return view('users.category.manage-category', [
            'categoryByUser' => $categoryByUser
        ]);
    }

    Public function unpublishedCategory($id)
    {
        //$categoryById = Category::where('id' , $id) ->first();
        $categoryById = Category::find($id);
        $categoryById->publication_status = 0;
        $categoryById->save();
        return redirect('/manage-category');
    }

    Public function publishedCategory($id)
    {
        //$categoryById = Category::where('id' , $id) ->first();
        $categoryById = Category::find($id);
        $categoryById->publication_status = 1;
        $categoryById->save();
        return redirect('/manage-category');
    }

    Public function deleteCategory($id)
    {
        //$categoryById = Category::where('id' , $id) ->first();
        $categoryById = Category::find($id);
        $categoryById->delete();
        return redirect('/manage-category');
    }

    Public function editCategory($id)
    {
        //$categoryById = Category::where('id' , $id) ->first();
        $categoryById = Category::find($id);
        return view('users.category.edit-category', [
            'categoryById' => $categoryById
        ]);
    }

    Public function updateCategory(Request $request)
    {
        //$categoryById = Category::where('id' , $id) ->first();
        $categoryById = Category::where('id', $request->category_id)->first();
        $categoryById->category_name = $request->category_name;
        $categoryById->category_description = $request->category_description;
        $categoryById->publication_status = $request->publication_status;
        $categoryById->update();

        return redirect('/manage-category')->with('message','Category Info Update Successfully');
    }


}
