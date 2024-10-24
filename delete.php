<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Delete</title>
    <meta charset="utf-8">
  </head>
  <body>
        <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $matricula = $_POST['matricula'];
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
            $sql_delete = "DELETE FROM tabela Where mat=$matricula";
            if (mysqli_query($conn, $sql_delete)){
                echo "Registro Deletado!";
            }
            else {
                echo "Error: " . $sql . "<br>" . musqli_error($conn);
            }
            mysqli_close($conn);


            

        ?>
  </body>
</html>

