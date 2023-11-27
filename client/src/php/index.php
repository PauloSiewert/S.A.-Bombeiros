<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}


require_once('conexao.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ficha de Ocorrência</title>

  <!-- Demais folders -->
  <link rel="icon" href="noarlogo_small.png" />
  <link rel="stylesheet" href="index.css" />
  <link rel="stylesheet" href="reset.css" />
   <!--CSS and Font Awesome, Bootstrap, etc. links -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,400i,700,700i&display=swap">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<!--CSS and Font Awesome, Bootstrap, etc. links -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/maphilight/1.4.0/jquery.maphilight.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="index.js"></script>
 

</head>

  <body class="bg-light">

    <!-- COMEÇO DA HEADER -->

    <div class="container-fluid m-0 p-0" id="element-to-hide">
      <header class="fixed-top">
        <nav class="navbar navbar-dark bg-dark">
          <div class="container">
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasNav"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="header__container">
              <b class="header__title">Bombeiros Voluntários</b>
              <p class="header__title">
                Assoc. de Serviços Sociais Voluntários de Guaramirim
              </p>
            </div>

            <a href="homepage.php" onclick="Confirmar()">
            <img src="noarlogo_small.png" alt="logo" />
            </a>
          </div>
        </nav>

        <div class="offcanvas offcanvas-start" id="offcanvasNav">
          <div class="offcanvas-header">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Fechar"
            ></button>
          </div>

          <div class="offcanvas-body">
            <ul class="navbar-nav">
              <li class="nav-item bg-light">
                <a class="nav-link" href="#seção1">
                  <div class="box__nav">
                    <b class="navbox__num">1</b>
                  </div>
                  Dados do Paciente
                </a>
              </li>

              <li class="nav-item1">
                <a class="nav-link" href="#seção2">
                  <div class="box__nav">
                    <b class="navbox__num">2</b>
                  </div>
                  Anamnese de Emergência
                </a>
              </li>

              <li class="nav-item bg-light">
                <a class="nav-link" href="#seção3">
                  <div class="box__nav">
                    <b class="navbox__num">3</b>
                  </div>
                  Tipo da Ocorrência
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#seção4">
                  <div class="box__nav">
                    <b class="navbox__num">4</b>
                  </div>
                  Problemas Encontrados
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link bg-light" href="#seção5">
                  <div class="box__nav">
                    <b class="navbox__num">5</b>
                  </div>
                  Sinais Vitais
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#seção6">
                  <div class="box__nav">
                    <b class="navbox__num">6</b>
                  </div>
                  Sinais e Sintomas
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link bg-light" href="#seção7">
                  <div class="box__nav">
                    <b class="navbox__num">7</b>
                  </div>
                  Glasgow
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#seção8">
                  <div class="box__nav">
                    <b class="navbox__num">8</b>
                  </div>
                  Localização dos Traumas
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link bg-light" href="#seção9">
                  <div class="box__nav">
                    <b class="navbox__num">9</b>
                  </div>
                  Ferimentos/Fraturas
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#seção10">
                  <div class="box__nav">
                    <b class="navbox__num">10</b>
                  </div>
                  Queimaduras
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link bg-light" href="#seção11">
                  <div class="box__nav">
                    <b class="navbox__num">11</b>
                  </div>
                  Vitima Era
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#seção12">
                  <div class="box__nav">
                    <b class="navbox__num">12</b>
                  </div>
                  Avaliação de Cinemática
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link bg-light" href="#seção13">
                  <div class="box__nav">
                    <b class="navbox__num">13</b>
                  </div>
                  Forma de Condução
                </a>
              </li>

              
              <li class="nav-item">
                <a class="nav-link" href="#seção14">
                  <div class="box__nav">
                    <b class="navbox__num">14</b>
                  </div>
                  Decisão do Transporte
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link bg-light" href="#seção15">
                  <div class="box__nav">
                    <b class="navbox__num">15</b>
                  </div>
                  Anamnese Gestacional
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#seção16">
                  <div class="box__nav">
                    <b class="navbox__num">16</b>
                  </div>
                  Procedimentos Efetuados
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link bg-light" href="#seção17">
                  <div class="box__nav">
                    <b class="navbox__num">17</b>
                  </div>
                  Materiais Utilizados Descartável
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#seção18">
                  <div class="box__nav">
                    <b class="navbox__num">18</b>
                  </div>
                  Objetos Recolhidos
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link bg-light" href="#seção19">
                  <div class="box__nav">
                    <b class="navbox__num">19</b>
                  </div>
                  Responsável pelo Preenchimento
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#seção20">
                  <div class="box__nav">
                    <b class="navbox__num">20</b>
                  </div>
                  Observações Importantes
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link bg-light" href="#seção21">
                  <div class="box__nav">
                    <b class="navbox__num">21</b>
                  </div>
                  Equipe de Atendimento
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#seção22">
                  <div class="box__nav">
                    <b class="navbox__num">22</b>
                  </div>
                  Termo de Recusa
                </a>
              </li>

              
              <li class="nav-item">
                <a class="nav-link bg-light" href="#seção24">
                  <div class="box__nav">
                    <b class="navbox__num">23</b>
                  </div>
                  Finalizar
                </a>
              </li>
            </ul>
          </div>
        </div>
      </header>
    </div>

    <!-- FIM DA HEADER -->
<div id="element-to-hide">
    <br><br>
    <br>
    <br><br><br>
    <div class="container m-2">
<div class="container p-0">
    <a href="homepage.php" class="btn btn-outline-dark btn-md mb-4 mr-4" onclick="Confirmar()">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
        </div>
        </div>
      
  <!-- Container das informações do usuario e logout -->
  <div class="container bg-light p-2 ml-5 border p-3">
          <div class="">
              <div class="col-md-6 fs-2 ">

                  <?php
                  // checa se o usuario tem dados da sessao já estabelecidos
                  if (isset($_SESSION['user_id'], $_SESSION['username'])) {
                      echo '<p class="mb-0">Bem-Vindo, ' . htmlspecialchars($_SESSION['username']) . '!</p>';
                  } else {
                      echo '<p class="mb-0">Usuário Não Logado</p>';
                  }
                  ?>
              </div>

              <div class="col-md-6 mt-3">
                <div class="">
                  <?php
                  // checa se o user esta logado
                  if (isset($_SESSION['user_id'], $_SESSION['username'])) {
                      echo '<a href="logout.php" class="btn btn-danger">Logout</a>';
                  } else {
                      echo '<p class="mb-0">Usuário Não Logado</p>';
                  }
                  ?>
                </div>
              </div>
          </div>
      </div>


    <br>
<br>

</div>
    <div class="title__bar mt-2" id="seção1">
        <p class="title__text lead fw-semibold">Informações do Paciente:</p>
        <div class="title__box">
            <b class="box__number">1</b>
        </div>
    </div>

    <div class="container mt-5">
      <div class="border p-4 bg-white bg-gradient">
        <div class="row">
          <div class="col-lg-6">
            <label for="exampleInputEmail1" class="form-label">Data:</label>
            <input
              type="date"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
          </div>
          <div class="col-lg-6 ">
            <label for="nomedohospital" class="form-label"
              >Nome do Hospital:</label
            >
            <input
              type="text"
              class="form-control"
              id="nomedohospital"
              aria-describedby="emailHelp"
            />
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-lg-6 mt-3">
              <label class="form-check-label" for="masculino__sexo">Sexo:</label><br />
              <input class="form-check-input1" type="radio" value="1" id="masculino__sexo" name="check1" onchange="handleRadioChange()">
              <label class="form-check-label" for="masculino__sexo">Masculino</label>
             
              <input class="form-check-input1" type="radio" value="2" id="flexCheckDefault1" name="check1" onchange="handleRadioChange()">
              <label class="form-check-label" for="flexCheckDefault1">Feminino</label>
          
              <br /><br />

              <script>
                // desativa tela da gestação quando o paciente é do sexo masculino
                function handleRadioChange() {
                    if ($('#masculino__sexo').is(':checked')) {
                        $('#myDiv').css('display', 'none');
                    } else {
                        $('#myDiv').css('display', '');
                    }
                }
            </script>
        
      </div>


          <div class="col-lg-6">
            <label for="nomepaciente" class="form-label">Nome:</label>
            <input
              type="text"
              class="form-control"
              id="nomepaciente"
              aria-describedby="emailHelp"
            />
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-lg-6">
            <label for="telefone" class="form-label">Telefone:</label>
            <input
              type="number"
              class="form-control"
              id="telefone"
              aria-describedby="emailHelp"
            />
          </div>

          <div class="col-lg-6">
            <label for="rgcpf" class="form-label g-3">RG/CPF:</label>
            <input
              type="number"
              class="form-control"
              id="rgcpf"
              aria-describedby="emailHelp"
            />
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-lg-6">
            <label for="local_ocorrencia" class="form-label"
              >Local da Ocorrência:</label
            >
            <input
              type="text"
              class="form-control"
              id="local_ocorrencia"
              aria-describedby="emailHelp"
            />
          </div>

          <div class="col-lg-6">
            <label for="idade_paciente" class="form-label">Idade:</label>
            <input
              type="number"
              class="form-control"
              id="idade_paciente"
              aria-describedby="emailHelp"
            />
          </div>
        </div>
        <script>
          $(document).ready(function () {
              $('#idade_paciente').on('input', function () {
                  var idadeInput = $(this).val();
      
                  // Check if idade is greater than 5
                  if (idadeInput > 5) {
                      // Hide accordion1 and show accordion2
                      $('#accordion22').hide();
                      $('#accordion11').show();
                  } else {
                      // Hide accordion2 and show accordion1
                      $('#accordion11').hide();
                      $('#accordion22').show();
                  }
              });
          });
      </script>

        <div class="row mt-3">
          <div class="col-lg-6">
            <label for="Acompanhante_paciente" class="form-label"
              >Acompanhante (se houver):</label
            >
            <input
              type="text"
              class="form-control"
              id="Acompanhante_paciente"
              aria-describedby="emailHelp"
            />
          </div>

          <div class="col-lg-6">
            <label for="idade_acompanhante" class="form-label"
              >Idade do Acompanhante:</label
            >
            <input
              type="number"
              class="form-control"
              id="idade_acompanhante"
              aria-describedby="emailHelp"
            />
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
   function sendDataToPHP() {
    const userData = saveUserData();
    const healthData = saveHealthData();
    const incidentData = saveIncidentData();
    const medicalData = saveMedicalData();
    const vitalSigns = saveVitalSigns();
    const signsAndSymptoms = saveSignsAndSymptoms();
    const results = saveResults();
    const victimData = saveVictimData();
    const cinematicData = saveCinematicData();
    const conductionData = saveConductionData();
    const patientStatus = savePatientStatus();
    const birthFormData = saveBirthFormData();
    const proceData = saveProceData(); // Updated to get the object directly
    const tableData = collectTableData();
    const textareaData = collectTextareaData();
    const inputData = collectInputData();
    const textarea2Data = collectTextarea2Data();
    const equipeData = collectEquipeData();

    const allData = {
        userData: userData,
        healthData: healthData,
        incidentData: incidentData,
        medicalData: medicalData,
        vitalSigns: vitalSigns,
        signsAndSymptoms: signsAndSymptoms,
        results: results,
        victimData: victimData,
        cinematicData: cinematicData,
        conductionData: conductionData,
        patientStatus: patientStatus,
        birthFormData: birthFormData,
        proceData: proceData, // Include the result directly
        tableData: tableData,
        textareaData: textareaData,
        inputData: inputData,
        textarea2Data: textarea2Data,
        equipeData: equipeData,
    };

    console.log(allData);

    const xhr = new XMLHttpRequest();
    const url = 'upload_ficha.php';

    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/json');

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log('Data sent successfully');
        }
    };

    // Convert the data to JSON before sending
    const jsonData = JSON.stringify(allData);
    xhr.send(jsonData);
}
    function saveUserData() {

    const date = document.getElementById('exampleInputEmail1').value;
    const hospitalName = document.getElementById('nomedohospital').value;
    const sex = document.querySelector('input[name="check1"]:checked');
    const patientName = document.getElementById('nomepaciente').value;

    if (!date || !hospitalName || !sex || !patientName) {
        
        return;
    } 
    const data = {
        date: date,
        hospitalName: hospitalName,
        sex: sex.value,
        patientName: patientName,
        telephone: document.getElementById('telefone').value,
        rgcpf: document.getElementById('rgcpf').value,
        occurrenceLocation: document.getElementById('local_ocorrencia').value,
        patientAge: document.getElementById('idade_paciente').value,
        companionName: document.getElementById('Acompanhante_paciente').value,
        companionAge: document.getElementById('idade_acompanhante').value,
    };

   return data;
  }
  function saveHealthData() {
    // Validate required fields
    const acontecimento = document.getElementById('acontecimento').value;
    const ocorrenciasOutrasVezes = document.querySelector('input[name="check2"]:checked') || { value: null };
    const tempoAnamnese = document.getElementById('tempoanamnese').value;
    const problemaSaude = document.querySelector('input[name="check3"]:checked') || { value: null };
    const quaisProblemas = document.getElementById('quais1').value;
    const usoMedicacoes = document.querySelector('input[name="check4"]:checked') || { value: null };
    const horarioUltimaMedicacao = document.getElementById('medicacao1').value;
    const quaisMedicacoes = document.getElementById('quais2').value;
    const alergias = document.querySelector('input[name="check5"]:checked') || { value: null };
    const quaisAlergias = document.getElementById('quais3').value;
    const ingeriuAlimento = document.querySelector('input[name="check6"]:checked') || { value: null };
    const horasUltimoAlimento = document.getElementById('hrsmedicacao').value;

    if (!acontecimento || !ocorrenciasOutrasVezes.value || !tempoAnamnese || !problemaSaude.value ||
        (!problemaSaude.value && quaisProblemas) || !usoMedicacoes.value || (!usoMedicacoes.value && horarioUltimaMedicacao) ||
        !alergias.value || (!alergias.value && quaisAlergias) || !ingeriuAlimento.value || (!ingeriuAlimento.value && horasUltimoAlimento)) {
        
        return;
    }

    const data2 = {
        acontecimento: acontecimento,
        ocorrenciasOutrasVezes: ocorrenciasOutrasVezes.value,
        tempoAnamnese: tempoAnamnese,
        problemaSaude: problemaSaude.value,
        quaisProblemas: quaisProblemas,
        usoMedicacoes: usoMedicacoes.value,
        horarioUltimaMedicacao: horarioUltimaMedicacao,
        quaisMedicacoes: quaisMedicacoes,
        alergias: alergias.value,
        quaisAlergias: quaisAlergias,
        ingeriuAlimento: ingeriuAlimento.value,
        horasUltimoAlimento: horasUltimoAlimento,
    };

    return data2;
  
}
function saveIncidentData() {
   
    const categories = ['A', 'C', 'D', 'E', 'I', 'Q', 'T'];

    const data3 = {};

    for (const category of categories) {
        const checkboxes = document.querySelectorAll(`input[name="check1"]:checked`);

        if (checkboxes.length > 0) {
            data3[`category${category}`] = Array.from(checkboxes).map(checkbox => checkbox.id);
        } else {
            data3[`category${category}`] = null; // You can use false or null as a default value
        }
    }

    const outrosInput = document.getElementById('outros_pre_hospitalar');
    data3.outros = outrosInput ? outrosInput.value : null;

      return data3;
}
function saveMedicalData() {
    const categories = ['Psiquiátrico', 'Respiratório', 'Diabetes', 'Obstétrico', 'Transporte'];

    const data4 = {};

    for (const category of categories) {
        const checkboxes = document.querySelectorAll(`input[name="check1"][id^="flexCheckDefault"]`);

        if (checkboxes.length > 0) {
            data4[`category${category}`] = Array.from(checkboxes).map(checkbox => checkbox.id);
        } else {
            data4[`category${category}`] = null; // You can use false or null as a default value
        }
    }

    // Handle "Outros" category
    const outrosInput = document.getElementById('exampleInputEmail11');
    data4.outros = outrosInput ? outrosInput.value : null;

      return data4;
}
function saveVitalSigns() {
    const pressao = document.getElementById('pressao').value;
    const pulso = document.getElementById('pulso').value;
    const bcmp = document.getElementById('bcmp').value;
    const satu = document.getElementById('satu').value;
    const hgt = document.getElementById('hgt').value;
    const temp_vital = document.getElementById('temp_vital').value;
    const perfusao = document.getElementById('perfusao').value;
    const status_final = document.getElementById('status_final').value;

    if (!pressao || !pulso || !bcmp || !satu || !hgt || !temp_vital || perfusao === 'Selecione:' || status_final === 'Selecione:') {
        
        return;
    }

    const data5 = {
        pressao: pressao,
        pulso: pulso,
        bcmp: bcmp,
        satu: satu,
        hgt: hgt,
        temp_vital: temp_vital,
        perfusao: perfusao,
        status_final: status_final,
    };

       return data5;
}

