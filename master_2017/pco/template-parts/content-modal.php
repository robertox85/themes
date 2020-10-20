<!-- Modal -->
<?php
if(!is_download_brochure_page()){


$pages = get_download_brochure_pages();

$found = false;
$post_id = 0;
foreach ($pages as $page) {
    $post = get_page_by_path($page);
    if ($post) {
        $post_id = $post->ID;
        $found = true;
        break;
    }
}

?>

<?php if ($found): 

$javascript = '';
$javascript = get_field('javascript', $post_id);
$shfs_post_meta = get_post_meta( $post_id, '_inpost_head_script' , TRUE );

if ( $shfs_post_meta != '' ) {
    // $new_str = preg_replace("/\s+/", "", $shfs_post_meta['synth_header_script']);
    $new_str = str_replace("<!-- Adform Tracking Code BEGIN -->", "", $shfs_post_meta['synth_header_script']);
    $new_str = str_replace("<!-- Adform Tracking Code END -->", "", $new_str); 
    
    $script = preg_replace('#<noscript(.*?)>(.*?)</noscript>#is', '', $new_str);
    $script = str_replace('<script type="text/javascript">','',$script);
    $script = str_replace('</script>','',$script);
    $script = json_encode($script);
    
    $noscript = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $new_str);
    $noscript = str_replace('<noscript>','',$noscript);
    $noscript = str_replace('</noscript>','',$noscript);
    // $noscript = json_encode($noscript);

    $doc = new DOMDocument();
    $doc->loadHTML($noscript);
    $imageTags = $doc->getElementsByTagName('img');
    $img = array();
    foreach($imageTags as $tag) {
        $img[] =  $tag->getAttribute('src');
    }

    ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var sjElements = document.querySelectorAll('.button.arr.featured-links');

    for (var i in sjElements) {
        sjElements[i].onclick = function(event) {
            event.preventDefault();
            
            
            if( document.getElementById('script') !== null ){
                document.getElementById('script').remove();
            }
            var script_tag = document.createElement('script');
            script_tag.id = 'script';
            script_tag.type = 'text/javascript';
            script_tag.text = "<?php echo str_replace('&quot;','',htmlspecialchars($script)) ?>";

            document.body.appendChild(script_tag);


            if(document.getElementById('noscript') !== null ){
                document.getElementById('noscript').remove();
            }
            var noscript_tag = document.createElement('noscript');
            noscript_tag.id = 'noscript';
            // script_tag.type = 'text/javascript';
            var img = document.createElement("img");
            img.width = 1;
            img.height = 1;
            img.src = "<?php echo $img[0]; ?>";
            noscript_tag.appendChild(img);

            document.body.appendChild(noscript_tag);

        };
    }
});
</script>
<?php
}


?>



<?php echo $javascript; ?>

<div class="modal fade" id="downloadBrochure" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
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
                <button type="button" class="button button--negative button--primary"
                    data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
jQuery(document).ready(function($) {
    $(".colonna_key_facts .featured-links").on("click", function(e) {
        e.preventDefault();
        $("#downloadBrochure").show();
        $("#downloadBrochure").addClass("in");
    });

    $(".modal-header .button").on("click", function(e) {
        e.preventDefault();
        $("#downloadBrochure").hide();
        $("#downloadBrochure").removeClass("in");
    });
});
</script>

<?php endif;



}
?>