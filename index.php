<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/all.css" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="soluções, solucoes, seati, segurança, eletrônica, eletronica, seguranca, eletrica, serralheria, construção civil">
    <meta name="description" content="SEATI Soluções é referência nos serviços de Segurança Eletrônica, Elétrica, Refrigeração, Construção Civil e Serralheria">
    <link href="<?php echo INCLUDE_PATH; ?>style/style.css" rel="stylesheet" />
    
    <title>SEATI SOLUÇÕES</title>
</head>
<body>
    <header>
        <div class="center">
             <a href="<?php echo INCLUDE_PATH; ?>" class="logo-index">SEATI</a><!--logo-->
             <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>quem-somos">Quem Somos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>  
            </nav>
            
            <nav class="mobile right>">
                <div class="botao-menu-mobile">
                <i class="fas fa-align-justify"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>quem-somos">Quem Somos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>  
            </nav>
            <div class="clear"></div><!-- CLEAR -->

        </div><!--center-->
    </header>
 
    <?php

        
         $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{

            $pagina404 = true;
            include('pages/404.php');

        }
            
        
            /*$url = $_GET['url'];

            echo $url;*/


    ?>     

    <footer class="clear fixed">
        <div class="center">
        <p>Copyright © - SEATI - Todos os direitos reservados.</p>
        </div><!--center-->
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    
</body>
</html>