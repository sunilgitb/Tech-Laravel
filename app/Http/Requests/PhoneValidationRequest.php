<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use libphonenumber\PhoneNumberUtil;

class PhoneValidationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // Your existing validation rules here
            'phone' => [
                'required',
                'valid_phone', // Custom rule for valid phone number
            ],
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $phoneUtil = PhoneNumberUtil::getInstance();
            $phoneNumber = $phoneUtil->parse($this->input('phone'), null);

            if (!$phoneUtil->isValidNumber($phoneNumber)) {
                $validator->errors()->add('phone', 'Please enter a valid phone number.');
            }
        });
    }
}
