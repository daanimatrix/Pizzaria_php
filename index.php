

<!DOCTYPE html>
<html lang="en">

    <?php

            require 'config.php';
            require 'models/Auth.php';

            $auto = new Auth($conexao, $base);
            $userInfo = $auto->checkToken();
            // echo 'index';
    
    ?>

    <?php  
        require 'partials/header.php';
        
    ?>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand mr-5" href="#"><img src="<?= $base?>/assets/images/logo_pizzaria2.png" style="width:50%" srcset=""></a>
    </div> <!-- Fechamento da div container-fluid -->
    
       <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#" style="color:yellow;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu</a>
        </li>
        <a class="nav-link" href="#">Servicos</a>
        </li>
        <a class="nav-link" href="#">Redesociais</a>
        </li>
        <a class="nav-link" href="#">Sobre</a>
        </li>
        <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>

    </div>
  </div>
</nav>

<p class="text-center text-warning m-3">CARDÁPIO</p>
<h1 class="text-center text-black m-3">Conheça o nosso cardapio</h1>
<?php

    // Prepara e executa uma consulta para obter os registros da tabela 'usuario'
    $consulta = $conexao->query("SELECT * FROM usuario");
    
    // Exibe os resultados em uma tabela HTML
    echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
    </tr>";
    
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $linha['id'] . "</td>";
        echo "<td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['email'] . "</td>";
        echo "</tr>";
    }
    $usuario = 'funcionario normal';
    $usuario == 'gerente' ? $usuario = 'aparece':$usuario ='não aparece';

    echo $usuario;
  //   while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
  //     echo "<tr>";
  //     echo "<td>" . $linha['id'] . "</td>";
  //     echo "<td>" . $linha['nome'] . "</td>";
  //     echo "<td>" . $linha['email'] . "</td>";
  //     echo "</tr>";
  // }
    echo '<img src='.$img.' alt="" srcset="">';
    echo "</table>";

?>

<footer></footer>
</body>
</html>

