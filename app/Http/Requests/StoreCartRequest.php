<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCartRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => auth()->id(),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'transaction_id' => 'required',
            'item_id' => 'exists:items,item_id',
            'subcategory_id' => 'exists:subcategories,subcategory_id',
            'quantity' => 'numeric|min:1',
            'size' => 'nullable',
            'price' => 'numeric',
            'addon_id' => 'nullable',
            'sugarlvl_id' => 'nullable',
        ];
    }
}


