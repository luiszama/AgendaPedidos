<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'id_clientes' => 'required',
            'id_equipos'  => 'required',
            'id_services' => 'required',
            'id_statuses' => 'required',
            'deadline'    => 'required',
        ];
    }
}
