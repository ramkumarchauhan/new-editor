<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;

class FileController extends Controller
{
    public function getFileContents()
    {
        $file = public_path('document.docx');
        $phpWord = new PhpWord();
        $phpWord->load($file);
        $contents = $phpWord->getDocument()->getBody()->getText();
        return response()->json(['contents' => $contents]);
    }
}
