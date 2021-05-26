<?php
namespace app\models\dao;

use app\core\Model;

class ClienteDao extends Model{
    public function InserirCliente($id, $nome, $fone){
        $sql = "INSERT INTO CLIENTE SET
                ID = :ID,
                CLIENTE = :CLIENTE,
                FOME = :FONE";
         $qry = $this->db->prepare($sql); 
         $qry->bindValue(":ID", $id);
         $qry->bindValue(":CLIENTE", $nome);
         $qry->bindValue(":FONE", $fone);
         $qry->execute();
    }
}