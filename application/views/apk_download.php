<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    <head>
        <title>apk_download_page</title>
    </head>
    <body>
        <?php foreach ($list as $item):?>
        <a href="<?php echo 'http://localhost:8080/CodeIgniter/index.php/download/'.$item->id;?>"><?php echo $item->file;?></a><a href="<?php echo 'http://localhost:8080/CodeIgniter/index.php/delete/'.$item->id;?>">        delete</a><br/>
        <?php endforeach;?>
    </body>
</html>