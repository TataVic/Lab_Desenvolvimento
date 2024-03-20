<?php
class Pokemon extends model{

    public function getNumero($numero){
        $retorno = array();

        $sql = "SELECT * FROM tab_pokemon WHERE numero = :numero";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':numero', $numero);
        $sql->execute();

        if($sql->rowCount() > 0){
            $retorno = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }
        return $retorno;
    }

    public function getAll(){
        $array = array();

        $sql = "SELECT * FROM tab_pokemon";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $retorno = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }
        return $retorno;
    }
}