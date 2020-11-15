<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('addCategory');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect()->back()->with('status', 'Category is saved successfully!');
    }
}
