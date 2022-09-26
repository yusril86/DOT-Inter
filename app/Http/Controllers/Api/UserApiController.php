<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function getUser()
    {
        try {
            $data = User::all();

            return response()->json([
                'status' => true,
                'message' => 'success',
                'data' => $data
            ]);
        } catch (Exception $e) {
            report($e);
            return response()->json([
                'status' => false,
                'message' => 'error',
                'error' => 'Something Error'
            ]);
        }
    }

    public function searchUser(Request $request)
    {        
        try {
            if ($email = $request->input('email')) {            
                $user= User::where('email', 'LIKE' , "%$email%")->get();                
            }
    
            return response()->json([
                'status' => true,
                'message' => 'success',
                'data' => $user
            ]);
        } catch (Exception $e) {
            report($e);
            return response()->json([
                'status' => false,
                'message' => 'error',
                'data' => "something error"
            ]);        
        }
        
    }

    public function detailUser($id)
    {        

        try {        
            if ($user = User::where('id', $id)->first()) {                
                return response()->json([
                    'status' => true,
                    'message' => 'success',
                    'data' => $user
                ]);
            }else{
                return response()->json([
                    'status' => true,
                    'message' => 'success',
                    'data' => "No Data"
                ]);
            }
            
        } catch (Exception $e) {
            report($e);
            return response()->json([
                'status' => false,
                'message' => 'error',
                'data' => "something error"
            ]);
        }
    }
}
