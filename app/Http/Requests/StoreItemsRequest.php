<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemsRequest extends FormRequest
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
            'item_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'itemCat_id' => 'exists:item_categories,id',
            'subcat_id' => 'exists:subcategories,id',
            'img_path' => 'required|string|max:1024',
        ];
    }
}
