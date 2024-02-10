<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Ajax - Get</title>
</head>
<body>
    <h1>Exemplo de AJAX</h1>
    <p>Clique no botão para carregar os dados</p>
    <button onclick="carregar()">Carregar dados</button>
    <div id="resultados"> 
        
    </div>
<script type="text/javascript">
    function carregar(){
        var link = new XMLHttpRequest();
        link.open("GET","dados.json", true);
        link.onload = function(){
            if(link.status === 200){
                var div = document.getElementById("resultados");
            }
            else{alert("Erro ao carregar dados"+link.statusText);}
        }
    };
    link.onerror = function(){
        alert("Erro na consulta de dados!")
    }
</script>
    
</body>
</html>