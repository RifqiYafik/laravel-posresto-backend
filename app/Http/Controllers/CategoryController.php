<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // index
    public function index()
    {
        $categories = Category::paginate(10);
        return view('pages.categories.index', compact('categories'));
    }

    // create
    public function create()
    {
        return view('pages.categories.create');
    }

    // store
    public function store(Request $request)
    {
        // validate the request...
        $request->validate([
            'name' =>'required',
            'description' =>'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // create the category...
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        // save image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/categories', $category->id. '.'. $image->getClientOriginalExtension());
            $category->image ='storage/categories/'. $category->id. '.'. $image->getClientOriginalExtension();
            $category->save();
        }

        // redirect
        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }

    // show
    public function show()
    {
        return view('pages.categories.show');
    }

    // edit
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('pages.categories.edit', compact('category'));
    }

    // update
    public function update(Request $request, $id)
    {
        // validate the request...
        $request->validate([
            'name' =>'required',
            'description' =>'required',
            // 'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // update the reequest...
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        // save image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/categories', $category->id. '.'. $image->getClientOriginalExtension());
            $category->image ='storage/categories/'. $category->id. '.'. $image->getClientOriginalExtension();
            $category->save();
        }

        // redirect
        return redirect()->route('categories.index')->with('success', 'Category updated successfully');

    }


    // destroy
    public function destroy($id)
    {
        // delete the category...
        $category = Category::find($id);
        $category->delete();

        // redirect
        return redirect()->route('categories.index')->with('success','Category deleted succesfully');
    }


}
