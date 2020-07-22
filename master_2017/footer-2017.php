 <?php 
		$certificazioni_riconoscimenti = array();
		$certificazioni_riconoscimenti['it'] = 'CERTIFICAZIONI E RICONOSCIMENTI';
		$certificazioni_riconoscimenti['en'] = "AFFILIATIONS AND ACCREDITATIONS";
?>
 <?php 
		$contatti = array();
		$contatti['it'] = 'Contatti';
		$contatti['en'] = "Contact Information";
?>
<footer>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h2 class="headline"><?php echo $certificazioni_riconoscimenti[ICL_LANGUAGE_CODE]; ?></h2>
          <div class="footer-logos">
            <ul>
              <li class="equis"><a href="<?php echo site_url() ?>/perche-luiss-bs/certificazioni-e-riconoscimenti/" target="_blank">Equis</a></li>
              <li><a href="<?php echo site_url() ?>/perche-luiss-bs/certificazioni-e-riconoscimenti/" target="_blank"><img src="http://businessschool.luiss.it/wp-content/uploads/2015/05/ins_ISO_9001_COL_footer.-bwjpg.jpg" alt="Azienda con sistema di Gestione qualità certificato da DNV GL iISO 9001"  width="100" class="img-responsive"/></a></li>
              <li> <a href="<?php echo site_url() ?>/perche-luiss-bs/certificazioni-e-riconoscimenti/" target="_blank"><img src="http://businessschool.luiss.it/wp-content/uploads/2015/05/asfor-ordinario-footer-bw.jpg" alt="LUISS Business School è socio ASFOR (Associazione per la Formazione alla Direzione Aziendale)."  width="100" class="img-responsive" /></a></li>
              <li> <a href="<?php echo site_url() ?>/perche-luiss-bs/certificazioni-e-riconoscimenti/" target="_blank"><img src="http://businessschool.luiss.it/wp-content/uploads/2015/05/rep-luiss-footer-bw.jpg" alt="LUISS Business School è REP – Registrated Education Provider del PMI, il Project Management Institute." width="100" class="img-responsive" /></a></li>
              <li> <a href="<?php echo site_url() ?>/perche-luiss-bs/certificazioni-e-riconoscimenti/" target="_blank"><img src="<?php echo site_url() ?>/wp-content/uploads/2015/05/regione-lazi-footero-bw.jpg" alt="LUISS Business School è struttura accreditata presso la Regione Lazio per le attività di formazione."  width="100" class="img-responsive" /></a></li>
            </ul>
          </div>
        </div>
        
        <!-- Address -->
        <div class="col-md-3 map-img">
          <h2 class="headline"><?php echo $contatti[ICL_LANGUAGE_CODE]; ?></h2>
          <address>
          Villa Blanc,
          Via Nomentana, 216 - 00162 Roma <br />
          Roma, Italia <br />
          Tel. +39 06 852251 <br />
          Fax +39 06 85222400 <br />
          Email: <a href="mailto:luissbs@luiss.it" class="">luissbs@luiss.it </a>
          </address>
        </div>
        <div class="col-md-4">
          <ul class="footer-socials list-inline">
            <li><a href="https://www.facebook.com/pages/LUISS-Business-School/152306674798769" ><span class="social-icon icon-facebook"></span></a></li>
            <li><a href="https://twitter.com/LUISSBusiness"><span class="social-icon icon-twitter"></span></a></li>
            <li><a href="https://instagram.com/luissbusiness/"><span class="social-icon icon-instagram "></span></a> </li>
            <li><a href="https://www.flickr.com/photos/luissbusiness/albums"><span class="social-icon icon-flickr"></span></a> </li>
            <li><a href="https://www.youtube.com/user/luissmba"><span class="social-icon icon-youtube"></span></a> </li>
            <li><a href="https://plus.google.com/u/0/b/103617290338191049200/103617290338191049200/posts"><span class="social-icon icon-google-plus"></span></a></li>
            <li><a href="https://www.linkedin.com/edu/school?id=42230"><span class="social-icon icon-linkedin"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--/footer-->
  
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>The PMI Registered Education Provider logo is a registered mark of the Project Management Institute, Inc. <br>© LUISS Business School Villa Blanc,Via Nomentana, 216 00162 Roma, Italia - Centralino T 06 852251 - P.IVA 01067231009 </p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- .site-footer -->

<?php wp_footer(); ?>
</div>
<!-- END  #site-canvas -->
</div>
<!-- END #site-wrapper --> 
<!-- SNIPCART -->
<script src="https://businessschool.luiss.it/wp-content/themes/lbs_2015/js/snipcart-customizations.js"></script>
<script async data-main="<?php echo get_bloginfo('template_url') ?>/js/app" src="<?php echo get_bloginfo('template_url') ?>/js/require.js"></script>




<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63172324-1', 'auto');
  ga('send', 'pageview');

</script> 


<script type="text/javascript">
/*<![CDATA[*/
(function() {
var sz = document.createElement('script'); sz.type = 'text/javascript'; sz.async = true;
sz.src = '//siteimproveanalytics.com/js/siteanalyze_6100150.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sz, s);
})();
/*]]>*/
</script>


</body></html>