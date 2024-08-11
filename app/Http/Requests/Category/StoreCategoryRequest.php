<?php

namespace App\Http\Requests\Category;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'unique:categories,name'],
            'sub_name' => ['required', 'string', 'max:40'],
            'description' => ['nullable', 'string'],
            'image' => ['required', 'image']
        ];
    }

    /**
     * Retrieves an array of data transfer object properties from the request.
     *
     * @return array
     */
    public function dataTransferObject(): array
    {
        return [
            'name' => $this->name,
            'sub_name' => $this->sub_name,
            'description' => $this->description,
            'image' => $this->image,
        ];
    }
}
