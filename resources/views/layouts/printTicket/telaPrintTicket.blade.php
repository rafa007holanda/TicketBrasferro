<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <title></title>
        <link rel="stylesheet" href="{{ asset('css/Styles.css') }}">

        {{-- <script type="text/javascript">
        // Função adaptImage()
		// Parâmetros: targetimg (objeto jquery com elementos selecionados)
		function adaptImage(targetimg) {
    	var wheight = $(window).height(); // altura da janela do navegador
    	var wwidth = $(window).width(); // largura da janela do navegador

    	// removemos os atributos de largura e altura da imagem
    	targetimg.removeAttr("width")
    	.removeAttr("height")
    	.css({ width: "", height: "" }); // removemos possíveis regras css também

 		var imgwidth = targetimg.width(); // largura da imagem
    	var imgheight = targetimg.height(); // altura da imagem

    	var destwidth = wwidth; // largura que a imagem deve ter
    	var destheight = wheight; // altura que a imagem deve ter

    	// aqui vamos determinar o tamanho final da imagem
    	if(imgheight < wheight) {
	    // se a altura da imagem for menor que a altura da tela, fazemos um cálculo
    	// para redefinir a largura da imagem para bater com a altura que queremos
    	destwidth = (imgwidth * wheight)/imgheight;

    	$('#fundo img').height(destheight);
        	$('#fundo img').width(destwidth);
    	}

	    // aqui utilizamos um cálculo simples para determinar o posicionamento da imagem
    	// para que a mesma fique no meio da tela
	    // posição = dimensão da imagem/2 - dimensão da tela/2
    	destheight = $('#fundo img').height();
	    var posy = (destheight/2 - wheight/2);
    	var posx = (destwidth/2 - wwidth/2);

	    //se o cálculo das posições der resultado positivo, trocamos para negativo
    	if(posy > 0) {
    	posy *= -1;
    	}
	    if(posx > 0) {
    	posx *= -1;
	    }

	    // colocamos através da função css() do jquery o posicionamento da imagem
    	$('#fundo').css({'top': posy + 'px', 'left': posx + 'px'});
	    }

    	//quando a janela for redimensionada, adaptamos a imagem
	    $(window).resize(function() {
    	adaptImage($('#fundo img'));
		});

		//quando a página carregar, fazemos o mesmo
		$(window).load(function() {
    		$(window).resize();
		});
        </script> --}}
    </head>
    <body onLoad="document.cod_ticket.cod_cracha.focus();">
            @component('layouts.layoutsBase.backGroundImage')
            @endcomponent
            <div id="site" name="div_codigo">
                <center>
                    <h1 class="fonte">Faça a leitura do código do crachá.</h1>
                    <form name="cod_ticket" >

                        @csrf

                        <input type="text" name="cod_cracha" id="cod_cracha" placeholder="Informe o Código." class="btn2">
                        <br>
                        {{-- <input type="submit" name="" id="send" value="entrar" style="display:nome" class="btn hvr-fade"> --}}
                    </form>
                    <br>
                    <div id="DivPopUp" class="" style="display:none;">
                        <img src="https://chart.googleapis.com/chart?chs=150x150&amp;cht=qr&amp;chl=Rafael Holanda, 1234" alt="" class="center2">
                    </div>
                </center>
            </div>
        
        <script>
            //função que vai mostrar a div na tela
            $(document).ready(function(){//faz a leitura da função
                setTimeout(carregar, 1000);//carrega a função em um determinado tempo
                setTimeout(descarregar, 5000);
            });
            function carregar(){//cria uma função
                $('#DivPopUp').show();//faz com que a div seja mostrada na tela
            }
            function descarregar(){//cria uma função
                $('#DivPopUp').fadeOut().empty();//faz com que a div suma da tela
            }
            /*função enter automático*/
            $(document).ready(function(){
                $(#captcha).on("click", function(){
                    var length = $(this).val().length;
                    if (length >=4) {
                        $('send2').click();//faz o clici automático
                    }
                })
            })

        </script>
    </body>
</html>