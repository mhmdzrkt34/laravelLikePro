<?php

namespace App\Responces\User;

use Illuminate\Http\JsonResponse;

class AddItemResponce
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
     
      public function successResponce($status,$body,$type):array{

    return


            ["status"=>$status,


            "body"=>$body,

            "type"=>$type

      ];


        


    }



}
