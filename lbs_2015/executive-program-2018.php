<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )
  exit;

/**
 * Template Name: Executive Program 2018
 * @file executive-program-2018.php
 */
$shd = get_field( 'sub_home_description' );
$shp = get_field( 'sub_home_paragraf' );
$tema = get_field( 'tematiche' );
wp_enqueue_style( 'Executive_Styles', '/wp-content/themes/lbs_2015/css/executive-new.css' );
get_header( 2017 );?>
<style>
.finder-text {
    background-color: rgba(10, 10, 10, 0.10);
}
</style>
<?php
$sub_home = array();
$sub_home[ 'it' ] = 'L&rsquo;Executive Education della Luiss Business School mira a  supportare i partecipanti a <strong>massimizzare il loro business impact</strong>,  sostenendo la loro <strong>crescita personale e professionale</strong>, attraverso un  percorso di <strong>apprendimento iper-personalizzato </strong>e una <strong>metodologia  didattica innovativa</strong>. I programmi sono disegnati per <strong>accelerare</strong> la carriera, consolidare i punti di forza e agire sulle  aree di miglioramento, ma si indirizzando anche a chi desidera <strong>reinventarsi (</strong>ovvero cambiare ruolo,
   ';

$sub_home[ 'en' ] = 'FOSTER YOUR CAREER PATH, IMPROVE YOUR LEADERSHIP SKILLS AND YOUR FUNCTIONAL AND TECHNICAL COMPETENCES. THE EXECUTIVE PROGRAMMES ARE AIMED AT MANAGERS, ENTREPRENEURS AND PROFESSIONALS ';


$sub_home_2[ 'it' ] = 'settore o funzione sviluppando le competenze e il network necessario) o riprendere in mano il proprio percorso professionale ottenendo le competenze e gli strumenti utili per ripartire con la propria carriera. I fattori chiave che rendono unica e all’avanguardia l’esperienza Executive Luiss Business School sono l’uso di una metodologia didattica esperienziale, l’attenzione al networking e i servizi EduCare che completano il percorso formativo scelto.';

$sub_home_2[ 'en' ] = 'WILLING TO DEVELOP NOT-CONVENTIONAL SKILLS AND TO LEARN THROUGH PROBLEM-SOLVING AND ACTION-LEARNING BASED METHODS, LABS AND THE NETWORKING.';
?>

<div class="container-fluid">
  <div class="titolo">
    <div class="container">
      <div class="row">
        <h1 class="titolazione_h1">
          <?php
          the_title();
          ?>
        </h1>
        <div class="row" style="padding-top: 3%; margin-bottom: 2%">
          <div class="col-md-6 hidden-xs">
            <p class="hidden-xs course-summary">
              <?php
              echo $sub_home[ ICL_LANGUAGE_CODE ];
              ?>
            </p>
          </div>
          <div class="col-md-6 hidden-xs">
            <p class="hidden-xs">
              <?php
              echo $sub_home_2[ ICL_LANGUAGE_CODE ];
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="featurette-divider"></div>
<?php
//$tematica = array();
//	$tematica[ 'it' ] = 'L&#8217;offerta completa suddivisa per tematica';
//	$tematica[ 'en' ] = '';
?>
<section class="body-section offerta">
<div class="container">
<div class="row">
  <?php
  if ( ICL_LANGUAGE_CODE == 'it' ):
    ?>
  <div class="col-lg-12">
    <h2 class="block-title white-style h2">
      <?php
      //echo $tematica[ ICL_LANGUAGE_CODE ];
      ?>
      L’OFFERTA FORMATIVA EXECUTIVE EDUCATION</h2>
    <h3 class="block-title white-style"> L’offerta formativa <strong>Executive Education</strong>E è progettata e sviluppata in collaborazione con i Corporate Partner Luiss Business School,  fra i quali si distinguono le maggiori istituzioni, aziende, organizzazioni e imprese multinazionali in Italia.  <br>
      Il continuo confronto con il tessuto imprenditoriale e i maggiori player del sistema economico, permette di sviluppare programmi in linea con i principali trend emergenti, coprendo numerose aree tematiche in termini di general management, funzione e specializzazione aziendale e industry.</h3>
  </div>
