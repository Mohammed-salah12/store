<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   $products=Product::orderBy('id','desc')->paginate(5);
    return response()->view('cms.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products=Product::all();
        return response()->view('cms.products.create', compact('products'));
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
    'name_product'=>'required|string'
   ]));
    if(! $valedetor->fails() ){
        $products= new Product();
        $products->name_product=  $request->get('name_product');
        $products->price_product= $request->get('price_product');
        if (request()->hasFile('img')) {

            $img = $request->file('img');

            $imageName = time() . 'img.' . $img->getClientOriginalExtension();

            $img->move('storage/images/products', $imageName);

            $products->img = $imageName;
            }
        $IsSaved=$products->save();

        if($IsSaved){

            $IsSaved=$products->save();
            return response()->json(['icon'=>'succsess','title'=>'created is succsessfully'], 200);
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
        $products = Product::findOrFail($id);
        return response()->view('cms.products.edit' , compact('products'));
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
            'name_product' => 'required|string|',
        ]);

        if (! $validator->fails()){

            $products = Product::findOrFail($id);
            $products->name_product = $request->get('name_product');
            $products->price_product = $request->get('price_product');
            $isUpdated = $products->save();

            if (request()->hasFile('img')) {

                $img = $request->file('img');

                $imageName = time() . 'img.' . $img->getClientOriginalExtension();

                $img->move('storage/images/products', $imageName);

                $products->img = $imageName;
                }

            return ['redirect' => route('products.index')];
            if($isUpdated){
                return response()->json(['icon' => 'success' , 'title' => 'Updated is Successfully'] , 200);
            }
            else{
                return response()->json(['icon' => 'error' , 'title' => 'Updated is Failed'] , 400);

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
        $products = Product::destroy($id);    }
}
