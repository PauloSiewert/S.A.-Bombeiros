<?php

session_start();

$data = json_decode(file_get_contents("php://input"), true);

function prepareData($value) {
    // Handle array data
    if (is_array($value)) {
        return "'" . addslashes(json_encode($value)) . "'";
    }
    
    // Handle null values
    if ($value === null) {
        return 'NULL';
    }

    // Handle other values
    return "'" . addslashes($value) . "'";
}

// Check if keys exist before using them
$userData = isset($data['userData']) ? prepareData($data['userData']) : 'NULL';
$healthData = isset($data['healthData']) ? prepareData($data['healthData']) : 'NULL';
$incidentData = isset($data['incidentData']) ? prepareData($data['incidentData']) : 'NULL';
$medicalData = isset($data['medicalData']) ? prepareData($data['medicalData']) : 'NULL';
$vitalSigns = isset($data['vitalSigns']) ? prepareData($data['vitalSigns']) : 'NULL';
$signsAndSymptoms = isset($data['signsAndSymptoms']) ? prepareData($data['signsAndSymptoms']) : 'NULL';
$results = isset($data['results']) ? prepareData($data['results']) : 'NULL';
$victimData = isset($data['victimData']) ? prepareData($data['victimData']) : 'NULL';
$cinematicData = isset($data['cinematicData']) ? prepareData($data['cinematicData']) : 'NULL';
$conductionData = isset($data['conductionData']) ? prepareData($data['conductionData']) : 'NULL';
$patientStatus = isset($data['patientStatus']) ? prepareData($data['patientStatus']) : 'NULL';
$birthFormData = isset($data['birthFormData']) ? prepareData($data['birthFormData']) : 'NULL';
$proceData = isset($data['proceData']) ? prepareData($data['proceData']) : 'NULL';
$tableData = isset($data['tableData']) ? prepareData($data['tableData']) : 'NULL';
$textareaData = isset($data['textareaData']) ? prepareData($data['textareaData']) : 'NULL';
$inputData = isset($data['inputData']) ? prepareData($data['inputData']) : 'NULL';
$textarea2Data = isset($data['textarea2Data']) ? prepareData($data['textarea2Data']) : 'NULL';
$equipeData = isset($data['equipeData']) ? prepareData($data['equipeData']) : 'NULL';
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
            $userData,
            $healthData,
            $incidentData,
            $medicalData,
            $vitalSigns,
            $signsAndSymptoms,
            $results,
            $victimData,
            $cinematicData,
            $conductionData,
            $patientStatus,
            $birthFormData,
            $proceData,
            $tableData,
            $textareaData,
            $inputData,
            $textarea2Data,
            $equipeData
        )";

$conn->query($sql);

$conn->close();

?>
