<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function getProduct()
    {
        try {
            $data = Product::all();

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

    public function searchProduct(Request $request)
    {        
        try {
            if ($name = $request->input('nama_produk')) {            
                $product= Product::where('nama_produk', 'LIKE' , "%$name%")->get();                
            }
    
            return response()->json([
                'status' => true,
                'message' => 'success',
                'data' => $product
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

    public function detailProduct($id)
    {        

        try {        
            if ($product = Product::where('id', $id)->first()) {                
                return response()->json([
                    'status' => true,
                    'message' => 'success',
                    'data' => $product
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
