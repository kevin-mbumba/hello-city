<?php 

if(!function_exists('page_title')){
    function page_title(?string $title=null){

     return $title
            ? $title.' | '.config('app.name')
            : config('app.name');
    }
}

?>