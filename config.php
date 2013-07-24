<?php
    //REQUIRED CONFIG FILES
    require_once('dirs.php');
    require_once($dirs[$current_hostname]['rs'].'RocketSled/rocket_sled.class.php');
    
    //IF YOU HAVE ANY AUTOLOADS TO INCLUDE THAT AREN'T AUTOMATICALLY COVERED
    //BY RocketSled OR NEED TO BE PERFORMED BEFORE RocketSled REGISTERS
    //NB: USING include_once HERE SO WE CAN USE THE SAME CONFIG FILE WHEN
    //    RUNNING install.php
    include_once($dirs[$current_hostname]['rs'].'DataBank/data_bank.class.php');

    //TELL THE RocketSled AUTOLOADER WHERE TO LOOK FOR STUFF
    RocketSled::scan($dirs[$current_hostname]);
