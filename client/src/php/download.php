<?php
session_start();
require_once('conexao.php');

if (isset($_GET['id'])) {
    $reportId = $_GET['id'];


    $sql = "SELECT file_name, file_data FROM relatorios WHERE n°_do_relatorio = $reportId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

       
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $row['file_name'] . '"');

       
        echo $row['file_data'];
        exit();
    } else {
       
        echo "PDF not found.";
    }
} else {
   
    echo "Invalid request.";
}
?>