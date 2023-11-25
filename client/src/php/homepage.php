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
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Poppins:400,400i,700,700i&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />

    <!--CSS and Font Awesome, Bootstrap, etc. links -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/maphilight/1.4.0/jquery.maphilight.min.js"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
      integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <script src="index.js"></script>
  </head>

  <body class="bg-light">
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

      <!-- FIM DA HEADER -->

      <br /><br /><br /><br /><br /><br />

      <div class="bg-light border border-2 container">
        <br /><br /><br />
        <div class="thin__line__m-0__shorter"></div>

        <br /><br /><br />

        <h1 class="text-center ">Tela inicial</h1>

        <br /><br />

        <div class="w-50 container justify-content-center align-items-center">
          <div class="row">
            <button type="button" class="btn btn-secondary btn-lg fw-bolder">
              Preencher Ficha
            </button>
          </div>

          <br />
          <div class="row">
            <button type="button" class="btn btn-secondary btn-lg fw-semibold">
              Visualizar Ocorrências
            </button>
          </div>
          <br />
          <br />


          <div class="row">
            <button type="button" class="btn btn-danger btn-lg fw-semibold">Logout</button>
          </div>
        </div>
        <br />
        <br />
      </div>

      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
      ></script>
    </div>
  </body>
</html>
