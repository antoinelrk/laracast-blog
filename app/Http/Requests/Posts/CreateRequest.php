<?php

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()?->username === 'antoinelrk';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'unique:posts,title'
            ],
            'excerpt' => [
                'required'
            ],
            'thumbnail' => [
                'file'
            ],
            'body' => [
                'required'
            ],
            // 'published' => [],
            'category_id' => [
                'required',
                Rule::exists('categories', 'id')
            ],
        ];
    }
}
