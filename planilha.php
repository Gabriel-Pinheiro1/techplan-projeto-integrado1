<?php
    require_once('credenciais.php');
          
    // Link de visualização da planilha em formato 'JSON, com a chave da API do projeto
    $acessoPlanilha ="https://sheets.googleapis.com/v4/spreadsheets/$idPlanilha/values/!$rangePlanilha?majorDimension=ROWS&key=$key";

      
    $file = file_get_contents($acessoPlanilha);
    $valoresPlanilha = json_decode($file);
    $valores = $valoresPlanilha->{'values'};
    
    
    
   


?>