<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')) {
            $categories = Category::where('name', 'LIKE', '%'.$request->search.'%')->paginate(8);
            return view('adminlte.categories.index', compact('categories'));
        }else{
            $categories = Category::paginate(6);
            return view('adminlte.categories.index', compact('categories'));
        }
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        Category::create($request->all());
        return redirect( route('categories.index'));
    }

    public function delete($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        return back();
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('adminlte.categories.edit', compact('category'));
    } 

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $categories = Category::findOrFail($id);
        $categories->update($request->all());
        return redirect( route('categories.index') );
    }
}
