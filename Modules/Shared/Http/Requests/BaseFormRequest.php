<?php


namespace Modules\Shared\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class BaseFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
}