function saveSignsAndSymptoms() {
    const checkboxes = document.querySelectorAll('.form-check-input1');
    const outrosSinaisInput = document.getElementById('outros_sinais').value;

    const selectedCheckboxes = Array.from(checkboxes)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.id);

    if (selectedCheckboxes.length === 0 && !outrosSinaisInput) {
       
        return;
    }

    const data6 = {
        selectedCheckboxes: selectedCheckboxes,
        outrosSinaisInput: outrosSinaisInput,
    };

    return data6;
}
function saveResults() {
    const resultInput = document.getElementById('result').value;
    const result2Input = document.getElementById('result2').value;

    const data7 = {
        result: resultInput,
        result2: result2Input,
    };

       return data7;
}

function saveVictimData() {
    const victimData = {
        vitima1: document.getElementById('vitima1').checked,
        vitima2: document.getElementById('vitima2').checked,
        vitima3: document.getElementById('vitima3').checked,
        vitima4: document.getElementById('vitima4').checked,
        vitima5: document.getElementById('vitima5').checked,
        vitima6: document.getElementById('vitima6').checked,
        vitima7: document.getElementById('vitima7').checked,
        vitima8: document.getElementById('vitima8').checked,
        vitima9: document.getElementById('vitima9').checked,
        vitima10: document.getElementById('vitima10').checked,
    };

       return victimData;
}
function saveCinematicData() {
    const cinematicData = {
        cine1: document.getElementById('cine1').checked,
        cine2: document.getElementById('cine2').checked,
        cine3: document.getElementById('cine3').checked,
        cine4: document.getElementById('cine4').checked,
        cine5: document.getElementById('cine5').checked,
        cine6: document.getElementById('cine6').checked,
        cine7: document.getElementById('cine7').checked,
    };

   return cinematicData;
}
function saveConductionData() {
    const conductionData = {
        conducao1: document.getElementById('conducao1').checked,
        conducao2: document.getElementById('conducao2').checked,
        conducao3: document.getElementById('conducao3').checked,
    };

    return conductionData;
}

function savePatientStatus() {
    const patientStatus = {
        critico: document.querySelector('.btn-group .btn-outline-danger').getAttribute('aria-pressed') === 'true',
        instavel: document.querySelector('.btn-group .btn-outline-warning').getAttribute('aria-pressed') === 'true',
        potencialmenteInstavel: document.querySelector('.btn-group .btn-outline-primary').getAttribute('aria-pressed') === 'true',
        estavel: document.querySelector('.btn-group .btn-outline-success').getAttribute('aria-pressed') === 'true',
    };

       return patientStatus;
}

function saveBirthFormData() {
    const formData = {
        periodoGestacao: document.getElementById('perio__gest').value.trim(),
        nomeMedico: document.getElementById('nomedomedico').value.trim(),
        fezPreNatal: document.getElementById('sim__prenatal').checked ? 'Sim' : (document.getElementById('nao__prenatal').checked ? 'Não' : ''),
        complicacaoNatal: document.getElementById('compli__natal').checked ? 'Sim' : (document.getElementById('compli__natal2').checked ? 'Não' : ''),
        primeiroFilho: document.getElementById('prim__filho').checked ? 'Sim' : (document.getElementById('prim__filho2').checked ? 'Não' : ''),
        qtdFilhos: document.getElementById('qnts__filhos').value.trim(),
        hrsContracoes: document.getElementById('hrs__cont').value.trim(),
        tempoContracoes: document.getElementById('tmp__contra').value.trim(),
        intervaloContracoes: document.getElementById('int__contra').value.trim(),
        pressaoEvacuar: document.getElementById('evacuar__').checked ? 'Sim' : (document.getElementById('evacuar__2').checked ? 'Não' : ''),
        rupturaBolsa: document.getElementById('ruptura__').checked ? 'Sim' : (document.getElementById('ruptura__2').checked ? 'Não' : ''),
        inspecaoVisual: document.getElementById('inspec__').checked ? 'Sim' : (document.getElementById('inspec__2').checked ? 'Não' : ''),
        partoRealizado: document.getElementById('parto__').checked ? 'Sim' : (document.getElementById('parto__2').checked ? 'Não' : ''),
        sexoBebe: document.getElementById('sx__bebe').checked ? 'Feminino' : (document.getElementById('sx__bebe2').checked ? 'Masculino' : ''),
        hrsParto: document.getElementById('hrs__parto').value.trim(),
        nomeBebe: document.getElementById('Nome_do_Bebê').value.trim(),
    };

   return formData;
}
function saveProceData() {
    const proceData = gatherCheckboxInformation('procedimentos__container');
    const additionalInformation = gatherAdditionalInformation('procedimentos__container');

    // Do something with the gathered data if needed

    // For example, you can combine both sets of data into a single object
    const combinedData = {
        ...proceData,
        additionalInformation: additionalInformation,
    };

    // Log the combined data to the console
    console.log(combinedData);

    // Return the data if you need it elsewhere
    return combinedData;
}

function gatherCheckboxInformation(containerId) {
    const checkboxData = {};

    // Gather information from checkboxes within the specified container
    const checkboxes = document.getElementById(containerId).querySelectorAll('input[type="checkbox"][name="check1"]');
    checkboxes.forEach(function (checkbox) {
        checkboxData[checkbox.id] = checkbox.checked;
    });

    return checkboxData;
}

