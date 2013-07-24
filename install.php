<?php
    //only allow this to run from the command line
    if(!count($argv))
        exit(1);

    require_once('config.php');
    $packs = array(
        'rocketpack.config.php',
    );

    RocketPack::install($packs);
