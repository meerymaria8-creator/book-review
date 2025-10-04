<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Bookrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required',
            'author'=>'required',
            'description'=>'bail|required|min:10|max:100'
        ];
    }

    public function messages(){
        return [
            'title.required' => 'The title of the masterpiece is required',
            'author.required' => 'The author of the masterpiece is required',
            'description.required' => 'The description of the masterpiece is required',
            'description.min' => 'The description must be at least :10 characters',
            'description.max' => 'The description may not be greater than :100 characters',
        ];
    }
}
