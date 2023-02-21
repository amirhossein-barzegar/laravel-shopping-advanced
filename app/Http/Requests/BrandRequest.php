<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
                    'name' => 'min:3|max:50|string',
                    'description' => 'nullable|min:10',
                    'slug' => 'alpha_dash|unique:brands|min:3',
                    'img_thumb' => 'nullable|image',
                    'site_url' => 'nullable|url'
                ];
            break;

            case 'PUT'||'PATCH': 
                return [
                    'name' => 'min:3|max:50|string',
                    'description' => 'nullable|min:10',
                    'slug' => 'alpha_dash|min:3',
                    'img_thumb' => 'nullable|image',
                    'site_url' => 'nullable|url'
                ];
            break;

        }
    }
}
