<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver um produto</title>
</head>
<body>
    <label for="">Nome</label>
    <input type="text" name="nome" value="{{$produto->nome}}"> <br>
    <label for="">Custo</label>
    <input type="text" name="custo" value="{{$produto->custo}}"> <br>
    <label for="">Preço</label>
    <input type="text" name="preco" value="{{$produto->preco}}"> <br>
    <label for="">Quantidade</label>
    <input type="text" name="quantidade" value="{{$produto->quantidade}}">

</body>
</html>
