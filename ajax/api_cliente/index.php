<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumir API</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <button type="button" onclick="ConsumirAPI()">Consultar</button>
    <div id="dados"></div>
    <script type="text/javascript">
        function ConsumirAPI(){
            $.ajax({
                url: 'http://localhost/Lab_Desenvolvimento/ajax/api/produtos',
                type:'GET',
                dataType:'json',
                success: function(dados){
                    //console.log(dados);
                    $('#dados').html(JSON.stringify(dados));
                },
                error:function(erro){
                    console.error('erro na API'+erro);
                }
            })
        }
    </script>
</body>
</html>