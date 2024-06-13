



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria ios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="box">
        <header class="main-header">

            <div class="container">
                <div class="flex">
                    
                <div class="texto">
                    
                    <h1>PIZZA IOS</h1><h2>Altas Horas</h2>
                    </div>
                </div>
        
    
              <div class="ester">
                <ul>
                    <li><a href="">CONTATO</a></li>
                    <li><a href="">AREA DE ENTREGA</a></li>
                    <li><a href="">CONTATO</a></li>
                </ul>
              </div>
    
    
                </div>


            <div class="desconto">
                <a href=""><h4>25%</h4><h4>de desconto no app</h4> <h3>WHATSSAP</h3> <h3>TELEFONE</h3></a>
            </div>





        </header>
    </div>
 
    <div class="atlas">
        <img src="https://images.vexels.com/media/users/3/262561/isolated/preview/d4e8a9986c2b7eb249a5f57b6684615a-refeia-a-o-de-pizza-de-comida.png" alt="">
    </div>
   

 
    <div class="cardapio">
     
      <div class="lib">
        <h4>CARDAPIO</h4>

      </div>
        <div class="flex">

           
            
            <div class="bode">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfz81lBFdSB-9CRLTv_XjvKOTYzNPKnOHnnA&s" alt="a">
            <h2>brotinho</h2>
            <h3>r$45,44</h3>
          
            </div>

            <div class="bode">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfz81lBFdSB-9CRLTv_XjvKOTYzNPKnOHnnA&s" alt="a">
            <h2>pequena</h2>
            <h3>r$87,98</h3>
          
            </div>

            <div class="bode">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfz81lBFdSB-9CRLTv_XjvKOTYzNPKnOHnnA&s" alt="a">
            <h2>media</h2>
            <h3>r$148,992</h3>
          
   

     


            

            

        </div>


    </div>
    


    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzarialucas";

//Criar a conexão

$conn = new mysqli($servername, $username, $password, $dbname);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO dados (nome, email, endereco, senha) VALUE ('$nome', '$endereco', '$email', '$senha')";

    
    
    
    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

}

$conn->close();

?>
    <div class="atlas">
        <img src="https://images.vexels.com/media/users/3/262561/isolated/preview/d4e8a9986c2b7eb249a5f57b6684615a-refeia-a-o-de-pizza-de-comida.png" alt="">
    </div>
    
    <h1>Registrar Usuário</h1>
    <form id="dd" method="post">
    
    Nome: <input type="text" name="nome" id="z" required autocomplete="off"> <br>
    endereço: <input type="text" name="endereco" id="z1" required><br>
    E-mail: <input type="email" name="email" id="z2" required autocomplete="off">
    senha: <input type="password" name="senha" id="z3" required><br>
    
    <input type="submit" value="Cadastrar">

</form>

</body>
</html>






    <div class="atlas">
        <img src="https://images.vexels.com/media/users/3/262561/isolated/preview/d4e8a9986c2b7eb249a5f57b6684615a-refeia-a-o-de-pizza-de-comida.png" alt="">
    </div>
    
    <div class="cardapio">
        <h2>CARDAPIO</h2>
    </div>
    
<h1>Registrar Usuário</h1>
<form action="" method="post">

Nome: <input type="text" name="nome" id="" required autocomplete="off"> <br>
endereço: <input type="text" name="endereco" id="" required><br>
E-mail: <input type="email" name="email" id="" required autocomplete="off">
senha: <input type="password" name="senha" id="" required><br>

<input type="submit" value="Cadastrar">



</form>

</body>
</html>











