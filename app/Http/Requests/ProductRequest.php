<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:255|string',
            'excerpt' => 'nullable|string|max:300',
            'description' => 'nullable|min:10',
            'price' => 'required|integer',
            'quantity' => 'nullable|integer',
            'stock_limit' => 'nullable|integer',
            'img_thumb' => 'nullable|image',
            'img_gallery' => 'nullable',
            'img_gallery.*' => 'mimes:jpg,jpeg,png,gif,svg,webp'
        ];
    }
}
