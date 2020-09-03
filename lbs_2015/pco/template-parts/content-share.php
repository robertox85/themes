<div class="row mt-24 py-16 mx-0 mb-24" style="border-bottom: 1px solid #e8e8e8;">
    <div class="d-flex flex-row justify-content-between align-items-center">
        <p class="w-25 m-0 color__blue text-uppercase">Share</p>
        <ul class="m-0 w-75 list-unstyled d-flex flex-row justify-content-between align-items-center">
            <li><a href="https://www.facebook.com/sharer.php?s=100&p[url]=urlencode(get_permalink()) ?>', '<?php get_the_title() ?>' , 'facebook' )" id="facebook"><i class="fab fa-facebook-f color__blue"></i></a></li>
            <li><a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()) ?>', '<?php get_the_title() ?>' , 'twitter' )"  id="twitter"><i class="fab fa-twitter color__blue"></i></a></li>
            <li><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()) ?>', '<?php get_the_title() ?>' , 'linkedin' )" id="linkedin"><i class="fab fa-linkedin-in color__blue"></i></a></li>
            <li>
              <a href="#" onclick="copyToClipboard();return false;">
                          <i class="far fa-clipboard color__blue"></i>
                      </a>
                <span id="copymessage" class="">Copied!</span>
        </ul>
    </div>
</div>

<script>
    function copyToClipboard() {
        var e = document.createElement("input");
        e.style = "position: absolute; left: -1000px; top: -1000px", e.value = window.location.href, document.body.appendChild(e), e.select(), document.execCommand("copy"), document.body.removeChild(e) && (jQuery("#copymessage").addClass("copied"), setTimeout(function() {
            jQuery("#copymessage").removeClass("copied")
        }, 2500))
    }
</script>

<style>
#copymessage {
    position: relative;
    opacity: 0;
    margin-left: 8px;
    -webkit-transform: translate(0, 1rem);
    transform: translate(0, 1rem);
    color: #003A70;
    font-weight: bold;
    font-size: .85rem;
    text-transform: uppercase;
    z-index: 1;
    transition: .3s;
}
.copied {
    -webkit-transform: translate(0, 1rem) !important;
    transform: translate(0, 1rem) !important;
    opacity: 1 !important;
}
</style>