</div>
<div class="row" style="margin-top: 3%">
<div class="col-md-4">
  <div class="row">
    <div class="col-lg-10">
      <h3 class="white-style h2">General Management</h3>
    </div>
  </div>
  <div class="col-lg-9">
    <p  class="white-style ">Per approcciare la leadership con un nuovo mindset, acquisendo un set di strumenti utile a diventare un manager orientato all’innovazione, capace di raccogliere le sfide di un ambiente competitivo in continuo cambiamento:</p>
    <ul>
      <li class=" white-style"><a href="https://businessschool.luiss.it/offerta-formativa/executive-program/management-family-business/">Management & Family Business </a></li>
    </ul>
  </div>
</div>
<div class="col-md-4">
<div class="row">
  <div class="col-lg-10">
    <h3 class="white-style h2">SPECIALISATION</h3>
  </div>
</div>
<div class="col-lg-9">
<p  class="white-style ">Per acquisire una conoscenza approfondita, consolidare la propria preparazione e sviluppare competenze specifiche per trasformare gli obiettivi strategici aziendali in azioni concrete e risultati misurabili:</p>
<ul>
<li class=" white-style"><a href="/offerta-formativa/executive-program/accounting-finance-control/">Accounting, Finance & Control </a></li>
<li class=" white-style"><a href="/offerta-formativa/executive-program/communication-lobbying/">Communication & Lobbying </a></li>
<li class=" white-style"><a href="/offerta-formativa/executive-program/tax-legal/"> Governance, Risk & Compliance</a></li>
<li class=" white-style"><a href="/offerta-formativa/executive-program/marketing-sales-communication/"> Marketing & Sales </a></li>
<li class=" white-style"><a href="/offerta-formativa/executive-program/people-and-organization-development/">People, Organization Development & Leadership </a></li>
<li class=" white-style"><a href="/offerta-formativa/executive-program/project_management/">Project Management </a></li>
</div>
</div>
<div class="col-md-4">
  <div class="row">
    <div class="col-lg-10">
      <h3 class="white-style h2">Industry </h3>
    </div>
  </div>
  <div class="col-lg-9">
    <p  class="white-style ">Per diventare esperto di settore, conoscerne in maniera approfondita le dinamiche e i trend emergenti e implementare soluzioni alternative, raccogliendone le opportunità e le sfide chiave:</p>
    <ul>
      <li class=" white-style"><a href="/offerta-formativa/executive-program/public-sector-healthcare-and-no-profit/">Healthcare, Public Sector & No Profit </a></li>
      <li class=" white-style"><a href="/offerta-formativa/executive-program/management-innovation/">Innovation, Big Data & Digital Transformation </a></li>
      <li class=" white-style"><a href="/offerta-formativa/executive-program/real-estate/"> Real Estate & Infrastructure</a></li>
      <li class=" white-style"><a href="/offerta-formativa/executive-program/sport-tourism-leisure-culture/">Sport, Tourism, Leisure & Culture </a></li>
      <li class=" white-style"><a href="/offerta-formativa/executive-program/banking-insurance-and-other-financial-institutions/">Banking, Insurance and other Financial Institutions </a></li>
    </ul>
  </div>
</div>
</div>
</div>
</section>
	
<section class="body-section body-section-explorer" style="background-color:#3C3C3C">
<div class="container">
<div class="col-md-12">
<div class="block">
<div class="content row">
<h2 class="block-title h2 white-style">Flex Executive Programme</h2>
<h3 class="block-title white-style"> I FLEX EXECUTIVE PROGRAMME MIRANO A FORNIRE UN’ESPERIENZA FORMATIVA DI ECCELLENZA
E ALLO STESSO TEMPO FLESSIBILE E ADATTABILE SIA ALLE ESIGENZE PERSONALI CHE AGLI IMPEGNI PROFESSIONALI,
ATTRAVERSO UNA MODALITÀ DI EROGAZIONE DIGITALE, CHE PREVEDE IL 90% DELLE LEZIONI IN DISTANCE LEARNING
E ATTIVITÀ DI NETWORKING IN PRESENZA.
</h3>	
	<br><br>
