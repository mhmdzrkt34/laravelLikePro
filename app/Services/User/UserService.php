<?php

namespace App\Services\User;

use App\Responces\User\AddItemResponce;
use Exception;

class UserService implements IUserService
{
    /**
     * Create a new class instance.
     */
     
    public function __construct()
    {
        //

    }
    
    public function AddItem(){

        $responce=new AddItemResponce();
        try{


            return $responce->successResponce("200",[],"success");


        }catch(Exception $e){

            throw $e;


        }


            
    }
}
