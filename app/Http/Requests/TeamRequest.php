<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
        if ($this->isMethod('post')) {
            return [
                'name' => 'required',
                'jabatan' => 'required',
                'fb' => 'nullable',
                'twitter' => 'nullable',
                'instagram' => 'nullable',
                'start_date' => 'required',
                'end_date' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];
        } else {
            return [
                'name' => 'required',
                'jabatan' => 'required',
                'fb' => 'nullable',
                'twitter' => 'nullable',
                'instagram' => 'nullable',
                'start_date' => 'required',
                'end_date' => 'required',
                'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];
        }
    }
}
