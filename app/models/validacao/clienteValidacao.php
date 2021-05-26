<?php
namespace app\models\validacao;

use app\core\Validacao;

class clienteValidacao{
    public static function cliente($cliente){
        $validacao = new Validacao($cliente);
        $validacao->setData("nome", $cliente["nome"]);
        $validacao->setData("nome", $cliente["id"]);
        $validacao->setData("nome", $cliente["fonecelular"]);

        $validacao->getData("nome")->isVazio();
        $validacao->getData("id")->isVazio();
        $validacao->getData("fonecelular")->isVazio();

        return $validacao;
    }
}