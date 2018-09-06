<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageUpload;
use App\Banner;

class BannerController extends Controller
{
    public function store(Request $request)
    {   

       $img = new ImageUpload();
       $fileName = $img->upload($request->get('image'));

        Banner::create([
            'url' => $request->get('url'),
            'titulo' => $request->get('titulo'),
            'image' => $fileName,
        ]);

    }
    
    public function getBanners()
    {
        return Banner::all();
    }

    public function excluir(Request $request) 
    {
        Banner::destroy($request->id);
        return Banner::all();
    }
}
