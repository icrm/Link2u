<?php

$url = $_GET['url'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <meta name="google-site-verification" content="qw2PPugOCEzY0WpTBowdSmFIlfLEJbw1OSrPSCXRHhs" />
        <link href="favicon.ico" type="image/x-icon" rel="icon" />
        <link href="favicon.ico" type="image/x-icon" rel="shortcut icon"/>
        <meta name="author" content="IDiT Tecnologia" />
        <meta http-equiv="content-language" content="pt" />
        <meta http-equiv="reply-to" content="suporte@idit.com.br" />

        <title>Link2u - Coworking | Compartilhar página por email</title>

        <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="css/colorbox.css" media="screen" />

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/general.pack.js"></script>
        <script type="text/javascript" src="js/share-email.pack.js"></script>
        <script type="text/javascript" src="js/masked-input/jquery.maskedinput-1.3.min.js"></script>
        <script type="text/javascript" src="js/colorbox/jquery.colorbox-min.js"></script>
        <script type="text/javascript" src="js/field-hint/hint.pack.js"></script>
    </head>
    <body>
        <div id="all">
            <div id="header">
                <div id="header-sect">
                    <span class="tel">
                        <span class="type">work</span>
                        <span class="value">11 3253 7000</span>
                    </span>
                </div>
                <div id="logo">
                    <a href="index.php" title="Link2u" rel="home">
                        <img src="images/logo.gif" alt="Link2u - Coworking" title="Link2u - Coworking" style="width: 185px; height: 90px;"/>
                    </a>
                </div>
                <div id="menu">
                    <ul>
                        <li><a href="sobre.html" title="sobre a link2u" rel="about">sobre a link2u</a></li>
                        <li><a href="espaco.html" title="espa&ccedil;o" rel="services">espa&ccedil;o</a></li>
                        <li><a href="planos.html" title="planos" rel="product">planos</a></li>
                        <li><a href="vantagens.html" title="vantagens" rel="product">vantagens</a></li>
                        <li><a href="localizacao.html" title="localiza&ccedil;&atilde;o" rel="location">localiza&ccedil;&atilde;o</a></li>
                        <li><a href="contato.html" title="contato" rel="contact nofollow">contato</a></li>
                    </ul>
                </div>
            </div>

            <div id="content">

                <div id="slider-content">
                    <h1 class="inner">__Compartilhar por e-mail</h1>
                </div>
                <div style="display: block;">
                    <div class="empresa-container left" style="width: 193px; padding-left: 30px; padding-right: 50px; height: 500px;">
                        <h3 class="inner">_Compartilhe</h3>
                        <p>
                            Quer avisar algu&eacute;m sobre a <a href="http://www.link2u.com.br" title="Link2u - Coworking">Link2u</a>? Basta preencher o formul&aacute;rio ao lado e clicar em 
                            "Compartilhar".
                        </p>
                        <div class="like" style="margin-right: -40px; margin-top: 30px; margin-bottom: 20px; position: absolute; bottom: 0px;">
                            <img src="images/like-link2u-min.gif" alt="Like!" title="Like!" style="float: left; padding-right: 5px; margin-top: -7px; width: 25px; height: 25px;"/>
                            <h3 style="font-size: 0.9em;"><a href="contato.html">_Like! Eu quero uma vaga agora.</a></h3>
                        </div>
                    </div>

                    <div class="empresa-container right" style="width: 506px;">
                        <h3 class="inner">__Compartilhar por e-mail</h3>
                        <p class="content inner">
                            <h3 style="display: inline;">P&aacute;gina:</h3> <a href="<?php echo $url ?>"><?php echo $url ?></a>
                        </p>

                        <form method="post" action="share.php" id="contactForm">
                            <input type="hidden" name="link" value="<?php echo $url; ?>" />
                            <div class="formRow">
                                <label for="emailTo">Para:</label>
                                <input type="text" name="emailTo" id="emailTo" value="" />
                                <p style="display: block; float: right; width: 400px;">
                                    Informe o email da pessoa com a qual voc&ecirc; deseja compartilhar este link.<br/>
                                    Para mais de uma pessoa separe os endere&ccedil;os com v&iacute;rgulas.
                                </p>
                            </div>
                            <div class="formRow">
                                <label for="nomeFrom">Meu Nome:</label>
                                <input type="text" name="nomeFrom" id="nomeFrom" value="" />
                            </div>
                            <div class="formRow">
                                <label for="emailFrom">Meu E-mail:</label>
                                <input type="text" name="emailFrom" id="emailFrom" value="" />

                            </div>
                            <div class="formRow">
                                <label for="comments">Comet&aacute;rios:</label>
                                <textarea name="comments" id="comments" cols="10" rows="8"></textarea>
                            </div>
                            <div class="formRow">
                                <label>&nbsp;</label>
                                <input type="checkbox" id="copyme" value="copyme" name="copyme" />&nbsp;<label for="copyme" class="scape">Quero receber uma c&oacute;pia da mensagem</label>
                            </div>
                            <div class="formRow">
                                <label>&nbsp;</label>
                                <input type="submit" value="Compartilhar" class="send-form" />
                            </div>
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="clear"></div>
            </div>

            <div id="footer">
                <ul>
                    <li><a href="sobre.html" title="sobre a link2u" rel="about">sobre a link2u</a> | </li>
                    <li><a href="espaco.html" title="espa&ccedil;o" rel="services">espa&ccedil;o</a> | </li>
                    <li><a href="planos.html" title="planos" rel="product">planos</a> | </li>
                    <li><a href="vantagens.html" title="vantagens" rel="product">vantagens</a> | </li>
                    <li><a href="localizacao.html" title="localiza&ccedil;&atilde;o" rel="location">localiza&ccedil;&atilde;o</a> | </li>
                    <li><a href="contato.html" title="contato" rel="contact nofollow">contato</a></li>
                </ul>
                <a href="http://www.twitter.com/link2ucoworking" title="Sig-nos no Twitter!"><img style="position: absolute; right: 100px; top: 20px;" src="images/bt-twitter.gif" alt="Link2u no Twitter" title="Link2u no Twitter"/></a>
                <a href="http://www.facebook.com/link2uCoworking" title="Curta a Link2u no Facebook"><img style="position: absolute; right: 50px; top: 20px;" src="images/bt-facebook.gif" alt="Link2u no Facebook" title="Link2u no Facebook"/></a>
                <p>
                    Av. Paulista, 2.202 . 3&ordm; andar . CJ 31 . s&atilde;o paulo - sp . (11) 3253 7000
                    <a href="http://validator.w3.org/check?uri=referer" rel="nofollow" class="external" style="float: right; font-size: 0.7em; padding-top: 3px; padding-right: 31px;">[XHTML 1.0 - Strict]</a>
                </p>
            </div>
        </div>
        <div style="display: none;">
            <div id="inline_content">
                <h3 class="inner">_Obrigado</h3>
                Sua mensagem foi enviada com sucesso. <br />
                Continue navegando em nosso site!
            </div>
        </div>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-28228550-1']);
            _gaq.push(['_setDomainName', 'link2u.com.br']);
            _gaq.push(['_trackPageview']);
            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </body>
</html>