<p>	<a class="button arr white-style featured-links" href="/flex/" ><strong>Scopri tutti i corsi FLEX</strong></a></p>
	
</div>
</div>
</div>
</div>
</section>
	
<?php
elseif ( ICL_LANGUAGE_CODE == 'en' ):
  ?>
<section class="body-section" style="background-color: #FFF padding-top: 20px">
  <div class="container">
    <h2 class="block-title h2">MANAGEMENT & FAMILY BUSINESS </h2>
    <div class="row">
      <div class="col-md-4 col-xs12 triangle_family">
        <div class="card card-content" >
          <h3 class="card-title"> <a title="WINNING CHINESE CUSTOMERS
" href="https://businessschool.luiss.it/winning-chinese-customers/" class=""> <span class="a-card" > WINNING CHINESE CUSTOMERS </span></a> </h3>
          <div class="card-action">
            <div class="col-md-5 col-xs12" style="border-right: 1px solid #ebebeb">
              <p style="color:#2a2a2a; text-align: center"> LENGTH<br>
                <span class="glyphicon  glyphicon-calendar fa-3x icon-tab"/></span><br>
                1 MONTH </p>
            </div>
            <div class="col-md-7 col-xs12">
            <!--  <p class="blue">Rome: 23/03/2020</p>-->
              <hr>
              <div class="blue"> <a href="https://businessschool.luiss.it/winning-chinese-customers/download-brochure/" class="button arr featured-links"> Download Brochure </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs12 triangle_family">
        <div class="card card-content" >
          <h3 class="card-title"> <a title="Global Family Business Management
" href="https://businessschool.luiss.it/family-business-management/" class=""> <span class="a-card" >Global Family Business Management </span></a> </h3>
          <div class="card-action">
            <div class="col-md-5 col-xs12" style="border-right: 1px solid #ebebeb">
              <p style="color:#2a2a2a; text-align: center"> LENGTH<br>
                <span class="glyphicon  glyphicon-calendar fa-3x icon-tab"/></span><br>
                3 MONTH </p>
            </div>
            <div class="col-md-7 col-xs12">
              <p class="blue">Rome: 26/03/2020</p>
              <hr>
              <div class="blue"> <a href="https://businessschool.luiss.it/family-business-management/download-brochure/" class="button arr featured-links"> Download Brochure </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--
 <h2 class="block-title h2">MARKETING & SALES</h2>
 
 <div class="row">
<div class="col-md-4 col-xs12 triangle_marketing">
				<div class="card card-content" >
					<h3 class="card-title"> <a title="International Executive Programme in Marketing" href="https://businessschool.luiss.it/offerta-formativa/executive-program/international-executive-programme-in-marketing/" class=""> <span class="a-card" > International Executive Programme in Marketing</span></a> </h3>
					<div class="card-action">
						<div class="col-md-5 col-xs12" style="border-right: 1px solid #ebebeb">


							<p style="color:#2a2a2a; text-align: center">
								LENGTH<br>
								<span class="glyphicon  glyphicon-calendar fa-3x icon-tab"/></span><br>
															</p>



						</div>
						<div class="col-md-7 col-xs12">

							<p class="blue">Rome: 10/02/2020</p>
							<hr>

							<div class="blue">
								<a href="https://businessschool.luiss.it/international-executive-marketing/download-brochure/" class="button arr featured-links"> Download Brochure </a>							</div>
						</div>

					</div>
				</div>
			</div>

