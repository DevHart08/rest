<!DOCTYPE html>
<html>
    <head>
        <meta lang="es">
        <meta charset="utf-8">
        <title>Maq</title>
        <link rel="stylesheet" href="uikit/css/uikit.css">
        <link rel="stylesheet" href="uikit/css/components/slideshow.css">
        <link rel="stylesheet" href="uikit/css/components/slidenav.css">
        <!--
        <link rel="stylesheet" href="uikit/css/uikit.gradient.css">
        <link rel="stylesheet" href="uikit/css/uikit.almost-flat.css">
        -->
        <script type="text/javascript" src="uikit/js/jquery.js"></script>
        <script type="text/javascript" src="uikit/js/uikit.js"></script>
        <script type="text/javascript" src="uikit/js/core/offcanvas.min.js"></script>
        <script type="text/javascript" src="uikit/js/components/slideshow.js"></script>
        <script type="text/javascript" src="uikit/js/components/sticky.js"></script>
        
        <script type="text/javascript" src="js/anime.min.js"></script>
        
    </head>
    <body>
        <nav class="uk-navbar">
            <ul class="uk-navbar-nav uk-hidden-small">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Proyectos</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
            <div class="uk-navbar-flip">
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li><a href="#">Fb</a></li>
                    <li><a href="#">Tw</a></li>
                    <li><a href="#">G+</a></li>
                </ul>
            </div>
            
            
            <a href="#idNav" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas="{mode:'reveal'}"></a>
            <div class="uk-offcanvas" id="idNav">
                <div class="uk-offcanvas-bar">
                    <div class="uk-nav">
                        <div><a href="#">Inicio</a></div>
                        <div><a href="#">Proyectos</a></div>
                        <div><a href="#">Productos</a></div>
                        <div><a href="#">Contactos</a></div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="uk-grid uk-grid-medium uk-margin-top">
            <div class="uk-width-medium-4-5" style="height: 1500px">
                <div class="uk-panel uk-panel-box">
                    1
                </div>
            </div>
            <!-- sidebar-->
            <div class="uk-width-medium-1-5">
                <div class="uk-panel" data-uk-sticky='{top: 15}'>
                    <div class="uk-slidenav-position" data-uk-slideshow="{autoplay:true ,animation: 'swipe'}">
                        <ul class="uk-slideshow">
                            <li><img src="img/pub-logo.jpg"></li>
                            <li><img  src="img/bar-logo.jpg"></li>
                        </ul>
                        <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                        <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                    </div>
                    
                    <div class="uk-slidenav-position uk-margin-top" data-uk-slideshow="{autoplay:true ,animation: 'swipe'}">
                        <ul class="uk-slideshow">
                            <li><img src="img/pub-logo.jpg"></li>
                            <li><img  src="img/bar-logo.jpg"></li>
                        </ul>
                        <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                        <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                    </div>
                </div>                
            </div>
            <!-- fin sidebar-->
        </div>
        <!--
        <div class="uk-grid uk-grid-collapse" data-uk-grid-match="{target:'.uk-panel'}">
            <div class="uk-width-medium-1-2">
                <div class="uk-panel uk-panel-box">...dsjfoijsdaofsdafjodasjf<br> fasfasfasdfasdf <br> jskdadakjdask</div>
            </div>
            <div class="uk-width-medium-1-2">
                <div class="uk-panel uk-panel-box">...</div>
            </div>
        </div>
        -->
        adsfdafs
    </body>
</html>
