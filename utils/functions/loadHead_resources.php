<?php

function load_resources($directory)
{
    $file = scandir($directory);
    $file_count = 0;
    $output = '';

    foreach($file as $file)
    {
        if(is_file($directory . "/" . $file))
        {
           $output .= 
            "<link rel='stylesheet' href='../assets/css/user_styles/$file'>";    
        }
        
    }
    return $output;
}

//cargar fontawesome (biblioteca de iconos)
function fontawesome()
{
    return "<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css' integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>";
}

echo fontawesome();

?>