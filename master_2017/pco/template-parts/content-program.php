<div class="panel-accordion">
    <div class="panel-heading" role="tab" id="headingOne">
        <h6 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion-curriculum" href="#accordion-content-1"
                aria-expanded="true" aria-controls="accordion-content-1" class="accordion-toggle">
                <!-- Titolo -->
                <?php get_var('titolo') ?>
            </a>
        </h6>
    </div>
    <div id="accordion-content-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">

            <!-- Contenuto -->
            <?php get_var('contenuto') ?>

        </div>
    </div>
</div>