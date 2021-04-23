<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadFileRequest;
use App\Models\Activity;
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

        $file = $request->file->storeAs('public/files', $request->file->getClientOriginalName());

        Activity::create([
            'action' => 'New file named ' . basename($file) . ' uploaded to files directory.'
        ]);

        return response()->json($file);
    }

    public function delete(Request $request){
        if(Storage::exists($request->file)){
            Storage::delete($request->file);

            Activity::create([
                'action' => 'File named ' . basename($request->file) . ' deleted from files directory.'
            ]);

            return response()->json([], 200);

        }else{
            return response()->json(['error' => 'File does not exists.'], 500);
        }
    }
}
