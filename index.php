<?php

if ($_SERVER['REQUEST_METHOD'] == 'HEAD') {
    header("Content-Type: image/png");
    exit;
}

header("Location: https://agreeable-icy-gouda.glitch.me/poc.svg");

?>
