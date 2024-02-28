<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Get</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <h1>Pesquise com AJAX</h1>
    <label for="filtro">filtro</label>
    <input type="text" name="filtro" id="filtro">
    <p>Clique no botão para carregar os dados salvos</p>
    <button onclick="pesquisar()">pesquisar</button>

    <table>
        <thead>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Endereco</th>
            <th>Cep</th>
            <th>Regiao</th>
        </thead>
    </table>
    <div id="resultados"></div>
<script type="text/javascript">
    function pesquisar(){
        var filtro = $('#filtro').val();
        $.ajax({
            url:"dados.json",
            type:"POST",
            data: {filtro: filtro},
            success: function(data){
                $("#resultados").html("<h2>Dados Carregados</h2>");
                $("#resultados").append("<p>Nome:" +data.nome+"</p>");
                $("#resultados").append("<p>Nome:" +data.telefone+"</p>");
                $("#resultados").append("<p>Idade:" +data.email+"</p>");
                $("#resultados").append("<p>Idade:" +data.endereco+"</p>");
                $("#resultados").append("<p>Idade:" +data.cep+"</p>");
                $("#resultados").append("<p>Idade:" +data.regiao+"</p>");
            },
            error: function(data){
                alert("Erro ao pesquisar dados"+data);
            }
        })
    }
</script>
</body>
</html>