<?php
session_start();
require_once('conexao.php');

$error_message = "";  

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpf = $_POST['cpf'];

    if (!empty($username) && !empty($password) && !empty($cpf)) {
        $sql = "SELECT id, username, password, cpf, is_admin, is_active FROM users WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['password'];

            if (password_verify($password, $storedPassword) && $row['is_active'] == 1) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['cpf'] = $row['cpf'];
                $_SESSION['is_admin'] = $row['is_admin'];

                if ($_SESSION['is_admin'] == 1) {
                    header('Location: adm.php');
                } else {
                    header('Location: index.php');
                }

                exit();
            } else {
                $error_message = "Usuário ou Senha incorreta ou sua conta foi desativada.";
            }
        } else {
            $error_message = "Usuário ou Senha incorreta ou sua conta foi desativada.";
        }
    } else {
        $error_message = "Por Favor preencha todos os campos.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ficha de Ocorrência</title>

  
  <link rel="icon" href="/client/src/assets/noarlogo.png" />
  <link rel="stylesheet" href="/client/src/css/index.css" />
  <link rel="stylesheet" href="/client/src/css/reset.css" />

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
  <script src="/client/src/javascript/index.js"></script>

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

          <img src="/client/src/assets/noarlogo_small.png" alt="logo" />
        </div>
      </nav>

    </header>
  </div>

  <!-- FIM DA HEADER -->

  <br /><br /><br /><br /><br /><br />

  <form action="login.php" method="POST">
        <div class="container mt-12">
            <div class="border p-4">
                <p class="fs-3 fw-bold justify-content-center text-center">Login</p>
                <br />
                <!-- mensagem de erro que só aparece após o submit errado -->
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $error_message) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <!-- USUÁRIO -->
                    <div class="col-lg-12">
                        <label for="user_" class="form-label m-0">Usuário:</label>
                        <input type="text" name="username" required class="form-control" id="user_"
                            aria-describedby="emailHelp" />
                    </div>
                    <!-- FIM USUÁRIO -->

                    <br />
                    <br />
                    <br />
                    <br />

                    <!-- CPF -->
                    <div class="col-lg-12">
                        <label for="numero" class="form-label m-0">CPF:</label>
                        <input type="text" name="cpf" required oninput="mascara(this)" class="form-control"
                            id="numero" aria-describedby="emailHelp" />
                    </div>
                    <!-- FIM CPF -->

                    <br />
                    <br />
                    <br />
                    <br />
                        <!-- SENHA -->
                        <div class="col-lg-12">
                            <label for="senha" class="form-label m-0">Senha: </label>
                            <div class="input-group">
                                <input type="password" name="password" required class="form-control" id="senha">
                                <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>
                        <!-- FIM SENHA -->

                        <!-- visibilidade da senha -->
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const passwordInput = document.getElementById('senha');
                                const togglePasswordButton = document.getElementById('togglePassword');

                                togglePasswordButton.addEventListener('click', function () {
                                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                                    passwordInput.setAttribute('type', type);
                                    // muda o icone do olho
                                    togglePasswordButton.querySelector('i').classList.toggle('bi-eye');
                                    togglePasswordButton.querySelector('i').classList.toggle('bi-eye-slash');
                                });
                            });
                        </script>

                    <!-- Login -->
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-6 ">
                                <input type="submit" value="Login" class="fw-bold bnt-block btn btn-dark w-100" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

  

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
          crossorigin="anonymous"></script>

        <script>
          function mascara(i) {

            var v = i.value;

            if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
              i.value = v.substring(0, v.length - 1);
              return;
            }

            i.setAttribute("maxlength", "14");
            if (v.length == 3 || v.length == 7) i.value += ".";
            if (v.length == 11) i.value += "-";

          }
        </script>

      </div>
    </div>

</body>

</html>