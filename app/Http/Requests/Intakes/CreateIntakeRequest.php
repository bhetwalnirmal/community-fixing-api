<?php

namespace App\Http\Requests\Intakes;

use Illuminate\Foundation\Http\FormRequest;

class CreateIntakeRequest extends FormRequest
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
            'intake_form' => 'required',
            'intake_form.image' => 'sometimes|mimes:jpg,bmp,png',
            'intake_form.item' => 'required',
            'intake_form.item.item_type_id' => 'required',
            'intake_form.item.name' => 'required',
            'intake_form.item.brand' => 'required',
            'intake_form.item.description' => 'required',
            'intake_form.item.problem' => 'required',
            'intake_form.item.last_working_description' => 'required',
            'intake_form.item.weight' => 'required',


            'intake_form.drop_in_staff_id' => 'required|integer',
            'intake_form.client_id' => 'required|integer',
            'intake_form.intake_date' => 'required',
        ];
    }
}
