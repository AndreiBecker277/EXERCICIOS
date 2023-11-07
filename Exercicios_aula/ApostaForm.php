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
        form{

            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;     

        }      
        
        form input{
            width: 200px;
            margin-top:10px ;
            padding: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
    <h1>Restaurante do Xiru</h1>

    <form action="exercicio5.php" method="get">
         
        <input type="text" name="Time A" id="A"
        placeholder="Insira o time A" >

        <input type="number" name="gol" id="A_gol" min="0" max="10" step="0.01" 
        placeholder="Gols">  
              
        
       
        <input type="text" name="Time B" id="B"
        placeholder="Insira o time B">  

        <input type="number" name="gol" id="B_gol" min="0" max="10" step="0.01" 
        placeholder="Gols">   
       

        <input type="submit" value="ver Resultado">
        <input type="reset" value="Limpar">

    </form> 
    </div>

</body>
</html>