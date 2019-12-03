<?php
add_action('wp_ajax_import', 'import');
add_action('wp_ajax_nopriv_import', 'import');

/*function import(){
    $html = file_get_html('https://themerella.com/remove-category-wordpress-urls/');

    foreach($html->find('h1') as $element){
        echo $element->innertext;
        break;
    }

    die();
}*/