<?php

// Exit if accessed directly

if (!defined('ABSPATH'))
    exit;
/**
 * Template Name: MBA 2017
 * @file mba.php
 */
get_header(2017);
?>


<?php
$lingua_corso_en       = array();
$lingua_corso_en['it'] = '<strong>LINGUA</strong> INGLESE';
$lingua_corso_en['en'] = '<strong>LANGUAGE</strong> ENGLISH';
?> <?php
$lingua_corso_it       = array();
$lingua_corso_it['it'] = '<strong>LINGUA</strong> ITALIANO';
$lingua_corso_it['en'] = '<strong>LANGUAGE</strong> ITALIAN';
?>

<?php
$durata       = array();
$durata['it'] = 'DURATA';
$durata['en'] = 'LENGTH';
?>

<?php
$inizio       = array();
$inizio['it'] = '<strong>INIZIO</strong>';
$inizio['en'] = '<strong>START</strong>';
?>

<?php
$mese_ottobre_mba       = array();
$mese_ottobre_mba['it'] = '19 Ottobre 2020';
$mese_ottobre_mba['en'] = '19 October 2020';
?>

<?php
$mese_marzo_pmba       = array();
$mese_marzo_pmba['it'] = '12 Giugno 2020';
$mese_marzo_pmba['en'] = '12 June 2020';
?>

<?php
$mese_marzo_pmba_mi       = array();
$mese_marzo_pmba_mi['it'] = '13 Novembre 2020';
$mese_marzo_pmba_mi['en'] = '13 November 2020';
?>

<?php
$mese_aprile_emba       = array();
$mese_aprile_emba['it'] = '26 Giugno 2020';
$mese_aprile_emba['en'] = '26 June 2020';
?>

<?php
$mese       = array();
$mese['it'] = 'Mesi';
$mese['en'] = 'Month';
?>

<?php
$sede       = array();
$sede['it'] = '<strong>SEDE</strong>';
$sede['en'] = '<strong>LOCATION</strong>';
?>


<?php
$roma       = array();
$roma['it'] = 'Roma';
$roma['en'] = 'Rome';
?>


<?php
$milano       = array();
$milano['it'] = 'Milano';
$milano['en'] = 'Milan';
?>

<?php
$sub_home       = array();
$sub_home['it'] = 'I nostri metodi didattici sono basati sul team work e l’action learning per garantire lo sviluppo delle capacità comportamentali e decisionali necessarie per la tua svolta professionale.';
$sub_home['en'] = 'Based on team working and action learning, our teaching develops your behaviours and decision-making skills to drive your career forward..
';
?>

<style type="text/css">

.triangle_mba:after {
    content: '';
    height: 0;
    width: 0;
    position: absolute;
    right: 15px;
    bottom: 0;
    border-left: 18px solid transparent;
    border-top: 18px solid transparent;
    border-right: 18px solid #b50840;
    border-bottom: 18px solid #b50840;
}

	.triangle_part-mba:after {
    content: '';
    height: 0;
    width: 0;
    position: absolute;
    right: 15px;
    bottom: 0;
    border-left: 18px solid transparent;
    border-top: 18px solid transparent;
    border-right: 18px solid #009bc9;
    border-bottom: 18px solid #009bc9;
}

	
		.triangle_ex-mba:after {
    content: '';
    height: 0;
    width: 0;
    position: absolute;
    right: 15px;
    bottom: 0;
    border-left: 18px solid transparent;
    border-top: 18px solid transparent;
    border-right: 18px solid #ff5d00;
    border-bottom: 18px solid #ff5d00;
}
</style>

<div class="section sub-home sub-home-master" id="sub-home">
    <div class="container">
        <div class="row sub-home-list">
            <div class="sub-home-grid">
                <div class="col-md-12">
                    <div class="sub-home-heading">
                        <header>
                            <h1>
                                <?php
echo the_title();
?>
                           </h1>
                        </header>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="featurette-divider"></div>
<section class="cards courses-cards">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="vid">
                    <img src="/wp-content/uploads/2017/07/OffertaFormativa_MBA.jpg" alt="Transform your world. Move further and faster in your future career." class="img-responsive">
                </div>
            </div>
            <div class="col-md-4 grid-row-quotes grid-col">
                <p>
                    <?php
echo $sub_home[ICL_LANGUAGE_CODE];
?>
               </p>
            </div>
        </div>
        <div class="featurette-divider"></div>


        
        
        
        
        
        

             
   
            
               <div class="row">
            <div class="col-md-12">
            
            <div class="col-md-4 col-xs12 triangle_mba">
                    <div class="card card-content " >
                        <h3 class="card-title"> <a title="" href="/mba/" class="" > <span class="a-card" > Full-Time MBA</span></a> </h3>
                        <div class="card-action">
                            
                            <div class="col-md-4 col-xs12">

                             <p>
                                    <?php
echo '<strong>';
?>  <?php
echo $durata[ICL_LANGUAGE_CODE];
								?> </strong><br> <?php
echo ' 12' ?> <?php
echo $mese[ICL_LANGUAGE_CODE];
?> 
  </p>
     </div>    
                               
                                                  <div class="col-md-4 col-xs12">

                                    <?php
echo '<p>';
?> <?php
echo $lingua_corso_en[ICL_LANGUAGE_CODE];
?>     <?php
echo '</p>';
?>
                               </div>
                                                                                        
<div class="col-md-4 col-xs12">


                                <p>
                                    <?php
echo $sede[ICL_LANGUAGE_CODE];
?><br>
                                   
                                    <?php
