<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Invitation extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'users_id' => 'required|exists:users,id',
            'rip_name' => 'required|string|max:255',
            'rip_age'=> 'required|integer',
            'rip_date' => 'required',
            'rip_time' => 'required',
            'rip_place' => 'required|string',
            'burial_date' => 'required|string',
            'burial_time' => 'required',
            'burial_place' => 'required|string',
            'burial_start_from' => 'required|string',
            'abandoned_family' => 'required|string',
        ];
    }
}
