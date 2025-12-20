<?php

namespace App\Modules\Categories\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Categories\Services\CategoryService;
use Illuminate\Http\Request;
use App\Modules\Categories\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getAllCategories();
        return view('category.index', compact('categories'));
    }

    public function create(){
        return view('category.create');
    }

    public function show($id)
    {
        $category = $this->categoryService->getCategoryById($id);
        return view('category.show', compact('category'));
    }

    public function store(StoreCategoryRequest $request)
        {
            $category = $this->categoryService->createCategory($request->validated());

            return redirect()
                ->route('category.index')
                ->with('success', 'Category created successfully');
        }

   public function edit($id)
{
    $category = $this->categoryService->getCategoryById($id);
    return view('category.update', compact('category'));
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255|unique:categories,name,' . $id,
        'description' => 'required|string|max:500',
    ]);

    $this->categoryService->updateCategory($id, $validated);

    return redirect()
        ->route('category.index')
        ->with('success', 'Category updated successfully');
}


    public function destroy($id)
    {
        $this->categoryService->deleteCategory($id);
        return redirect()
                ->route('category.index')
                ->with('success', 'Category deleted successfully');
    }
}
