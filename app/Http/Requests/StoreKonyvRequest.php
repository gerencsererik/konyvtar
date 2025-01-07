<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKonyvRequest extends FormRequest
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
            'nev' => 'required|string|max:255',
            'iro' => 'required|string|max:255',
            'iro_szuletesi_eve' => 'required|integer|max:'.date('Y'),
            'iro_neme' => 'required|string|max:255',
            'kiado' => 'required|string|max:255',
        ];
    }
}