</div>
-->
    
    <h2 class="block-title h2" style="margin-top: 5rem">SPORT, TOURISM, LEISURE & CULTURE</h2>
    <div class="row">
      <div class="col-md-4 col-xs12 triangle_sport">
        <div class="card card-content" >
          <h3 class="card-title"> <a title="International Hotel Management" href="https://businessschool.luiss.it/offerta-formativa/executive-program/international-executive-programme-in-hotel-management/" class=""> <span class="a-card" > International Hotel Management</span></a> </h3>
          <div class="card-action">
            <div class="col-md-5 col-xs12" style="border-right: 1px solid #ebebeb">
              <p style="color:#2a2a2a; text-align: center"> LENGTH<br>
                <span class="glyphicon  glyphicon-calendar fa-3x icon-tab"/></span><br>
                21 days (5 months) </p>
            </div>
            <div class="col-md-7 col-xs12">
              <p class="blue">Rome: 28/01/2020</p>
              <hr>
              <div class="blue"> <a href="/international-programme-hotel-management/download-brochure/" title="Scarica modulo recesso" class="button arr featured-links">Download Brochure</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    endif;
    ?>
    <?php
    $select_first_choice[ 'it' ] = 'Scegli una tematica';
    $select_first_choice[ 'en' ] = 'Choose an Area';
    ?>
    <div class="tematiche-mobile">
      <select id="tematica" name="tematica" class="col-xs-12">
        <option value="">
        <?php
        echo $select_first_choice[ ICL_LANGUAGE_CODE ];
        ?>
        </option>
        <?php
        $terms = get_terms( 'tematiche' );
        $page_title = trim( html_entity_decode( get_the_title() ) );

        if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
          foreach ( $terms as $term ) {
            $selected = '';
            if ( !( strcmp( $term->name, $page_title ) ) ) {
              $selected = ' selected="selected" ';
            }
            echo '<option value="' . $term->term_id . '" ' . $selected . ' data-url="' . $term->slug . '">' . $term->name . '</option>';
          } // END foreach
        } // END if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
        ?>
      </select>
      <script>
					document.getElementById( 'tematica' ).onchange = function () {
						window.location.href = this.children[ this.selectedIndex ].getAttribute( 'data-url' );
					}
				</script> 
    </div>
  </div>
  </div>
</section>
<?php
if ( ICL_LANGUAGE_CODE == 'it' ):
  ?>
<style type="text/css">



#accordion .panel {
  border-radius: 0;
  border: 0;
  margin-top: 0px;
}
#accordion a {
  display: block;
  padding: 10px 15px;
  text-decoration: none;
}
#accordion .panel-heading a.collapsed:hover,
#accordion .panel-heading a.collapsed:focus {
  background-color: #f2f2f2;
  transition: all 0.2s ease-in;
}
#accordion .panel-heading a.collapsed:hover::before,
#accordion .panel-heading a.collapsed:focus::before {
  color: white;
}
#accordion .panel-heading {
  padding: 0;
  border-radius: 0px;
  text-align: center;
}
#accordion .panel-heading a:not(.collapsed) {

  background-color: #f2f2f2;
  transition: all 0.2s ease-in;
}

/* Add Indicator fontawesome icon to the left */
#accordion .panel-heading .accordion-toggle::before {
  font-family: 'FontAwesome';
  /*content: '\f00d';*/
  float: left;

  font-weight: lighter;
  transform: rotate(0deg);
  transition: all 0.2s ease-in;
}
#accordion .panel-heading .accordion-toggle.collapsed::before {
  color: #444;
  transform: rotate(-135deg);
  transition: all 0.2s ease-in;
}
.panel-body {
    background: 
    #f2f2f2;
}
.panel {
	margin-bottom: 20px;
    padding: 20px;
}
</style>
<section class="body-section" style="background-color: #fff;">
<div class="container">
<div class="row">
  <div class="col-lg-12">
    <h2  style="text-transform: none">EduCare</h2>
    <p><?php echo get_field('intro_experience') ?></p>
  </div>
