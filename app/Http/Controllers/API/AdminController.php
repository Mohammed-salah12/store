<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins=Admin::orderBy('id' , 'desc');
        return response()->json([
            'status' => true ,
             'massege' => 'data of admin' ,
             'data' => $admins ,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valedetor=validator(request()->all([
            'email'=>'required|email',
            'img'=>'nullable' ,
        
           ]));
           if(! $valedetor->fails() ){
            $admins= new Admin();
            $admins->email=$request->get('email');
            $admins->password=Hash::make($request->get('password'));
            $IsSaved=$admins->save();
            if ($IsSaved) {
                return response()->json([
                    'status' => true, 
                    'massage' => "Created is successfully"],
                     200);
            } else {
                return response()->json([
                    'status' => false, 
                    'massage' => "Created is faild"],
                     400);
            }
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
        $admins=Admin::find($id);
        return response()->json([
            'status' => true ,
             'massege' => 'data of admin' ,
             'data' => $admins ,
        ]);
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
        $valedetor=validator(request()->all([
            'email'=>'required|email',
            'img'=>'nullable'
        
           ]));
           if(! $valedetor->fails() ){
            $admins= new Admin();
            $admins->email=$request->get('email');
            $admins->password=Hash::make($request->get('password'));
            $Isupdated=$admins->save();
            if ($Isupdated) {
                return response()->json([
                    'status' => true, 
                    'massage' => "Created is successfully"],
                     200);
            } else {
                return response()->json([
                    'status' => false, 
                    'massage' => $valedetor->getMessageBag()->first()],
                     400);
            }
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $admins=Admin::destroy($id);
       return response()->json([
        'status'=>true ,
        'massage'=>'deleled succsesfully',
       ]);
    }
}