function gatherAdditionalInformation(containerId) {
    const additionalData = {};

    // Gather information from additional checkboxes within the specified container
    const additionalCheckboxes = document.getElementById(containerId).querySelectorAll('input[type="checkbox"][name="additionalCheckboxes[]"]');
    additionalCheckboxes.forEach(function (checkbox) {
        additionalData[checkbox.id] = checkbox.checked;
    });

    // Gather information from input fields within the specified container
    const inputFields = document.getElementById(containerId).querySelectorAll('input[type="number"], input[type="text"]');
    inputFields.forEach(function (inputField) {
        additionalData[inputField.id] = inputField.value;
    });

    return additionalData;
}   // Function to collect and prepare table data
  function collectTableData() {
    const tableRows = document.querySelectorAll('#tabela__mat tbody tr');

    // Create an array to store the collected data
    const tableData = [];

    tableRows.forEach((row) => {
      const quantidadeInput = row.querySelector('td:nth-child(3) input');
      const quantidade = quantidadeInput.value.trim();

      // Only include rows where "quantidade" has been inputed
      if (quantidade !== '') {
        const material = row.querySelector('td:nth-child(1)').textContent.trim();
        const tipo = row.querySelector('td:nth-child(2) input:checked');

        // If tipo checkbox is checked, get its value
        const tipoValue = tipo ? tipo.id : '-';

        // Create an object for each row and push it to the array
        const rowData = {
          material,
          tipo: tipoValue,
          quantidade,
        };

        tableData.push(rowData);
      }
    });

    // Log the collected data to the console
    return tableData;
  }
  
  // Function to collect and prepare textarea data
  function collectTextareaData() {
    const textareaContent = document.getElementById('custom-textarea').value;

    // Create an object to store the collected data
    const textareaData = {
      objetosRecolhidos: textareaContent,
    };

    // Log the collected data to the console
    return textareaData;
  }
   // Function to collect and prepare input data
   function collectInputData() {
    const fichaValue = document.getElementById('ficha__').value;
    const fibraValue = document.getElementById('fibra__').value;

    // Create an object to store the collected data
    const inputData = {
      ficha: fichaValue,
      fibra: fibraValue,
    };

    // Log the collected data to the console
    return inputData;
  }
   // Function to collect and prepare textarea data
   function collectTextarea2Data() {
    const textarea2Content = document.getElementById('custom-textarea2').value;

    // Create an object to store the collected data
    const textarea2Data = {
      observacoesImportantes: textarea2Content,
    };

    // Log the collected data to the console
    return textarea2Data;
  }
   // Function to collect and prepare input data for equipe
   function collectEquipeData() {
    const mValue = document.getElementById('m__equipe').value;
    const s1Value = document.getElementById('s1__equipe').value;
    const s2Value = document.getElementById('s2__equipe').value;
    const s3Value = document.getElementById('s3__equipe').value;
    const demandanteValue = document.getElementById('Demandante').value;
    const equipeValue = document.getElementById('Equipe').value;

    // Create an object to store the collected data
    const equipeData = {
      m: mValue,
      s1: s1Value,
      s2: s2Value,
      s3: s3Value,
      demandante: demandanteValue,
      equipe: equipeValue,
    };

    // Log the collected data to the console
   
    return equipeData;
  }


  </script>
    <!-- FIM INFORMAÇÕES DO PACIENTE -->

    <!-- ANAMNESE DE EMERGÊNCIA -->
    <br />
    <br />
    <div class="title__bar" id="seção2">
       <p class="title__text lead fw-semibold">Anamnese da Emergência:</p>
      <div class="title__box">
        <b class="box__number">2</b>
      </div>
    </div>
   
    <div class="container mt-5">
      <!-- <div class="row border p-3"> -->
      <div class="col-md-25 border p-3 bg-white bg-gradient">
        <br />
        <p class="position-absolute fs-3 px-4 m-0" for="acontecimento">
          O que Aconteceu?
        </p>
        <br /><br />
        <div class="mb-3 position-relative py-2 px-4 m-0">
          <input
            type="text"
            class="form-control text-dark-emphasis border-dark"
            id="acontecimento"
            aria-describedby="emailHelp"
          />
        </div>

        <div class="mb-3 position-absolute py-2 px-4">
          <label class="form-check-label" for="sim_vez">
            Aconteceu outras vezes?
          </label>
          <br />
          <div class="mb-3 position-absolute right-50">
            <input
              class="form-check-input1"
              type="radio"
              value="1"
              id="sim_vez"
              name="check2"
            />
            <label class="form-check-label" for="sim_vez"> Sim </label>
            <input
              class="form-check-input1"
              type="radio"
              value="2"
              id="nao_vez"
              name="check2"
            />
            <label class="form-check-label" for="nao_vez"> Não </label>
          </div>
        </div>
        <br /><br /><br />

        <div class="mb-3 position-absolute py-2 px-4">
          <label for="tempoanamnese" class="form-label 10"
            >A quanto tempo isso Aconteceu?</label
          >
          <input
            type="text"
            class="form-control"
            id="tempoanamnese"
            aria-describedby="emailHelp"
          />
        </div>
        <br /><br /><br /><br />

        <div class="mb-3 position-absolute py-2 px-4">
          <label class="form-check-label" for="sim_previo">
            Possui problema de saúde?
          </label>
          <br />
          <div class="mb-3 position-absolute right-50">
            <input
              class="form-check-input1"
              type="radio"
              value="1"
              id="sim_previo"
              name="check3"
            />
            <label class="form-check-label" for="sim_previo"> Sim </label>
            <input
              class="form-check-input1"
              type="radio"
              value="2"
              id="nao_previo"
              name="check3"
            />
            <label class="form-check-label" for="nao_previo"> Não </label>
          </div>
        </div>
        <br /><br /><br />

        <div class="mb-3 position-absolute py-2 px-4">
          <label for="quais1" class="form-label 11">Se Sim, Quais?</label>
          <input
            type="text"
            class="form-control"
            id="quais1"
            aria-describedby="emailHelp"
          />
        </div>
        <br /><br /><br /><br />

        <div class="mb-3 position-absolute py-2 px-4">
          <label class="form-check-label" for="sim_med">
            Faz uso de medicações?
          </label>
          <br />
          <div class="mb-3 position-absolute right-50">
            <input
              class="form-check-input1"
              type="radio"
              value="1"
              id="sim_med"
              name="check4"
            />
            <label class="form-check-label" for="sim_med"> Sim </label>
            <input
              class="form-check-input1"
              type="radio"
              value="2"
              id="nao_med"
              name="check4"
            />
            <label class="form-check-label" for="nao_med"> Não </label>
          </div>
        </div>
        <br /><br /><br />
        <div class="mb-3 position-absolute py-2 px-4">
          <label for="medicacao1" class="form-label 12"
            >Horário da última medicação:</label
          >
          <input
            type="time"
            class="form-control"
            id="medicacao1"
            aria-describedby="emailHelp"
          />
        </div>
        <br /><br /><br /><br />

        <div class="mb-3 position-absolute py-2 px-4">
          <label for="quais2" class="form-label 13">Se Sim, Quais?</label>
          <input
            type="text"
            class="form-control"
            id="quais2"
            aria-describedby="emailHelp"
          />
        </div>
        <br /><br /><br /><br />

        <div class="mb-3 position-absolute py-2 px-4">
          <label class="form-check-label" for="sim_aler">
            Alergias a alguma coisa?
          </label>
          <br />
          <div class="mb-3 position-absolute right-50">
            <input
              class="form-check-input1"
              type="radio"
              value="1"
              id="sim_aler"
              name="check5"
            />
            <label class="form-check-label" for="sim_aler"> Sim </label>
            <input
              class="form-check-input1"
              type="radio"
              value="2"
              id="nao_aler"
              name="check5"
            />
            <label class="form-check-label" for="nao_aler"> Não </label>
          </div>
        </div>
        <br /><br /><br />

        <div class="mb-3 position-absolute py-2 px-4">
          <label for="quais3" class="form-label 14">Se Sim, Quais?</label>
          <input
            type="text"
            class="form-control"
            id="quais3"
            aria-describedby="emailHelp"
          />
        </div>
        <br /><br /><br /><br />

        <div class="mb-3 position-absolute py-2 px-4">
          <label class="form-check-label" for="sim_aliment">
            Ingeriu alimento ou líquido ≥ 6hrs:
          </label>
          <br />
          <div class="mb-3 position-absolute right-50">
            <input
              class="form-check-input1"
              type="radio"
              value="1"
              id="sim_aliment"
              name="check6"
            />
            <label class="form-check-label" for="sim_aliment"> Sim </label>
            <input
              class="form-check-input1"
              type="radio"
              value="2"
              id="nao_aliment"
              name="check6"
            />
            <label class="form-check-label" for="nao_aliment"> Não </label>
          </div>
        </div>
        <br /><br /><br />

        <div class="mb-3 position-sticky w-10 p-3 py-2 px-4">
          <label for="hrsmedicacao" class="form-label">Que Horas?</label>
          <input
            type="time"
            class="form-control"
            id="hrsmedicacao"
            aria-describedby="emailHelp"
          />
          <br />
        </div>
      </div>
    </div>

    <!-- FIM ANAMNESE DE EMERGÊNCIA -->
    
    <!-- TIPO DE OCORRÊNCIA -->
    <br />
    <br />
    <div class="title__bar" id="seção3">
       <p class="title__text lead fw-semibold">Tipo de Ocorrência(Pré-Hospitalar):</p>
      <div class="title__box">
        <b class="box__number">3</b>
      </div>
    </div>
    

    <div class="container mt-5">
      <div class="col-md-20 border p-3 bg-white bg-gradient">
        <h1 class="bold fs-3 m-0">A</h1>
        <div class="thin__line__m-0"></div>

       
        <input
          class="form-check-input1"
          type="checkbox"
          value=""
          id="Afogamento_c"
          name="check1"
        />
        <label class="form-check-label" for="Afogamento_c"> Afogamento </label>
        <br />
        <input
          class="form-check-input1"
          type="checkbox"
          value=""
          id="Agressão"
          name="check1"
        />

        <label class="form-check-label" for="Agressão"> Agressão </label>
        <br />
        <input
          class="form-check-input1"
          type="checkbox"
          value=""
          id="Atropelamento"
          name="check1"
        />

        <label class="form-check-label" for="Atropelamento">
          Atropelamento
        </label>
        <br /><br />

        <h1 class="bold fs-3 m-0">C</h1>
        <div class="thin__line__m-0"></div>


        <input
          class="form-check-input1"
          type="checkbox"
          value=""
          id="Causado_animais"
          name="check1"
        />
        <label class="form-check-label" for="Causado_animais">
          Causado Por Animais
        </label>
        <br />
        <input
          class="form-check-input1"
          type="checkbox"
          value=""
          id="choque"
          name="check1"
        />

        <label class="form-check-label" for="choque"> Choque Elétrico </label>
        <br />
        <input
          class="form-check-input1"
          type="checkbox"
          value=""
          id="com_meio"
          name="check1"
        />

        <label class="form-check-label" for="com_meio">
          Com Meio de Transporte
        </label>
        <br /><br />

        <h1 class="bold fs-3 m-0">D</h1>
        <div class="thin__line__m-0"></div>

        <input
          class="form-check-input1"
          type="checkbox"
          value=""
          id="Doméstico"
          name="check1"
        />
        <label class="form-check-label" for="Doméstico"> Doméstico </label>
        <br />
        <input
          class="form-check-input1"
          type="checkbox"
          value=""
          id="Desabamento"
          name="check1"
        />

        <label class="form-check-label" for="Desabamento"> Desabamento </label>
        <br />
        <input
          class="form-check-input1"
          type="checkbox"
          value=""
          id="Deslizamento"
          name="check1"
        />

        <label class="form-check-label" for="Deslizamento">
          Desmoronamento/Deslizamento
        </label>
        <br /><br />

        <h1 class="bold fs-3 m-0">E</h1>
        <div class="thin__line__m-0"></div>

        <input
          class="form-check-input1"
          type="checkbox"
          value=""
          id="emer_med"
          name="check1"
        />
        <label class="form-check-label" for="emer_med">
          Emergência Médica
        </label>
        <br />
        <input
          class="form-check-input1"
          type="checkbox"
          value=""
          id="Esportivo"
          name="check1"
        />

        <label class="form-check-label" for="Esportivo"> Esportivo </label>

        <br /><br />

        <h1 class="bold fs-3 m-0">I</h1>
        <div class="thin__line__m-0"></div>

        <div class="col-20">
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Intoxicação"
            name="check1"
          />
          <label class="form-check-label" for="Intoxicação">
            Intoxicação
          </label>
          <br />
          <br />

          <h1 class="bold fs-3 m-0">Q</h1>
          <div class="thin__line__m-0"></div>

          <div class="col-20">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="queda_nivel"
              name="check1"
            />
            <label class="form-check-label" for="queda_nivel">
              Queda de nível menor que 2m
            </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="queda_n_m"
              name="check1"
            />
            <label class="form-check-label" for="queda_n_m">
              Queda de altura 2m
            </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="queda_propria"
              name="check1"
            />
            <label class="form-check-label" for="queda_propria">
              Queda própria altura
            </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="queda_bike"
              name="check1"
            />
            <label class="form-check-label" for="queda_bike"
              >Queda bicicleta
            </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="queda_moto"
              name="check1"
            />
            <label class="form-check-label" for="queda_moto">Queda moto </label>
            <br />
            <br />

            <h1 class="bold fs-3 m-0">T</h1>
            <div class="thin__line__m-0"></div>

            <div class="col-20">
              <input
                class="form-check-input1"
                type="checkbox"
                value=""
                id="tent_sui"
                name="check1"
              />
              <label class="form-check-label" for="tent_sui">
                Tentativa de suicídio
              </label>
              <br />

              <input
                class="form-check-input1"
                type="checkbox"
                value=""
                id="trabs"
                name="check1"
              />
              <label class="form-check-label" for="trabs"> Trabalho </label>
              <br />

              <input
                class="form-check-input1"
                type="checkbox"
                value=""
                id="transfer"
                name="check1"
              />
              <label class="form-check-label" for="transfer">
                Transferência
              </label>
              <br /><br />

              <h1 class="bold fs-3 m-0">Outros:</h1>

              <div class="col-20">
                <div>
                  <input
                    type="text"
                    class="form-control border-dark"
                    id="outros_pre_hospitalar"
                    aria-describedby="emailHelp"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- FIM INFORMAÇÕES DO PACIENTE -->

    <!-- PROBLEMAS ENCONTRADOS SUSPEITOS -->
    <br />
    <br />
    <div class="title__bar" id="seção4">
       <p class="title__text lead fw-semibold">Problemas Encontrados Suspeitos</p>
      <div class="title__box">
        <b class="box__number">4</b>
      </div>
    </div>

    <div class="container mt-5">
      <div class="border p-4 bg-white bg-gradient">
        <div class="row">
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="flexCheckDefault13"
              name="check1"
            />
            <label class="form-check-label" for="flexCheckDefault13">
              Psiquiátrico
            </label>
          </div>
        </div>
        <br /><br />

        <div class="row mt-3">
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="flexCheckDefault14"
              name="check1"
            />
            <label class="form-check-label" for="flexCheckDefault14">
              Respiratório
            </label>
          </div>
        </div>
        <br />
        <div class="container">
          <div
            class="form-check form-check-inline mb-3 position-relative py-2 px-4"
          >
            <input
              class="form-check-input"
              type="checkbox"
              id="inlineCheckbox1"
              value="option1"
            />
            <label class="form-check-label" for="inlineCheckbox1">DPOC</label>
          </div>

          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              id="inlineCheckbox2"
              value="option2"
            />
            <label class="form-check-label" for="inlineCheckbox2"
              >Inalação de Fumaça</label
            >
          </div>
        </div>
        <br />

        <div class="row mt-3">
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="flexCheckDefault15"
              name="check1"
            />
            <label class="form-check-label" for="flexCheckDefault15">
              Diabetes
            </label>
          </div>
        </div>
        <br />

        <div class="container">
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              id="inlineCheckbox00"
              value="option41"
              name="Hipoglicemia_check"
            />
            <label class="form-check-label" for="inlineCheckbox00"
              >Hipoglicemia</label
            >
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              id="inlineCheckbox97"
              value="option2"
            />
            <label class="form-check-label" for="inlineCheckbox97"
              >Hiperglicemia</label
            >
          </div>
        </div>
        <br />

        <div class="row mt-3">
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="flexCheckDefault12"
              name="check1"
            />
            <label class="form-check-label" for="flexCheckDefault12">
              Obstétrico
            </label>
          </div>
        </div>
        <br />
        <div class="container">
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              id="inlineCheckbox16"
              value="option1"
            />
            <label class="form-check-label" for="inlineCheckbox16"
              >Parto Emergencial</label
            >
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              id="inlineCheckbox17"
              value="option2"
            />
            <label class="form-check-label" for="inlineCheckbox17"
              >Gestante</label
            >
          </div>

          <br />
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              id="inlineCheckbox18"
              value="option2"
            />
            <label class="form-check-label" for="inlineCheckbox18"
              >Hemor. Excessiva</label
            >
          </div>
        </div>
        <br />

        <div class="row mt-3">
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="flexCheckDefault19"
              name="check1"
            />
            <label class="form-check-label" for="flexCheckDefault19">
              Transporte
            </label>
          </div>
        </div>
        <br />

        <div class="container">
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              id="inlineCheckbox20"
              value="option1"
            />
            <label class="form-check-label" for="inlineCheckbox20">Aéreo</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              id="inlineCheckbox21"
              value="option2"
            />
            <label class="form-check-label" for="inlineCheckbox21"
              >Clínico</label
            >
          </div>

          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              id="inlineCheckbox22"
              value="option2"
            />
            <label class="form-check-label" for="inlineCheckbox22"
              >Emergencial</label
            >
          </div>

          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              id="inlineCheckbox23"
              value="option1"
            />
            <label class="form-check-label" for="inlineCheckbox23"
              >Pós-Trauma</label
            >
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              id="inlineCheckbox24"
              value="option2"
            />
            <label class="form-check-label checkbox-wrapper-19" for="inlineCheckbox24">SAMU</label>
          </div>

          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              id="inlineCheckbox25"
              value="option2"
            />
            <label class="form-check-label" for="inlineCheckbox25"
              >Sem Remoção</label
            >
          </div>
        </div>
        <br />
        <h1 class="bold fs-3 m-0">Outros:</h1>

        <div class="col-20">
          <div>
            <input
              type="text"
              class="form-control border-dark"
              id="exampleInputEmail11"
              aria-describedby="emailHelp"
            />
          </div>
        </div>
      </div>
    </div>

    <!-- FIM PROBLEMAS ENCONTRADOS SUSPEITOS -->

    <!-- SINAIS VITAIS -->

    <br />
    <br />
    <div class="title__bar" id="seção5">
       <p class="title__text lead fw-semibold">Sinais Vitais:</p>
      <div class="title__box">
        <b class="box__number">5</b>
      </div>
    </div>
    <div class="container mt-5">
      <div class="border p-4  bg-white bg-gradient">
        <div class="row">
          <div class="col-lg-4">
            <label for="pressao" class="form-label">Pressão Arterial:</label>
            <input
              type="email"
              class="form-control"
              id="pressao"
              aria-describedby="emailHelp"
            />
            <label for="pressao" class="form-label d-flex justify-content-end"
              >mmHg</label
            >
          </div>
          <div class="col-lg-3">
            <label for="pulso" class="form-label">Pulso:</label>
            <input
              type="number"
              class="form-control"
              id="pulso"
              aria-describedby="emailHelp"
            />
            <label for="pulso" class="form-label d-flex justify-content-end"
              >.</label
            >
          </div>

          <div class="col-lg-5">
            <label for="bcmp" class="form-label">BCMP/Respiração:</label>
            <input
              type="email"
              class="form-control"
              id="bcmp"
              aria-describedby="emailHelp"
            />
            <label for="bcmp" class="form-label d-flex justify-content-end"
              >MRM</label
            ><br />
          </div>

          <div class="row">
            <div class="col-lg-3">
              <label for="satu" class="form-label">Saturação:</label>
              <input
                type="number"
                class="form-control"
                id="satu"
                aria-describedby="emailHelp"
              />
              <label for="satu" class="form-label d-flex justify-content-end"
                >%</label
              >
            </div>
            <div class="col-lg-3">
              <label for="hgt" class="form-label">HGT:</label>
              <input
                type="number"
                class="form-control"
                id="hgt"
                aria-describedby="emailHelp"
              />
              <label for="hgt" class="form-label d-flex justify-content-end"
                >.</label
              >
            </div>

            <div class="col-lg-3">
              <label for="temp_vital" class="form-label">Temperatura:</label>
              <input
                type="email"
                class="form-control"
                id="temp_vital"
                aria-describedby="emailHelp"
              />
              <label
                for="temp_vital"
                class="form-label d-flex justify-content-end"
                >°C</label
              >
            </div>

            <div class="col-lg-3">
              <label for="perfusao" class="form-label">Perfusão:</label>
              <select
                class="form-select"
                aria-label="Default select example"
                id="perfusao"
              >
                <option selected>Selecione:</option>
                <option value="1">Menor que 2seg</option>
                <option value="2">Maior que 2seg</option>
              </select>
              <label
                for="perfusao"
                class="form-label d-flex justify-content-end"
                >.</label
              >
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-4">
                <label for="status_final" class="form-label">Status:</label>
                <select
                  class="form-select border-dark"
                  aria-label="Default select example"
                  id="status_final"
                >
                  <option selected>Selecione:</option>
                  <option value="1">Normal</option>
                  <option value="2">Anormal</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br /><br />

    <!-- FIM SINAIS VITAIS -->

    <!-- COMEÇO SINAIS E SINTOMAS -->

    <div class="title__bar" id="seção6">
       <p class="title__text lead fw-semibold">Sinais e Sintomas:</p>
      <div class="title__box">
        <b class="box__number">6</b>
      </div>
    </div>
    <br /><br />
    <div class="container">
      <div class="col-md-12 border p-3  bg-white bg-gradient">
        <h1 class="bold fs-3 m-0">A</h1>
        <div class="thin__line__m-0"></div>
        <div>
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="abdomen"
            name="check1"
          />
          <label class="form-check-label" for="abdomen">
            Abdômen Sensível ou Rígido
          </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="afundamento"
            name="check1"
          />

          <label class="form-check-label" for="afundamento">
            Afundamento do Crânio
          </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="agitacao"
            name="check1"
          />

          <label class="form-check-label" for="agitacao"> Agitação </label>
          <br />

          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="amnesia"
            name="check1"
          />
          <label class="form-check-label" for="amnesia"> Amnésia </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="angina"
            name="check1"
          />

          <label class="form-check-label" for="angina"> Angina de Peito </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="apineia"
            name="check1"
          />

          <label class="form-check-label" for="apineia"> Apinéia </label>
          <br /><br />
        </div>

        <h1 class="bold fs-3 m-0">B</h1>
        <div class="thin__line__m-0"></div>
        <div>
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="bradicardia"
            name="check1"
          />
          <label class="form-check-label" for="bradicardia">
            Bradicardia
          </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="bradipneia"
            name="check1"
          />

          <label class="form-check-label" for="bradipneia"> Bradipnéia </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="bronco"
            name="check1"
          />

          <label class="form-check-label" for="bronco">
            Bronco-Aspirando
          </label>
          <br /><br />
        </div>

        <h1 class="bold fs-3 m-0">C</h1>
        <div class="thin__line__m-0"></div>
        <div>
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="cefaleia"
            name="check1"
          />
          <label class="form-check-label" for="cefaleia"> Cefaléia </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Cianose"
            name="check1"
          />

          <label class="form-check-label" for="Cianose"> Cianose </label>
          <br />
          <div class="container">
            <div class="form-check form-check-inline">
              <input
                class="form-check-input1"
                type="checkbox"
                id="lábios"
                value="option1"
              />
              <label class="form-check-label" for="lábios">Lábios</label>
            </div>
            <input
              class="form-check-input1 border-dark"
              type="checkbox"
              value=""
              id="Extremidades"
              name="check1"
            />

            <label class="form-check-label" for="Extremidades">
              Extremidades
            </label>
            <br />
          </div>
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Convulsão"
            name="check1"
          />

          <label class="form-check-label" for="Convulsão"> Convulsão </label>
          <br /><br />

          <h1 class="bold fs-3 m-0">D</h1>
          <div class="thin__line__m-0"></div>
          <div>
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Decorticação"
              name="check1"
            />
            <label class="form-check-label" for="Decorticação">
              Decorticação
            </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Deformidade"
              name="check1"
            />
            <label class="form-check-label" for="Deformidade">
              Deformidade
            </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Decerebração"
              name="check1"
            />
            <label class="form-check-label" for="Decerebração">
              Decerebração
            </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Desmaio"
              name="check1"
            />
            <label class="form-check-label" for="Desmaio"> Desmaio </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Desvio de Traquéia"
              name="check1"
            />
            <label class="form-check-label" for="Desvio de Traquéia">
              Desvio de Traquéia
            </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Dispnéia"
              name="check1"
            />
            <label class="form-check-label" for="Dispnéia"> Dispnéia </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Dor Local"
              name="check1"
            />
            <label class="form-check-label" for="Dor Local"> Dor Local </label>
            <br /><br />
          </div>

          <h1 class="bold fs-3 m-0">E</h1>
          <div class="thin__line__m-0"></div>
          <div>
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Edema"
              name="check1"
            />
            <label class="form-check-label" for="Edema"> Edema </label>
            <br />
            <div class="container">
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input1"
                  type="checkbox"
                  id="Generalizado"
                  value="option1"
                />
                <label class="form-check-label" for="Generalizado"
                  >Generalizado</label
                >
              </div>
              <input
                class="form-check-input1 border-dark"
                type="checkbox"
                value=""
                id="Localizado"
                name="check1"
              />
              <label class="form-check-label" for="Localizado">
                Localizado
              </label>
              <br />
            </div>

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Enfisema Subcutâneo"
              name="check1"
            />
            <label class="form-check-label" for="Enfisema Subcutâneo">
              Enfisema Subcutâneo
            </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Êstase de Jugular"
              name="check1"
            />
            <label class="form-check-label" for="Êstase de Jugular">
              Êstase de Jugular
            </label>
            <br /><br />
          </div>

          <h1 class="bold fs-3 m-0">F</h1>
          <div class="thin__line__m-0"></div>
          <div>
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Face Pálida"
              name="check1"
            />
            <label class="form-check-label" for="Face Pálida">
              Face Pálida
            </label>
            <br /><br />
          </div>

          <h1 class="bold fs-3 m-0">H</h1>
          <div class="thin__line__m-0"></div>
          <div>
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Hemorragia"
              name="check1"
            />
            <label class="form-check-label" for="Hemorragia">
              Hemorragia
            </label>
            <br />

            <div class="container">
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input1"
                  type="checkbox"
                  id="Interna"
                  value="option1"
                />
                <label class="form-check-label" for="Interna">Interna</label>
              </div>
              <input
                class="form-check-input1 border-dark"
                type="checkbox"
                value=""
                id="Externa"
                name="check1"
              />
              <label class="form-check-label" for="Externa"> Externa </label>
              <br />
            </div>
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Hipertensão"
              name="check1"
            />
            <label class="form-check-label" for="Hipertensão">
              Hipertensão
            </label>
            <br />
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Hipotensão"
              name="check1"
            />
            <label class="form-check-label" for="Hipotensão">
              Hipotensão
            </label>
            <br /><br />
          </div>

          <h1 class="bold fs-3 m-0">N</h1>
          <div class="thin__line__m-0"></div>
          <div>
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Nauseas"
              name="check1"
            />
            <label class="form-check-label" for="Nauseas">
              Náuseas e Vômitos
            </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Nasoragia"
              name="check1"
            />
            <label class="form-check-label" for="Nasoragia"> Nasoragia </label>
            <br /><br />
          </div>

          <h1 class="bold fs-3 m-0">O</h1>
          <div class="thin__line__m-0"></div>
          <div>
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Óbito"
              name="check1"
            />
            <label class="form-check-label" for="Óbito"> Óbito </label>
            <br />
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Otorréia"
              name="check1"
            />
            <label class="form-check-label" for="Otorréia"> Otorréia </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Otorragia"
              name="check1"
            />
            <label class="form-check-label" for="Otorragia"> Otorragia </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="OVACE"
              name="check1"
            />
            <label class="form-check-label" for="OVACE"> OVACE </label>
            <br /><br />
          </div>

          <h1 class="bold fs-3 m-0">P</h1>
          <div class="thin__line__m-0"></div>
          <div>
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Parada"
              name="check1"
            />
            <label class="form-check-label" for="Parada"> Parada </label>
            <br />
            <div class="container">
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input1"
                  type="checkbox"
                  id="Cardíaca"
                  value="option1"
                />
                <label class="form-check-label" for="Cardíaca">Cardíaca</label>
              </div>
              <input
                class="form-check-input1 border-dark"
                type="checkbox"
                value=""
                id="Respiratória"
                name="check1"
              />
              <label class="form-check-label" for="Respiratória">
                Respiratória
              </label>
              <br />
            </div>

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Priaprismo"
              name="check1"
            />
            <label class="form-check-label" for="Priaprismo">
              Priaprismo
            </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Prurido na Pele"
              name="check1"
            />
            <label class="form-check-label" for="Prurido na Pele">
              Prurido na Pele
            </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Pupilas"
              name="check1"
            />
            <label class="form-check-label" for="Pupilas"> Pupilas </label>
            <br />
            <div class="container">
              <div class="col-lg-12">
                <div class="form-check col-lg-2">
                  <input
                    class="form-check-input1"
                    type="checkbox"
                    id="Anisocoria"
                    value="option1"
                  />
                  <label class="form-check-label" for="Anisocoria"
                    >Anisocoria</label
                  >
                </div>
                <div class="form-check col-lg-2">
                  <input
                    class="form-check-input1 border-dark"
                    type="checkbox"
                    value=""
                    id="Isocoria"
                    name="check1"
                  />
                  <label class="form-check-label" for="Isocoria">
                    Isocoria
                  </label>
                </div>
                <div class="form-check col-lg-2">
                  <input
                    class="form-check-input1 border-dark"
                    type="checkbox"
                    value=""
                    id="Midríase"
                    name="check1"
                  />
                  <label class="form-check-label" for="Midríase">
                    Midríase
                  </label>
                </div>

                <div class="form-check col-lg-2">
                  <input
                    class="form-check-input1 border-dark"
                    type="checkbox"
                    value=""
                    id="Miose"
                    name="check1"
                  />
                  <label class="form-check-label" for="Miose"> Miose </label>
                </div>

                <div class="form-check col-lg-2">
                  <input
                    class="form-check-input1 border-dark"
                    type="checkbox"
                    value=""
                    id="Reagente"
                    name="check1"
                  />
                  <label class="form-check-label" for="Reagente"> Reage </label>
                </div>

                <div class="form-check col-lg-2">
                  <input
                    class="form-check-input1 border-dark"
                    type="checkbox"
                    value=""
                    id="Não Reagente"
                    name="check1"
                  />
                  <label class="form-check-label" for="Não Reagente">
                    N/ Reage
                  </label>
                </div>
              </div>
              <br />
            </div>
          </div>

          <h1 class="bold fs-3 m-0">T</h1>
          <div class="thin__line__m-0"></div>
          <div>
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Taquipnéia"
              name="check1"
            />
            <label class="form-check-label" for="Taquipnéia">
              Taquipnéia
            </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Taquicardia"
              name="check1"
            />
            <label class="form-check-label" for="Taquicardia">
              Taquicardia
            </label>
            <br />

            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="Tontura"
              name="check1"
            />
            <label class="form-check-label" for="Tontura"> Tontura </label>
            <br /><br />

            <h1 class="bold fs-3 m-0">Outros:</h1>
            <div class="col-lg-9">
              <div>
                <input
                  type="text"
                  class="form-control border-dark"
                  id="outros_sinais"
                  aria-describedby="emailHelp"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br /><br /><br />

    <!-- FIM SINAIS E SINTOMAS -->
    
    <!-- COMEÇO TELA GLASGOW  -->

    <div class="title__bar" id="seção7">
       <p class="title__text lead fw-semibold">Avaliação do Paciente(GLASGOW)</p>
      <div class="title__box">
        <b class="box__number">7</b>
      </div>
    </div>
  

    <div class="container mt-5 p-3 border bg-white bg-gradient">
      <div class="row">
          <div class="col-md-12">
            <div id="accordion11">
              <!-- First Accordion -->
              <div class="accordion" id="accordion1">
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                          <button
                              class="accordion-button"
                              type="button"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapseOne"
                              aria-expanded="true"
                              aria-controls="collapseOne"
                          >
                              + que 5 anos:
                          </button>
                      </h2>
                      <div
                          id="collapseOne"
                          class="accordion-collapse collapse show" 
                          aria-labelledby="headingOne"
                          data-bs-parent="#accordion1"
                      >
                          <div class="accordion-body" id="container__glasgow2">
                  <!-- Conteudo Accordion1 -->

                 
