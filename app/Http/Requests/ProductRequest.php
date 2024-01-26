<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            "product_name" => "required|string|unique:products,product_name",
            "product_description" => "required|string",
            "product_price" => "required|numeric",
            "product_category" => "required|string",
            "product_stock" => "required|numeric",
            "product_image" => "image|max:2048",
            "product_state" => "numeric",
            "product_review" => "string"
        ];
    }
}
