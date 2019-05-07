<?php
class Aulas{
    private $idc;
    private $aulac;
    private $capacidadc;
    private $tipSillac;
    private $tipEntradac;
    private $taburetec;
    private $pizarrac;
    private $proyectorc;
    private $pcAlumnoc;
    private $pcDocentec;
    private $canPuertasc;
    private $equVentilacionc;
    private $observacionc;
    private $estadoc;

    public function Aulas(){

    }
    public function listar_aulas(){
        $cn=new Cn();
        $mysqli=$cn->cn;
        $stm=$mysqli->prepare("select * from aulas");        
        $stm->execute();
        $array=[];
        if($stm->error=='')
        {
            $rs = $stm->get_result();
            while($myrow = $rs ->fetch_assoc()){
                $array[]=$myrow;
            }
            $resultado=$array;
        }else{
            $resultado = $stm->error;
        
        }
        $json = json_encode($resultado);
        return $json;
    }

    public function eliminando($idc){
        $cn = new Cn();
        $mysqli=$cn->cn;
        $stm=$mysqli->prepare("DELETE from aulas where id = ?");
        $stm->bind_param("s",$dnic);
        $stm->execute();
        $rs=$stm->get_result();
        if(isset($stm->error)){
            echo $stm->error;
        }
        return "eliminadito:p";

    }

}

?>