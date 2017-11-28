<?php
/**
 * User:  zxwtry
 * File:  b01_p175_mail.php
 * Date:  2017/11/19
 * Time:  22:05
 */


/*
    允许直接从脚本中发送电子邮件
    mail ($to, $subject, $message,
    $additional_headers = null, $additional_parameters = null) {}

    $to:  电子邮件收件人或者收件人列表
    $subject: 电子邮件的主题（不能包含任何换行符）
    $message: 需要发送的信息


    邮件相关配置选项：
    SMTP: 仅适用Windows，PHP在mail函数中用来发送邮件的SMTP服务器的主机名称或者IP地址
    smtp_port: 仅适用Windows，SMTP服务器的端口号，默认25
    sendmail_from:  Windows专用，规定从PHP发送的邮件中使用的"from"地址
    sendmail_path:  UNIX系统专用，规定sendmail程序的路径
                    （通常是：/usr/sbin/sendmail或/usr/lib/sendmail）

 */
function b01_p175_mail_send() {
    $headers = 'MIME-Version: 1.0' . '\r\n';
    $headers .= 'Content-type: test/html; charset=UTF-8' . "\r\n";
    $headers .= 'To: zxw271<zxw271@163.com>' . '\r\n';
    $headers .= 'From: andy<andy@example.com>' . '\r\n';
    $message = "第一行\n第二行\n第三行";
    $message = wordwrap($message, 70);
    mail('zxw271@163.com', '我的主题', $message, $headers);
    /*
        这里需要在php.ini文件中添加相应的配置
        根据错误提示，sendmail_from not set in php.ini
     */
}


/*
    很多服务器没有安装电子邮件系统
    SMTP方式发送电子邮件，没有这个烦扰

    很多网站的电子邮件系统提供SMTP服务
 */
function b01_p175_mail_smtp() {
    include('../material/class.phpmailer.php');
    $from = '***';
    $to = '***';

    $subject = "测试subject";
    $send_body = "测试body内容";

    $smtp = "smtp.163.com";
    $port = 465;
    $username = "***";
    $password = "***登录密码";

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = $smtp;
    $mail->Port = $port;
    $mail->CharSet = "UTF-8";

    $mail->Username = $username;
    $mail->Password = $password;
    $mail->FromName = $from;
    $mail->Subject = $subject;
    $mail->Body = $send_body;
    $mail->IsHTML(true);
    $mail->AddAddress($to);

    if (! $mail->Send()) {
        echo '发送错误' . '<br />';
        echo $mail->ErrorInfo;
    } else {
        echo '发送成功';
    }
}


//b01_p175_mail_send();
b01_p175_mail_smtp();
//phpinfo();