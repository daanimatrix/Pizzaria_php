<!DOCTYPE html>
<html lang="en">

    <?php

            require 'config.php';
            require 'models/Auth.php';

            $auto = new Auth($conexao, $base);
            $userInfo = $auto->checkToken();
            // echo 'index';
    
    ?>

    <!-- Header -->
    <?php  
        require 'partials/header.php';
        
    ?>

    <!-- Menu lateral / Top -->
    <?php  
        require 'partials/navbarLateral.php';
    ?>

            
    <!-- Menu lateral / Top -->
    <?php  
        require 'partials/conteudoDashboard.php';
    ?>
                    
    <!--footer -->
    <?php  
        require 'partials/footer.php';
    ?>
                   