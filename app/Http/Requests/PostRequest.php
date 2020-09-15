<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'slug' => ['required', 'string'],
            'desc' => ['required', 'string'],
            'body' => ['required', 'string'],
            'enabled' => ['required', 'boolean'],
            'user_id' => ['required', 'exists:users,id'],
            'published_at' => ['required']
        ];
    }
}
