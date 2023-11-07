<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            width: 400px;
            padding: 20px;
            flex-direction: column;
            align-items: center;
            margin: 10px auto;
            align-items: center;
            background-color: plum;
            border: 2px solid black;
        }

        form  {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;     

        }
        form input{
            width: 300px;
            margin-top:10px ;
            padding: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
    <h1>Restaurante do Xiru</h1>

    <form action="exercicio4.php" method="get">
        <input type="text" name="nomePrato0" id="NomePrato"
        placeholder="Insira o nome do prato" >

        <input type="number" name="peso" id="peso" min="10" max="2000" step="0.01" 
        placeholder="peso">

        <input type="submit" value="calcular">
        <input type="reset" value="Limpar">
    </form> 
    </div>

</body>
</html>