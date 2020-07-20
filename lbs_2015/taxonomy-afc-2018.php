<?php
/*
Template Name: AFC 2018
*/
get_header( 2017 );?>

<!-- Query per le pagine 

Pagine con categoria Tematiche x
Pagine con categoria lunghezza corsi y
Ordinate in ordine alfabetico a partire dal titolo

Tematiche
Accounting, Finance & Control - 29
-Banking, Insurance and other Financial Institutions - 35
-Big Data e Business Analytics - 101
Communication & Lobbying - 97
-Corporate Education Programs - 34
Governance, Risk & Compliance - 45
Healthcare, Public Sector & No Profit - 36
Innovation, Big Data & Digital Transformation - 10
Management & Family Business - 58
Marketing & Sales - 30
People, Organization Development & Leadership - 32
-Pharma and Medical Device - 96
Project Management - 31
Real Estate & Infrastructure - 37
Sport, Tourism, Leisure & Culture - 33

Lunghezza corsi
Executive Program - 25
Executive Master - 131
Executive Course - 26
Flex - 154
Full time - 24

-->

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <h1><?php the_title();?></h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p><?php echo get_field('intro_left') ?></p>
            </div>
            <div class="col-md-6">
                <p><?php echo get_field('intro_right') ?></p>
            </div>
        </div>
    </div>
</div>

<!-- TAB -->
<section>
    <!-- NAVIGAZIONE -->
    <ul class="nav nav-tabs auto" id="ProgramType" role="tablist">

        <!-- MASTER -->
        <li class="nav-item"><a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#exmasters" role="tab" aria-controls="tab1" aria-selected="true">Executive Masters</a></li>

        <!-- PROGRAMME -->
        <li class="nav-item"><a class="nav-link" id="tab2-tab" data-toggle="tab" href="#exprogramme" role="tab" aria-controls="tab2" aria-selected="false">Executive Programmes</a></li>

        <!-- FLEX -->
        <li class="nav-item"><a class="nav-link" id="tab2-tab" data-toggle="tab" href="#exflexprogramme" role="tab" aria-controls="tab2" aria-selected="false">Flex Executive Programmes</a></li>

        <!-- COURSES -->
        <li class="nav-item"><a class="nav-link" id="tab3-tab" data-toggle="tab" href="#excourses" role="tab" aria-controls="tab3" aria-selected="false">Executive Courses</a></li>

        <!-- LABS -->
        <li class="nav-item"><a class="nav-link" id="tab4-tab" data-toggle="tab" href="#exlabs" role="tab" aria-controls="tab4" aria-selected="false" aria-disabled="true" tabindex="-1">Executive Labs</a></li>
    </ul>

    <!-- CONTENUTO -->
    <div class="tab-content" id="ProgramType">
        <!-- MASTER -->
        <div class="tab-pane p-4 fade show active" id="exmasters" role="tabpanel" aria-labelledby="exmasters-tab">
            <h2><?php echo get_field('etichetta_executive_master') ?></h2>
            <p><?php echo get_field('campo_executive_master') ?></p>

            
        </div>

        <!-- PROGRAMME -->
        <div class="tab-pane p-4 fade" id="exprogrammes" role="tabpanel" aria-labelledby="exprogrammes-tab">Contenuto 2</div>

        <!-- FLEX -->
        <div class="tab-pane p-4 fade" id="exflexprogrammes" role="tabpanel" aria-labelledby="exflexprogrammes-tab">Contenuto 3</div>

        <!-- COURSES -->
        <div class="tab-pane p-4 fade" id="excourses" role="tabpanel" aria-labelledby="excourses-tab">Contenuto 4 </div>

        <!-- LABS -->
        <div class="tab-pane p-4 fade" id="exlabs" role="tabpanel" aria-labelledby="exlabs-tab">Contenuto 5 </div>
    </div>
</section>


<?php edit_post_link('<p class="button arr featured-links">Modifica Pagina</p>', ''); ?>


<?php
get_footer( 2017 );
?>