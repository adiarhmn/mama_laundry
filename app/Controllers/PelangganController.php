<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PelangganController extends BaseController
{
    public function index()
    {
        return view('pelanggan');
    }

    public function tambah()
    {
        return view('tambah_pelanggan');
    }
}
