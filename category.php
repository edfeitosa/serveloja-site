<!-- Cabeçalho -->
<?php get_header(); ?>

<?php // Carrega dados dos posts por categoria
function posts($categoria) { ?>
    <?php query_posts('category_name='.$categoria.'&order=DESC');
    switch ($categoria) {
        case "solucoes" : $titulo = "Soluções para seu negócio"; break;
        case "noticias" : $titulo = "Serveloja na Mídia"; break;
        default : $titulo = "Serveloja"; break;
    }
    if (have_posts()) { ?>
        <div class="conteudo ajusteSingle">
            <h1><?php echo $titulo; ?></h1>
            <?php while (have_posts()) {
                the_post();
                $imagem = wp_get_attachment_image_src(get_post_thumbnail_id(), ''); ?>
                <div class="midia">
                    <img src="<?php echo $imagem[0]; ?>" alt="" />
                    <div class="baseTexto">
                        <div class="titulo">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                        <div class="data">
                            <?php the_time('d'); ?> <?php substr(the_time('M'), 0, 2); ?><br />
                            <?php the_time('Y'); ?>
                        </div>
                    </div>
                </div>
                <div class="clearSmart"></div>
            <?php } ?>
        </div>
        <div class="clear"></div>
    <?php } else { ?>
        <div class="alerta">Ainda não existe nenhuma informação cadastrada</div>
    <?php }
} ?>

<?php if (is_category('solucoes')) {
    echo '<div class="conteudo ajusteSingle">'.posts('solucoes').'</div>';
} elseif (is_category('noticias')) {
    echo '<div class="conteudo ajusteSingle">'.posts('noticias').'</div>';
} else { ?>
    <div class="artigo">
        <h1>Nada Encontrado</h1>
        <h2>Erro 404</h2>
        <div class="alerta">Lamentamos mas não foram encontrados artigos.</div>
    </div>   
<?php } ?>

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