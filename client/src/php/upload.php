<?php
session_start();
require_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Relatório</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <?php
    if (isset($_POST['upload'])) {
        $userId = $_SESSION['user_id'];
        $username = $_SESSION['username'];
        $pdfFileName = $_FILES['pdf_file']['name'];
        $pdfTmpName = $_FILES['pdf_file']['tmp_name'];
        $uploadPath = 'uploads/' . $pdfFileName; 

        if (move_uploaded_file($pdfTmpName, $uploadPath)) {
            echo '<div class="alert alert-success" role="alert">Arquivo Movido Com Sucesso!</div>';

            // pega os conteudos do pdf
            $pdfData = file_get_contents($uploadPath);
            
            // molda o conteudo para caber no banco de dados
            $escapedPdfData = $conn->real_escape_string($pdfData);
           
            // insere no banco de dados
            $sql = "INSERT INTO Relatorios (id_preenchedor, nome_preenchedor, file_name, file_data) VALUES ('$userId', '$username', '$pdfFileName', '$escapedPdfData')";

            // procura por erros durante o envio
            if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-success" role="alert">PDF enviado com sucesso!</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Erro, tente novamente.' . $conn->error . '</div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">Erro, tente novamente.</div>';
        }
        
        // redireciona para a homepage após alguns segundos
        header("refresh:2;url=another_page.php");
    } else {
        echo '<div class="alert alert-danger" role="alert">Erro, tente novamente.</div>';
    }
    ?>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>