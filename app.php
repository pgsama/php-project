<?php
 class App {

public function __construct() {

    $url = isset($_GET['url']) ? $_GET['url'] : null;
    echo "<p>URL: $url</p>";
    }

 }