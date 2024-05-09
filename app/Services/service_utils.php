<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Mockery\Undefined;

class service_utils
{
    public function saveImage($someRequest, $key)
    {
        $file = $someRequest['Gambar'];
        $file_name = time() . '.' . $file->getClientOriginalExtension();
        Storage::disk('public')->put($key . '/' . $file_name, file_get_contents($file));

        $someRequest['Gambar'] = $file_name;

        return $someRequest;
    }

    public function deleteImage($key, $file_name): void
    {
        Storage::disk('public')->delete($key . '/' . $file_name);
    }

    public function getImage($key, $file_name)
    {
        $url = Storage::url($key . '/' . $file_name);
        return $url;
    }

    public function transformJsonWithImage($data, $key)
    {
        $hampers_with_image = $data->map(function ($data_Json) use ($key) {
            $image = $this->getImage($key, $data_Json->Gambar);
            if ($data_Json->Gambar == null || $data_Json->Gambar == "undefined") {
                $image = url(Storage::url('defaultimage.webp'));
            } else {
                $image = url($image);
            }
            $data_Json->Gambar = $image;
            return $data_Json;
        });

        return $hampers_with_image;
    }

    public function getSingleImageUrl($data, $key)
    {
        $image = $this->getImage($key, $data->Gambar);
        if ($data->Gambar == null || $data->Gambar == "undefined") {
            $image = url(Storage::url('defaultimage.webp'));
        } else {
            $image = url($image);
        }
        $data->Gambar = $image;
        return $data;
    }

    public function getDefaultImageUrl()
    {
        return url(Storage::url('defaultimage.webp'));
    }
}
