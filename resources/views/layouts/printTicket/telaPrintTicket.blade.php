<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <title></title>
        <link rel="stylesheet" href="{{ asset('css/Styles.css') }}">
    </head>
    <body onLoad="document.cod_ticket.cod_cracha.focus();">
            @component('layouts.layoutsBase.backGroundImage')
            @endcomponent
            <div id="site" name="div_codigo">
                <center>
                    <h1 class="fonte">Faça a leitura do código do crachá.</h1>
                    @csrf
                    <form name="cod_ticket" action="{{ route('ConsultaController.store') }}" method="POST" >

                        {{--  @csrf  --}}

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
                        $('send2').click();//faz o click automático
                    }
                })
            })

        </script>
    </body>
</html>