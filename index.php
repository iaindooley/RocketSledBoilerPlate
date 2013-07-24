<?php
    require_once('config.php');
    //OVERRIDE THE DEFAULT AUTOLOAD TO PREVENT REPEATED
    //DIRECTORY SCANNING IN A PRODUCTION ENVIRONMENT
    RocketSled::autoload(DataBank::autoload());

    //RUN THAT SHIT! http://www.youtube.com/watch?v=N_PX3DWH0nE
    RocketSled::run();
