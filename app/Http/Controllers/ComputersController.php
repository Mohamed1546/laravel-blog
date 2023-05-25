<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\computer;
use Illuminate\Support\Str;
class computerscontroller extends Controller
{
    /* Array of static data 
    private static function getdata(){
      return [
        ['id'=>1 , 'name'=>'lg' , 'origion'=>'koria'],
        ['id'=>2 , 'name'=>'to' , 'origion'=>'japan'],
        ['id'=>3 , 'name'=>'sm' , 'origion'=>'koria'],
        ['id'=>4 , 'name'=>'gr' , 'origion'=>'USA'],
      ]; 
    }*/
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('computers.index')
        ->with('computers', computer::orderBy('title' , 'DESC')->get())
        ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
          'title'=>'required',
          'subject'=>'required',
          'image'=>['required','mimes:jpg,png,jped,tmp','max:5048'],
        ]);


        $slug = Str::of($request->title)->slug('-');
        $newname=uniqid().'_'.$slug.'.'.$request->image->extension();
        $request->image->move(public_path('images') , $newname );
        
        computer::create([
            'title'=>$request->input('title'),
            'subject'=>$request->input('subject'),
            'image'=>$newname,
        ]);
        $computer = new computer();
        $computer->title = strip_tags($request->input('title')) ;
        $computer->subject =  strip_tags($request->input('subject')) ;
        return redirect()->route('computers.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('computers.show' , ['computer' => computer::findOrFail($id)]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      return view('computers.edit' , ['computer' => computer::findOrFail($id)]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
      $request->validate([
        'title'=>'required',
        'subject'=>'required',
        'image'=>['required','mimes:jpg,png,jped,tmp','max:5048'],
      ]);

      
      $slug = Str::of($request->title)->slug('-');
      $newname1=uniqid().'_'.$slug.'.'.$request->image->extension();
      $request->image->move(public_path('images') , $newname1 );
      

      computer::where('id',$id)
      ->update([
        'title'=>$request->input('title'),
        'subject'=>$request->input('subject'),
        'image'=>$newname1,
      ]);


      $up_computer = Computer::findOrFail($id);
      $up_computer->subject = strip_tags($request->input('title')) ;
      $up_computer->subject =  strip_tags($request->input('subject')) ;
      $up_computer->save();

      return redirect()->route('computers.show', $up_computer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $d = Computer::findOrFail($id);
      $d->delete();
      return redirect()->route('computers.index', $d);
    }
}
