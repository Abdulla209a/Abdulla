<?php

if(isset($_GET['page'])) {
    $page = $_GET['page'];

    if($page == "home") {
        echo "Bu Bosh sahifa";
    }

    if($page == "news") {
        echo "Yangiliklar sahifasi";
    }

    if($page == "contact") {
        echo "Aloqa sahifasi";
    }

    if($page == "about") {
        echo "Biz haqimizda sahifa";
    }
}
?>
