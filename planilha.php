<?php
    $teste = 'lab1';
    $idPlanilha = "1BgckVPL6TiNEGlw5veKChsLwwNF9_nND8X8W13HLx1c";
    $key = "AIzaSyCid6_SXQd-mi1RQgg2oinImWR0pZqrn5U";
    $rangePlanilha = "A2:Z200";

    // Link de visualização da planilha em formato 'JSON, com a chave da API do projeto
    $acessoPlanilha ="https://sheets.googleapis.com/v4/spreadsheets/$idPlanilha/values/!$rangePlanilha?majorDimension=ROWS&key=$key";

    $file = file_get_contents($acessoPlanilha);
    $valoresPlanilha = json_decode($file);
    $valores = $valoresPlanilha->{'values'};
    
    
   


?>