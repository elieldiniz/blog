<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        $fornecdores = [
            0 => ['nome' => 'Fornecedor 1', 'status' => 'N'],
            1 => ['nome' => 'Fornecedor 2', 'status' => 'S'],
            2 => ['nome' => 'Fornecedor 3', 'status' => 'N'],
            3 => ['nome' => 'Fornecedor 4', 'status' => 'S'],
            4 => ['nome' => 'Fornecedor 1', 'status' => 'N'],
            5 => ['nome' => 'Fornecedor 2', 'status' => 'S'],
            6 => ['nome' => 'Fornecedor 3', 'status' => 'N'],
            7 => ['nome' => 'Fornecedor 4', 'status' => 'S'],
        ];
        return view('app.fornecedor.index', compact('fornecdores'));
    }
}
