<?php 
class Produto extends model{
    public function getAll(){
        $retorno = array();

        $sql = "SELECT * FROM produtos";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $retorno = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

        return $retorno;
    }
}