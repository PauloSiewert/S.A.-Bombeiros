<?php

session_start();

$data = json_decode(file_get_contents("php://input"), true);

$userData = $data['userData'];
$healthData = $data['healthData'];
$incidentData = $data['incidentData'];
$medicalData = $data['medicalData'];
$vitalSigns = $data['vitalSigns'];
$signsAndSymptoms = $data['signsAndSymptoms'];
$results = $data['results'];
$victimData = $data['victimData'];
$cinematicData = $data['cinematicData'];
$conductionData = $data['conductionData'];
$patientStatus = $data['patientStatus'];
$birthFormData = $data['birthFormData'];
$proceData = $data['proceData'];
$tableData = $data['tableData'];
$textareaData = $data['textareaData'];
$inputData = $data['inputData'];
$textarea2Data = $data['textarea2Data'];
$equipeData = $data['equipeData'];
$username = $_SESSION['username'];

$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "noar_teste2";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO fichas (
            Preenchedor,
            info_paciente,
            anam_emer,
            tipo_ocorrencia,
            problemas_susp,
            sinais_vitais,
            sinais_sintomas,
            glasgow,
            viti_era,
            cinematica,
            conducao,
            dec_transporte,
            anam_gestacional,
            procedimentos,
            mate_descart,
            objetos,
            resp_preenchimento,
            observacoes,
            equipe_atendimento
        ) VALUES (
            '$username',
            '$userData',
            '$healthData',
            '$incidentData',
            '$medicalData',
            '$vitalSigns',
            '$signsAndSymptoms',
            '$results',
            '$victimData',
            '$cinematicData',
            '$conductionData',
            '$patientStatus',
            '$birthFormData',
            '$proceData',
            '$tableData',
            '$textareaData',
            '$inputData',
            '$textarea2Data',
            '$equipeData'
        )";

$conn->query($sql);

$conn->close();

?>