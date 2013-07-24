<?php
    require('dirs.php');
    RocketPack\Dependency::register(function() use($dirs,$current_hostname)
    {
        RocketPack\Dependency::into($dirs[$current_hostname]['rs'])
        ->add('https://github.com/iaindooley/DataBank')
        ->add('https://github.com/iaindooley/Murphy')
        ;
    });
