<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $products = Product::all();        
            return view('admin.product.index',compact('products'));
        } catch (Exception $e) {
            report($e);
            return response()->json(['error' => 'Something Error']);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        $users = User::all()->pluck('id','name'); 
        return view('admin.product.create',compact('users'));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validate = $request->validate([           
            'nama_produk' => 'required',            
            'tanggal' => 'required',                         
            'harga' => 'required',
          
        ]);

        if(Auth::user()->roles == 'user'){
            $validate['user_id'] = Auth::user()->id;
        }

        try {
            Product::create($validate);
            return redirect(route('product.index'));
        } catch (Exception $e) {
            report($e);
            return response()->json(['error' => 'Something Error']);
        }
                
            
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([           
            'nama_produk' => 'required',            
            'tanggal' => 'required',                         
            'harga' => 'required'                        
        ]);

        $product = Product::findOrFail($id);

        $product->update($validate);
        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::findOrFail($id);

        try {            
            $products->delete();
            return redirect(route('product.index'));
        } catch (Exception $e) {
            report($e);
            return response()->json(['error' => "Something Error"]);
        }
    }
}
