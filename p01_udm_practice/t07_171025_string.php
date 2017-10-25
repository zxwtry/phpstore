<?php
    $v1 = 'i come from china';
    $v2 = "i come from china";
    /*
    $v3 = <<<EOD
    	i
    	come 
    	from 
    	china
    EOD;
    */
    var_dump($v1, $v2);
    //string(17) "i come from china" string(17) "i come from china" 
?>