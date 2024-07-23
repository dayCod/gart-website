<?php

namespace App\Http\Requests\Category;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'unique:categories,name,'.$this->id],
            'sub_name' => ['required', 'string', 'max:40'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image']
        ];
    }

    /**
     * Returns an array of data transfer object properties for the category update request.
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
