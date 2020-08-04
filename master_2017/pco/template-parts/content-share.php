<div class="share row d-none d-lg-block">
    <div class="col-md-12 px-14 d-flex border-bottom-share">
        <small class="meta">SHARE</small>
        <ul class="list-unstyled list-inline ">
            <li class="list-inline-item"><a href="#" onclick="event.preventDefault();socialWindow( '<?php echo urlencode(get_permalink()) ?>', '<?php get_the_title() ?>' , 'facebook' )" id="facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" onclick="event.preventDefault();socialWindow( '<?php echo urlencode(get_permalink()) ?>', '<?php get_the_title() ?>' , 'twitter' )"  id="twitter"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" onclick="event.preventDefault();socialWindow( '<?php echo urlencode(get_permalink()) ?>', '<?php get_the_title() ?>' , 'linkedin' )" id="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
            <li class="list-inline-item"><a href="#" onclick="event.preventDefault(); socialWindow('<?php echo get_permalink() ?>','<?php get_the_title() ?>' ,'link')"><i class="far fa-clipboard"></i></a></li>
            <!-- <li class="list-inline-item"><a href="mailto:?Subject=<?php //echo get_the_title() ?>&body=<?php //echo get_the_excerpt().' %0D%0A %0D%0A  Source: '.get_the_permalink(); ?>" id="mail"><i class="fas fa-envelope"></i></a></li> -->
        </ul>
    </div>
</div>