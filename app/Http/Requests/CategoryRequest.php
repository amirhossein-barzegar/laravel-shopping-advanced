<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        switch($this->method()) {
            case 'POST':
                return [
                    'name' => 'min:5|string',
                    'description' => 'nullable|min:10',
                    'slug' => 'alpha_dash|unique:product_categories',
                    'img_thumb' => 'nullable|image'
                ];
            break;

            case 'PUT'||'PATCH':
                return [
                    'name' => 'min:5|string',
                    'description' => 'nullable|min:10',
                    'slug' => 'alpha_dash',
                    'img_thumb' => 'nullable|image'
                ];
            break;
        }
    }
}
