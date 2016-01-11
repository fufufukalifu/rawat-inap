<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PembayaranController extends Controller
{
    public function index(){       
            return view('pembayaran.view-form-pembayaran');
        }
}
