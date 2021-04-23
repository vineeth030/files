<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadFileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    function index(): \Illuminate\Http\JsonResponse
    {

        $files = Storage::allFiles('public/files');

        return response()->json($files);
    }

    public function create(UploadFileRequest $request): \Illuminate\Http\JsonResponse
    {

        $file = $request->file->store('public/files');

        return response()->json($file);
    }

    public function delete(Request $request){
        if(Storage::exists($request->file)){
            Storage::delete($request->file);
            /*
                Delete Multiple File like this way
                Storage::delete(['upload/test.png', 'upload/test2.png']);
            */
        }else{
            dd('File does not exists.');
        }
    }
}
