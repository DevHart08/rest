<!DOCTYPE html>
<html>
    <head>
        <meta lang="es">
        <meta charset="utf-8">
        <title>Maq</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="uikit/css/uikit.css">
        <link rel="stylesheet" href="uikit/css/uikit-rtl.css">
        <script type="text/javascript" src="uikit/js/uikit.js"></script>        
        <script type="text/javascript" src="uikit/js/uikit-icons.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
    </head>
    <body>
        <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-toggle uk-hiddens" uk-navbar-toggle-icon uk-toggle href="#offcanvas-nav"></a>
                <ul class="uk-navbar-nav uk-visible@s">
                    <li class="uk-parent"><a href="#">...</a></li>
                    <li class="uk-parent"><a href="#">...</a></li>
                    <li class="uk-parent"><a href="#">...</a></li>
                    <li class="uk-parent"><a href="#">...</a></li>
                </ul>                
            </div>
            <div class="uk-navbar-right uk-visible@s">
                <ul class="uk-navbar-nav">
                    <li class="uk-parent"><a href="#">fb</a></li>
                    <li class="uk-parent"><a href="#">tw</a></li>
                    <li class="uk-parent"><a href="#">G+</a></li>
                </ul>
            </div>
        </nav>
        
        

<div id="offcanvas-nav" uk-offcanvas="mode: reveal;">
    <div class="uk-offcanvas-bar">

        <ul class="uk-nav uk-nav-default">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-header">Header</li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>
</div>
        
      
        <div style="height: 2000px">
            132
        </div>
        
        </div>
        
        <footer>
            <div>
                <div class="footer-img">
                    <img id="img1" class="sticky-bot" src="img/tr.png">
                    <img id="img2" class="sticky-bot" src="img/tr.png">
                    <img id="img3" class="sticky-bot mt" src="img/cir.png" style="height: 0px; width: 0px;">
                    
                </div>
            </div>
            <script type="text/javascript">
                var posImg1=0;
                var posImg2;
                var img1, img2, anchoImg,avance;
                $(document).ready( function ()
                {
                    start();
                });
                function start()
                {
                    var img=document.getElementById("img1");
                    var alto=img.clientHeight/2;
                    anchoImg=img.clientWidth;
                    document.getElementById("img3").style.height = alto+"px";
                    document.getElementById("img3").style.width = alto+"px";
                    img1=document.getElementById("img1");
                    img2=document.getElementById("img2");
                    img2.style.margin = "0px 0px 0px 0px";
                    img1.style.margin = "0px 0px 0px 0px";
                    posImg2=anchoImg;
                    posImg1=0;
                };
            $( window ).scroll(function() {
                posImg1=posImg1-3;
                posImg2=posImg2-3;
                img1.style.margin = "0px 0px 0px "+posImg1+"px";
                img2.style.margin = "0px 0px 0px "+posImg2+"px";
                if(posImg1<(anchoImg*-1))
                {
                    posImg1=anchoImg;
                }
                if(posImg2<(anchoImg*-1))
                {
                    posImg2=anchoImg;
                }               
            });
            $( window ).resize( function ()
            {
                start();
            });
            </script>
        </footer>
    </body>
</html>
