<?php
session_start();
require_once('conexao.php');

if (isset($_POST['upload'])) {
    $userId = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    $pdfFileName = $_FILES['pdf_file']['name'];
    $pdfTmpName = $_FILES['pdf_file']['tmp_name'];
    $uploadPath = 'uploads/' . $pdfFileName; 

    if (move_uploaded_file($pdfTmpName, $uploadPath)) {
        echo "File moved successfully!<br>";

        // pega os conteudos do pdf
        $pdfData = file_get_contents($uploadPath);
        

        // molda o conteudo para caber no banco de daods
        $escapedPdfData = $conn->real_escape_string($pdfData);
       

        // insere no banco de dados
        $sql = "INSERT INTO Relatorios (id_preenchedor, nome_preenchedor, file_name, file_data) VALUES ('$userId', '$username', '$pdfFileName', '$escapedPdfData')";

        // procura por erros durante o envio
        if ($conn->query($sql) === TRUE) {
            echo "PDF enviado com sucesso!";
        } else {
            echo "Erro, tente novamente." . $conn->error;
        }
    } else {
        echo "Erro, tente novamente.";
    }
} else {
    echo "Erro, tente novamente.";
}
?>