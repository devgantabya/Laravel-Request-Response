<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function download($id, $fileType='PDF') {
        return response("File Downloading {$fileType} with ID:{$id}");
    }
}
