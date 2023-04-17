<?php

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'post' => 'required',
            'post.title' => 'required|string',
            'post.user_id' => 'required|integer',
            'post.post_category_id' => 'required|integer',
            'post.description' => 'required|string',
            'post.price' => 'sometimes|numeric',
            'post.location' => 'sometimes|string'
        ];
    }
}