</div>
<div class="row ">
  <div class="col-md-4 col-xs-12 divider">
    <h3>SVILUPPO PERSONALE</h3>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <div id="accordion" class="panel-group">
      <div class="panel">
        <div class="panel-heading">
          <h5 class="panel-title"> <a href="#panelBodyOne" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">Personality assessment</a> </h5>
        </div>
        <div id="panelBodyOne" class="panel-collapse collapse">
          <div class="panel-body">
            <p>Attraverso la compilazione di un questionario online e successiva restituzione individuale da parte di un Assessor qualificato, i Personality Assessment forniscono un quadro approfondito delle caratteristiche personali e del potenziale. Questi strumenti, scientificamente validati e utilizzati a livello internazionale, accrescono la consapevolezza dei punti di forza e delle possibili aree di sviluppo a livello personale e nel proprio contesto organizzativo, oltre a favorire l’integrazione operativa dei contenuti discussi in aula, aumentandone l’impatto.</p>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h5 class="panel-title"> <a href="#panelBodyTwo" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">Individual Coaching</a> </h5>
        </div>
        <div id="panelBodyTwo" class="panel-collapse collapse">
          <div class="panel-body">
            <p>Attraverso i percorsi di Individual Coaching con un professionista qualificato dalle migliori associazioni internazionali, in un contesto non valutativo e confidenziale, i partecipanti potranno personalizzare l’apprendimento in aula applicandolo al proprio contesto, integrando la loro storia professionale con gli obiettivi futuri e acquisendo una migliore consapevolezza delle proprie risorse, aree di forza e di sviluppo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-xs-12 divider">
    <h3>SVILUPPO PROFESSIONALE & NETWORKING</h3>
    <div id="accordion" class="panel-group">
      <div class="panel">
        <div class="panel-heading">
          <h5 class="panel-title"> <a href="#1panelBodyOne" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1">L4E – Leader for Executive</a> </h5>
        </div>
        <div id="1panelBodyOne" class="panel-collapse collapse">
          <div class="panel-body">
            <p>Incontri con leader, top manager ed esponenti del mondo aziendale, fortemente orientati all’operatività e alla gestione pratica delle dinamiche aziendali. </p>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h5 class="panel-title"> <a href="#1panelBodyTwo" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1">Career Advisory</a> </h5>
        </div>
        <div id="1panelBodyTwo" class="panel-collapse collapse">
          <div class="panel-body">
            <p>Il Career Advisory consiste in una serie di incontri one-to-one che permettono ai partecipanti di confrontarsi sulle sfide che caratterizzano i diversi momenti di carriera, come il raggiungimento di posizione di leadership il cambiamento del percorso di carriera finora svolto e la costruzione di competenze professionali specifiche.</p>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h5 class="panel-title"> <a href="#1panelBodyTree" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1">Mentoring</a> </h5>
        </div>
        <div id="1panelBodyTree" class="panel-collapse collapse">
          <div class="panel-body">
            <p>Il Mentoring supporta i partecipanti affidandoli a manager esperti e leader di comprovato spessore con i quali condividere esperienze e conoscenze. </p> 
             <p> I Mentor sostengono i partecipanti guidandoli nell’ affrontare le principali sfide del loro percorso professionale e contribuendo a fornire leve strategiche e prospettive innovative, che derivano dall’esperienza sul campo, per costruire competenze specifiche e distintive. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-xs-12 divider">
    <h3>BUSINESS IMPACT</h3>
    <div id="accordion" class="panel-group">
      <div class="panel">
        <div class="panel-heading">
          <h5 class="panel-title"> <a href="#2panelBodyOne" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2">Business Challenge</a> </h5>
        </div>
        <div id="2panelBodyOne" class="panel-collapse collapse">
          <div class="panel-body">
            <p>I partecipanti avranno l’opportunità di presentare un progetto su cui sono impegnati in azienda, avvalendosi della competenza e dell’esperienza dei  docenti Luiss Business School e dei colleghi del corso per un confronto costruttivo.</p>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h5 class="panel-title"> <a href="#3panelBodyTwo" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2">Project Work</a> </h5>
        </div>
        <div id="3panelBodyTwo" class="panel-collapse collapse">
          <div class="panel-body">
            <p>I partecipanti sviluppano un progetto concreto, realizzato individualmente o in gruppo, attraverso cui sperimentare attivamente e concretamente i contenuti didattici appresi nell’ambito in aula, con il supporto attivo della faculty dello stesso. Gli output progettuali sono successivamente oggetto di analisi, confronto e discussione.</p>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h5 class="panel-title"> <a href="#4panelBodyTree" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2">Executive Follow-up </a> </h5>
        </div>
        <div id="4panelBodyTree" class="panel-collapse collapse">
          <div class="panel-body">
            <p>A conclusione del percorso scelto, i partecipanti avranno un successivo momento di confronto con la faculty per verificare l’apprendimento e discutere come le conoscenze acquisite in aula sono state applicate e in che modo hanno influenzato le azioni e i comportamenti nel contesto lavorativo di riferimento. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</section>
