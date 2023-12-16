<?php

namespace App\Http\Requests;

use App\Models\AddStock;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAddStockRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('add_stock_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:add_stocks,id',
        ];
    }
}
