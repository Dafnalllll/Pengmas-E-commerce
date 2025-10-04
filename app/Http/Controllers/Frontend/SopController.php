<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Sop;
use Illuminate\Http\Request;

class SopController extends Controller
{
    public function index()
    {
        // $sops = Sop::latest()->get();
        // return view('pages.user.sop', compact('sops'));
    }

    public function create()
    {
        // return view('pages.user.add.addsop');
    }
}
