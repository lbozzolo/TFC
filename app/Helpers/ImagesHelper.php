<?php

namespace App\Helpers;


use App\Entities\Images;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ImagesHelper
{

    public function upload($entity = null ,  $id = null , $image = null , $path = null )
    {
        $name = New \DateTime();

        $file = $name->getTimestamp().'.'. $image->getClientOriginalExtension();

        $image->move(public_path($path), $file);

        $img = Image::make(public_path($path).$file);
        //$img->fit(640,480);

        if($img->height() >= 480) {

            $img->resize(null, 480, function ($constraint) {
                $constraint->aspectRatio();
            });

        }elseif($img->width() >= 640) {

            $img->resize(640, null , function ($constraint) {
                $constraint->aspectRatio();
            });
        }


        $img->save();


            $im             = new Images();
            $im->entity     = $entity;
            $im->entity_id  = $id ;
            $im->image      = $path . $file;
            $im->save();


    }

    public function deleteFile($file = null)
    {

       File::delete(public_path($file));
    }



}




