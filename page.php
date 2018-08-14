<!-- Cabeçalho -->
<?php get_header(); ?>

<div class="conteudo ajusteSingle">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
    <?php endwhile; else: ?>
        <h1>Nada Encontrado</h1>
        <h2>Erro 404</h2>
        <div class="alerta">Lamentamos, mas nada foi encontrado.</div>
    <?php endif; ?>
</div>

<!-- Painel com ícones para baixar app -->
<div class="painel backPainelVerde" id="painelApp" style="padding-bottom: 0px;">
    <div class="conteudo paddings">
        <?php include ("includes/loja.php"); ?>
        <div class="clear"></div>
    </div>
</div>

<!-- Fale conosco -->
<div class="painel backPainelCinza1 ajusteMargemPainel" id="painelOndeEstamos">
    <div class="conteudo">
        <?php include ("includes/contato.php"); ?>
        <div class="clear"></div>
    </div>
</div>

<!-- Informações -->
<div class="painel backPainelCinza2" id="painelInformacoes">
    <div class="conteudo">
        <?php include ("includes/sobre.php"); ?>
        <div class="clear"></div>
    </div>
</div>

<!-- Botão rolar até o topo da página -->
<div id="topo" title="Ir até o topo"></div>

<!-- Footer -->
<?php get_footer(); ?>