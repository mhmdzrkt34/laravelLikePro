<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\AddItemRequest;
use App\Services\User\IUserService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    //


    protected $userService;

    public function __construct(IUserService $userService){


        $this->userService = $userService;
    }

    public function addItem(AddItemRequest $request){

        try{

            $validated=$request->validated();



            $responce=$this->userService->AddItem();



            return response()->json($responce,$responce["status"]);

            
            


        
     
        

        }catch(Exception $e){


            return Response()->json($e->getMessage(),500);


        }


        
    }



}
