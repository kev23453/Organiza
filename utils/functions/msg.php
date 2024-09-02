<?php

function msg(string $type_msg, string $type, string $content) {
    $escapedMessage = htmlspecialchars($content, ENT_QUOTES, 'UTF-8');

    switch($type){
        case "success":
            $class = "success";
            $icon = "check";
        break;

        case "error":
            $class = "error";
            $icon = "times";
        break;

        case "alert":
            $class = "alert";
            $icon = "exclamation";
        break;
    }

    
    if($type_msg == "push"){
        echo "<div class='$type_msg msg message_$class'>
                <div class='left-content'>
                    <div class='container_icon'>
                        <i class='fas fa-$icon'></i>
                    </div>
                    <span>$escapedMessage</span>
                </div>    
                <button><i class='fas fa-times quit'></i></button>
            </div>";
    }
    elseif($type_msg == "notify"){
        echo "<div class='$type_msg message_$class'>
                <i class='fas fa-$icon'></i>
                <span>$escapedMessage</span>
            </div>";
    }
    else{
        echo "message type invalid";
    }
}


?>