<div class="your-container">

  <h1 class="bold fs-5 m-0">Abertura Ocular</h1>
  <div class="thin__line__m-0"></div>
  <div>
      <input
          class="form-check-input1"
          type="checkbox"
          value="4"
          id="abdomen1"
          onclick= calculateSum()
          name="check1"
      />
      <label class="form-check-label" for="abdomen1">
          Espontânea - 4
      </label>
      <br />

      <input
          class="form-check-input1"
          type="checkbox"
          value="3"
          id="abdomen3"
          onclick= calculateSum()
          name="check1"
      />
      <label class="form-check-label" for="abdomen3">
          Comando Verbal - 3
      </label>
      <br />

      <input
          class="form-check-input1"
          type="checkbox"
          value="2"
          id="doloroso"
          onclick= calculateSum()
          name="check1"
      />
      <label class="form-check-label" for="doloroso">
          Estímulo Doloroso - 2
      </label>
      <br />

      <input
          class="form-check-input1"
          type="checkbox"
          value="1"
          id="nenhuma1"
          onclick= calculateSum()
          name="check1"
      />
      <label class="form-check-label" for="nenhuma1">
          Nenhuma - 1
      </label>
      <br />
      <br />
  </div>

  <h1 class="bold fs-5 m-0">Resposta Verbal</h1>
  <div class="thin__line__m-0"></div>
  <div>
      <input
          class="form-check-input1"
          type="checkbox"
          value="5"
          id="Orientado"
          onclick= calculateSum()
          name="check1"
      />
      <label class="form-check-label" for="Orientado">
          Orientado - 5
      </label>
      <br />

      <input
          class="form-check-input1"
          type="checkbox"
          value="4"
          id="Confuso"
          onclick= calculateSum()
          name="check1"
      />
      <label class="form-check-label" for="Confuso">
          Confuso - 4
      </label>
      <br />

      <input
          class="form-check-input1"
          type="checkbox"
          value="3"
          id="Inapropriadas"
          onclick= calculateSum()
          name="check1"
      />
      <label class="form-check-label" for="Inapropriadas">
          Palavras Inapropriadas - 3
      </label>
      <br />

      <input
          class="form-check-input1"
          type="checkbox"
          value="2"
          id="Incompreensíveis"
          onclick= calculateSum()
          name="check1"
      />
      <label class="form-check-label" for="Incompreensíveis">
          Palavras Incompreensíveis - 2
      </label>
      <br />

      <input
          class="form-check-input1"
          type="checkbox"
          value="1"
          id="Nenhuma3"
          onclick= calculateSum()
          name="check1"
      />
      <label class="form-check-label" for="Nenhuma3">
          Nenhuma - 1
      </label>
      <br />
      <br />
  </div>

  <h1 class="bold fs-5 m-0">Resposta Motora</h1>
  <div class="thin__line__m-0"></div>
  <div>
      <input
          class="form-check-input1"
          type="checkbox"
          value="6"
          id="comandos"
          onclick= calculateSum()
          name="check1"
      />
      <label class="form-check-label" for="comandos">
          Obedece Comandos - 6
      </label>
      <br />

      <input
          class="form-check-input1"
          type="checkbox"
          value="5"
          id="Dor"
          onclick= calculateSum()
          name="check1"
      />
      <label class="form-check-label" for="Dor">
          Localiza Dor - 5
      </label>
      <br />

      <input
          class="form-check-input1"
          type="checkbox"
          value="4"
          id="retirada"
          onclick= calculateSum()
          name="check1"
      />
      <label class="form-check-label" for="retirada">
          Movimentos de Retirada - 4
      </label>
      <br />

      <input
          class="form-check-input1"
          type="checkbox"
          value="3"
          id="flex_anorml"
          onclick= calculateSum()
          name="check1"
      />
      <label class="form-check-label" for="flex_anorml">
          Flexão Anormal - 3
      </label>
      <br />

      <input
          class="form-check-input1"
          type="checkbox"
          value="2"
          id="ext_anorml"
          onclick= calculateSum()
          name="check1"
      />
      <label class="form-check-label" for="ext_anorml">
          Extensão Anormal - 2
      </label>
      <br />

      <input
          class="form-check-input1"
          type="checkbox"
          value="1"
          id="nenhuma4"
          onclick= calculateSum()
          name="check1"
      />
      <label class="form-check-label" for="nenhuma4">
          Nenhuma - 1
      </label>
      <br />
      <br />
  </div>

  <script>
    function calculateSum() {
       
        const container = document.getElementById('container__glasgow2');
        const checkboxes = container.querySelectorAll('.form-check-input1');
        let sum = 0;

        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                sum += parseInt(checkbox.value || 0, 10);
            }
        });

        document.getElementById('result').value = sum;
    }
</script>

  <div>
      
      <label for="result">Resultado:</label>
      <input class="form-control" type="text" id="result" readonly>
  </div>

</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <br /><br /><br />

        <div id="accordion22">
        <div class="col-md-12">
          <!-- Second Accordion -->
          <div class="accordion" id="accordion2">
            <div class="accordion-item  bg-white bg-gradient">
              <h2 class="accordion-header" id="headingTwo">
                <button
                  class="accordion-button"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo"
                  aria-expanded="true"
                  aria-controls="collapseTwo"
                >
                  - que 5 anos:
                </button>
              </h2>
              <div
                id="collapseTwo"
                class="accordion-collapse collapse show"
                aria-labelledby="headingTwo"
                data-bs-parent="#accordion2"
              >
                <div class="accordion-body" id="container__glasg">
                  <!-- ConteudoAccordion2 -->
                  <h1 class="bold fs-5 m-0">Abertura Ocular</h1>
                  <div class="thin__line__m-0"></div>
                  <div>
                    <input
                      class="form-check-input1"
                      type="checkbox"
                      value="4"
                      id="abdomen2"
                      onclick= calcularBagos()
                      name="check2"
                    />
                    <label class="form-check-label" for="abdomen2">
                      Espontânea - 4
                    </label>
                    <br />

                    <input
                      class="form-check-input1"
                      type="checkbox"
                      value="3"
                      id="abdomen4"
                      onclick= calcularBagos()
                      name="check1"
                    />
                    <label class="form-check-label" for="abdomen4">
                      Comando Verbal - 3
                    </label>
                    <br />

                    <input
                      class="form-check-input1"
                      type="checkbox"
                      value="2"
                      id="doloroso2"
                      onclick= calcularBagos()
                      name="check1"
                    />
                    <label class="form-check-label" for="doloroso2">
                      Estímulo Doloroso - 2
                    </label>
                    <br />

                    <input
                      class="form-check-input1"
                      type="checkbox"
                      value="1"
                      id="nenhuma"
                      onclick= calcularBagos()
                      name="check1"
                    />
                    <label class="form-check-label" for="nenhuma">
                      Nenhuma - 1
                    </label>
                    <br />
                    <br />
                  </div>
                  <h1 class="bold fs-5 m-0">Resposta Verbal</h1>
                  <div class="thin__line__m-0"></div>
                  <div>
                    <input
                      class="form-check-input1"
                      type="checkbox"
                      value="5"
                      id="apropiadas"
                      onclick= calcularBagos()
                      name="check1"
                    />
                    <label class="form-check-label" for="apropiadas">
                      Palavras e Frases Apropriadas - 5
                    </label>
                    <br />

                    <input
                      class="form-check-input1"
                      type="checkbox"
                      value="4"
                      id="Inapropriadas1"
                      onclick= calcularBagos()
                      name="check1"
                    />
                    <label class="form-check-label" for="Inapropriadas1">
                      Palavras Inapropriadas - 4
                    </label>
                    <br />

                    <input
                      class="form-check-input1"
                      type="checkbox"
                      value="3"
                      id="choro"
                      onclick= calcularBagos()
                      name="check1"
                    />
                    <label class="form-check-label" for="choro">
                      Choro Persistente ou Gritos - 3
                    </label>
                    <br />

                    <input
                      class="form-check-input1"
                      type="checkbox"
                      value="2"
                      id="Incompreensíveis1"
                      onclick= calcularBagos()
                      name="check1"
                    />
                    <label class="form-check-label" for="Incompreensíveis1">
                      Sons Incompreensíveis - 2
                    </label>
                    <br />

                    <input
                      class="form-check-input1"
                      type="checkbox"
                      value="1"
                      id="nenhuma5"
                      onclick= calcularBagos()
                      name="check1"
                    />
                    <label class="form-check-label" for="nenhuma5">
                      Nenhuma Resposta Verbal - 1
                    </label>
                    <br />
                    <br />
                  </div>
                  <h1 class="bold fs-5 m-0">Resposta Motora</h1>
                  <div class="thin__line__m-0"></div>
                  <div>
                    <input
                      class="form-check-input1"
                      type="checkbox"
                      value="6"
                      id="obedece1"
                      onclick= calcularBagos()
                      name="check1"
                    />
                    <label class="form-check-label" for="obedece1">
                      Obedece Prontamente - 6
                    </label>
                    <br />
                    <input
                      class="form-check-input1"
                      type="checkbox"
                      value="5"
                      id="tatil"
                      onclick= calcularBagos()
                      name="check1"
                    />
                    <label class="form-check-label" for="tatil">
                      Localiza Dor ou Estímulo Tátil- 5
                    </label>

                    <br />
                    <input
                      class="form-check-input1"
                      type="checkbox"
                      value="4"
                      id="segmento"
                      onclick= calcularBagos()
                      name="check1"
                    />
                    <label class="form-check-label" for="segmento">
                      Retirada do Segmento Estimulado- 4
                    </label>
                    <br />

                    <input
                      class="form-check-input1"
                      type="checkbox"
                      value="3"
                      id="decorticação"
                      onclick= calcularBagos()
                      name="check1"
                    />
                    <label class="form-check-label" for="decorticação">
                      Flexão Anormal (Decorticação)- 3
                    </label>
                    <br />

                    <input
                      class="form-check-input1"
                      type="checkbox"
                      value="2"
                      id="Decerebração1"
                      onclick= calcularBagos()
                      name="check1"
                    />
                    <label class="form-check-label" for="Decerebração1">
                      Extensão Anormal (Decerebração)- 2
                    </label>
                    <br />

                    <input
                      class="form-check-input1"
                      type="checkbox"
                      value="1"
                      id="Nenhuma6"
                      onclick= calcularBagos()
                      name="check1"
                    />
                    <label class="form-check-label" for="Nenhuma6">
                      Ausência (Paralisía, Flácida, Hipotônia) - 1
                    </label>
                    <br />

                    <script>
                        function calcularBagos() {
                           
                            const container = document.getElementById('container__glasg');
                            const checkboxes = container.querySelectorAll('.form-check-input1');
                            let sum = 0;

                            checkboxes.forEach(checkbox => {
                                if (checkbox.checked) {
                                    sum += parseInt(checkbox.value || 0, 10);
                                }
                            });

                            document.getElementById('result2').value = sum;
                        }
                    </script>
                <br>
                  <div>
                      <br />
                      <label for="result2">Resultado:</label>
                      <input class="form-control" type="text" id="result2" readonly>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <br /><br /><br />

    <!-- FIM GLASGOW -->
