<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header(2017); 
?>

<?php $titolo = array();
		$titolo['it'] = 'Pagina non trovata';
		$titolo['en'] = 'Page not found';
?>

<?php $descrizione = array();
		$descrizione['en'] = '  <p>The page you are looking for was not found. The page may have been moved or deleted, or the URL may be spelled incorrectly.</p>
<p>You can return to the <a href="http://www.businessschool.luiss.it/">LUISS Business School Home Page</a>&nbsp;here. If you reached this page from a link, please send a message to <a href="mailto:webmasterlbs@luiss.it">webmasterlbs@luiss.it</a>.</p>';
		$descrizione['it'] = '<p>Spiacenti, la pagina richiesta non è stata trovata. Forse:</p>
<ul>
<li>La pagina è stata spostata</li>
<li>La pagina non esiste più</li>
<li>L&#8217;indirizzo scritto non è corretto</li>
</ul>
<p>Potete iniziare di nuovo la navigazione dalla&nbsp;<a href="http://www.businessschool.luiss.it/" title="LUISS Business School Home Page">Home Page</a>&nbsp;oppure, se siete arrivati a questa pagina da un collegamento, segnalare il link a <a href="mailto:webmasterlbs@luiss.it">webmasterlbs@luiss.it</a>.</p>';
?>


<header id="content-title" class="wide-row">
  <div class="container">
    <div class="row">
    	<div class="sommario col-md-8">
      		<h1><?php echo $titolo[ICL_LANGUAGE_CODE]; ?></h1>
      	
        </div> 
    </div>
    <!--END .row --> 
  </div>
  <!--END .container --> 
</header>
<div class="container">
  <div class="row">
    <main id="main" class="site-main" role="main">
      <div id="page-content" class="col-md-12 columns  space">
       
       <?php echo $descrizione[ICL_LANGUAGE_CODE]; ?>
        

        
      </div>
    </main>
  </div>
  <!--END .row --> 
</div>
<!--END .container -->
<?php get_footer(2017); ?>
