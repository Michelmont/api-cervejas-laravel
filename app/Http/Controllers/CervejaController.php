<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CervejaController extends Controller
{
    public function listarCervejas()
    {
        return 'logica para listar cervejas';
    }

    public function verCerveja()
    {
        return 'logica para ver uma cerveja especifica';
    }

    public function adicionarCerveja()
    {
        return 'logica para adicionar uma nova cerveja';
    }

    public function atualizarCerveja()
    {
        return 'logica para ver atualizar uma cerveja';
    }

    public function deletarCerveja()
    {
        return 'logica para deletar uma cerveja';
    }
}