<div class="page-break"></div>
    <!-- COMEÇO TELA CORPO  -->

    <div class="title__bar" id="seção8">
       <p class="title__text lead fw-semibold">Localização dos Traumas</p>
      <div class="title__box">
        <b class="box__number">8</b>
      </div>
    </div>
   

    
<div class="container mt-5 p-3 border bg-white bg-gradient" id="container__1">
  <div class="row mt-3">
    <div class="col-md-12 justify-content-center" id="container__2">
      <img src="corpo__humano.jpg" alt="Corpo" usemap="#corpo" id="map-image" class="img-fluid"> 
     
      <map name="corpo">

        <script type="text/javascript">
          $(document).ready(function() {
            $('#map-image').maphilight();
        
            var clickedAreas = []; // Array to store clicked areas
        
            $('area').click(function(e) {
              e.preventDefault();
        
              // Get the alt attribute of the clicked area
              var areaAlt = $(this).attr('alt');
        
              // Toggle the clicked state for the area
              var index = clickedAreas.indexOf(areaAlt);
              if (index === -1) {
                clickedAreas.push(areaAlt);
              }
        
              // Update maphilight configuration for all areas
              $('area').each(function() {
                var areaAlt = $(this).attr('alt');
                var isClicked = clickedAreas.indexOf(areaAlt) !== -1;
                $(this).data('maphilight', { alwaysOn: isClicked }).trigger('alwaysOn.maphilight');
              });
        
        
              // Create a new div with a heading and a select element
              var newDiv = $('<div>').append(
                $('<h4>').text(areaAlt).addClass('mt-3'),
                $('<select>').addClass('form-select border').attr({
                  'aria-label': 'Default select example',
                  'id': 'corpo__bagles'
                }).append(
                  $('<option>').prop('selected', true).text( 'Selecione:'),
                  $('<option>').val('1').text('Fratura/Luxação/Entorse'),
                  $('<option>').val('2').text('Ferimentos Diversos'),
                  $('<option>').val('3').text('Hemorragia'),
                  $('<option>').val('4').text('Evisceração'),
                  $('<option>').val('5').text('F.A.B / F.A.P'),
                  $('<option>').val('6').text('Amputação'),
                  $('<option>').val('5').text('Queimadura 1°Grau'),
                  $('<option>').val('5').text('Queimadura 2°Grau'),
                  $('<option>').val('5').text('Queimadura 3°Grau')
                )
              );
        
              // Append the new div below the image
              $('#container__2').append(newDiv);
            });
          });
        </script>
        


       <!-- Partes da frente do corpo -->
       <area shape="circle" coords='176,70,43' alt="Rosto"  href="#" title="Rosto">
       <area shape="poly" coords="132,135,222,135,196,122,196,105,184,116,167,116,157,109,157,122" alt="Pescoço" href="#" title="Pescoço">
       <area shape="circle" coords="178,179,50" alt="Peito" href="#" title="Peito">
       <area shape="circle" coords="177,268,40" alt="Quadril" href="#" title="Quadril">
       <area shape="circle" coords="176,325,17" alt="Genitais" href="#" title="Genitais">
       <area shape="circle" coords="197,433,20" alt="Joelho Esquerdo" href="#" title="Joelho Esquerdo">
       <area shape="circle" coords="157,434,20" alt="Joelho Direito" href="#" title="Joelho Direito">
       <area shape="rect" coords="216,453,178,541" alt="Canela Esquerda" href="#" title="Canela Esquerda">
       <area shape="rect" coords="136,453,174,541" alt="Canela Direita" href="#" title="Canela Direita">
       <area shape="rect" coords="219,546,177,588" alt="Pé Esquerdo" href="#" title="Pé Esquerdo">
       <area shape="rect" coords="174,546,133,588" alt="Pé Direito" href="#" title="Pé Direito">
       <area shape="poly" coords="129,271,125,413,172,413,172,346,160,341,152,320,165,308,149,303" alt="Coxa Direita" href="#" title="Coxa Direita">
       <area shape="poly" coords="223,281,223,409,179,409,179,343,196,329,195,316,186,308,199,306" alt="Coxa Esquerda" href="#" title="Coxa Esquerda">
       <area shape="rect" coords="262,137,229,196" alt="Ombro Esquerdo" href="#" title="Ombro Esquerdo">
       <area shape="rect" coords="122,139,89,193" alt="Ombro Direito" href="#" title="Ombro Direito">
       <area shape="rect" coords="267,198,230,270" alt="Antebraço Esquerdo" href="#" title="Antebraço Esquerdo">
       <area shape="rect" coords="124,254,86,195" alt="Antebraço Direito" href="#" title="Antebraço Direito">
       <area shape="rect" coords="236,303,280,272" alt="Pulso Esquerdo" href="#" title="Pulso Esquerdo">
       <area shape="rect" coords="120,256,75,301" alt="Pulso Direito" href="#" title="Pulso Direito">
       <area shape="rect" coords="299,309,241,368" alt="Mão Esquerda" href="#"title="Mão Esquerda">
       <area shape="rect" coords="106,372,56,306" alt="Mão Direita" href="#" title="Mão Direita">

       <!-- Partes de Trás do corpo -->
       <area shape="circle" coords='438,71,43' alt="Cabeça"  href="#">
       <area shape="poly" coords='370,142,418,122,418,107,457,107,457,123,504,142' alt="Nuca"  href="#" title="Nuca">
       <area shape="circle" coords='459,565,23' alt="Pé Direito (Trás)"  href="#" title="Pé Direito (Trás)">
       <area shape="circle" coords='415,565,23' alt="Pé Esquerdo (Trás)"  href="#" title="Pé Esquerdo (Trás)">
       <area shape="circle" coords='417,438,30' alt="Joelho Esquerdo (Trás)"  href="#" title="Joelho Esquerdo (Trás)">
       <area shape="circle" coords='458,438,30' alt="Joelho Direito (Trás)"  href="#" title="Joelho Direito (Trás)">
       <area shape="circle" coords='438,184,50' alt="Costas"  href="#" title="Costas">
       <area shape="circle" coords='438,251,45' alt="Dorsal"  href="#" title="Dorsal">
       <area shape="circle" coords='438,324,45' alt="Glúteo"  href="#" title="Glúteo">
       <area shape="rect" coords='485,420,443,372' alt="Coxa Direita (Trás)"  href="#" title="Coxa Direita (Trás)">
       <area shape="rect" coords='437,419,389,368' alt="Coxa Esquerda (Trás)"  href="#" title="Coxa Esquerda (Trás)">
       <area shape="rect" coords='395,540,436,457' alt="Panturrilha Esquerda"  href="#" title="Panturrilha Esquerda">
       <area shape="rect" coords='480,541,438,457' alt="Panturrilha Direita"  href="#" title="Panturrilha Direita">
       <area shape="rect" coords='525,142,485,214' alt="Ombro Direito (Trás)"  href="#" title="Ombro Direito (Trás)">
       <area shape="rect" coords='390,144,350,213' alt="Ombro Esquerdo (Trás)"  href="#" title="Ombro Esquerdo (Trás)">
       <area shape="rect" coords='386,215,338,280' alt="Cotovelo Esquerdo"  href="#" title="Cotovelo Esquerdo">
       <area shape="rect" coords='544,218,488,277' alt="Cotovelo Direito"  href="#" title="Cotovelo Direito">
       <area shape="rect" coords='380,282,335,317' alt="Pulso Esquerdo (Trás)"  href="#" title="Pulso Esquerdo (Trás)">
       <area shape="rect" coords='498,279,549,317' alt="Pulso Direito (Trás)"  href="#" title="Pulso Direito (Trás)">
       <area shape="rect" coords='368,369,317,318' alt="Mão Esquerda (Trás)"  href="#" title="Mão Esquerda (Trás)">
       <area shape="rect" coords='560,318,506,367' alt="Mão Direita (Trás)"  href="#" title="Mão Direita (Trás)">
      </map>
       </div>
    </div>
  </div>
</div>


<br><br>
            
    <!-- FIM TELA CORPO  -->
    <div class="page-break"></div>
    <!-- COMEÇO TELA FERIMENTOS/LUXAÇÕES -->
    <div class="title__bar" id="seção9">
       <p class="title__text lead fw-semibold">Ferimentos/Fraturas/Entorses/Luxação/Contusão</p>
      <div class="title__box">
        <b class="box__number">9</b>
      </div>
    </div>
   

    <div id="container-wrapper" class="container-wrapper">
    <div class="container mt-5" id="container2">
      <div class="border p-4  bg-white bg-gradient">
        <div class="container mt-5">
          <div class="border p-4">
            <div id="container2" class="container">
            <div class="row">
              <div class="col-lg-6">
                <label for="face__ferim" class="form-label">Face:</label>
                <input
                  type="text"
                  class="form-control"
                  id="face__ferim"
                  aria-describedby="emailHelp"
                />
              </div>
              <div class="col-lg-6">
                <label for="local__ferim" class="form-label">Local:</label>
                <input
                  type="text"
                  class="form-control"
                  id="local__ferim"
                  aria-describedby="emailHelp"
                />
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-lg-6 mt-3 m-0">
                <label class="form-check-label">Lado:</label>
                <br />
                <input
                  class="form-check-input1"
                  type="checkbox"
                  value=""
                  id="Esquerdo__lado"
                  name="check1"
                />
                <label class="form-check-label" for="Esquerdo__lado"
                  >Esquerdo</label
                >
                <input
                  class="form-check-input1"
                  type="checkbox"
                  value=""
                  id="direito__lado"
                  name="check1"
                />
                <label class="form-check-label" for="direito__lado"
                  >Direito</label
                >
                <br /><br />
              </div>

              <div class="col-lg-4">
                <label for="tipo__ferim" class="form-label">Tipo:</label>
                <select
                  class="form-select border"
                  aria-label="Default select example"
                  id="tipo__ferim"
                >
                  <option selected>Selecione:</option>
                  <option value="1">Ferimentos</option>
                  <option value="2">Fraturas</option>
                  <option value="3">Entorses</option>
                  <option value="4">Luxação</option>
                  <option value="5">Contusão</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <!-- Button to clone the container -->
        <button
          class="btn btn-primary mt-2 ml-5"
          id="cloneContainerBtn"
        >
          +
        </button>
      </div>
    </div>
</div>
</div>

<script>
  //clonar containers e afins

document.getElementById("cloneContainerBtn").addEventListener("click", function () {
// Clone the container
const originalContainer = document.querySelector("#container2");
const clonedContainer = originalContainer.cloneNode(true);

// Remove the button from the cloned container
const clonedButton = clonedContainer.querySelector("#cloneContainerBtn");
clonedButton.parentNode.removeChild(clonedButton);

// Generate a unique identifier to append to the original IDs
const uniqueId = new Date().getTime();

// Update IDs and corresponding 'for' attributes in the cloned container
updateElementIds(clonedContainer, uniqueId);

// Append the cloned container to the container wrapper
document.getElementById("container-wrapper").appendChild(clonedContainer);
});

// Function to update element IDs and corresponding 'for' attributes with a unique identifier
function updateElementIds(container, uniqueId) {
const elements = container.querySelectorAll("[id]");
elements.forEach((element) => {
    const originalId = element.id;
    const newId = originalId + "_" + uniqueId;
    element.id = newId;

    // Check if the element has a corresponding 'for' attribute
    if (element.tagName.toLowerCase() === "label") {
        const forAttribute = element.getAttribute("for");
        if (forAttribute) {
            const newForAttribute = forAttribute + "_" + uniqueId;
            element.setAttribute("for", newForAttribute);
        }
    }

    // Check if the element is an input checkbox
    if (
        element.tagName.toLowerCase() === "input" &&
        element.type === "checkbox"
    ) {
        // Check if it's the "esquerdo" checkbox
        if (element.id.includes("Esquerdo__lado")) {
            // Give a specific treatment for the "esquerdo" checkbox
            const checkBLabel = container.querySelector(`label[for="${originalId}"]`);
            if (checkBLabel) {
                const newCheckBoxForAttribute = newId; // Use the newId for the 'for' attribute
                checkBLabel.setAttribute("for", newCheckBoxForAttribute);
            }
        } else {
            // For other checkboxes, update the 'for' attribute in the label associated with the checkbox
            const checkBLabel = element.previousElementSibling; // Get the previous sibling (label)
            if (checkBLabel && checkBLabel.tagName.toLowerCase() === "label") {
                const newCheckBoxForAttribute = newId; // Use the newId for the 'for' attribute
                checkBLabel.setAttribute("for", newCheckBoxForAttribute);
            }
        }
    }
});
}

</script>
 

    <!-- FIM TELA FERIMENTOS/LUXAÇÕES  -->
    <br /><br />
    
    <!-- COMEÇO TELA QUEIMADURAS -->
    <div class="title__bar" id="seção10">
       <p class="title__text lead fw-semibold">Queimaduras</p>
      <div class="title__box">
        <b class="box__number">10</b>
      </div>
    </div>
   <br><br>
    
    <div id="container-wrapper2" class="container-wrapper2">
    <div class="container border p-3 bg-white bg-gradient" id="container__4">
      <div id="container22" class="container border mt-4 bg-white bg-gradient">
      <div class="row mt-4">
        <div class="col-lg-6">
          <label for="local__queimadura" class="form-label">Local da Queimadura:</label>
          <select class="form-select border bg-white bg-gradient" aria-label="Default select example" id="local__queimadura">
            <option selected>Selecione:</option>
            <option value="1">Cabeça</option>
            <option value="2">Pescoço</option>
            <option value="3">T.Ant</option>
            <option value="4">T.Pos</option>
            <option value="5">Genit</option>
            <option value="6">M.I.D</option>
            <option value="7">M.I.E</option>
            <option value="8">M.S.E</option>
            <option value="9">M.S.D</option>
          </select>
        </div>
        <br />
        <div class="container">
          <div class="col-lg-6 mt-4 d-flex justify-content-center">
            <div class="form-check form-check-inline mb-3 position-relative py-2 px-4">
              <input class="form-check-input" type="checkbox" id="grau__queim" value="option1"/>
              <label class="form-check-label" for="grau__queim">1°Grau</label>
            </div>
            <div class="form-check form-check-inline mb-3 position-relative py-2 px-4">
              <input class="form-check-input" type="checkbox" id="grau__queim2" value="option2"/>
              <label class="form-check-label" for="grau__queim2">2°Grau</label>
            </div>
            <div class="form-check form-check-inline mb-3 position-relative py-2 px-4">
              <input class="form-check-input" type="checkbox" id="grau__queim3" value="option3"/>
              <label class="form-check-label" for="grau__queim3">3°Grau</label>
            </div>
          </div>
          <button id="btn__clone" class="btn btn-primary d-flex justify-content-end"> + </button>
</div>
</div>
</div>
</div>
</div>

     <script>
      
//adicionar mais clones e afins
document.getElementById("btn__clone").addEventListener("click", function () {
    // Clone the container
    const originalContainer = document.querySelector("#container22");
    const clonedContainer = originalContainer.cloneNode(true);

    // Remove the button from the cloned container
    const clonedButton = clonedContainer.querySelector("#btn__clone");
    clonedButton.parentNode.removeChild(clonedButton);

    // Generate a unique identifier to append to the original IDs
    const uniqueId = new Date().getTime();

    // Update IDs and corresponding 'for' attributes in the cloned container
    updateElementIds(clonedContainer, uniqueId);

    // Append the cloned container to the container wrapper
    document.getElementById("container-wrapper2").appendChild(clonedContainer);
});

