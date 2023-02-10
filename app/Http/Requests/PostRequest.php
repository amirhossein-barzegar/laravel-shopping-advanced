<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|min:5|max:255|string',
            'excerpt' => 'nullable|min:5|max:255|string',
            'description' => 'nullable|min:10',
            'img_thumb' => 'nullable|image',
            'slug' => 'alpha_dash|unique:posts',
            'views' => 'integer'
        ];
    }
}
