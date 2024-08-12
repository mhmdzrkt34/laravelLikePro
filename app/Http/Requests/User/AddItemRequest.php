<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class AddItemRequest extends FormRequest
{

  
    public function rules(): array
    {
        return [

            'name'=>[

                "required",

               
            ],

            "price"=>[

                "required",
                "numeric"
            ]
            //
        ];
    }
}
