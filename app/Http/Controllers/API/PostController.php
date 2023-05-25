<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\computer;

class PostController extends Controller
{
    public function index()
    {
      
    return response ('jdhsgfdsa');
    }
    public function create()
    {
        return response ('mo ' );

    }
    public function store(Request $request)
    {
      $post = new (computer::get($request -> all()));
      
      if($post){
        return response ( $post, 201 );
      }else{
        return response ('no serve' );
      }
    }
    public function show(string $id)
    {
      $array = [
        'data' => new (Computer::find($id)) ,
        'message' => 'ok' ,
        'status' => 200 ,
      ];
      $post =  computer::find($id);
      if($post){
        return response ($array  );
      }else{
        return response ('$array ' );
      }
    }
    public function edit(string $id)
    {
      
    }
    public function update(Request $request, string $id)
    {
        
    }
    public function destroy(string $id)
    {
        
    }
}
