<?php
if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => '小工具',
        'id' => 'sidebar1',
        'description' => '拖动小工具会在边栏显示出来',
    ));
  
}
?>