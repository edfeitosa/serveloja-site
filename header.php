<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Informações do charset vem do próprio wordpress -->
        <meta charset="<?php bloginfo("charset"); ?>" />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" />
        <!-- CSS responsável pela adaptação do site -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/responsivo/320x480.css" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/responsivo/480x800.css" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/responsivo/800x1024.css" />
        <!-- O título da página é o mesmo informado na configuração do wordpress -->
        <title><?php bloginfo("name"); ?> <?php bloginfo("description"); ?></title>
        <!-- Tag informando que este é o arquivo que contém o header  -->
        <?php wp_head(); ?>
    </head>

    <body>
        
    <!-- Topo do site -->
    <?php include ("includes/topo.php"); ?>
    <!-- Cabeçalho auxiliar exibido quando a tela é rolada -->
    <div id="headerAuxiliar">
        <div class="conteudo">
            <div id="logo">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/servelojaBranco.png" alt="serveloja" title="Serveloja" border="0" />
                </a>
            </div>
            <?php include ("includes/menu.php"); ?>
            <div class="clear"></div>
        </div>
    </div>
    <!-- Cabeçalho principal -->
    <div id="header">
        <!-- Botão menu do smartphone -->
        <input type="hidden" name="url" id="url" value="<?php echo get_stylesheet_directory_uri(); ?>" />
        <input type="hidden" name="mostrarMenu" id="mostrarMenu" value="1" />
        <div id="botaoMenu"></div>
        <div class="conteudo">
            <div id="logo">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/servelojaBranco.png" alt="serveloja" title="Serveloja" border="0" />
                </a>
            </div>
            <?php include ("includes/menu.php"); ?>
            <div class="clear"></div>
        </div>
    </div>