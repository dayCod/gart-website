<?php

namespace App\Http\Requests\Gallery;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGalleryRequest extends FormRequest
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
            'category_id' => ['required', 'exists:categories,id'],
            'title' => ['required', 'string', 'max:255', 'unique:galleries,title,'.$this->id],
            'sub_title' => ['required', 'string', 'max:255'],
            'client_name' => ['required', 'string', 'max:255'],
            'production_year' => ['required', function ($attr, $value, $fail) {
                if (!preg_match('/^\d{4}$/', $value)) {
                    $fail('The ' . $attr . ' must be a valid year.');
                }
            }],
            'tags' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['image']
        ];
    }

    /**
     * Returns an array of attribute names and their corresponding display names.
     * This is used for error messages and form field labels.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'category_id' => 'Category',
        ];
    }

    /**
     * Returns an array of data that can be used to create or update a gallery.
     *
     * @return array
     */
    public function dataTransferObject(): array
    {
        return [
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            'client_name' => $this->client_name,
            'production_year' => $this->production_year,
            'tags' => $this->tags,
            'description' => $this->description,
            'image' => $this->image,
            'category_id' => $this->category_id,
        ];
    }
}
