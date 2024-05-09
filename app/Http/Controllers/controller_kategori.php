<?php

namespace App\Http\Controllers;

use App\Http\Resources\resource_kategori;
use Illuminate\Http\Request;
use App\Models\model_kategori;

class controller_kategori extends Controller
{
    public function ReadKategori(){
        $kategori = model_kategori::all();
        // cache this
        $kategori_cached = cache()->remember('kategori', 60*60*24, function () use ($kategori) {
            return $kategori;
        });
        return resource_kategori::collection($kategori_cached);
    }
}
