<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

use function Ramsey\Uuid\v1;

class StoreMemberRequest extends FormRequest
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
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'city' => 'required',
            'apt_no' => 'required',
            'zip_code' => 'required',
            'home_num' => 'required',
            'cell_num' => 'required',
            'emergency_contact' => 'required',
            'phone_num' => 'required',
            'dob' => 'required',
            'email_address' => 'required',

            'driver_license_num' => 'required',
            'driver_issue_date' => 'required',
            'driver_expiration_date' => 'required',

            'chauffeur_license_num' => 'required',
            'chauffeur_issue_date' => 'required',
            'chauffeur_expiration_date' => 'required',


            'ssn' => 'required',
            'us_citizen' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'hours_phone_number' => 'required',
            'md_id' => 'required_if:type,==,Sole Propertier',
        ];
    }
}
