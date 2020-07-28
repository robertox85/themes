<!-- Modal -->
<?php

$pages = array('download-brochure', 'brochure', 'download-brochure-master-macofin', 'scarica-la-brochure', 'downlaod-brochure', 'download-brochre', 'compila-il-form', 'richiedi-informazioni', 'download-brchure', 'download-drochure');
$found = false;
foreach ($pages as $page) {
    $post = get_page_by_path($page);
    if ($post) {
        $found = true;
        break;
    }
}

?>

<?php if ($found): ?>
<div class="modal fade" id="downloadBrochure" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Download Brochure</h5>
                <button class="button" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fal fa-times" aria-hidden="true"></i>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $post->post_content ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="button button--negative button--primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
	jQuery(document).ready(function ($) {
		$(".colonna_key_facts-container .featured-links").on("click", function (e) {
			e.preventDefault();
			$("#downloadBrochure").show();
			$("#downloadBrochure").addClass("in");
		});

		$(".modal-header .button").on("click", function (e) {
			e.preventDefault();
			$("#downloadBrochure").hide();
			$("#downloadBrochure").removeClass("in");
		});
	});
</script>

<?php endif;?>