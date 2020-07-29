<div class="row d-none d-lg-block p-24 d-flex flex-row justify-content-between align-items-center">
        <p class="w-25 m-0 color__white text-uppercase">Share</p>
        <ul class="m-0 w-75 list-unstyled d-flex flex-row justify-content-between align-items-center">
            <li><a href="#" onclick="event.preventDefault();socialWindow( '<?php echo urlencode(get_permalink()) ?>', '<?php get_the_title() ?>' , 'facebook' )" id="facebook"><i class="fab fa-facebook-f color__white"></i></a></li>
            <li><a href="#" onclick="event.preventDefault();socialWindow( '<?php echo urlencode(get_permalink()) ?>', '<?php get_the_title() ?>' , 'twitter' )"  id="twitter"><i class="fab fa-twitter color__white"></i></a></li>
            <li><a href="#" onclick="event.preventDefault();socialWindow( '<?php echo urlencode(get_permalink()) ?>', '<?php get_the_title() ?>' , 'linkedin' )" id="linkedin"><i class="fab fa-linkedin-in color__white"></i></a></li>
            <li><a href="#" onclick="event.preventDefault(); socialWindow('<?php echo get_permalink() ?>','<?php get_the_title() ?>' ,'link')"><i class="far fa-clipboard color__white"></i></a></li>
            <!-- <li class="list-inline-item"><a href="mailto:?Subject=<?php //echo get_the_title() ?>&body=<?php //echo get_the_excerpt().' %0D%0A %0D%0A  Source: '.get_the_permalink(); ?>" id="mail"><i class="fas fa-envelope"></i></a></li> -->
        </ul>
</div>