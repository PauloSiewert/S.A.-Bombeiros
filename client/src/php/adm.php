<?php
session_start();
require_once('conexao.php');

// checa se a sessao é de admin
if ($_SESSION['is_admin'] != 1) {
    header('Location: login.php');
    exit();
}

// adição de contas
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_user'])) {
    $newUsername = $_POST['new_username'];
    $newPassword = $_POST['new_password'];
    $newCpf = $_POST['new_cpf'];

    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password, cpf, is_admin) VALUES ('$newUsername', '$hashedPassword', '$newCpf', 0)";
    if ($conn->query($sql) === TRUE) {
        echo "Novo Usuário Adicionado Com Sucesso!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// deleção de contas
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user'])) {
    $userIdToDelete = $_POST['delete_user'];

    // atualiza o user para desativar seu login
    $sqlUpdate = "UPDATE users SET is_active = 0 WHERE id = $userIdToDelete";
    if ($conn->query($sqlUpdate) === TRUE) {
        echo "Usuário Desativado Com Sucesso!";
    } else {
        echo "Erro, Não Foi Possivel Desativar Usuário: " . $conn->error;
    }
}

// pega apenas usuarios com "is active" = 1 
$sqlUsers = "SELECT id, username, cpf FROM users WHERE is_active = 1";
$resultUsers = $conn->query($sqlUsers);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Painel do Administrador</title>

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

        
  <!-- Container das informações do usuario e logout -->
  <div class="container">
          <div class="bg-white bg-gradient p-2 ml-5 border p-3"">
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

  <body class="container mt-4">
    <div class="container">
        <div class="row">
            <!-- "Painel de Controle" -->
            <div class="col-md-6">
                <div class="border p-3 bg-white bg-gradient">
                    <h2>Painel de Controle do Administrador</h2>
                    <!-- Adiciona novos usuarios -->
                    <form method="post" action="adm.php" class="mb-4">
                    <div class="form-group mt-3">
            <label for="new_username">Novo Usuário:</label>
            <input type="text" class="form-control" id="new_username" name="new_username" required>
        </div>
        <div class="form-group mt-3">
            <label for="new_cpf">CPF do Novo Usuário:</label>
            <input type="text" class="form-control" id="new_cpf" name="new_cpf" required oninput="mascara(this)">
        </div>
        <div class="form-group mt-3">
            <label for="new_password">Senha do Novo Usuário:</label>
            <input type="password" class="form-control" id="new_password" name="new_password" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3" name="add_user">Adicionar</button>
    </form>
    
                    </form>
                </div>
            </div>

            <!-- "Lista de Usuarios" -->
            <div class="col-md-6">
                <div class="border p-3 bg-white bg-gradient">
                    <h3 class="mt-3">Lista de Usuários:</h3>
                    <ul class="list-group mb-3">
                        <?php
                        while ($rowUser = $resultUsers->fetch_assoc()) {
                            echo '<li class="list-group-item d-flex justify-content-between align-items-center">
                                   ID: ' . $rowUser['id'] . '<br> Nome: ' . $rowUser['username'] . '<br> CPF: ' . $rowUser['cpf'] . '
                                    <form method="post" action="adm.php">
                                        <input type="hidden" name="delete_user" value="' . $rowUser['id'] . '">
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Você quer mesmo desativar esse usuário?\')">Desativar</button>
                                    </form>
                                  </li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
