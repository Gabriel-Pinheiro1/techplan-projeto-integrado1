
    // Função para atualizar as opções do campo "Tipo de Problema"
    function atualizarOpcoes() {
        var tipoProblema = document.getElementById("categoria");
        var detalhesProblema = document.getElementById("detalhesProblema");
        var camposAdicionais = document.getElementById("camposAdicionais");
        var numeroMesa = document.getElementById("mesa");
        var opcaoSoftware = document.getElementById("software");
        var outroProblema = document.getElementById("descricaoProblema");
        var opcaoEquip = document.getElementById("tipoEquip");
  
        // Limpar as opções anteriores
        detalhesProblema.innerHTML = "";
        camposAdicionais.innerHTML = "";
        
        opcaoSoftware.innerHTML = "";
        outroProblema.innerHTML = "";
        numeroMesa.innerHTML = "";
        camposAdicionais.innerHTML = "";
  
        opcaoSoftware.style.display = "none";
        outroProblema.style.display = 'none';
        numeroMesa.style.display = 'none';
        opcaoEquip.style.display = 'none';
  
        // Obter o valor selecionado no campo "Tipo de Problema"
        var problemaSelecionado = tipoProblema.value;
  
        // Definir as opções de acordo com o problema selecionado
        if (problemaSelecionado === "Computador") {
          var opcoesComp = ["Sem internet", "Não liga", "Monitor quebrado", "Periféricos não funcionam"];
          for (var i = 0; i < opcoesComp.length; i++) {
            var option = document.createElement("option");
            option.text = opcoesComp[i];
            option.value = opcoesComp[i];
            detalhesProblema.add(option);
          }
  
          detalhesProblema.style.display = 'block';
          numeroMesa.style.display = 'block';
  
        } else if (problemaSelecionado === "Equipamento") {
          var opcoesEquip = ["Nâo liga", "Não conecta", "Pingando"];
          for (var i = 0; i < opcoesEquip.length; i++) {
            var option = document.createElement("option");
            option.text = opcoesEquip[i];
            option.value = opcoesEquip[i];
            detalhesProblema.add(option);
          
            
          }
  
          detalhesProblema.style.display = 'block';
          opcaoEquip.style.display = 'block';
  
        } else if (problemaSelecionado === "Software") {
          opcaoSoftware.style.display = "block";
          var opcoesSoftware = ["Não foi instalado", "Não abre", "Expirou a licença"];
          for (var i = 0; i < opcoesSoftware.length; i++) {
            var option = document.createElement("option");
            option.text = opcoesSoftware[i];
            option.value = opcoesSoftware[i];
            detalhesProblema.add(option);
  
            
          }
  
          detalhesProblema.style.display = 'block';
          numeroMesa.style.display = 'block';
  
        } else if (problemaSelecionado === "Outro") {
          
          detalhesProblema.style.display = 'none';
          outroProblema.style.display = 'block';
        } 
  
        
          
        
      }