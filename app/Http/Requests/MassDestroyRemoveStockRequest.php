<?php

namespace App\Http\Requests;

use App\Models\RemoveStock;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyRemoveStockRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('remove_stock_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:remove_stocks,id',
        ];
    }
}
