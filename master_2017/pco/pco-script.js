jQuery(document).ready(function($) {
    $('.colonna_key_facts-container .featured-links').on('click', function(e) {
        alert('');
        e.preventDefault();
        $('#downloadBrochure').modal('show');
    });
    
});