<?php
elseif ( ICL_LANGUAGE_CODE == 'en' ):
  ?>
<?php
endif;
?>
	
	
	
	
<div class="container-fluid">
  <div class="titolo">
    <div class="container">
      <div class="row">
       
        <div class="row" style="padding-top: 3%; margin-bottom: 2%">
          <div class="col-md-6 ">
			  
			  
			 <h3 class="block-title h2"> EXPERIENTIAL LEARNING</h3>
			 <p>L&rsquo;offerta formativa Executive Education della Luiss  Business School si caratterizza per una metodologia didattica basata  sull&rsquo;Experiential Learning (apprendimento esperienziale) che coinvolge il  partecipante ben oltre la didattica tradizionale attraverso la riflessione  sulle <strong>esperienze di lavoro vissute</strong>, <strong>simulazioni</strong>, <strong>giochi di  ruolo</strong>, <strong>business case ed esercitazioni</strong>.<br>
  I partecipanti sperimentano concretamente le sfide dei  contesti organizzativi complessi. Durante la riflessione guidata dal docente,  ciascuno osserva e interpreta i propri comportamenti, valutando possibili  alternative al suo modo di agire e pensare, attivando un processo di analisi e  cambiamento fondato sull&rsquo;esperienza. <br>
  L&rsquo;apprendimento  esperienziale consente di migliorare le capacità di <strong>Problem</strong> <strong>Solving</strong>,  il <strong>Critical Thinking </strong>e la <strong>Creatività</strong>. </p>

			  
          
            
				
				 
			 
			  
			  
				
        
          </div>
          <div class="col-md-6">
			  <h3 class="block-title h2"> ATTIVITÀ DI NETWORKING</h3>
       
             
				<p>Vuoi  essere il protagonista della TUA carriera? <br>
  <br>
  Contribuisci allo sviluppo della Community Executive  Luiss BS&nbsp; <br>

  <strong>PROMUOVI L’INTERAZIONE</strong><br>
  Per creare un network di professionisti che condividono  un interesse comune di sviluppo personale e professionale, i partecipanti  Executive Education saranno coinvolti in eventi di Networking per attivare un  processo spontaneo di trasferimento reciproco di conoscenze, esperienze e best  practices. <br>

  <strong> COINVOLGI IL TUO TEAM</strong><br>
  Diventa Ambassador Luiss BS! Fai la differenza per  proattività e propensione ad alimentare e mantenere i contatti sociali. <br>
  Gli Ambassador saranno un punto di riferimento per  costruire un network trasversale all’interno della Community <br>

  <strong> TROVA LA TUA ISPIRAZIONE</strong><br>
  Per coltivare relazioni utili per il proprio percorso  professionale i partecipanti saranno coinvolti in Conferenze, Seminari e  Networking Cafè. Saranno organizzati Leader 4 Executive nel corso dei quali  sarà previsto uno Speech di un esponente di spicco del mondo aziendale e una  sessione di Q&amp;A per favorire un confronto proficuo dal punto di vista  professionale. <br>

