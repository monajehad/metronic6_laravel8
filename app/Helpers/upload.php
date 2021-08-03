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


function getImageUrl($media_path, $img_name)
{
    if($img_name && Storage::exists($media_path . $img_name))
    {
        return Storage::url($media_path . $img_name);
    }

    return getDefaultImg('user_img');
}

function getDefaultImg($name)
{
    if(App\Models\User::where('name', '=', $name)
            ->count() > 0)
    {
        $img = App\Models\User::where('name', $name)
            ->get()[0]->value;
        return Storage::url(App\Models\User::MEDIA_PATH . $img);
    }
    return null;
}
