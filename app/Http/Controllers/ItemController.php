<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PhpParser\Node\Name\Relative;
use Illuminate\Support\Facades\URL;
use App\Http\Resources\ItemResource;
use Illuminate\Support\Facades\File;
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
        $items = Items::all();
        return ItemResource::collection($items);
        //   return ItemResource::collection($items);
        // return ItemResource::collection(Items::all());
        
        // return ItemResource::collection(Items::all()->paginate(10));
        // return ItemResource::collection(Items::with('item_categories')->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItemsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemsRequest $request)
    {
        $data = $request->validated();

        if(isset($data['img_path'])) {
            $relativePath = $this->saveImage($data['img_path']);
            $data['img_path'] = $relativePath;
        }

        $result = Items::create($data);
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
        $data = $request->validated();
        
        if(isset($data['img_path'])) {
            $relativePath = $this->saveImage($data['img_path']);
            $data['img_path'] = $relativePath;
            
            if($items->img_path){
                $absolutePath = public_path($items->img_path);
                File::delete($absolutePath);
            }
        }
            
        // $items->update($data);

        Items::where('id', $data['id'])->update([
            'item_name' => $data['item_name'],
            'price' => $data['price'],
            'itemCat_id' => $data['itemCat_id'],
            'subcat_id' => $data['subcat_id'],
            'img_path' => $data['img_path']
        ]);

            $newItem = Items::where('id', $data['id'])->get();
            $newItem->img_path = URL::to($relativePath);
            
        return $newItem;
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

    private function saveImage($image) {
        //check if image is valid base64 string
        if(preg_match('/^data:image\/(\w+);base64,/', $image, $type)) {
            //take out the base64 string without the mime type
            $image = substr($image, strpos($image, ',') + 1);
            //get file extension
            $type = strtolower($type[1]);

            //check if the type is a valid image
            if(!in_array($type, ['gif', 'jpeg', 'jpg', 'png'])) {
                //throw exception
                throw new \Exception('invalid image type');
            }
            $image = str_replace(' ', '+', $image);
            $image = base64_decode($image);

            if($image === false) {
                throw new \Exception('base64_decode failed');
            }
            
        }else{
            //throw exeption if image is not valid base64 string
            throw new \Exception('Image is not valid base64 string');
        }

        $dir = 'images/';
        $file = Str::random() . '.' . $type;
        $abosultePath = public_path($dir);
        $relativePath = $dir . $file;

        if(!File::exists($abosultePath)) {
            File::makeDirectory($abosultePath,0755, true);
        }
            file_put_contents($relativePath, $image);

        return $relativePath;
    }
}