echo $roma[ICL_LANGUAGE_CODE];
?>
                               </p>



                            </div>
                             
                              
                              
                               <div class="col-md-4 col-xs12">


                                <p>
                                    <?php
echo $inizio[ICL_LANGUAGE_CODE];
?><br>
                                   
                                    <?php
echo $mese_ottobre_mba[ICL_LANGUAGE_CODE];
?>
                               </p>



                            </div>

                                                          
                            </div>

                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="col-md-4 col-xs12 triangle_mba">
                    <div class="card card-content " >
                        <h3 class="card-title"> <a title="" href="/mba-part-time/" class="" > <span class="a-card" > Part-time MBA</span></a> </h3>
                        <div class="card-action">
                            
                            <div class="col-md-4 col-xs12">

                             <p>
                                    <?php
echo '<strong>';
?>  <?php
echo $durata[ICL_LANGUAGE_CODE];
								?> </strong><br> <?php
echo ' 19' ?> <?php
echo $mese [ICL_LANGUAGE_CODE];
?> 
  </p>
     </div>    
                               
                                                  <div class="col-md-4 col-xs12">

                                    <?php
echo '<p>';
?> <?php
echo $lingua_corso_en[ICL_LANGUAGE_CODE];
?>     <?php
echo '</p>';
?>
                               </div>
                                                                                        
<div class="col-md-4 col-xs12">


                                <p>
                                    <?php
echo $sede[ICL_LANGUAGE_CODE];
?><br>
                                   
                                    <?php
echo $roma[ICL_LANGUAGE_CODE];
?>
                               </p>



                            </div>
                             
                              
                              
                               <div class="col-md-4 col-xs12">


                                <p>
                                    <?php
echo $inizio[ICL_LANGUAGE_CODE];
?><br>
                                   
                                    <?php
echo $mese_marzo_pmba[ICL_LANGUAGE_CODE];
?>
                               </p>



                            </div>

                                                          
                            </div>

                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                  <div class="col-md-4 col-xs12 triangle_mba">
                    <div class="card card-content " >
                        <h3 class="card-title"> <a title="" href="/mba-milan/" class="" > <span class="a-card" > Part-time MBA Milan</span></a> </h3>
                        <div class="card-action">
                            
                            <div class="col-md-4 col-xs12">

                             <p>
                                    <?php
echo '<strong>';
?>  <?php
echo $durata[ICL_LANGUAGE_CODE];
								?> </strong><br> <?php
echo ' 16' ?> <?php
echo $mese [ICL_LANGUAGE_CODE];
?> 
  </p>
     </div>    
                               
                                                  <div class="col-md-4 col-xs12">

                                    <?php
echo '<p>';
?> <?php
echo $lingua_corso_en[ICL_LANGUAGE_CODE];
?>     <?php
echo '</p>';
?>
                               </div>
                                                                                        
<div class="col-md-4 col-xs12">


                                <p>
                                    <?php
echo $sede[ICL_LANGUAGE_CODE];
?><br>
                                   
                                    <?php
echo $milano[ICL_LANGUAGE_CODE];
?>
                               </p>



                            </div>
                             
                              
                              
                               <div class="col-md-5 col-xs12">


                                <p>
                                    <?php
echo $inizio[ICL_LANGUAGE_CODE];
?><br>
                                   
                                    <?php
echo $mese_marzo_pmba_mi[ICL_LANGUAGE_CODE];
?>
                               </p>



                            </div>

                                                          
                            </div>

                        </div>
                    </div>  
                    
                    
                    
                    
                    
                    
                    
                    
                    <div class="col-md-4 col-xs12 triangle_mba">
                    <div class="card card-content " >
                        <h3 class="card-title"> <a title="" href="/emba/" class="" > <span class="a-card" > Executive MBA</span></a> </h3>
                        <div class="card-action">
                            
                            <div class="col-md-4 col-xs12">

                             <p>
                                    <?php
echo '<strong>';
?>  <?php
echo $durata[ICL_LANGUAGE_CODE];
								?> </strong><br> <?php
echo ' 17' ?> <?php
echo $mese [ICL_LANGUAGE_CODE];
?> 
  </p>
     </div>    
                               
                                                  <div class="col-md-4 col-xs12">

                                    <?php
echo '<p>';
?> <?php
echo $lingua_corso_it[ICL_LANGUAGE_CODE];
?>     <?php
echo '</p>';
?>
                               </div>
                                                                                        
<div class="col-md-4 col-xs12">


                                <p>
                                    <?php
echo $sede[ICL_LANGUAGE_CODE];
?><br>
                                   
                                    <?php
echo $roma[ICL_LANGUAGE_CODE];
?>
                               </p>



                            </div>
                             
                              
                              
                               <div class="col-md-5 col-xs12">


                                <p>
                                    <?php
echo $inizio[ICL_LANGUAGE_CODE];
?><br>
                                   
                                    <?php
echo $mese_aprile_emba[ICL_LANGUAGE_CODE];
?>
                               </p>



                            </div>

                                                          
                            </div>

                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                </div>
            
            
        </div>
        
        
        
        
        
        
        
    </div>
    </div>
    </div>
</section>
<div class="featurette-divider"></div>
 </section> 

<script src='https://cdn1.pdmntn.com/a/EkyiaDgQr.js'></script>  
 
<!--<script src='https://cdn1.pdmntn.com/a/NyUBj8ZQH.js'></script>-->
<script src="<?php
bloginfo('template_directory');
?>/js/bootstrap.min.js"></script>
<script>
    $( '.carousel' ).carousel( {
        interval: 5000 //changes the speed
    } )
</script>
 <?php
get_footer(2017);
?>