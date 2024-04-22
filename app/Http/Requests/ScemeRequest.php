<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScemeRequest extends FormRequest
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
            'sceme_name' => 'required|max:50',
            'sceme_slug' => 'required|max:50',
            'sceme_code' => 'required|max:20',
            'sceme_status' => 'required',
            'sceme_detail' => 'required',
            'sceme_image' => 'nullable|image|file|max:2048',
            'sceme_file' => 'nullable|file',
        ];
    }
}
