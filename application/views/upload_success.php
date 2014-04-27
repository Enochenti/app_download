<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>Upload Form</title>
    </head>
    <body>
        <h3>Your file was successfully uploaded!</h3>
        <ul>
            <?php foreach ($upload_data as $item=>$value):?>
            <li><?php echo $item;?>:<?php echo $value;?></li>
            <?php endforeach;?>
        </ul>
        <p><?php echo anchor('upload','Upload Another File!');?></p>
        <p><?php echo anchor('download','go to the download list!');?></p>
    </body>
</html>
