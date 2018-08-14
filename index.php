<!-- Cabeçalho -->
<?php get_header(); ?>

<!-- Painel com os banners -->
<div class="painel" id="painelBanners">
    <?php echo do_shortcode('[sp_responsiveslider design="design-3" cat_id="2" width="1360"
 height="500" first_slide="1" effect="fade" pagination="true" navigation="false"
 speed="2000" autoplay="true" autoplay_interval="8000"]'); ?>
</div>

<!-- Responsável pelo acesso -->
<?php echo do_shortcode('[acesso_shortcode]'); ?>

<!-- Painel com as soluções -->
<div class="painel" id="painelSolucoes">
    <div class="conteudo">
        <?php include ("includes/solucoes.php"); ?>
        <div class="clear"></div>
    </div>
</div>

<!-- Painel com logo de parceiros -->
<div class="painel" id="painelParceiros">
    <div class="conteudo">
        <?php include ("includes/parceiros.php"); ?>
        <div class="clear"></div>
    </div>
</div>

<!-- UNES / Cartão Pré-Pago / Oportunidade de crescimento -->
<div class="painel backPainel" id="painelUnes">
    <div class="conteudo">
        <?php include ("includes/unes.php"); ?>
        <div class="clear"></div>
    </div>
</div>

<!-- Últimas informações ou notícias -->
<div class="painel" id="painelMidia">
    <div class="conteudo">
        <?php include ("includes/midia.php"); ?>
        <div class="clear"></div>
    </div>
</div>

<!-- Vídeos do youtube -->
<div class="painel" id="painelYoutube">
    <div class="conteudo">
        <?php include ("includes/youtube.php"); ?>
        <div class="clear"></div>
    </div>
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