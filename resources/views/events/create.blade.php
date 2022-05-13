<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crud</title>

    <!-- Fonte do Google -->

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>

  </head>
  <body>
  <h1>Adicione um Jogo</h1>
    <form action="/events" method="POST">
      @csrf
      <p>
        <label>Nome do Jogo:</label>
        <input type="text" name="name_jogo" placeholder="Nome do Jogo"/>
      </p>
      <p>
        <label>Descrição:</label>
        <textarea name="description" placeholder="Adicione uma descrição"></textarea>
      </p>
      <input type="submit" value="Adicionar Jogo">
    </form>
    
  </body>
</html>