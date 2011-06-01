<?php

?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>E-balsavimo testas: <?php echo @$title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo FILES_URL; ?>/style.css">
    <script type="text/javascript" src="<?php echo FILES_URL; ?>/ivotingtest.js"></script>
</head>
<body>
    <div id="header">E-balsavimo testas 2012</div>
    <div id="content"><?php

        if (isset($title)) {
            echo "<h1>$title</h1>";
        }
        echo $content;

    ?></div>
</body>
