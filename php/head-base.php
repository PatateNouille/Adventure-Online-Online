<?php

function make_head(string $page_name) : void
{
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Adventure Online Online - <?= $page_name ?></title>
</head>
    <?php
}