<?php if(isset($_GET['page'])) {
    $page = $_GET['page'];

    if($page == "home") {
        echo "Bu Bosh sahifa";
    }

    if($page == "news") {
        echo "Yangiliklar sahifasi";
    } }
    ?>