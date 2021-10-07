<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function resume(){

        return Storage::download('public/CV-Briannys-Polanco.pdf');

    }
}
