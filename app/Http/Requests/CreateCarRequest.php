<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'model' => 'required|string|in:BMW,MERCEDES,AUDI',
            'color' => 'required|string|in:white,black,red',
            'age' => 'required|integer',
            'description' => 'required|string',
        ];
    }
}
