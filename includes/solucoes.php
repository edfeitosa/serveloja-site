<div class="cabecalhoPainel">
    <h1>Confira as <span style="color: #4e9728">Soluções</span> diferenciadas disponíveis em nosso <span style="color: #4e9728">Sistema</span>.</h1>
</div>

<?php query_posts('category_name=solucoes&order=ASC');
if (have_posts()) {
    while (have_posts()) {
        the_post();
        $imagem = wp_get_attachment_image_src(get_post_thumbnail_id(), ''); ?>
        <div class="painelIcone">
            <div class="painelImagem">
                <img src="<?php echo $imagem[0]; ?>" alt="" />
            </div>
            <h2><?php the_title(); ?></h2>
            <p>
                <?php if (has_excerpt()) {
                    the_excerpt();
                } ?>
            </p>
            <a href="<?php the_permalink(); ?>">
                Saiba mais
            </a>
        </div>
    <?php }
} else { ?>
    <div class="alerta">Ainda não existe nenhuma informação cadastrada</div>
<?php } ?>