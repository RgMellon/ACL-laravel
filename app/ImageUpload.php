<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class ImageUpload extends Model
{
    public function upload($imageData)
    {
        $fileName = $this->nameImgRandom($imageData);

        \Image::cache(function($image) use($imageData){
            $image->make($imageData)->resize(null, 300, function ($constraint) {
                $constraint->aspectRatio();
            });
        },10, true)->save(public_path('img/banners/').$fileName, 90);

        return $fileName;
    }

    
    private function nameImgRandom($imageData)
    {
        $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.'
        .explode('/', explode(':', substr($imageData, 0, strpos($imageData,';')))[1])[1];
        return $fileName;
    }
}
