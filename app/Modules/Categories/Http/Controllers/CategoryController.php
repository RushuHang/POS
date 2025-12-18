<?php

namespace App\Modules\Categories\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Categories\Services\CategoryService;
use Illuminate\Http\Request;

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
        return response()->json($categories);
    }

    public function show($id)
    {
        $category = $this->categoryService->getCategoryById($id);
        return response()->json($category);
    }

    public function store(Request $request)
    {
        $category = $this->categoryService->createCategory($request->all());
        return response()->json($category, 201);
    }

    public function update(Request $request, $id)
    {
        $category = $this->categoryService->updateCategory($id, $request->all());
        return response()->json($category);
    }

    public function destroy($id)
    {
        $this->categoryService->deleteCategory($id);
        return response()->json(null, 204);
    }
}
