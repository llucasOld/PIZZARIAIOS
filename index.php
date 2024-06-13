



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






<div id="box"> QUASE PROMOÇÃO!!</div>
<script src="tt.js"></script>




</div>


</div>







       
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lucaspizza";

//Criar a conexão

$conn = new mysqli($servername, $username, $password, $dbname);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $complemento =  $_POST["complemento"];
    $pagamento = $_POST["pagamento"];

    $sql = "INSERT INTO  clientesdb(nome, email, endereco, complemento, pagamento ) VALUE ('$nome','$email', '$endereco', '$complemento', '$pagamento')";

    
    
    
    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $sabor = $_POST["sabor"];
    $tamanho = $_POST["tamanho"];
    $borda = $_POST["borda"];
    $observacao = $_POST["observacao"];
    

    $sql2 = "INSERT INTO  pedidolp(sabor, tamanho, borda, observacao ) VALUE ('$sabor','$tamanho', '$borda', '$observacao')";

    
    
    
    if ($conn->query($sql2) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql2 . "<br>" . $conn->error;
    }
}

$conn->close();

?>


<div class="form">

    <h1>Registrar Usuário</h1>
    <form id="" method="post">
    
    <div class="gg">
    nome: <input type="text" name="nome" id="z" required autocomplete="off"> <br>
    E-mail: <input type="email" name="email" id="z1" required autocomplete="off"><br>
    Endereço: <input type="text" name="endereco" id="z2"required autocomplete="off"><br>
    Complemento: <input type="text" name="complemento" id="z3" required autocomplete="off"><br>
    Forma de Pagamento: <select name="pagamento" id="z4" required autocomplete="off">
   <option> Pix</option>
   <option> Cartão de cédito</option>
   <option> Debito</option>
    </select><br>
    </div>








<div class="formb">
    
sabor <select name="sabor" id="s1" required autocomplete="off">
   <option> coração</option>
   <option> 4 queijos</option>
   <option> calabresa</option>
      <option> mussarela</option>
    </select><br>

    tamanho <select name="tamanho" id="s2" required autocomplete="off">
   <option> peuena</option>
   <option> grande</option>
   <option> media</option>
    
    </select><br>


    Borda <select name="borda" id="s3" required autocomplete="off">
   <option> nenhuma</option>
   <option> mostarda</option>
   <option> coracao</option>
   <option> cheedar</option>
   <option> chocolate</option>

   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX-8xNfyZ7W5uP-QL_thSkySs4nJ3k1XGLjg&s" alt="" height="300px">
    </select><br>


    Observações <input type="text" name="observacao" id="tt" autocomplete="off"> <br>
    
    <input type="submit" value="Cadastrar">

 
</div>







<div class="ii">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX-8xNfyZ7W5uP-QL_thSkySs4nJ3k1XGLjg&s" id="er" alt="" height="300px">
</div>

</form>



</div>

<div class="rodape">
    <h3>rodapé</h3>
    <h4>pizzaria</h4><h4>sobre</h4> <h4>conteudos</h4> <h4>inicio</h4> <h4>telefone</h4>
    <img src="https://www.uniritter.edu.br/wp-content/uploads/2022/05/print-mapa-fapa-550-x-230.jpg" alt="">
</div>


<footer>
<p>Desenvolvido por: Lucas Oliveira Maciel</p>
<p>cursando IOS</p> <p>data: 13/06/2024</p>
</footer>

</body>
</html>







