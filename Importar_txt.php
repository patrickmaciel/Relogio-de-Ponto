<?php

class Importar_txt{

    public function importartxt(){
      if (isset($_FILES['imptxt']['tmp_name'])) { 
        $conteudo = file_get_contents($_FILES['imptxt']['tmp_name']); 
        //         $a1 = array($conteudo);
        // print_r($a1);
        
      } 
        else { 
        $conteudo = ""; 
        } 

    }

    public function ler(){
        //Variável arquivo armazena o nome e extensão do arquivo.
        $arquivo = "C:\\teste.txt";
        //Variável $fp armazena a conexão com o arquivo e o tipo de ação.
        $fp = fopen($arquivo, "r");
     
        //Lê o conteúdo do arquivo aberto.
        while (!feof ($fp)) {
          $valor = fgets($fp); //estava ,4096
          if(substr($valor, 9, 1) == 3){/*9 - onde começa a palavra */  /* 1 - número de letras */
           // echo $valor."<br>";
           
            
           $funcionario = new Funcionario();
  
           $nsr = substr($valor, 0, 9). "<br>";
           $arraynsr = array($nsr);
           $objetonsr = (object)$arraynsr;
          // print_r($objetonsr);

           foreach($objetonsr as $NSR){
          //  echo $NSR;
           }
    
           $registro  = substr($valor, 9, 1). "<br>";
           $data = substr($valor, 10, 2)."/".substr($valor, 12, 2)."/". substr($valor, 14, 4). "<br>";
           $hora = substr($valor, 18, 2).":".substr($valor, 20, 2). "<br>";
           $pis = substr($valor, 22, 12). "<br>";
           
          $funcionario->setNsr($NSR);
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
          }//fim if
      }//fim while
           //Fecha o arquivo.
           fclose($fp);
  
  }

  





}




?>
