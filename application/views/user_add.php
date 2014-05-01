<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header("Content-Type:text/html;charset=utf-8");
?>
<html>
    <head>
        <title>add user</title>
    </head>
    <body>
    <?php echo validation_errors();?>
    <?php echo form_open('user/add');?>
        <table>
            <tr><td><h2>请输入您的帐号：</h2></td><td><input type="text" name="user_id" /></td></tr>
            <tr><td><h2>请输入您的昵称：</h2></td><td><input type="text" name="nick_name"/></td></tr>
            <tr><td><h2>请输入您的密码：</h2></td><td><input type="password" name="password"/></td></tr>
            <tr><td><h2>请再次输入您的密码：</h2></td><td><input type="password" name="password_again"/></td></tr>
            <tr><td><input type="submit" name="submit" value="提交"/></td></tr>
        </table>
    </form>
    </body>
</html>
