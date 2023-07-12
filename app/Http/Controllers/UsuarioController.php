<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function usuarioUnParametro($nombre = 'Invitado')
    {
        return 'Usuario ' . $nombre;
    }
    public function usuarioDosParametros($nombre, $comentarioId)
    {
        return 'Usuario ' . $nombre . ' y el comentario es ' .  $comentarioId;
    }
}
