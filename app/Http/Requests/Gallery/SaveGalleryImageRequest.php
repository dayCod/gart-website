<?php

namespace App\Http\Requests\Gallery;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SaveGalleryImageRequest extends FormRequest
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
        $rules = [
            'gallery_id' => ['required', 'exists:galleries,id'],
        ];

        if (request()->has('galleries')) {

            foreach (array_keys(request()->galleries) as $key => $value) {
                $rules['galleries.'.$value] = ($value == 0)
                    ? ['required', 'image']
                    : ['nullable', 'image'];
            }
        }

        return $rules;
    }

    /**
     * Prepares the request data for validation by merging the 'gallery_id' and 'galleries' fields.
     * This method is called automatically by Laravel before the validation rules are applied.
     *
     * @return void
     */
    public function prepareForValidation(): void
    {
        $this->merge([
            'gallery_id' => $this->id,
        ]);
    }

    /**
     * Returns an array of data that can be used to create or update a gallery.
     *
     * @return array
     */
    public function dataTransferObject(): array
    {
        return [
            'galleries' => $this->galleries,
            'gallery_id' => $this->gallery_id,
            'detail_gallery_id' => $this->detail_gallery_id,
        ];
    }
}
