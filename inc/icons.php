<?php

$scrollDownIcon =  '<div class="scroll-down-icon bounce">';
$scrollDownIcon .= '<svg xmlns="http://www.w3.org/2000/svg" height="45px" viewBox="-90 0 512 512" width="45px"><path d="m166.238281 430.144531-89.769531-94.898437 29.058594-27.488282 60.632812 64.097657 60.273438-64.058594 29.132812 27.410156zm165.761719-38.144531v-272c0-66.167969-53.832031-120-120-120h-92c-66.167969 0-120 53.832031-120 120v272c0 66.167969 53.832031 120 120 120h92c66.167969 0 120-53.832031 120-120zm-120-352c44.113281 0 80 35.886719 80 80v272c0 44.113281-35.886719 80-80 80h-92c-44.113281 0-80-35.886719-80-80v-272c0-44.113281 35.886719-80 80-80zm-46 41c-11.046875 0-20 8.953125-20 20s8.953125 20 20 20 20-8.953125 20-20-8.953125-20-20-20zm0 80c-11.046875 0-20 8.953125-20 20s8.953125 20 20 20 20-8.953125 20-20-8.953125-20-20-20zm0 80c-11.046875 0-20 8.953125-20 20s8.953125 20 20 20 20-8.953125 20-20-8.953125-20-20-20zm0 0" style="fill: #fff;"></path></svg>';
$scrollDownIcon .= '</div>';
$scrollDownIcon .= '<p class="scroll-down-icon-text">Seguí navegando</p>';


function getSvgIcon ($name){

    global $scrollDownIcon;

    $icon = "";

    switch($name){

        case "scrollDownIcon";
            $icon = $scrollDownIcon;
            break;
        default;
            $icon = "";
            break;

    }        
    
    return $icon;

}


?>