<!DOCTYPE html>
<head>
  <title> Login </title>
  <meta charset="UTF-8" />
</head>

<body>
  <?php
  try {
    $siape = $_POST['inUsuario'];

    // ainda não implementei a senha <-- $senha = $_POST['senha'];

    // acesso ao MySQL via PHP Data Objects
    $pdo = new PDO("mysql:host=localhost;dbname=pit","root","mudar@senha");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $sql = $pdo->prepare("SELECT siape FROM professor WHERE siape ='$siape'");
    $sql->execute();
   
    $linhas = $sql->rowcount();
    if($linhas > 0) {
      echo "Login efetuado com Sucesso!";
    }
    else {
      echo "Login incorreto";
    }
  }
  catch (PDOException $erro) {
    echo $erro->getMessage();
  }
  ?>
</body>
</html>

  
   
