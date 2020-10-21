<?php 
$section_title['it'] = 'L’offerta formativa Executive Education';
$section_title['en'] = 'Executive Education Programmes';
$desc_1['it'] = 'Per approcciare la leadership con un nuovo mindset, acquisendo un set di strumenti utile a diventare un manager orientato all’innovazione, capace di raccogliere le sfide di un ambiente competitivo in continuo cambiamento. ';
$desc_1['en'] = '';
$desc_2['it'] = 'Per acquisire una conoscenza approfondita, consolidare la propria preparazione e sviluppare competenze specifiche per trasformare gli obiettivi strategici aziendali in azioni concrete e risultati misurabili.';
$desc_2['en'] = '';
$desc_3['it'] = 'Per diventare esperto di settore, conoscerne in maniera approfondita le dinamiche e i trend emergenti e implementare soluzioni alternative, raccogliendone le opportunità e le sfide chiave.';
$desc_3['en'] = '';  
?>

<div class="container-fluid px-0
            <?php if(is_page_template('executive-program-2018.php')) : ?>
            special-style
            <?php else : ?>
            default-style
            <?php endif; ?>
            ">
<div class="container mt-64 mb-80">
    <div class="row px-0">
    <div class="col-xs-12 mb-48">
        <h2><?php echo $section_title[ICL_LANGUAGE_CODE] ?></h2>
    </div>
    </div>
    <div class="d-flex flex-row flex-wrap align-items-stretch justify-content-between">
    <div class="mb-48 mb-lg-0 exarea">
        <div class="row">
            <div class="col-xs-12">
                <h5 class="pb-24">General Management</h5>
                <p><?php echo $desc_1[ICL_LANGUAGE_CODE] ?></p>
                <ul class="list-unstyled exarea-list p-0 m-0">
                    <li class="pt-24 px-16 pb-16"><a class="color__light_blue" href="<?php echo site_url() ?>/offerta-formativa/executive-program/management-family-business/">Management & Family Business</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mb-48 mb-lg-0 exarea">
        <div class="row">
            <div class="col-xs-12">
                <h5 class="pb-24">Specialisation</h5>
                <p><?php echo $desc_2[ICL_LANGUAGE_CODE] ?></p>
                <ul class="list-unstyled exarea-list p-0 m-0">
                    <li class="pt-24 px-16 pb-16"><a class="color__light_blue" href="<?php echo site_url() ?>/offerta-formativa/executive-program/accounting-finance-control/">Accounting, Finance & Control</a></li>
                    <li class="pt-24 px-16 pb-16"><a class="color__light_blue" href="<?php echo site_url() ?>/offerta-formativa/executive-program/communication-lobbying/">Communication & Lobbying</a></li>
                    <li class="pt-24 px-16 pb-16"><a class="color__light_blue" href="<?php echo site_url() ?>/offerta-formativa/executive-program/tax-legal/"> Governance, Risk & Compliance</a></li>
                    <li class="pt-24 px-16 pb-16"><a class="color__light_blue" href="<?php echo site_url() ?>/offerta-formativa/executive-program/marketing-sales-communication/"> Marketing & Sales</a></li>
                    <li class="pt-24 px-16 pb-16"><a class="color__light_blue" href="<?php echo site_url() ?>/offerta-formativa/executive-program/people-and-organization-development/">People, Organisation Development & Leadership</a></li>
                    <li class="pt-24 px-16 pb-16"><a class="color__light_blue" href="<?php echo site_url() ?>/offerta-formativa/executive-program/project_management/">Project Management</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mb-48 mb-lg-0 exarea">
        <div class="row">
            <div class="col-xs-12">
                <h5 class="pb-24">Industry</h5>
                <p><?php echo $desc_3[ICL_LANGUAGE_CODE] ?></p>
                <ul class="list-unstyled exarea-list p-0 m-0">
                    <li class="pt-24 px-16 pb-16"><a class="color__light_blue" href="<?php echo site_url() ?>/offerta-formativa/executive-program/public-sector-healthcare-and-no-profit/">Healthcare, Public Sector & No Profit</a></li>
                    <li class="pt-24 px-16 pb-16"><a class="color__light_blue" href="<?php echo site_url() ?>/offerta-formativa/executive-program/management-innovation/">Innovation, Big Data & Digital Transformation</a></li>
                    <li class="pt-24 px-16 pb-16"><a class="color__light_blue" href="<?php echo site_url() ?>/offerta-formativa/executive-program/real-estate/"> Real Estate & Infrastructure</a></li>
                    <li class="pt-24 px-16 pb-16"><a class="color__light_blue" href="<?php echo site_url() ?>/offerta-formativa/executive-program/sport-tourism-leisure-culture/">Sport, Tourism, Leisure & Culture </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
    </div>
</div>