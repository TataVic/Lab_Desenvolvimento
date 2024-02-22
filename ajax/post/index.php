<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de requisição POST</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h1>Exemplo Post</h1>

    <form id="form">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <button type="button"  onclick="submitForm()">Enviar</button>
    </form>

    <div id="resposta"></div>

    <script type="text/javascript">
            function submitForm(){
                var formData = {
                    nome: $('#nome').val(),
                    email: $('#email').val()
                };
                $.ajax({
                    type: 'POST',
                    url: 'processar.php',
                    data: formData,
                    success: function(resposta){
                        //console.log(resposta);
                        $('#resposta').html(resposta);
                    },
                    error: function(resposta){
                        alert('Erro ao enviar form'+resposta);
                    }
                });
            }
    </script>
</body>
</html>