<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;
use App\Http\Resources\ItemResource;
use App\Http\Requests\StoreItemsRequest;
use App\Http\Requests\UpdateItemsRequest;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $user = $request->user();
        // return ItemResource::collection(Items::where('user_id', $user->id)->get());
        return ItemResource::collection(Items::all()->paginate(10));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItemsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemsRequest $request)
    {
        $result = Items::create($request->validated());
        return new ItemResource($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(Items $items)
    {
        return new ItemResource($items);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemsRequest  $request
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemsRequest $request, Items $items)
    {
        dd($request->validated());
        $items->update($request->validated());
        return new ItemResource($items);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(Items $items)
    {
        $items->delete();
        return response()->json(null, 204); // 204 = no content 
    }
}
