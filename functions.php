<?php

// This creates a filter to change the default comment fields.
add_filter('comment_form_default_fields', 'fix_fields'); 

function fix_fields ( $my_fields ) {
    $my_fields[ 'url' ] = ''; //This will make the website area display nothing.
    $my_fields[ 'comment_notes_before' ] = 'E-postadressen publiceras inte. Namn och E-post är obligatoriska fält.'; 
    return $my_fields;
}

?>
