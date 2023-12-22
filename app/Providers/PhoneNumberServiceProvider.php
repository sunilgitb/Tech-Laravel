<?php

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use libphonenumber\PhoneNumberUtil;

class PhoneNumberServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('valid_phone', function ($attribute, $value, $parameters, $validator) {
            $phoneUtil = PhoneNumberUtil::getInstance();

            try {
                $phoneNumber = $phoneUtil->parse($value, null);
                return $phoneUtil->isValidNumber($phoneNumber);
            } catch (\libphonenumber\NumberParseException $e) {
                return false;
            }
        });
    }

    public function register()
    {
        //
    }
}
