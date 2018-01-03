<?php
error_reporting(E_ALL || ~E_DEPRECATED);
/**
 * User:  zxwtry
 * File:  b01_p256_pear.php
 * Date:  2018/1/3
 * Time:  14:47
 */


require_once 'HTML/QuickForm.php';

$form = new HTML_QuickForm("quickForm");

$form->addElement('header', 'header', '请登录');
$form->addElement('text', 'name', '用户名：');
$form->addElement('password', 'password', '密码：');
$form->addElement('submit', 'submit', '提交');

$form->addRule('name', '用户名不能为空！', 'required');
$form->addRule('name', '用户名必须为字母或数字！', 'alphanumeric');
$form->addRule('name', '用户名不能为空！', 'required');
$form->addRule('name', '用户名不能为空！', 'required');

if ($form->validate()) {
    $form->process("pass_hello");
} else {
    $form->display();
}

function pass_hello($data) {
    print  '你好，' . $data['name'];
    print  '<br />';
    print '你输入的密码是：' . $data['password'];
}
