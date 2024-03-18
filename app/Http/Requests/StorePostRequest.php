<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
                'title' => 'required',
                'description' => 'required',
                'thumb' => 'required',
                'price' => 'required'|'numeric',
                'series' => 'required',
                'sale_date' => 'required',
                'type' => 'required',
                'artists' => 'required',
                'writers' => 'required'
           
        ];
    }
}
