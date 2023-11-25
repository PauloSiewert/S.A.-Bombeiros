<?php
session_start();
require_once('conexao.php');

$sql = "SELECT * FROM relatorios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Central de Relatórios</title>

  
  <link rel="icon" href="noarlogo_small.png" />
  <link rel="stylesheet" href="index.css" />
  <link rel="stylesheet" href="reset.css" />

  <!--CSS and Font Awesome, Bootstrap, etc. links -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
    integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

          <img src="noarlogo_small.png" alt="logo" />
        </div>
      </nav>

    </header>
  </div>

  <!-- FIM DA HEADER -->

  <br /><br /><br /><br /><br /><br />
<div class="container">



</div>
<div class="container">
    <h2>Central de Relatórios:</h2>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th class="fw-bold">N° Do Relatório</th>
            <th class="fw-bold">Id Do Preenchedor</th>
            <th class="fw-bold">Nome Do Preenchedor</th>
            <th class="fw-bold">Nome Do Relatório</th>
            <th class="fw-bold">Horário Do Preenchimento</th>
            <th class="fw-bold">Download:</th>
        </tr>
        </thead>
        <br>
        <tbody>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['n°_do_relatorio']}</td>";
            echo "<td>{$row['id_preenchedor']}</td>";
            echo "<td>{$row['nome_preenchedor']}</td>";
            echo "<td>{$row['file_name']}</td>";
            echo "<td>{$row['data_preenchimento']}</td>";
            echo "<td><a href='download.php?id={$row['n°_do_relatorio']}' class='btn btn-primary'>Baixar Relatório</a></td>";
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
