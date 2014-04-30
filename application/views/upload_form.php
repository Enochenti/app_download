<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header("Content-Type: text/html; charset=utf-8");
?>
<html>
    <head>
        <title>Upload Form</title>
    </head>
    <body>
        <?php echo $error; ?>
        <?php echo validation_errors();?>
        <?php echo form_open_multipart('upload/do_upload'); ?>
        <table>
            <tr><td><h1>应用</h1></td><td><input type="file" name="userfile" size="20"/></td></tr>
            <tr><td><h1>应用名</h1></td><td><input type="text" name="application_name" id="application_name"/></td></tr>
            <!--<tr><td><h1>应用图标</h1></td><td><input type="file" name="icon" id="icon"/></td></tr>-->
            <tr><td>简介</td><td><textarea name="briefin" id="briefin">请输入简介</textarea></td></tr>
        <tr><td>
                <select name="application_platform">
                    <option value="1" <?php echo set_select('application_platform', '1', TRUE); ?> >Android</option>
                    <option value="2" <?php echo set_select('application_platform', '2'); ?> >ios</option>
                    <option value="3" <?php echo set_select('application_platform', '3'); ?> >wp</option>
                </select>
            </td></tr> 
        <tr><td>
                <select name="application_platform">
                    <option value="1" <?php echo set_select('application_platform', '1', TRUE); ?> >Android</option>
                    <option value="2" <?php echo set_select('application_platform', '2'); ?> >ios</option>
                    <option value="3" <?php echo set_select('application_platform', '3'); ?> >wp</option>
                </select>
            </td></tr> 
        <tr><td><input type="submit" value="uplaod"/></td></tr>
    </table>
</form>
</body>
</html>
