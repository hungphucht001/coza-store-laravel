<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function destroy($id){
        try{
            $image = Image::find($id);
            Storage::delete('/public/images/'.$image->thumb);
            $image->delete();

            return response(['a'=>'b'], 200)
                ->header('Content-Type', 'text/plain');
        }
        catch (\Exception $err){
            return response(['a'=>'b'], 401)
                ->header('Content-Type', 'text/plain');
        }
    }
}
