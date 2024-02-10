<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Ajax - Get</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script></head>
<body>
    <h1>Exemplo de AJAX</h1>
    <p>Clique no botão para carregar os dados</p>
    <button onclick="carregar()">Carregar dados</button>
    <div id="resultados"> 
        
    </div>
<script type="text/javascript">
    function carregar(){
        $.ajax({
            url:"dados.php",
            type:"GET",
            dataType:"json",
            success: function(data){
                $("#resultados").html("<h2>Dados Carregados</h2>");
                $("#resultados").append("<p>Nome:" +data.nome+"</p>");
                $("#resultados").append("<p>Idade:" +data.idade+"</p>");
            },
            error: function(data){
                alert("Erro ao carregar dados"+data);
            }
        })
    }
</script>
    
</body>
</html>