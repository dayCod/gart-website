<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreServiceRequest extends FormRequest
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
            'title' => ['required', 'string', 'unique:services,title'],
            'sub_title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'attachment_url' => ['nullable', 'url'],
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
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            'description' => $this->description,
            'attachment_url' => $this->attachment_url,
        ];
    }
}
