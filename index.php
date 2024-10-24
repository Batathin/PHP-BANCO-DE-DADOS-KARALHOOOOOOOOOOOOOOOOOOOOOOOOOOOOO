

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST['nome'];
            $matricula = $_POST['mat'];
            $curso = $_POST['curso'];
          }

            $servername = "localhost";
            $database = "php_info2";
            $username = "root";
            $password = "";
            $conn = mysqli_connect($servername, $username, $password, $database);
            if (!$conn) {
                die("Connection Failed: " . mysqli_connect_error());
            }
            echo "conexão estabelecida com sucesso!<br>";
            $sql = "Insert INTO tabela (nome, mat, curso) VALUES ('$nome', '$matricula', '$curso')";
            if (mysqli_query($conn, $sql)){
                echo "Novo registro armazenado!";
            }
            else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);

            
        ?>
  </body>
</html>