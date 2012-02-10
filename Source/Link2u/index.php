<?php
$numberOfPosts = 1;
$feedUrl = 'http://link2ucoworking.wordpress.com/feed/';

$content = file_get_contents($feedUrl);
$rss = new SimpleXmlElement($content);
$count = 0;
$blogData = array();
foreach ($rss->channel->item as $item) {
    $blogData[$count]['pubDate'] = date('d/m', strtotime($item->pubDate));
    $blogData[$count]['title'] = (string) $item->title;
    $blogData[$count]['link'] = (string) $item->link;
    $description = (string) $item->description;
    $description = substr($description, 0, 300);
    $blogData[$count]['description'] = $description . '...';
    if (++$count == $numberOfPosts)
        break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link href="favicon.ico" type="image/x-icon" rel="icon" />
        <link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
        <meta name="author" content="Conceptdev Informatica" />
        <meta http-equiv="Content-Language" content="pt-BR" />
        <meta http-equiv="reply-to" content="suporte@conceptdev.com.br" />
        <meta name="keywords" content="coworking, escritório virtual, escritório compartilhado, colaborativo"/>
        <meta name="description" content="Espaço de coworking, tenha seu escritório num ambiente moderno, cheio de gente bacana e no melhor endereço da cidade, a Avenida Paulista."/>

        <title>Link2u - Coworking</title>

        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <!--[if IE 8]>
        <link rel="stylesheet" type="text/css" href="css/styles-ie8.css" media="screen" />
        <![endif]-->
        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

        <script type="text/javascript" src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="js/nivo-slider/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery('#slider').nivoSlider({
                    effect: 'sliceUp',
                    slices: 15,
                    animSpeed: 700,
                    pauseTime: 4000,
                    directionNavHide: true,
                    controlNav: false,
                    prevText: '',
                    nextText: ''
                });
                jQuery('a').each(function() {
                    if(jQuery(this).attr('rel')=='nofollow') {
                        jQuery(this).attr('target', '_blank');
                    }
                });
                jQuery('.external').each(function() {
                    jQuery(this).attr('target', '_blank');
                });
            });
            getTwitters(
            'getTweets',
            {
                id: 'link2ucoworking',
                count: 3,
                enableLinks: true,
                ignoreReplies: true,
                newwindow: true,
                template: '<div class="tImage"><img src="%user_profile_image_url%" height="50px" width="50px;" /></div><div class="quote"><span>&ldquo;</span></div><div class="tweet"><p>%text%</p></div><div class="clear">&nbsp;</div>'
            }
        );
        </script>
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
                <div id="slider">
                    <!--<div id="slider-previous">
                        <a href="previous" title="Slide Anterior"><img src="images/bt-slide-anterior.gif" alt="Slide Anterior" title="Slide Anterior" style="width: 51px; height: 51px;"/></a>
                    </div>-->
                    <img src="images/img-link2u-externa-noite.jpg" title="" alt="" />
                    <img src="images/img-link2u-interna-dia2.jpg" alt="" title="" /><img src="images/img-link2u-interna-dia.jpg" title="" alt="" /><img src="images/img-link2u-externa-noite2.jpg" title="" alt="" />
                    <!--<div id="slider-next">
                        <a href="next" title="Pr&oacute;ximo Slide"><img src="images/bt-slide-proximo.gif" alt="Pr&oacute;ximo Slide" title="Pr&oacute;ximo Slide" style="width: 51px; height: 51px;"/></a>
                    </div>-->
</div>
                <div id="slider-content">
                    <h1>__Agora, o seu escritório pode ser na Avenida Paulista.</h1>
                </div>

                <div id="snippet">
                    <div class="container" style="width: 170px;">
                        <h3>_Coworking</h3>
                        <div class="circle">
                            <ul>
                                <li>troque ideias</li>
                                <li>conhe&ccedil;a pessoas</li>
                                <li>realize neg&oacute;cios</li>
                            </ul>
                        </div>
                    </div>

                    <div class="container" style="width: 282px;">
                      <p class="content">
                            Nos Estados Unidos, centenas de profissionais aut&ocirc;nomos cansaram de trabalhar isolados dentro de casa, nos caf&eacute;s
                            ou em hot&eacute;is. Juntaram-se, ent&atilde;o, em escrit&oacute;rios coletivos e deram início ao conceito de coworking. <br />
                        A  link2u, através de um espaço  aberto que estimula a interação entre as pessoas, possui um ambiente que  facilita a troca de  experiências, novos negocios, visibilidade e networking.<br />
                          Na hora de trocar uma ideia ou pedir uma opini&atilde;o, voc&ecirc; quer mesmo &eacute; olhar pro lado e 
                            cutucar o vizinho pra ver o que ele acha.</p>
</div>

                    <div class="image">
                        <img src="images/banner_temp2.gif" style="width: 328px; height: 173px;" alt="" title=""/>
                    </div>
                </div>

                <div id="snippet-group">
                    <div id="snippet-news" class="col">
                        <h2>Blog da Link2U</h2>
                        <span class="data"><?php echo $blogData[0]['pubDate'] ?></span>
                        <h3><?php echo $blogData[0]['title'] ?></h3>
                        <p><?php echo $blogData[0]['description'] ?>
                            <br /><br />
                            <a href="<?php echo $blogData[0]['link'] ?>" rel="service" class="external">_Saiba mais</a>
                        </p>
                        <!--
                        <h2>Na M&iacute;dia</h2>
                        <span class="data">14/04</span>
                        <h3>Pequenos empresários lucram com escritórios virtuais e coletivos</h3>
                        <p>
                            O mercado corporativo cria novos espaços para trabalhar mais e gastar menos. Pequenos empresários podem agora escolher entre um escritório coletivo – também chamado de coworking – ou um escritório virtual.
                            No escritório virtual, o inquilino aluga o endereço 
                            <br /><br />
                            <a href="consultoria" rel="service">_Saiba mais</a>
                        </p>
                        -->
                    </div>
                    <div id="snippet-product" class="col">
                        <h2>Av. Paulista</h2>
                        <h3>O seu escritório no maior centro financeiro da América Latina</h3>
                        <p>
                            <img src="images/img-paulista.gif" alt="" title="" style="width: 249px; height: 132px;"/>
                            <br /><br />
                        <a href="planos.html" rel="service">_Saiba mais</a></p>
                    </div>
                    <div id="snippet-twitter" class="col">
                        <h2>Tweets</h2>
                        <div id="getTweets">
                            <a href="http://www.twitter.com/link2ucoworking" rel="nofollow">N&atilde;o conesguimos carregar as mensagens. Clique aqui para acessar o twitter.</a>
                        </div>
                    </div>
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
                <a href="http://www.twitter.com/link2ucoworking" rel="nofollow" title="Sig-nos no Twitter!"><img style="position: absolute; right: 100px; top: 20px;" src="images/bt-twitter.gif" alt="Link2u no Twitter" title="Link2u no Twitter"/></a>
                <a href="http://www.facebook.com/link2uCoworking" rel="nofollow" title="Curta a Link2u no Facebook"><img style="position: absolute; right: 50px; top: 20px;" src="images/bt-facebook.gif" alt="Link2u no Facebook" title="Link2u no Facebook"/></a>
                <p>Av. Paulista, 2.202 . 3&ordm; andar . CJ 31 . s&atilde;o paulo - sp . (11) 3253 7000</p>
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