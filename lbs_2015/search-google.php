<?php
/*
Template Name: cerca
*/
get_header(); 
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
       
<div id="cse-search-results"></div>
<script>
  (function() {
    var cx = '012139100949894875782:1dp0jtr1a6w';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchresults-only></gcse:searchresults-only>     

        
      </div>
    </main>
  </div>
  <!--END .row --> 
</div>
<!--END .container -->
<?php 

get_footer(ICL_LANGUAGE_CODE);

?>