<strong> RESTA IN CONTATTO</strong><br>
  Vuoi rimanere in contatto con la Community Luiss BS e  contattare nuovi profili con cui instaurare una Business Opportunity? Luiss BS  Connect è lo strumento giusto. Una piattaforma social dedicata alla Community  Luiss BS, efficace per condividere news, eventi, vacancies e per interagire con  una platea di professionisti uniti dalla formazione Luiss BS. </p>
				
				

          </div>
        </div>
      </div>
    </div>
  </div>
</div>	
	
	
	
	
<section class="body-section body-section-explorer" style="background-color:#3C3C3C">
  <div class="container">
    <div class="col-md-6" id="course-finder-wrapper">
      <div class="block">
        <div class="content row">
          <h2 class="block-title h2 white-style">Programme Explorer</h2>
          <?php
          $finder_description = array();
          $finder_description[ 'it' ] = 'Vuoi scoprire qual è il corso ideale per te?<br>Scoprilo in 3 semplici step!';
          $finder_description[ 'en' ] = "Do you want to discover your ideal course?<br>Here are 3 simple steps of our Programme Finder!";

          $finder_button_open = array();
          $finder_button_open[ 'it' ] = 'Inizia da qui';
          $finder_button_open[ 'en' ] = 'Find your Course';

          $finder_button_close = array();
          $finder_button_close[ 'it' ] = 'Chiudi';
          $finder_button_close[ 'en' ] = 'Close';

          $finder_button_button_send = array();
          $finder_button_button_send[ 'it' ] = 'Trova il tuo corso';
          $finder_button_button_send[ 'en' ] = 'Find your Course';

          $finder_form_action = array();
          $finder_form_action[ 'it' ] = '/offerta-formativa/course-finder/';
          $finder_form_action[ 'en' ] = '/en/programs/course-finder/';


          ?>
          <div class="finder-text" style="background-color:#ebebeb ">
            <p class="finder-description"> <?php echo $finder_description[ICL_LANGUAGE_CODE]; ?> </p>
            <form id="form-course-finder" action="<?php echo $finder_form_action[ICL_LANGUAGE_CODE] ?>" method="get">
              <ul>
                <?php

                $selected_taxonomies = array( 'lingue', 'lunghezza_corsi', 'tematiche' );
                $custom_taxonomies = corsi_get_taxonomies( $selected_taxonomies );
                $choose_label[ 'it' ] = 'scegli';
                $choose_label[ 'en' ] = 'choose';
                foreach ( $custom_taxonomies as $taxonomy ) {
                  ?>
                <li>
                  <label for="<?php echo $taxonomy[ICL_LANGUAGE_CODE]['name'] ?>"> <?php echo $taxonomy[ICL_LANGUAGE_CODE]['label'] ?> </label>
                  <select name="<?php echo $taxonomy[ICL_LANGUAGE_CODE]['name'] ?>" id="<?php echo $taxonomy[ICL_LANGUAGE_CODE]['name'] ?>">
                    <option value=""> <?php echo $choose_label[ICL_LANGUAGE_CODE]; ?> </option>
                    <?php
                    $terms = get_terms( $taxonomy[ ICL_LANGUAGE_CODE ][ 'name' ] );


                    if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
                      foreach ( $terms as $term ) {
                        $selected = '';
                        if ( isset( $_GET[ $taxonomy[ ICL_LANGUAGE_CODE ][ 'name' ] ] ) && ( $taxonomy[ ICL_LANGUAGE_CODE ][ 'name' ] == $term->term_id ) ) {
                          $selected = ' selected="selected" ';
                        }
                        echo '<option value="' . $term->term_id . '" ' . $selected . '>' . $term->name . '</option>';
                      } // END foreach
                    } // END if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                    ?>
                  </select>
                </li>
                <?php } // END foreach ?>
              </ul>
              <p>
                <button class="finder-send-button" type="submit"> <?php echo $finder_button_button_send[ICL_LANGUAGE_CODE]; ?> </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	<?php edit_post_link('<p class="button arr featured-links">Modifica Pagina</p>', ''); ?>
<?php
get_footer( 2017 );
?>
