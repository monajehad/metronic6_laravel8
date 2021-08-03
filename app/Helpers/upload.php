<?php
use Illuminate\Support\Facades\Storage;

function uploadImage($image, $path, $width = '', $height = '', $oldImage = '')
{
    if($oldImage != '')
    {
        deleteFile($path . $oldImage);
    }

    $imageName = uniqid(rand()) . '.' . $image->getClientOriginalExtension();

    if($width == '' && $height == '')
    {
        $rv = str_replace('//', '/', $path);
        $image->storeAs($rv, $imageName, config('filesystems.default'));
    } else
    {
        $relative_path = $image->storeAs($path, $imageName, config('filesystems.default'));
        $rv = str_replace('//', '/', $relative_path);
        if(config('filesystems.default') == "s3")
        {
            $processed_image = \Intervention\Image\Facades\Image::make(Storage::url($rv))
                ->resize($width, null, function($constraint)
                {
                    $constraint->aspectRatio();
                })
                ->stream();
            Storage::put($rv, $processed_image->__toString());
        } else
        {
            $processed_image = \Intervention\Image\Facades\Image::make(Storage::path($rv))
                ->resize($width, null, function($constraint)
                {
                    $constraint->aspectRatio();
                })
                ->save(Storage::path($rv));
        }


    }

    return $imageName;

}
function deleteFile($path)
{

    if(Storage::exists($path))
    {
        Storage::delete($path);
    }
}
