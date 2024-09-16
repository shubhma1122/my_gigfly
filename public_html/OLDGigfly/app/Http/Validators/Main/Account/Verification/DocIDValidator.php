<?php

namespace App\Http\Validators\Main\Account\Verification;

use Illuminate\Support\Facades\Validator;

class DocIDValidator
{
    
    /**
     * Validate form
     *
     * @param object $request
     * @return void
     */
    static function validate($request)
    {

        try {

            // Set rules
            $rules    = [
                'front' => 'required|image|mimes:jpg,jpeg,png|max:5120',
                'back'  => 'required|image|mimes:jpg,jpeg,png|max:5120',
            ];

            // Set errors messages
            $messages = [
                'front.required' => __('messages.t_validator_required'),
                'front.image'    => __('messages.t_validator_image'),
                'front.mimes'    => __('messages.t_validator_mimes'),
                'front.max'      => __('messages.t_validator_max_size', ['max' => human_filesize(5120)]),
                'back.required'  => __('messages.t_validator_required'),
                'back.image'     => __('messages.t_validator_image'),
                'back.mimes'     => __('messages.t_validator_mimes'),
                'back.max'       => __('messages.t_validator_max_size', ['max' => human_filesize(5120)]),
            ];

            // Set data to validate
            $data     = [
                'front' => isset($request->doc_id['front']) ? $request->doc_id['front'] : null,
                'back'  => isset($request->doc_id['back']) ? $request->doc_id['back'] : null
            ];

            // Validate data
            Validator::make($data, $rules, $messages)->validate();

            // Reset validation
            $request->resetValidation();

        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
