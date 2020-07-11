<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code' => 'required|unique:products',
            'name' => 'required',
            'price' => 'required|numeric',
            'img' => 'required|image'
        ];
    }
    public function messages(){
        return[
            'code.required' => 'Không được để trống',
            'code.unique' => 'Mã sản phẩm đã tồn tại',
            'name.required' => 'Không được để trống',
            'price.required' => 'Không được để trống',
            'price.numeric' => 'Giá sản phẩm phải là số',
            'img.required' => 'Bạn chưa chọn ảnh',
            'img.image' => 'Không phải là hình ảnh'
        ];
    }
}
