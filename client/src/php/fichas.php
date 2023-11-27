<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}


require_once('conexao.php');

$sql = "SELECT * FROM fichas";
$result = $conn->query($sql);
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
<body>
  <!-- COMEÇO DA HEADER -->
  <div class="container-fluid m-0 p-0" id="element-to-hide">
    <header class="fixed-top">
      <nav class="navbar navbar-dark bg-dark">
        <div class="container">

          <div class="header__container">
            <b class="header__title">Bombeiros Voluntários</b>
            <p class="header__title">
              Assoc. de Serviços Sociais Voluntários de Guaramirim
            </p>
          </div>

          <a href="homepage.php">
            <img src="noarlogo_small.png" alt="logo" />
            </a>
        </div>
      </nav>

    </header>
  </div>
  <!-- FIM DA HEADER -->

  <br /><br /><br /><br /><br /><br />
  <div class="container m-2">
<div class="container p-0">
    <a href="homepageadmin.php" class="btn btn-outline-dark btn-md mb-4 mr-4">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
        </div>
        </div>

</div>
<div class="container p-4">
    <h2>Central de Fichas:</h2>

    <table class="table table-bordered">
    <thead>
        <tr>
            <th class="fw-bold">ID</th>
            <th class="fw-bold">Preenchedor</th>
            <th class="fw-bold">Info Paciente</th>
            <th class="fw-bold">Anam Emer</th>
            <th class="fw-bold">Tipo Ocorrencia</th>
            <th class="fw-bold">Problemas Susp</th>
            <th class="fw-bold">Sinais Vitais</th>
            <th class="fw-bold">Sinais Sintomas</th>
            <th class="fw-bold">Glasgow</th>
            <th class="fw-bold">Viti Era</th>
            <th class="fw-bold">Cinematica</th>
            <th class="fw-bold">Conducao</th>
            <th class="fw-bold">Dec Transporte</th>
            <th class="fw-bold">Anam Gestacional</th>
            <th class="fw-bold">Procedimentos</th>
            <th class="fw-bold">Mate Descart</th>
            <th class="fw-bold">Objetos</th>
            <th class="fw-bold">Resp Preenchimento</th>
            <th class="fw-bold">Observacoes</th>
            <th class="fw-bold">Equipe Atendimento</th>
           
            </thead>
    <br>
    <tbody>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td style='height: 60px;'>{$row['id']}</td>";
            echo "<td style='height: 60px;'>{$row['Preenchedor']}</td>";
            echo "<td style='height: 60px;'>{$row['info_paciente']}</td>";
            echo "<td style='height: 60px;'>{$row['anam_emer']}</td>";
            echo "<td style='height: 60px;'>{$row['tipo_ocorrencia']}</td>";
            echo "<td style='height: 60px;'>{$row['problemas_susp']}</td>";
            echo "<td style='height: 60px;'>{$row['sinais_vitais']}</td>";
            echo "<td style='height: 60px;'>{$row['sinais_sintomas']}</td>";
            echo "<td style='height: 60px;'>{$row['glasgow']}</td>";
            echo "<td style='height: 60px;'>{$row['viti_era']}</td>";
            echo "<td style='height: 60px;'>{$row['cinematica']}</td>";
            echo "<td style='height: 60px;'>{$row['conducao']}</td>";
            echo "<td style='height: 60px;'>{$row['dec_transporte']}</td>";
            echo "<td style='height: 60px;'>{$row['anam_gestacional']}</td>";
            echo "<td style='height: 60px;'>{$row['procedimentos']}</td>";
            echo "<td style='height: 60px;'>{$row['mate_descart']}</td>";
            echo "<td style='height: 60px;'>{$row['objetos']}</td>";
            echo "<td style='height: 60px;'>{$row['resp_preenchimento']}</td>";
            echo "<td style='height: 60px;'>{$row['observacoes']}</td>";
            echo "<td style='height: 60px;'>{$row['equipe_atendimento']}</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
