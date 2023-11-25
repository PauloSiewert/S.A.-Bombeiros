<?php
session_start();
require_once('conexao.php');

if (isset($_POST['upload'])) {
    $userId = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    $pdfFileName = $_FILES['pdf_file']['name'];
    $pdfTmpName = $_FILES['pdf_file']['tmp_name'];
    $uploadPath = 'uploads/' . $pdfFileName; // Set your desired upload directory

    if (move_uploaded_file($pdfTmpName, $uploadPath)) {
        echo "File moved successfully!<br>";

        // Read the content of the PDF file
        $pdfData = file_get_contents($uploadPath);
        echo "PDF Data: $pdfData<br>";

        // Escape PDF data for insertion into SQL
        $escapedPdfData = $conn->real_escape_string($pdfData);
        echo "Escaped PDF Data: $escapedPdfData<br>";

        // Insert data into the database
        $sql = "INSERT INTO Relatorios (id_preenchedor, nome_preenchedor, file_name, file_data) VALUES ('$userId', '$username', '$pdfFileName', '$escapedPdfData')";

        // Check for errors during SQL execution
        if ($conn->query($sql) === TRUE) {
            echo "PDF uploaded successfully!";
        } else {
            echo "Error uploading PDF: " . $conn->error;
        }
    } else {
        echo "Error moving uploaded file to destination.";
    }
} else {
    echo "Upload form not submitted.";
}
?>