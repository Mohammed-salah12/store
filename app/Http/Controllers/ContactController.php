<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
   $contacts=Contact::orderBy('id','desc')->paginate(5);
    return response()->view('cms.contacts.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts=Contact::all();
        return response()->view('cms.contacts.create', compact('contacts'));
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
    'massege'=>'required|string',
   ]));
   if(! $valedetor->fails() ){
    $contacts= new Contact();
    $contacts->name=$request->get('name');
    $contacts->massege=$request->get('massege');
    $IsSaved=$contacts->save();
    if($IsSaved){
        return response()->json(['icon'=>'succsess','title'=>'created is succsessfully'], 200);
    }
    else{
        return response()->json(['icon'=>'erorr','title'=>'created is falid'], 400);
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
        $contacts = Contact::findOrFail($id);
        return response()->view('cms.contacts.edit' , compact('contacts'));
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
            'massege' => 'required|string',
        ]);

        if (! $validator->fails()){

            $contacts = Contact::findOrFail($id);
            $contacts->name = $request->get('name');
            $contacts->massege = $request->get('massege');
            $isUpdated = $contacts->save();
            return ['redirect' => route('contacts.index')];
            if($isUpdated){
                return response()->json(['icon' => 'success' , 'title' => 'Updated is Successfully'] , 200);
            }
            else{
                return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] , 400);

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
        $contacts = Contact::destroy($id);    }
}
