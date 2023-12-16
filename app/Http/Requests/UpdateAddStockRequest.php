<?php

namespace App\Http\Requests;

use App\Models\AddStock;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAddStockRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('add_stock_edit');
    }

    public function rules()
    {
        return [
            'quantity' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
