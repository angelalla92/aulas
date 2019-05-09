<?php
class Aulas{
    private $id;
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

    public function eliminando($id){
        $cn = new Cn();
        $mysqli=$cn->cn;
        $stm=$mysqli->prepare("DELETE from aulas where id=?");
        // Agrega variables a una sentencia preparada como parámetros
        $stm->bind_param("i",$id);
        $stm->execute();
        $rs=$stm->get_result();
        if(isset($stm->error)){
            echo $stm->error;
        }
        return "eliminadito";

    }
    public function listar_aulas_id($id){
        $cn = new cn();
        $mysqli=$cn->cn;
        //Prepara una sentencia SQL para su ejecución
        $stm=$mysqli->prepare("select from aulas where id=?");
        $stm->execute();
        $array=[];
        if($stm->error=''){
            $rs = $stm->get_result();
            while($myrow = $rs->fetch_assoc()){
                $array[]=$myrow;
            } 
            $resultado=$array;
        }else{
            $resultado = $stm->errror;
        }
        $pjson=json_encode($resultado);
        return $pjson;

    }
    public function actualizar_aulas($id, $aulac, $capacidadc, $tipSillac, $tipEntradac,$taburetec,$pizarrac,$proyectorc,$pcAlumnoc,$pcDocentec,$canPuertasc,$equVentilacionc,$observacionc,$estadoc){
        $cn=new cn();
        $mysqli=$cn->cn;
        //Prepara una sentencia SQL para su ejecución
        $stm=$mysqli->prepare("UPDATE aulas set  id=?, aula=?, capacidad=?, tipSilla=?, tipEntrada=?,taburete=?,pizarra=?,proyector=?,pcAlumno?,pcDocente?,canPuertas=?,equVentilacion=?,observacion=?,estado=?");
         // Agrega variables a una sentencia preparada como parámetros
         $stm->bind_param("sssssssssssss",$id, $aulac, $capacidadc, $tipSillac, $tipEntradac,$taburetec,$pizarrac,$proyectorc,$pcAlumnoc,$pcDocentec,$canPuertasc,$equVentilacionc,$observacionc,$estadoc);
         $stm->execute();
         //preguntar a Aarónn
         if($stm->afected_row>0){
             $res="aulitaactualizada";
         }else{
             $res=$stm->error;
         }
         return $res;
            
    }
 
}

?>