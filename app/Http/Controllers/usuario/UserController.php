<?php

namespace App\Http\Controllers\usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($nombre)
    {
        return 'User ' . $nombre;
    }
    public function user1($id)
    {
        return 'User ID ' . $id;
    }
    public function user2($id, $nombre)
    {
        return 'User ID ' . $id . ' y el nombre es ' . $nombre;
    }
}