// Function to update element IDs and corresponding 'for' attributes with a unique identifier
function updateElementIds(container, uniqueId) {
    const elements = container.querySelectorAll("[id]");
    elements.forEach((element) => {
        const originalId = element.id;
        const newId = originalId + "_" + uniqueId;
        element.id = newId;

        // Check if the element has a corresponding 'for' attribute
        if (element.tagName.toLowerCase() === "label") {
            const forAttribute = element.getAttribute("for");
            if (forAttribute) {
                const newForAttribute = forAttribute + "_" + uniqueId;
                element.setAttribute("for", newForAttribute);
            }
        }

        // Check if the element is an input radio
        if (
            element.tagName.toLowerCase() === "input" &&
            element.type === "checkbox"
        ) {
            // Update the 'for' attribute in the label associated with the radio
            const radioLabel = container.querySelector(`label[for="${originalId}"]`);
            if (radioLabel) {
                const newRadioForAttribute = radioLabel.getAttribute("for") + "_" + uniqueId;
                radioLabel.setAttribute("for", newRadioForAttribute);
            }
        }
    });
}
     </script>

    <!-- FIM TELA QUEIMADURAS  -->
    <br /><br />
    <!-- COMEÇO TELA VITIMA ERA: -->
    <div class="title__bar" id="seção11">
       <p class="title__text lead fw-semibold">Vítima Era:</p>
      <div class="title__box">
        <b class="box__number">11</b>
      </div>
    </div>
   

    <div class="container mt-5">
      <div class="border p-4 bg-white bg-gradient">
        <div class="row">
          <div class="col-lg-12">
            <h1>Vítima Era:</h1>
            <div class="thin__line__m-0"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="vitima1"
              name="check1"
            />
            <label class="form-check-label" for="vitima1"> Ciclista </label>
          </div>
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="vitima2"
              name="check1"
            />
            <label class="form-check-label" for="vitima2">
              Condutor de Moto
            </label>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="vitima3"
              name="check1"
            />
            <label class="form-check-label" for="vitima3"> Gestante </label>
          </div>
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="vitima4"
              name="check1"
            />
            <label class="form-check-label" for="vitima4">
              Pass. Banco da Frente
            </label>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="vitima5"
              name="check1"
            />
            <label class="form-check-label" for="vitima5">
              Condutor Carro
            </label>
          </div>
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="vitima6"
              name="check1"
            />
            <label class="form-check-label" for="vitima6"> Pass. Moto </label>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="vitima7"
              name="check1"
            />
            <label class="form-check-label" for="vitima7"> Clínico </label>
          </div>
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="vitima8"
              name="check1"
            />
            <label class="form-check-label" for="vitima8"> Trauma </label>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="vitima9"
              name="check1"
            />
            <label class="form-check-label" for="vitima9">
              Pass. Banco de Trás
            </label>
          </div>
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="vitima10"
              name="check1"
            />
            <label class="form-check-label" for="vitima10"> Pedestre </label>
          </div>
        </div>
      </div>
    </div>

    <!-- FIM TELA VITIMA ERA  -->
    <br /><br />
    <!-- COMEÇO TELA VITIMA ERA: -->
    <div class="title__bar" id="seção12">
       <p class="title__text lead fw-semibold">Avaliação da Cinemática:</p>
      <div class="title__box">
        <b class="box__number">12</b>
      </div>
    </div>
    

    <div class="container mt-5">
      <div class="border p-4  bg-white bg-gradient">
        <div class="row">
          <div class="col-lg-12">
            <h1>Avaliação da Cinemática:</h1>
            <div class="thin__line__m-0"></div>
            <br />
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="cine1"
              name="check1"
            />
            <label class="form-check-label" for="cine1">
              Distúrbio de Comportamento
            </label>
          </div>
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="cine2"
              name="check1"
            />
            <label class="form-check-label" for="cine2">
              Encontrado de Capacete
            </label>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="cine3"
              name="check1"
            />
            <label class="form-check-label" for="cine3">
              Encontrado de Cinto
            </label>
          </div>
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="cine4"
              name="check1"
            />
            <label class="form-check-label" for="cine4">
              Para-Brisas Avariado
            </label>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="cine5"
              name="check1"
            />
            <label class="form-check-label" for="cine5">
              Caminhando na Cena
            </label>
          </div>
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="cine6"
              name="check1"
            />
            <label class="form-check-label" for="cine6">
              Painel Avariado
            </label>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="cine7"
              name="check1"
            />
            <label class="form-check-label" for="cine7">
              Volante Torcido
            </label>
          </div>
        </div>
      </div>
    </div>

    <!-- FIM TELA AVALIAÇAO DA CINEMATICA  -->
    <br /><br />
    <!-- COMEÇO TELA FORMA DE CONDUÇÃO: -->
    <div class="title__bar" id="seção13">
       <p class="title__text lead fw-semibold">Forma de Condução:</p>
      <div class="title__box">
        <b class="box__number">13</b>
      </div>
    </div>
    

    <div class="container mt-5">
      <div class="border p-4 bg-white bg-gradient">
        <div class="row">
          <div class="col-lg-12">
            <h1>Forma de Condução:</h1>
            <div class="thin__line__m-0"></div>
            <br />
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="conducao1"
              name="check1"
            />
            <label class="form-check-label" for="conducao1"> Deitada </label>
          </div>
          <div class="row">
          <div class="col-lg-4">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="conducao3"
              name="check1"
            />
            <label class="form-check-label" for="conducao3"> Sentada </label>
          </div>
        </div>
          <div class="col-lg-4">
            <input
              class="form-check-input1"
              type="checkbox"
              value=""
              id="conducao2"
              name="check1"
            />
            <label class="form-check-label" for="conducao2">
              Semi-Deitada
            </label>
          </div>
        </div>
        
      </div>
    </div>
    <br />
    <!-- FIM TELA FORMA DE CONDUÇÃO  -->
    <br /><br />
    
    <!-- COMEÇO TELA DECISÃO DE CONDUÇÃO: -->
    <div class="title__bar" id="seção14">
       <p class="title__text lead fw-semibold">Decisão do Transporte:</p>
      <div class="title__box">
        <b class="box__number">14</b>
      </div>
    </div>
   

    
    <div class="container mt-5">
      <div class="border p-4 bg-white bg-gradient">
        <div class="row">
          <div class="col-lg-12 mt-2">
            <div class="d-flex justify-content-center btn-group" rows="3">
              <button type="button" class="btn btn-outline-danger" data-bs-toggle="button" aria-pressed="false" autocomplete="off">Crítico</button>
              <button type="button" class="btn btn-outline-warning" data-bs-toggle="button" aria-pressed="false" autocomplete="off">Instável</button>
              <button type="button" class="btn btn-outline-primary" data-bs-toggle="button" aria-pressed="false" autocomplete="off">Potencialmente Instável</button>
              <button type="button" class="btn btn-outline-success" data-bs-toggle="button" aria-pressed="false" autocomplete="off">Estável</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- FIM TELA DECISÃO DE CONDUÇÃO  -->
   <br><br><br>
   <div id="myDiv">
    <!-- COMEÇO TELA ANAMNESE GESTACIONAL -->
    <div class="title__bar" id="seção15">
       <p class="title__text lead fw-semibold">Anamnese Gestacional:</p>
      <div class="title__box">
        <b class="box__number">15</b>
      </div>
    </div>
   


    <div class="container mt-5">
      <div class="border p-4 bg-white bg-gradient">
        <div class="row">
          <div class="col-lg-6">
            <label for="perio__gest" class="form-label"
              >Período da Gestação:</label
            >
            <input
              type="email"
              class="form-control"
              id="perio__gest"
              aria-describedby="emailHelp"
            />
          </div>
          <div class="col-lg-6">
            <label for="nomedomedico" class="form-label">Nome do Médico:</label>
            <input
              type="text"
              class="form-control"
              id="nomedomedico"
              aria-describedby="emailHelp"
            />
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 mt-3">
            <label class="form-check-label" for="sim__prenatal"
              >Fez Pré-Natal?</label
            >
            <br />
            <input
              class="form-check-input1"
              type="radio"
              value=""
              id="sim__prenatal"
              name="sim__prenatal"
            />
            <label class="form-check-label" for="sim__prenatal">Sim</label>
            <input
              class="form-check-input1"
              type="radio"
              value=""
              id="nao__prenatal"
              name="sim__prenatal"
            />
            <label class="form-check-label" for="nao__prenatal">Não</label>
            <br /><br />
          </div>
          <div class="col-lg-6 mt-3">
            <label class="form-check-label" for="compli__natal"
              >Existe Possibilidade de Complicação?</label
            >
            <br />
            <input
              class="form-check-input1"
              type="radio"
              value=""
              id="compli__natal"
              name="compli__natal"
            />
            <label class="form-check-label" for="compli__natal">Sim</label>
            <input
              class="form-check-input1"
              type="radio"
              value=""
              id="compli__natal2"
              name="compli__natal"
            />
            <label class="form-check-label" for="compli__natal2">Não</label>
            <br /><br />
          </div>

          <div class="col-lg-6 mt-3">
            <label class="form-check-label" for="prim__filho"
              >É o Primeiro Filho?</label
            >
            <br />
            <input
              class="form-check-input1"
              type="radio"
              value=""
              id="prim__filho"
              name="radio__prim"
            />
            <label class="form-check-label" for="prim__filho">Sim</label>
            <input
              class="form-check-input1"
              type="radio"
              value=""
              id="prim__filho2"
              name="radio__prim"
            />
            <label class="form-check-label" for="prim__filho2">Não</label>
            <br /><br />
          </div>

          <div class="col-lg-6">
            <label for="qnts__filhos" class="form-label g-3"
              >Quantos Filhos?</label
            >
            <input
              type="text"
              class="form-control"
              id="qnts__filhos"
              aria-describedby="emailHelp"
            />
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <label for="hrs__cont" class="form-label g-3"
              >Que Hrs Iniciaram as Contrações?</label
            >
            <input
              type="time"
              class="form-control"
              id="hrs__cont"
              aria-describedby="emailHelp"
            />
          </div>
          <div class="col-lg-4">
            <label for="tmp__contra" class="form-label g-3"
              >Tempo das Contrações:</label
            >
            <input
              type="text"
              class="form-control"
              id="tmp__contra"
              aria-describedby="emailHelp"
            />
          </div>
          <div class="col-lg-4">
            <label for="int__contra" class="form-label g-3"
              >Intervalo das Contrações:</label
            >
            <input
              type="text"
              class="form-control"
              id="int__contra"
              aria-describedby="emailHelp"
            />
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mt-3">
            <label class="form-check-label" for="evacuar__"
              >Sente Pressão ou Vontade de Evacuar?</label
            >
            <br />
            <input
              class="form-check-input1"
              type="radio"
              value=""
              id="evacuar__"
              name="radio__evacu"
            />
            <label class="form-check-label" for="evacuar__">Sim</label>
            <input
              class="form-check-input1"
              type="radio"
              value=""
              id="evacuar__2"
              name="radio__evacu"
            />
            <label class="form-check-label" for="evacuar__2">Não</label>
            <br /><br />
          </div>
          <div class="col-lg-4 mt-3">
            <label class="form-check-label" for="ruptura__"
              >Já Houve Ruptura da Bolsa?</label
            >
            <br />
            <input
              class="form-check-input1"
              type="radio"
              value=""
              id="ruptura__"
              name="rupt__radio"
            />
            <label class="form-check-label" for="ruptura__">Sim</label>
            <input
              class="form-check-input1"
              type="radio"
              value=""
              id="ruptura__2"
              name="rupt__radio"
            />
            <label class="form-check-label" for="ruptura__2">Não</label>
            <br /><br />
          </div>
          <div class="col-lg-4 mt-3">
            <label class="form-check-label" for="inspec__"
              >Foi Feita Inspeção Visual?</label
            >
            <br />
            <input
              class="form-check-input1"
              type="radio"
              value=""
              id="inspec__"
              name="inspec__radio"
            />
            <label class="form-check-label" for="inspec__">Sim</label>
            <input
              class="form-check-input1"
              type="radio"
              value=""
              id="inspec__2"
              name="inspec__radio"
            />
            <label class="form-check-label" for="inspec__2">Não</label>
            <br /><br />
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-2 mt-3">
              <label class="form-check-label" for="parto__"
                >Parto Realizado?</label
              >
              <br />
              <input
                class="form-check-input1"
                type="radio"
                value=""
                id="parto__"
                name="radio__part"
              />
              <label class="form-check-label" for="parto__">Sim</label>
              <input
                class="form-check-input1"
                type="radio"
                value=""
                id="parto__2"
                name="radio__part"
              />
              <label class="form-check-label" for="parto__2">Não</label
              ><br /><br />
            </div>
            <div class="col-lg-3 mt-3 ml-0">
              <label class="form-check-label" for="sx__bebe"
                >Sexo do Bebê:</label
              >
              <br />
              <input
                class="form-check-input1"
                type="radio"
                value=""
                id="sx__bebe"
                name="radio__sx"
              />
              <label class="form-check-label" for="sx__bebe">Feminino</label>
              <input
                class="form-check-input1"
                type="radio"
                value=""
                id="sx__bebe2"
                name="radio__sx"
              />
              <label class="form-check-label" for="sx__bebe2">Masculino</label>
              <br /><br />
            </div>
            <div class="col-lg-2 mt-2">
              <label class="form-check-label" for="hrs__parto"
                >Hora Parto:</label
              >
              <br />
              <input
                class="form-check-input1"
                type="time"
                value=""
                id="hrs__parto"
                name="check1"
              />
            </div>
          </div>

          <div class="col-lg-12 mt-2">
            <label for="Nome_do_Bebê" class="form-label g-3"
              >Nome do Bebê:</label
            >
            <input
              type="text"
              class="form-control"
              id="Nome_do_Bebê"
              aria-describedby="emailHelp"
            />
          </div>
        </div>
      </div>
    </div>
    <br /><br />
  </div>
    <!-- FIM TELA GESTACIONAL  -->
    <br /><br />
    <!-- COMEÇO TELA PROCEDIMENTOS EFETUADOS -->
    <div class="title__bar" id="seção16">
       <p class="title__text lead fw-semibold">Procedimentos Efetuados:</p>
      <div class="title__box">
        <b class="box__number">16</b>
      </div>
    </div>
    <br /><br />

    <div class="container" id="procedimentos__container">
      <div class="col-md-12 border p-3 bg-white bg-gradient">
        <h1 class="bold fs-3 m-0">A</h1>
        <div class="thin__line__m-0"></div>
        <div>
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="aspiracao"
            name="check1"
          />
          <label class="form-check-label" for="aspiracao"> Aspiração </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Avaliação Inicial"
            name="check1"
          />

          <label class="form-check-label" for="Avaliação Inicial">
            Avaliação Inicial
          </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Avaliação Dirigida"
            name="check1"
          />

          <label class="form-check-label" for="Avaliação Dirigida">
            Avaliação Dirigida
          </label>
          <br />

          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Avaliação Continuada"
            name="check1"
          />
          <label class="form-check-label" for="Avaliação Continuada">
            Avaliação Continuada
          </label>
          <br />
          <br />
        </div>
        <h1 class="bold fs-3 m-0">C</h1>
        <div class="thin__line__m-0"></div>

        <div>
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Chave de Rautek"
            name="check1"
          />
          <label class="form-check-label" for="Chave de Rautek">
            Chave de Rautek
          </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Cânula de Guedel"
            name="check1"
          />

          <label class="form-check-label" for="Cânula de Guedel">
            Cânula de Guedel
          </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Curativos"
            name="check1"
          />

          <label class="form-check-label" for="Curativos"> Curativos </label>
          <br />

          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Compressão"
            name="check1"
          />
          <label class="form-check-label" for="Compressão">Compressão </label>
          <br />

          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Cervical"
            name="check1"
          />
          <label class="form-check-label" for="Cervical">Cervical </label>
          <br />
          <br />
        </div>
        <h1 class="bold fs-3 m-0">D</h1>
        <div class="thin__line__m-0"></div>

        <div>
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Desobstrução da VA"
            name="check1"
          />
          <label class="form-check-label" for="Desobstrução da VA">
            Desobstrução da VA
          </label>
          <br />
          <br />
        </div>
        <h1 class="bold fs-3 m-0">E</h1>
        <div class="thin__line__m-0"></div>

        <div>
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Emprego do DEA"
            name="check1"
          />
          <label class="form-check-label" for="Emprego do DEA">
            Emprego do DEA
          </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Encravamento"
            name="check1"
          />
          <label class="form-check-label" for="Encravamento">
            Encravamento
          </label>
          <br />

          <br />
        </div>
        <h1 class="bold fs-3 m-0">G</h1>
        <div class="thin__line__m-0"></div>

        <div>
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Gerenciamento de Riscos"
            name="check1"
          />
          <label class="form-check-label" for="Gerenciamento de Riscos">
            Gerenciamento de Riscos
          </label>
          <br />
          <br />
        </div>
        <h1 class="bold fs-3 m-0">I</h1>
        <div class="thin__line__m-0"></div>

        <div>
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Imobilização"
            name="check1"
          />
          <label class="form-check-label" for="Imobilização">
            Imobilização
          </label>
          <br />
          <br />
        </div>
        <h1 class="bold fs-3 m-0">L</h1>
        <div class="thin__line__m-0"></div>

        <div>
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Limpeza de Ferimento"
            name="check1"
          />
          <label class="form-check-label" for="Limpeza de Ferimento">
            Limpeza de Ferimento
          </label>
          <br />
          <br />
        </div>
        <h1 class="bold fs-3 m-0">M</h1>
        <div class="thin__line__m-0"></div>

        <div>
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Membros INF DIR"
            name="check1"
          />
          <label class="form-check-label" for="Membros INF DIR">
            Membros INF DIR
          </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Membros INF ESQ"
            name="check1"
          />
          <label class="form-check-label" for="Membros INF ESQ">
            Membros INF ESQ
          </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Membros SUP ESQ"
            name="check1"
          />
          <label class="form-check-label" for="Membros SUP ESQ">
            Membros SUP ESQ
          </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Membros SUP DIR"
            name="check1"
          />
          <label class="form-check-label" for="Membros SUP DIR">
            Membros SUP DIR
          </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Maca Rígida"
            name="check1"
          />
          <label class="form-check-label" for="Maca Rígida">
            Maca Rígida
          </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Maca Sobre Rodas"
            name="check1"
          />
          <label class="form-check-label" for="Maca Sobre Rodas">
            Maca Sobre Rodas
          </label>
          <br />
          <input
            class="form-check-input1"
            type="checkbox"
            value=""
            id="Meios Auxiliares"
            name="check1"
          />
          <label class="form-check-label" for="Meios Auxiliares">
            Meios Auxiliares
          </label>
          <br />
        </div>
        <div class="container">
          <form>
            <div class="form-group row">
              <div class="col-sm-10">
                <div class="ml-3">
                  <input
                    class="form-check-input1 ml2"
                    type="checkbox"
                    value=""
                    id="CELESC"
                    name="check1"
                  />
                  <label class="form-check-label" for="CELESC"> CELESC </label>
                  <br />
                </div>
                <div class="ml-3">
                  <input
                    class="form-check-input1"
                    type="checkbox"
                    value=""
                    id="CIT"
                    name="check1"
                  />
                  <label class="form-check-label" for="CIT"> CIT </label>
                  <br />
                </div>
                <div class="ml-3">
                  <input
                    class="form-check-input1"
                    type="checkbox"
                    value=""
                    id="Def.Civil"
                    name="check1"
                  />
                  <label class="form-check-label" for="Def.Civil">
                    Def.Civil
                  </label>
                  <br />
                </div>
                <div class="ml-3">
                  <input
                    class="form-check-input1"
                    type="checkbox"
                    value=""
                    id="IGP/PC"
                    name="check1"
                  />
                  <label class="form-check-label" for="IGP/PC"> IGP/PC </label>
                  <br />
                </div>
                <div class="row">
                  <div class="form-check">
                    <input
                      class="form-check-input1"
                      type="checkbox"
                      id="mainCheckbox"
                      onclick="showAdditionalCheckboxes()"
                    />
                    <label class="form-check-label" for="mainCheckbox"
                      >Polícia</label
                    >
                  </div>
                </div>
              </div>

              <!-- Additional Checkboxes -->
              <div
                class="form-group row additional-checkboxes"
                id="additionalCheckboxes"
                style="display: none"
              >
                <div class="col-sm-10">
                  <div class="form-check">
                    <input
                      class="form-check-input1"
                      type="checkbox"
                      id="additionalCheckbox1"
                      name="additionalCheckboxes[]"
                      value="option1"
                    />
                    <label class="form-check-label" for="additionalCheckbox1"
                      >Civil</label
                    >
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input1"
                      type="checkbox"
                      id="additionalCheckbox2"
                      name="additionalCheckboxes[]"
                      value="option2"
                    />
                    <label class="form-check-label" for="additionalCheckbox2"
                      >Militar</label
                    >
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input1"
                      type="checkbox"
                      id="additionalCheckbox3"
                      name="additionalCheckboxes[]"
                      value="option3"
                    />
                    <label class="form-check-label" for="additionalCheckbox3"
                      >PRE</label
                    >
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input1"
                      type="checkbox"
                      id="additionalCheckbox4"
                      name="additionalCheckboxes[]"
                      value="option4"
                    />
                    <label class="form-check-label" for="additionalCheckbox4"
                      >PRF</label
                    >
                  </div>
                </div>
              </div>

              <div class="form-check">
                <input
                  type="checkbox"
                  class="form-check-input1"
                  id="checkboxPrincipal"
                  onclick="mostrarCheckboxes()"
                />
                <label class="form-check-label" for="checkboxPrincipal"
                  >SAMU</label
                >
              </div>

              <div id="checkboxesAdicionais" class="mt-1" style="display: none">
                <!-- Checkboxes adicionais serão adicionadas aqui -->
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input1"
                    id="checkboxesAdicionais1"
                  />
                  <label class="form-check-label" for="checkboxesAdicionais1"
                    >USA</label
                  >
                </div>
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input1"
                    id="checkboxesAdicionais2"
                  />
                  <label class="form-check-label" for="checkboxesAdicionais2"
                    >USB</label
                  >
                </div>
              </div><br><br>
    
  <h1 class="bold fs-3 m-0">O</h1>
  <div class="thin__line__m-0"></div>

  <div>
    <input
      class="form-check-input1"
      type="checkbox"
      value=""
      id="Ocular"
      name="check1"
      onchange="toggleInput()"
    />
    <label class="form-check-label" for="Ocular">
      Ocular
    </label>
    <br />
    <input
      class="form-check-input1"
      type="checkbox"
      value=""
      id="Oxigenioterapia"
      name="check1"
      onchange="toggleInput()"
    />
    <label class="form-check-label" for="Oxigenioterapia">
      Oxigenioterapia
    </label>
    <div class="row">
      <div class="col-sm-5">
        <input
          type="number"
          class="form-control"
          id="LPM"
          aria-describedby="emailHelp"
          style="display:none;"
        />
        <label for="LPM" class="" id="LPMLabel" style="display:none;"> LPM </label>
        <br />
      </div>
    </div>
  </div>
   
  <h1 class="bold fs-3 m-0">P</h1>
  <div class="thin__line__m-0"></div>

  <div>
    <input
      class="form-check-input1"
      type="checkbox"
      value=""
      id="ponte"
      name="check1"
      
    />
    <label class="form-check-label" for="ponte">
      Ponte
    </label>
    <br /><br>
  </div>
    <h1 class="bold fs-3 m-0">Q</h1>
    <div class="thin__line__m-0"></div>
  
    <div>
      <input
        class="form-check-input1"
        type="checkbox"
        value=""
        id="Queimadura"
        name="check1"
        
      />
      <label class="form-check-label" for="Queimadura">
        Queimadura
      </label>
      <br />
      <input
      class="form-check-input1"
      type="checkbox"
      value=""
      id="Quadril"
      name="check1"
      
    />
    <label class="form-check-label" for="Quadril">
      Quadril
    </label>
    <br /><br>
    </div>
    <h1 class="bold fs-3 m-0">R</h1>
    <div class="thin__line__m-0"></div>
  
    <div>
      <input
        class="form-check-input1"
        type="checkbox"
        value=""
        id="Retirado Capacete"
        name="check1"
        
      />
      <label class="form-check-label" for="Retirado Capacete">
        Retirado Capacete
      </label>
      <br />
      <input
      class="form-check-input1"
      type="checkbox"
      value=""
      id="RCP"
      name="check1"
      
    />
    <label class="form-check-label" for="RCP">
      RCP
    </label>
    <br />
    <input
    class="form-check-input1"
    type="checkbox"
    value=""
    id="Rolamento 90°"
    name="check1"
    
  />
  <label class="form-check-label" for="Rolamento 90°">
    Rolamento 90°
  </label>
  <br />
  <input
  class="form-check-input1"
  type="checkbox"
  value=""
  id="Rolamento 180°"
  name="check1"
  
