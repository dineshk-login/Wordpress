<?php

 Add_filter ("widget_text", "do_shortcode");
 add_shortcode('hello_world','hello_world_function');
function  hello_world_function ()
{
    return  "Hello world";
}
?>