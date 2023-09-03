<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InfoRequest;
use App\Models\Info;
use Illuminate\Support\Facades\Storage;

class infoController extends Controller
{
    public function index()
    {
        $infos = Info::get();
        return view('index', compact('infos'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(InfoRequest $request)
    {
        $filename = time() . '.' . $request->file->extension();
        // $request->file->move(public_path('images'), $filename);

        // otra forma de guardar un archivo en el disco local o s3 o ftp o sftp
        // Storage::disk('local')->put();

        $request->file->storeAs('public/images', $filename);
        $info = new Info;
        $info->name = $request->name;
        $info->file_url = $filename;
        $info->save();

        return redirect()->route('index');


        // asi tambien podemos hacer para que puedan descargar un archivo
        // return Storage::download('descarga.jpg', $info->file_url);

        // descarga de un archivo que no tenga permisos
        // Storage::url($info->file_url};

        //url temporal
        // Storage::temporaryUrl('my_image.jpg', now()->addMinutes(10));
    }
}