/>
<label class="form-check-label" for="Rolamento 180°">
  Rolamento 180°
</label>

<br />
<input
  class="form-check-input1"
  type="checkbox"
  value=""
  id="Reanimador"
  name="check1"
  onchange="toggleReanimador()"
/>
<label class="form-check-label" for="Reanimador">
  Reanimador
</label>
<br />
<div class="row">
  <div class="col-sm-5">
    <input
      type="number"
      class="form-control"
      id="LPM2"
      aria-describedby="emailHelp"
      style="display:none;"
    />
    <label for="LPM2" class="" id="LPMLabel2" style="display:none;"> LPM </label>
    <br />
  </div>
</div>
</div>

<script>
function toggleReanimador() {
  var reanimadorCheckbox = document.getElementById('Reanimador');
  var input = document.getElementById('LPM2');
  var label = document.getElementById('LPMLabel2');

  if (reanimadorCheckbox.checked) {
    input.style.display = 'block';
    label.style.display = 'block';
  } else {
    input.style.display = 'none';
    label.style.display = 'none';
  }
}
</script>
<h1 class="bold fs-3 m-0">S</h1>
<div class="thin__line__m-0"></div>

<div>
  <input
    class="form-check-input1"
    type="checkbox"
    value=""
    id="Simples"
    name="check1"
    
  />
  <label class="form-check-label" for="Simples">
    Simples
  </label></div>
  <br/><br>
  <h1 class="bold fs-3 m-0">T</h1>
  <div class="thin__line__m-0"></div>
  
  <div>
    <input
      class="form-check-input1"
      type="checkbox"
      value=""
      id="Tomada Decisão"
      name="check1"
      
    />
    <label class="form-check-label" for="Tomada Decisão">
      Tomada Decisão
    </label>
    <br/>
    <input
    class="form-check-input1"
    type="checkbox"
    value=""
    id="Tratado Choque"
    name="check1"
    
  />
  <label class="form-check-label" for="Tratado Choque">
    Tratado Choque
  </label>
  <br/>
  <br/>
  </div></div></div>
  <h1 class="bold fs-3 m-0">U</h1>
  <div class="thin__line__m-0"></div>
  
  <div class="m-2">
    <input
      class="form-check-input1"
      type="checkbox"
      value=""
      id="Uso de Cânula"
      name="check1"
      
    />
    <label class="form-check-label" for="Uso de Cânula">
      Uso de Cânula
    </label>
    <div>
      <input
        class="form-check-input1"
        type="checkbox"
        value=""
        id="UsoDeColar"
        name="check1"
      />
      <label class="form-check-label" for="UsoDeColar">
        Uso de Colar
      </label>
      <div class="row">
        <div class="col-sm-5">
          <input
            type="text"
            class="form-control"
            id="Tamanho"
            aria-describedby="emailHelp"
            style="display:none;"
          />
          <label for="Tamanho" class=" justify-content-end" id="TamanhoLabel" style="display:none;"> Tamanho </label>
          
        </div>
      </div>
    </div>
    
  <div>
    <input
      class="form-check-input1"
      type="checkbox"
      value=""
      id="Uso KED"
      name="check1"
      
    />
    <label class="form-check-label" for="Uso KED">
      Uso KED
    </label>
    <div>

<div>
  <input
    class="form-check-input1"
    type="checkbox"
    value=""
    id="Uso TTF"
    name="check1"
    
  />
  <label class="form-check-label" for="Uso TTF">
    Uso TTF
  </label>
  <br><br></div>

</div></div></div>
<h1 class="bold fs-3 m-0">V</h1>
<div class="thin__line__m-0"></div>

<div class="m-2">
  <input
    class="form-check-input1"
    type="checkbox"
    value=""
    id="Ventilação Suporte"
    name="check1"
    
  />
  <label class="form-check-label" for="Ventilação Suporte">
    Ventilação Suporte
  </label>

  <br><br>

</div>
<h1 class="bold fs-3 m-0">#</h1>
<div class="thin__line__m-0"></div>

<div class="m-2">
  <input
    class="form-check-input1"
    type="checkbox"
    value=""
    id="3 Pontas"
    name="check1"
    
  />
  <label class="form-check-label" for="3 Pontas">
    3 Pontas
  </label>

</div>
</div></div></div>
<br><br><br>


<div class="title__bar" id="seção17">
   <p class="title__text lead fw-semibold">Materiais Utilizados Descartável:</p>
  <div class="title__box">
    <b class="box__number">17</b>
  </div>
</div>
<br /><br />


