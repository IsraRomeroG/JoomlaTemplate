<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'rendererheader.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon.ico" type="image/x-icon">
</head>

<body>
<header>
    <div id="header">
    	<div id="logoBlock">
            <a href="<?php echo $this->baseurl ?>/"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logo.png" alt="Acerca de HTML" id="logoImg" /></a>
        </div><nav>
    	<jdoc:include type="modules" name="menu" />
    	</nav>
    </div>
</header>
<div id="up"><!--Este div está la sombra superior-->
	<jdoc:include type="modules" name="top" />
</div>
<div id="page">
    <div id="contenido">
    	<jdoc:include type="modules" name="breadcrumb" />
		<jdoc:include type="component" />
	</div><aside>
        <jdoc:include type="modules" name="aside" />
            <!--Adsense 300x600->
            <div class="pub300x600">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <ins class="adsbygoogle"
                     style="display:inline-block;width:300px;height:600px"
                     data-ad-client="ca-pub-1258438679306279"
                     data-ad-slot="9421414645"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <! -Fin Adsense-->

            <!--Adsense 160x600->
            <div class="pub160x600">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <ins class="adsbygoogle"
                     style="display:inline-block;width:160px;height:600px"
                     data-ad-client="ca-pub-1258438679306279"
                     data-ad-slot="4851614242"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <! -Fin Adsense-->
    </aside>
</div>

<div id="down"></div>
<!--jdoc:include type="modules" name="footer" /-->
    <footer>
        <p>© Copyright - Acerca de HTML - Todos los derechos reservados<br />
        Queda prohibida la distribución total o parcial del contenido de este sitio web sin el previo consentimiento del autor.</p>
    </footer>
</body>
</html>