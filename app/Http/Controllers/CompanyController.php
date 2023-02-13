<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   $companies=Company::orderBy('id','desc')->paginate(5);
    return response()->view('cms.company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies=Company::all();
        return response()->view('cms.company.create', compact('companies'));
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
    'img'=>'required'
   ]));
    if(! $valedetor->fails() ){
        $companies= new Company();

        if (request()->hasFile('img')) {

            $img = $request->file('img');

            $imageName = time() . 'img.' . $img->getClientOriginalExtension();

            $img->move('storage/images/companies', $imageName);

            $companies->img = $imageName;
            }
        $IsSaved=$companies->save();

        if($IsSaved){

            $IsSaved=$companies->save();
            return response()->json(['icon'=>'succsess','title'=>'created is succsessfully'], 200);
        }
        else{
            return response()->json(['icon' => 'error' , 'title' => $valedetor->getMessageBag()->first()] , 400);
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
        $companies = Company::findOrFail($id);
        return response()->view('cms.company.edit' , compact('companies'));
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
            'img' => 'required',
        ]);

        if (! $validator->fails()){

            $companies = Company::findOrFail($id);
            $isUpdated = $companies->save();

            if (request()->hasFile('img')) {

                $img = $request->file('img');

                $imageName = time() . 'img.' . $img->getClientOriginalExtension();

                $img->move('storage/images/companies', $imageName);

                $companies->img = $imageName;
                }

            return ['redirect' => route('companies.index')];
            if($isUpdated){
                return response()->json(['icon' => 'success' , 'title' => 'Updated is Successfully'] , 200);
            }
        }
        else{
            return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] , 400);
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
        $products = Company::destroy($id);    }
}