<div class="container border bg-light bg-gradient">
<div class="container py-5">
  <div class="row">
      <div class="col-lg-12 mx-auto">
          <div class="card rounded-0 border-0 shadow">
              <div class="card-body p-5">
                  
                  <!--  Bootstrap table-->
                  <div class="table-responsive">
                      <table class="table" id="tabela__mat">
                          <thead>
                              <tr>
                                  
                                  <th class="bold"scope="col">Material</th>
                                  <th scope="col">Tipo</th>
                                  <th scope="col">Quantidade</th>
                                  
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  
                                  <td class="col-lg-3">Ataduras</td>
                                  <td class="col-lg-3">
                                    
                                    <input
                                    class="form-check-input1 p-3"
                                    type="checkbox"
                                    value=""
                                    id="8"
                                    name="check1"
                                  />
                                  <label class="form-check-label" for="8">
                                    8
                                  </label> 
                               <br>
                                  <input
                                  class="form-check-input1 p-3 ml-3"
                                  type="checkbox"
                                  value=""
                                  id="12"
                                  name="check1"
                                />
                                <label class="form-check-label" for="12">
                                  12
                                </label>
                              <br>
                                  <input
                                  class="form-check-input1 p-3 ml-3"
                                  type="checkbox"
                                  value=""
                                  id="20"
                                  name="check1"
                                />
                                <label class="form-check-label" for="20">
                                  20
                                </label>
                                
                              </td>
                            </td>
                                  <td class="col-lg-1">
                              <input
                              type="number"
                              class="form-control col-lg-3"
                              id="qntd__ata"
                              aria-describedby="emailHelp"
                              />
                                  </td>
                                   
                              </tr>
                              <tr>
                                  
                                  <td>Cateter TP.Óculos</td>
                                  <td>-</td>
                                  <td><input
                                    type="number"
                                    class="form-control col-lg-3"
                                    id="qntd__cat"
                                    aria-describedby="emailHelp"
                                    />
                                  </td>
                                   
                              </tr>
                              <tr>
                               
                                <td>Compressa Comum</td>
                                <td>-</td>
                                <td><input
                                  type="number"
                                  class="form-control col-lg-3"
                                  id="qntd__comp"
                                  aria-describedby="emailHelp"
                                  />
                                </td>
                                 
                            </tr>

                            <tr>
                            
                              <td>KIT's</td>
                              <td>
                                <input
                                    class="form-check-input1 p-3"
                                    type="checkbox"
                                    value=""
                                    id="H"
                                    name="check1"
                                  />
                                  <label class="form-check-label" for="H">
                                    H
                                  </label> 
                               <br>
                                  <input
                                  class="form-check-input1 p-3 ml-3"
                                  type="checkbox"
                                  value=""
                                  id="Q"
                                  name="check1"
                                />
                                <label class="form-check-label" for="Q">
                                  Q
                                </label>
                                <br>
                                  <input
                                  class="form-check-input1 p-3 ml-3"
                                  type="checkbox"
                                  value=""
                                  id="P"
                                  name="check1"
                                />
                                <label class="form-check-label" for="P">
                                  P
                                </label>
                              </td>
                              <td><input
                                type="number"
                                class="form-control col-lg-3"
                                id="qntd__kit"
                                aria-describedby="emailHelp"
                                />
                              </td>
                               
                          </tr>
                          <tr>
                            
                            <td>Luvas Desc.(Pares)</td>
                            <td>-</td>
                            <td><input
                              type="number"
                              class="form-control col-lg-3"
                              id="qntd__luv"
                              aria-describedby="emailHelp"
                              />
                            </td>
                             
                        </tr>

                        <tr>
                          
                          <td>Máscara Descartável</td>
                          <td>-</td>
                          <td><input
                            type="number"
                            class="form-control col-lg-3"
                            id="qntd__masc"
                            aria-describedby="emailHelp"
                            />
                          </td>
                           
                      </tr>

                      <tr>
                        
                        <td>Manta Aluminizada</td>
                        <td>-</td>
                        <td><input
                          type="number"
                          class="form-control col-lg-3"
                          id="qntd__manta"
                          aria-describedby="emailHelp"
                          />
                        </td>
                         
                    </tr>
                    <tr>
                     
                      <td>Pás do DEA</td>
                      <td>-</td>
                      <td><input
                        type="number"
                        class="form-control col-lg-3"
                        id="qntd__pas"
                        aria-describedby="emailHelp"
                        />
                      </td>
                       
                  </tr>
                  <tr>
                   
                    <td>Sonda de Aspiração</td>
                    <td>-</td>
                    <td><input
                      type="number"
                      class="form-control col-lg-3"
                      id="qntd__sonda"
                      aria-describedby="emailHelp"
                      />
                    </td>
                     
                </tr>
                <tr>
               
                  <td>Soro Fisiológico</td>
                  <td>-</td>
                  <td><input
                    type="number"
                    class="form-control col-lg-3"
                    id="qntd__soro"
                    aria-describedby="emailHelp"
                    />
                  </td>
                   
              </tr>
              <tr>
               
                <td>Talas PAP</td>
                <td>
                  <input
                  class="form-check-input1 p-3 ml-3"
                  type="checkbox"
                  value=""
                  id="p2"
                  name="check1"
                />
                <label class="form-check-label" for="p2">
                  P
                </label>
                <br>
                  <input
                  class="form-check-input1 p-3 ml-3"
                  type="checkbox"
                  value=""
                  id="G"
                  name="check1"
                />
                <label class="form-check-label" for="G">
                  G
                </label>
                </td>
                <td><input
                  type="number"
                  class="form-control col-lg-3"
                  id="qntd__PAP"
                  aria-describedby="emailHelp"
                  />
                </td>
                 
            </tr>
            <tr>
             
              <td>Base do Estabilizador</td>
              <td>-</td>
              <td><input
                type="number"
                class="form-control col-lg-3"
                id="qntd__base"
                aria-describedby="emailHelp"
                />
              </td>
               
          </tr>

          <tr>
           
            <td>Colar</td>
            <td>

              <input
                  class="form-check-input1 p-3 ml-3"
                  type="checkbox"
                  value=""
                  id="N"
                  name="check1"
                />
                <label class="form-check-label" for="N">
                  N
                </label>
                <br>
                  <input
                  class="form-check-input1 p-3 ml-3"
                  type="checkbox"
                  value=""
                  id="PP"
                  name="check1"
                />
                <label class="form-check-label" for="PP">
                  PP
                </label>
                <br>
                <input
                class="form-check-input1 p-3 ml-3"
                type="checkbox"
                value=""
                id="P3"
                name="check1"
              />
              <label class="form-check-label" for="P3">
                P
              </label>
            </td>
            <td><input
              type="number"
              class="form-control col-lg-3"
              id="qntd__colar"
              aria-describedby="emailHelp"
              />
            </td>
             
        </tr>
        <tr>
         
          <td>Coxins Estabilizador</td>
          <td>-</td>
          <td><input
            type="number"
            class="form-control col-lg-3"
            id="qntd__coxin"
            aria-describedby="emailHelp"
            />
          </td>
           
      </tr>
      <tr>
       
        <td>KED</td>
        <td>
          <input
                  class="form-check-input1 p-3 ml-3"
                  type="checkbox"
                  value=""
                  id="Adulto1"
                  name="check1"
                />
                <label class="form-check-label" for="Adulto1">
                  Adulto
                </label>
                <br>
                <input
                class="form-check-input1 p-3 ml-3"
                type="checkbox"
                value=""
                id="infantil1"
                name="check1"
              />
              <label class="form-check-label" for="infantil1">
                Infantil
              </label>
        </td>
        <td><input
          type="number"
          class="form-control col-lg-3"
          id="qntd__ked"
          aria-describedby="emailHelp"
          />
        </td>
         
    </tr>


    <tr>
    
      <td>TTF</td>
      <td>
        <input
                class="form-check-input1 p-3 ml-3"
                type="checkbox"
                value=""
                id="Adulto2"
                name="check1"
              />
              <label class="form-check-label" for="Adulto2">
                Adulto
              </label>
              <br>
              <input
              class="form-check-input1 p-3 ml-3"
              type="checkbox"
              value=""
              id="infantil2"
              name="check1"
            />
            <label class="form-check-label" for="infantil2">
              Infantil
            </label>
      </td>
      <td><input
        type="number"
        class="form-control col-lg-3"
        id="qntd__ttf"
        aria-describedby="emailHelp"
        />
      </td>
       
  </tr>

  <tr>
   
    <td>Maca Rígida</td>
    <td>-</td>
    <td><input
      type="number"
      class="form-control col-lg-3"
      id="qntd__mcrig"
      aria-describedby="emailHelp"
      />
    </td>
     
</tr>
<tr>
 
  <td>Tirante Aranha</td>
  <td>-</td>
  <td><input
    type="number"
    class="form-control col-lg-3"
    id="qntd__tira"
    aria-describedby="emailHelp"
    />
  </td>
   
</tr>
<tr>
 
  <td>Tirante de Cabeça</td>
  <td>-</td>
  <td><input
    type="number"
    class="form-control col-lg-3"
    id="qntd__tira__cab"
    aria-describedby="emailHelp"
    />
  </td>
   
</tr>
<tr>
 
  <td>Cânula</td>
  <td>-</td>
  <td><input
    type="number"
    class="form-control col-lg-3"
    id="qntd__canu"
    aria-describedby="emailHelp"
    />
  </td>
   
</tr>
<tr>
 
  <td>Outros:</td>
  <td>
    <input
    type="text"
    class="form-control col-lg-3"
    id="outros__table"
    aria-describedby="emailHelp"
    />

  </td>
  <td><input
    type="number"
    class="form-control col-lg-3"
    id="outros__tabela"
    aria-describedby="emailHelp"
    />
  </td>
   
</tr>
   </tbody>
      </table>
         </div>

              </div></div>
          </div>
      </div>
  </div>
</div>


<br><br><br>
<div class="title__bar" id="seção18">
   <p class="title__text lead fw-semibold">Objetos Recolhidos:</p>
  <div class="title__box">
    <b class="box__number">18</b>
  </div>
</div>


    

<div class="container mt-5 border p-3 bg-white bg-gradient">
  <form>
    <div class="form-group">
      <label for="custom-textarea" class="font-awesome">Objetos Recolhidos:</label>
      <textarea class="form-control custom-textarea" id="custom-textarea" rows="5"></textarea>
    </div>
  </form>
</div>
<br><br><br>


<div class="title__bar" id="seção19">
   <p class="title__text lead fw-semibold">Responsável pelo Preenchimento:</p>
  <div class="title__box">
    <b class="box__number">19</b>
  </div>
</div>
<br /><br />




<div class="container">
  <div class="border p-4 bg-white bg-gradient ">
    <div class="row">
      <div class="col-lg-12 mt-2">
        <label for="ficha__" class="form-label g-3"
          >Ficha:</label
        >
        <input
          type="text"
          class="form-control"
          id="ficha__"
          aria-describedby="emailHelp"
        />
      </div>
</div>
<div class="row">
  <div class="col-lg-12 mt-2">
    <label for="fibra__" class="form-label g-3"
      >Fibra:</label
    >
    <input
      type="text"
      class="form-control"
      id="fibra__"
      aria-describedby="emailHelp"
    />
  </div>
</div>
</div></div>
<br><br><br>


<div class="title__bar" id="seção20">
   <p class="title__text lead fw-semibold">Observações Importantes:</p>
  <div class="title__box">
    <b class="box__number">20</b>
  </div>
</div>



<div class="container mt-5 border p-3 ">
  <form>
    <div class="form-group">
      <label for="custom-textarea2" class="font-awesome">Observações Importantes:</label>
      <textarea class="form-control custom-textarea" id="custom-textarea2" rows="5"></textarea>
    </div>
  </form>
</div>
<br><br><br>

<div class="title__bar" id="seção21">
   <p class="title__text lead fw-semibold">Equipe de Atendimento:</p>
  <div class="title__box">
    <b class="box__number">21</b>
  </div>
</div>




<div class="container mt-5">
  <div class="border p-4 bg-white bg-gradient">
    <div class="row">
      <div class="col-lg-12 mt-2">
        <label for="m__equipe" class="form-label g-3"
          >M:</label
        >
        <input
          type="text"
          class="form-control"
          id="m__equipe"
          aria-describedby="emailHelp"
        />
      </div>
</div>
<div class="row">
  <div class="col-lg-12 mt-2">
    <label for="s1__equipe" class="form-label g-3"
      >S1:</label
    >
    <input
      type="text"
      class="form-control"
      id="s1__equipe"
      aria-describedby="emailHelp"
    />
  </div>


</div>
<div class="row">
  <div class="col-lg-12 mt-2">
    <label for="s2__equipe" class="form-label g-3"
      >S2:</label
    >
    <input
      type="text"
      class="form-control"
      id="s2__equipe"
      aria-describedby="emailHelp"
    />
  </div>
</div>

<div class="row">
  <div class="col-lg-12 mt-2">
    <label for="s3__equipe" class="form-label g-3"
      >S3:</label
    >
    <input
      type="text"
      class="form-control"
      id="s3__equipe"
      aria-describedby="emailHelp"
    />
  </div>
</div>
<div class="row">
<div class="col-lg-12 mt-2">
<label for="Demandante" class="form-label g-3"
  >Demandante:</label
>
<input
  type="text"
  class="form-control"
  id="Demandante"
  aria-describedby="emailHelp"
/>
</div>


</div>
<div class="row">
<div class="col-lg-12 mt-2">
<label for="Equipe" class="form-label g-3"
  >Equipe:</label
>
<input
  type="text"
  class="form-control"
  id="Equipe"
  aria-describedby="emailHelp"
/>
</div>
</div>



</div></div>
<br><br><br>

<div class="title__bar" id="seção22">
   <p class="title__text lead fw-semibold">Termo de Recusa:</p>
  <div class="title__box">
    <b class="box__number">22</b>
  </div>
</div>
<br /><br />


<div class="container">
  <div class="border p-4 bg-white bg-gradient">
    <div class="row">
      <div class="col-lg-12 mt-2">
    
        <div>
          <h2>Termo de Recusa:</h2>
          
          <form>
            <div class="form-group">
              
              <input type="file" class="form-control-file" id="imageInput" accept="image/*">
            </div>
          </form>
        
          <div id="imagePreview" class="mt-3"></div>
        </div>
        
        <br>


      </div></div></div></div>
      <br><br>

    <div id="element-to-hide">
      <div class="title__bar" id="seção24">
       <p class="title__text lead fw-semibold">Finalizar:</p>
      <div class="title__box">
        <b class="box__number">23</b>
      </div>
      </div>
      <br /><br />


      
<div class="container">
  <div class="border p-4 bg-white bg-gradient">
    <div class="row">
      <div class="col-lg-12 mt-2">

  <h4>Salvar PDF</h4>
  <form>
    <div class="form-group">
      <label for="btn__print">Gerar Relatório:</label>
  <button id="btn__print" class="btn btn-outline-secondary btn-sm">Gerar PDF</button>
  <br><br>
</div>
<br>
</form>
<h4>Enviar PDF</h4>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="pdfInput">Escolha o PDF:</label>
        <input type="file" class="form-control-file" id="pdfInput" accept=".pdf" onchange="updateIndicator()" name="pdf_file">
    </div>
    <div id="pdfIndicator" style="display: none;" class="alert alert-success mt-2">
        PDF Anexado!
    </div>
    <br><br>
    <button type="submit" class="btn btn-primary btn-lg" name="upload" onclick="sendDataToPHP()">Finalizar</button>
</form>

<script>
        document.getElementById('btn__print').onclick = function(event) {
            event.preventDefault(); // previne que a pagina reinicie quando gera o pdf
            window.print(); 
        };
    </script>

<script>
    function updateIndicator() {
        var input = document.getElementById('pdfInput');
        var indicator = document.getElementById('pdfIndicator');

        if (input.files.length > 0 && input.files[0].type === 'application/pdf') {
            indicator.style.display = 'block';
        } else {
            indicator.style.display = 'none';
        }
    }
</script>

           <script>
              document.getElementById("btn__print").addEventListener("change", function() {
                window.print
              }
              )
            </script>
            
            <script>
              $(document).ready(function(){
              
                $("#imageInput").change(function(){
                  // Pega a imagem anexada no input
                  var file = this.files[0];
            
                  // checa se o arquivo é uma imagem
                  if (file && file.type.startsWith('image')) {
                    // cria uma variavel que ira "ler" o arquivo
                    var reader = new FileReader();
            
                  
                    reader.onload = function(e){
                      // mostra a imagem anexada na tela
                      $("#imagePreview").html('<img src="' + e.target.result + '" class="img-fluid" alt="Image Preview">');
                    };
            
                   
                    reader.readAsDataURL(file);
                  } else {
                    
                    $("#imagePreview").html('');
                    alert("Por Favor Selecione Uma Imagem.");
                  }
                });
              });
            </script>
     </div>
</div>


</div></div>
<br><br><br>




</div>

<script>
// Adiciona um ouvinte de evento à checkbox
document.getElementById("UsoDeColar").addEventListener("change", function () {
  // Obtém o elemento de input de texto
  var tamanhoInput = document.getElementById("Tamanho");
  // Obtém o elemento da label
  var tamanhoLabel = document.getElementById("TamanhoLabel");

  // Se a checkbox estiver marcada, exibe o input de texto, caso contrário, oculta
  if (this.checked) {
    tamanhoInput.style.display = "block";
    tamanhoLabel.style.display = "block";
  } else {
    tamanhoInput.style.display = "none";
    tamanhoLabel.style.display = "none";
  }
});
</script>





<script>
  (() => {
  'use strict'
  document.querySelectorAll('[data-bs-toggle="tooltip"]')
    .forEach(tooltip => {
      new bootstrap.Tooltip(tooltip)
    })
  document.querySelectorAll('[data-bs-toggle="popover"]')
    .forEach(popover => {
      new bootstrap.Popover(popover)
    })
  const toastPlacement = document.getElementById('toastPlacement')
  if (toastPlacement) {
    document.getElementById('selectToastPlacement').addEventListener('change', function () {
      if (!toastPlacement.dataset.originalClass) {
        toastPlacement.dataset.originalClass = toastPlacement.className
      }
      toastPlacement.className = `${toastPlacement.dataset.originalClass} ${this.value}`
    })
  }
  document.querySelectorAll('.bd-example .toast')
    .forEach(toastNode => {
      const toast = new bootstrap.Toast(toastNode, {
        autohide: false
      })
      toast.show()
    })
  const toastTrigger = document.getElementById('liveToastBtn')
  const toastLiveExample = document.getElementById('liveToast')
  if (toastTrigger) {
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
    toastTrigger.addEventListener('click', () => {
      toastBootstrap.show()
    })
  }
  const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
  const appendAlert = (message, type) => {
    const wrapper = document.createElement('div')
    wrapper.innerHTML = [
      `<div class="alert alert-${type} alert-dismissible" role="alert">`,
      `   <div>${message}</div>`,
      '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
      '</div>'
    ].join('')

    alertPlaceholder.append(wrapper)
  }
  const alertTrigger = document.getElementById('liveAlertBtn')
  if (alertTrigger) {
    alertTrigger.addEventListener('click', () => {
      appendAlert('Nice, you triggered this alert message!', 'success')
    })
  }
  document.querySelectorAll('.carousel:not([data-bs-ride="carousel"])')
    .forEach(carousel => {
      bootstrap.Carousel.getOrCreateInstance(carousel)
    })

  document.querySelectorAll('.bd-example-indeterminate [type="checkbox"]')
    .forEach(checkbox => {
      if (checkbox.id.includes('Indeterminate')) {
        checkbox.indeterminate = true
      }
    })
  document.querySelectorAll('.bd-content [href="#"]')
    .forEach(link => {
      link.addEventListener('click', event => {
        event.preventDefault()
      })
    })
  const exampleModal = document.getElementById('exampleModal')
  if (exampleModal) {
    exampleModal.addEventListener('show.bs.modal', event => {
      const button = event.relatedTarget
      const recipient = button.getAttribute('data-bs-whatever')
      const modalTitle = exampleModal.querySelector('.modal-title')
      const modalBodyInput = exampleModal.querySelector('.modal-body input')
      modalTitle.textContent = `New message to ${recipient}`
      modalBodyInput.value = recipient
    })
  }
  const myOffcanvas = document.querySelectorAll('.bd-example-offcanvas .offcanvas')
  if (myOffcanvas) {
    myOffcanvas.forEach(offcanvas => {
      offcanvas.addEventListener('show.bs.offcanvas', event => {
        event.preventDefault()
      }, false)
    })
  }
})()
</script>


  </body>
</html>
