<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    private function uploadPostFiles(Request $request, Post $post)
    {
        $uploadedFiles = [];

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $path = $file->store('post_files');

                $postFile = PostFile::create([
                    'post_id' => $post->id,
                    'user_id' => Auth::user()->id,
                    'file_path' => $path,
                    'original_name' => $file->getClientOriginalName(),
                    'extension' => $file->getClientOriginalExtension(),
                    'size' => $file->getSize(),
                ]);

                $uploadedFiles[] = [
                    'name' => $postFile->original_name,
                    'extension' => $file->getClientOriginalExtension(),
                    'size' => round($file->getSize() / 1024 / 1024, 2),
                ];
            }
        }

        return $uploadedFiles;
    }

    public function deletePostFile($id, $id_file)
    {
        $file = PostFile::findOrFail($id_file);

        if (Storage::exists($file->file_path)) {
            Storage::delete($file->file_path);
        }

        $file->delete();

        return response()->json(['message' => 'File berhasil dihapus']);
    }


    public function download($id, $id_file)
    {
        $file = PostFile::findOrFail($id_file);
        $filePath = storage_path('app/private/' . $file->file_path);

        if (!file_exists($filePath)) {
            abort(404, 'File not found.');
        }

        return response()->download($filePath, $file->original_name);
    }
}
