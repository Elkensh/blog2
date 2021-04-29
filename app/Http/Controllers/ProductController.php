<?php

namespace App\Http\Controllers;

use App\Helpers\APIHelpers;
use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $response = APIHelpers::createAPIResponse(false,200,'',$products);
        return response()->json($response,200);
    }

    public function show($id)
    {
        $products = Product::find($id);
        $response = APIHelpers::createAPIResponse(false,200,'',$products);
        return response()->json($response,200);
    }

    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product_save = $product->save();
        if($product_save){
            $response = APIHelpers::createAPIResponse(false,201,'product added successfully',null);
        return response()->json($response,201);
        }else{
            $response = APIHelpers::createAPIResponse(true,400,'product created failed',null);
        return response()->json($response,400);
        }
    }

    public function update(ProductRequest $request,$id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product_update = $product->save();
        if($product_update){
            $response = APIHelpers::createAPIResponse(false,200,'product updated successfully',null);
        return response()->json($response,200);
        }else{
            $response = APIHelpers::createAPIResponse(true,400,'product update failed',null);
        return response()->json($response,400);
        }
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product_delete = $product->delete();
        if($product_delete){
            $response = APIHelpers::createAPIResponse(false,200,'product deleted successfully',null);
        return response()->json($response,200);
        }else{
            $response = APIHelpers::createAPIResponse(true,400,'product delete failed',null);
        return response()->json($response,400);
        }
    }
}
