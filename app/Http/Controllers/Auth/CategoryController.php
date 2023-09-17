<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Categories\CreateRequest;
use App\Http\Requests\Auth\Categories\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('auth.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        Category::create([

            'name' => $request->name
        ]);
        $request->session()->flash('success', );
        $msg = "Category Created Successfully!";
        return redirect('auth/categories')->with('success', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        if(!$category){
            abort('404');
        }
       return view('auth.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('auth/categories/edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Category $category )
    {
        $category->update([
            'name' => $request->name

        ]);
        $request->session()->flash('success', );
        $msg = "Category Updated Successfully!";
        return redirect('auth/categories')->with('success', $msg);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Category $category)
    {
        $category->destroy($category->id);
       
        $request->session()->flash('danger', );
        $msg = "Category Deleted Successfully!";
        return redirect('auth/categories')->with('danger', $msg);
    }
}
