<?php

namespace App\Modules\Categories\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;


class UpdateCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('id'); // or 'category' if route-model binding

        return [
            'name'        => 'required|string|max:255|unique:categories,name,' . $id,
            'description' => 'required|string|max:500',
        ];
    }
}
