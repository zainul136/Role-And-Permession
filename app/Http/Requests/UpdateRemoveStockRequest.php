<?php

namespace App\Http\Requests;

use App\Models\RemoveStock;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRemoveStockRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('remove_stock_edit');
    }

    public function rules()
    {
        return [
            'barcode' => [
                'string',
                'nullable',
            ],
            'quantity' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'select_product_id' => [
                'required',
                'integer',
            ],
            'rack_no' => [
                'string',
                'nullable',
            ],
        ];
    }
}
