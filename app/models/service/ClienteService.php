<?php
namespace app\crud\service;

use app\models\validacao\clienteValidacao;

class ClienteService{
    public static function salvar($cliente, $campo, $tabela){
        $validacao = clienteValidacao::cliente($cliente);
        return Service::salvar($cliente, $campo, $validacao->listaErros(), $tabela);
    } 
}