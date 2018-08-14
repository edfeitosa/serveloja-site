// Função que oculta menu
function ocultaMenu() {
    jQuery("#mostrarMenu").val("1");
    jQuery("#header #menu").animate({ marginLeft: "0px" }, 300, function () { });
    jQuery("#botaoMenu").css({"background-image":"url(" + jQuery("#url").val() + "/imagens/menu.png)"});
}

// Menu lateral em telas de tablets e smartphones
jQuery(document).ready(function () {
    jQuery("#botaoMenu").on("click", function () {
        if (jQuery("#mostrarMenu").val() == "1") {
            // Exibe menu
            jQuery("#mostrarMenu").val("0");
            jQuery("#header #menu").animate({ marginLeft: "200px" }, 300, function () { });
            jQuery("#botaoMenu").css({"background-image":"url(" + jQuery("#url").val() + "/imagens/recolher.png)"});
        } else {
            // Oculta menu
            ocultaMenu();
        }
    });
});

// Recolhe o menu quando um link é clicado
jQuery(document).ready(function() {
    jQuery("#header #menu a, .conteudo").on("click", function() {
        ocultaMenu();
    });
});

// Exibe ou oculta o botão de rolar até o topo
jQuery(document).ready(function () {
	// Elemento inicia oculto
	jQuery("#topo").hide();
	// Após acontecer o scroll, é exibido ou ocultado a depender da posição
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > 60) {
			jQuery("#topo").fadeIn();
		} else {
			jQuery("#topo").fadeOut();
		}
	});
});

// Retorna ao topo da página quando clicado o botão
jQuery(document).ready(function() {
	jQuery("#topo").live("click", function () {
		jQuery('html, body').animate({scrollTop:0}, 'slow');
	});
});

// Scrool de determinado painel até o topo da página
jQuery(document).ready(function() {
    jQuery('.botaoMenu').click(function() {
        var painel = jQuery(this).attr("id");
        jQuery('html, body').animate({scrollTop: jQuery("#painel" + painel).offset().top - 70}, 'slow');
    });
});

// Menu retrátil quando o principal "sai da tela"
jQuery(document).ready(function () {
    jQuery("#headerAuxiliar").hide();
	// Após acontecer o scroll, menu é exibido a depender da posição
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > 5) {
			jQuery("#headerAuxiliar").fadeIn();
            jQuery("#menu").css({"margin-top":"8px"});
		} else {
			jQuery("#headerAuxiliar").fadeOut();
            jQuery("#menu").css({"margin-top":"20px"});
		}
	});
});

// Formatação de campos
jQuery(function ($) {
    jQuery("#telefone").mask("(99) 99999-9999");
});