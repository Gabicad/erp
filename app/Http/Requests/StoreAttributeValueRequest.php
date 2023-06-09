<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAttributeValueRequest extends FormRequest
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
            'attribute_id' => 'required|integer|exists:attributes,id',
            'value_name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('attribute_values')->where(function ($query) {
                    return $query->where('attribute_id', $this->attribute_id);
                }),
            ],
        ];
    }
}
