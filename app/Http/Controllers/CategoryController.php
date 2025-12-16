<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $categories = $this->categoryRepository->getAll();
        return view('category.showcategory', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create()
    {
        return view('category.createcategory'); // Blade file: resources/views/createcategory.blade.php
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
