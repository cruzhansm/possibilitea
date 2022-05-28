<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCartRequest;
use App\Http\Resources\CartItemResource;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'item_id' => 'required',
            'quantity' => 'required|numeric|min:1',
            'size' => 'nullable',
            'price' => 'required|numeric',
            'addon_id' => 'nullable',
            'sugarlvl_id' => 'nullable',
        ]);

        $result = CartItem::create($request->all());
        return CartItemResource::collection(CartItem::where('user_id', '=', $request->user_id)->get());
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CartItem::where('id','=', $id)->delete();
        return CartItemResource::collection(CartItem::all());
    }
}
