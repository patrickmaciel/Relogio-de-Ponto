<?php

class Importar_txt{

    public function importartxt(){
     // if (isset($_FILES['imptxt']['tmp_name'])) { 
       // $conteudo = file_get_contents($_FILES['imptxt']['tmp_name']); 
       if(!empty($_FILES['imptxt']['tmp_name']) 
       && file_exists($_FILES['imptxt']['tmp_name'])) {
        $conteudo = addslashes(file_get_contents($_FILES['imptxt']['tmp_name']));
        $array = array_filter(explode("\n", $conteudo)); //le ate o final da linha
        // print_r($array);
        foreach ($array as $key => $valor) {
          if(substr($valor, 9, 1) == 3){
            $funcionario = new Funcionario;
            
            $nsr = substr($valor, 0, 9);
            $registro  = substr($valor, 9, 1);
            $data = substr($valor, 10, 2)."/".substr($valor, 12, 2)."/". substr($valor, 14, 4);
            $hora = substr($valor, 18, 2).":".substr($valor, 20, 2);
            $pis = substr($valor, 22, 12);



            $funcionario->setNsr($nsr);
            $funcionario->setRegistro($registro);
            $funcionario->setData($data);
            $funcionario->setHora($hora);
            $funcionario->setPis($pis);
        
        
            for($i=0; $i<is_object($funcionario);$i++){
              echo "<tr>";
              for($j=0; $j<1;$j++){
                 echo "<td>".$funcionario->getNsr()."</td>";
                 echo "<td>".$funcionario->getRegistro()."</td>";
                 echo "<td>".$funcionario->getData()."</td>";
                 echo "<td>".$funcionario->getHora()."</td>";
                 echo "<td>".$funcionario->getPIS()."</td>";
              }
              echo "</tr>";
          }
          }
        }

      } 
        else { 
        $conteudo = ""; 
        } 
    
    }
}

?>