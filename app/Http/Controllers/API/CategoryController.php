<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::orderBy('id','desc')->paginate(5);
        return response()->json([
         'status' =>true ,
          'massage'=> 'data of categories' ,
          'data'=> $categories ,
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
            'name'=>'required|string'
           ]));
            if(! $valedetor->fails() ){
                $categories= new Category();
                $categories->name=  $request->get('name');
                $categories->descrpition= $request->get('descrpition');
                $IsSaved=$categories->save();
        
                if($IsSaved){
        
                    return response()->json([
                        'status'=>true
                    ,'   massage'=>'created is succsessfully']
                    , 200);
                }
        
                else{
                    return response()->json([
                        'status'=>false
                    ,'   massage'=>'created is faild']
                    , 400);
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
        $categories=Category::find($id);
        return response()->json([
            'status' => true ,
             'massage' => 'data of categories' ,
             'data' => $ $categories ,
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
        $validator = Validator($request->all() , [
            'name' => 'required|string|',
        ]);

        if (! $validator->fails()){

            $categories = Category::findOrFail($id);
            $categories->name = $request->get('name');
            $categories->descrpition = $request->get('descrpition');
            $isUpdated = $categories->save();


            if($isUpdated){
                return response()->json([
                    'status' => true 
                ,    'massage' => 'Updated is Successfully'] 
                      , 200);
            }
            else{
                return response()->json([
                    'status' => false 
                ,    'massage' => $validator->getMessageBag()->first()] 
                      , 400);

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
        $categories=Category::destroy($id);
        return response()->json([
         'status'=>true ,
         'massage'=>'deleled succsesfully',
        ]);
    }
}
