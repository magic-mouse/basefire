<?php 



foreach($tags as $tag){
    $tagname = $tag->tagname;
    echo anchor ('admin/tags/' . $tagname, $tagname);
    echo '<br>';
    
}

foreach($from_tags as $tag){
    
    echo $tag->pages_id;
    echo '<br>';
    
}

foreach($page_name as $page){
    
    $tag = $page[0];
    
    /*
    foreach($page as $tag){
*/
        echo '<ul>';
        echo ' <li>';
        echo $tag->pages_id;
        echo ' </li>';
        echo ' <li>';
        echo $tag->headline;
        echo ' </li>';
        echo ' <li>';
        echo $tag->text;
        echo ' </li>';
        echo '</ul>';
        echo '<br>';
/*
    }
    */
}

