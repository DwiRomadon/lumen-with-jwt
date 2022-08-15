<?php

namespace App\Http\Controllers;
use App\Models\KategoriBarang;
use App\Helpers\Response;

use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller{
    
    public function __construct()
    {
        // $this->middleware('auth');
    }
    
    public function index() {
        $kategori = KategoriBarang::all();
        return $this->successWithData($kategori);
    }
}