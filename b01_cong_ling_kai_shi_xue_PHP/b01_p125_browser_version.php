<?php
/**
 * User:  zxwtry
 * File:  b01_p125_browser_version.php
 * Date:  2017/11/9
 * Time:  17:19
 */

function b01_p125_browser_version_server() {
    foreach($_SERVER as $key => $val) {
        echo "key: " . $key . "<br />";
        echo "val: " . $val . "<br />" . "<br />";
    }

    /*
        需要注意的是：
            cookie：HTTP_COOKIE
            语言：HTTP_ACCEPT_LANGUAGE
            压缩：HTTP_ACCEPT_ENCODING
            accept：HTTP_ACCEPT
            agent：HTTP_USER_AGENT
            HTTP_HOST
            CONTENT_TYPE
            CONTENT_LENGTH
            REQUEST_METHOD
     */

    /*
        key: ALLUSERSPROFILE
        val: C:\ProgramData

        key: APPDATA
        val: C:\Users\Administrator\AppData\Roaming

        key: CommonProgramFiles
        val: C:\Program Files (x86)\Common Files

        key: CommonProgramFiles(x86)
        val: C:\Program Files (x86)\Common Files

        key: CommonProgramW6432
        val: C:\Program Files\Common Files

        key: COMPUTERNAME
        val: ZXW

        key: ComSpec
        val: C:\windows\system32\cmd.exe

        key: FP_NO_HOST_CHECK
        val: NO

        key: HOMEDRIVE
        val: C:

        key: HOMEPATH
        val: \Users\Administrator

        key: JAVA_HOME
        val: D:\code\jdk7

        key: LOCALAPPDATA
        val: C:\Users\Administrator\AppData\Local

        key: LOGONSERVER
        val: \\ZXW

        key: NUMBER_OF_PROCESSORS
        val: 8

        key: OS
        val: Windows_NT

        key: Path
        val: D:\install\python3_5_4\Scripts\;D:\install\python3_5_4\;C:\Program Files (x86)\Intel\iCLS Client\;C:\Program Files\Intel\iCLS Client\;C:\windows\system32;C:\windows;C:\windows\System32\Wbem;C:\windows\System32\WindowsPowerShell\v1.0\;C:\Program Files\Intel\Intel(R) Management Engine Components\DAL;C:\Program Files\Intel\Intel(R) Management Engine Components\IPT;C:\Program Files (x86)\Intel\Intel(R) Management Engine Components\DAL;C:\Program Files (x86)\Intel\Intel(R) Management Engine Components\IPT;D:\code\jdk7\bin;F:\install\mysqlinstall\bin;D:\install\phpStudy\php56n;

        key: PATHEXT
        val: .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW

        key: PROCESSOR_ARCHITECTURE
        val: x86

        key: PROCESSOR_ARCHITEW6432
        val: AMD64

        key: PROCESSOR_IDENTIFIER
        val: Intel64 Family 6 Model 60 Stepping 3, GenuineIntel

        key: PROCESSOR_LEVEL
        val: 6

        key: PROCESSOR_REVISION
        val: 3c03

        key: ProgramData
        val: C:\ProgramData

        key: ProgramFiles
        val: C:\Program Files (x86)

        key: ProgramFiles(x86)
        val: C:\Program Files (x86)

        key: ProgramW6432
        val: C:\Program Files

        key: PSModulePath
        val: C:\windows\system32\WindowsPowerShell\v1.0\Modules\

        key: PUBLIC
        val: C:\Users\Public

        key: SESSIONNAME
        val: Console

        key: SystemDrive
        val: C:

        key: SystemRoot
        val: C:\windows

        key: TEMP
        val: C:\Users\ADMINI~1\AppData\Local\Temp

        key: TMP
        val: C:\Users\ADMINI~1\AppData\Local\Temp

        key: USERDOMAIN
        val: ZXW

        key: USERNAME
        val: Administrator

        key: USERPROFILE
        val: C:\Users\Administrator

        key: windir
        val: C:\windows

        key: windows_tracing_flags
        val: 3

        key: windows_tracing_logfile
        val: C:\BVTBin\Tests\installpackage\csilogfile.log

        key: SCRIPT_NAME
        val: /phpstore/b01_cong_ling_kai_shi_xue_PHP/b01_p125_browser_version.php

        key: SCRIPT_FILENAME
        val: D:\code\php\phpstore\b01_cong_ling_kai_shi_xue_PHP\b01_p125_browser_version.php

        key: DOCUMENT_ROOT
        val: D:\code\php\phpstore

        key: HTTP_CONTENT_LENGTH
        val: 0

        key: HTTP_COOKIE
        val: Phpstorm-d94e29df=bd1d4654-299b-44c8-aa6e-194b5ce7ab78; UM_distinctid=15efed5eda133b-0c71e049f918d1-6b1b1279-1fa400-15efed5eda259d; Hm_lvt_877a70b1ebfcd491a55bcf9077433c0a=1507698650,1507727322,1507772992,1508983030; CNZZDATA1000196404=1480743609-1507508996-%7C1508980694

        key: HTTP_ACCEPT_LANGUAGE
        val: zh-CN,zh;q=0.8

        key: HTTP_ACCEPT_ENCODING
        val: gzip, deflate, sdch, br

        key: HTTP_ACCEPT
        val: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,q=0.8

        key: HTTP_USER_AGENT
        val: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36

        key: HTTP_UPGRADE_INSECURE_REQUESTS
        val: 1

        key: HTTP_HOST
        val: localhost:63342

        key: CONTENT_TYPE
        val:

        key: CONTENT_LENGTH
        val: 0

        key: QUERY_STRING
        val: _ijt=vd96c56avkf84fq4qiu1cj99bl

        key: DOCUMENT_URI
        val: /phpstore/b01_cong_ling_kai_shi_xue_PHP/b01_p125_browser_version.php

        key: REDIRECT_STATUS
        val: 200

        key: SERVER_PROTOCOL
        val: HTTP/1.1

        key: GATEWAY_INTERFACE
        val: CGI/1.1

        key: SERVER_PORT
        val: 63342

        key: SERVER_ADDR
        val: 127.0.0.1

        key: SERVER_NAME
        val: PhpStorm 2017.2.4

        key: SERVER_SOFTWARE
        val: PhpStorm 2017.2.4

        key: REMOTE_PORT
        val: 52633

        key: REMOTE_ADDR
        val: 127.0.0.1

        key: REQUEST_METHOD
        val: GET

        key: REQUEST_URI
        val: /phpstore/b01_cong_ling_kai_shi_xue_PHP/b01_p125_browser_version.php?_ijt=vd96c56avkf84fq4qiu1cj99bl

        key: FCGI_ROLE
        val: RESPONDER

        key: PHP_SELF
        val: /phpstore/b01_cong_ling_kai_shi_xue_PHP/b01_p125_browser_version.php

        key: REQUEST_TIME_FLOAT
        val: 1510219317.2342

        key: REQUEST_TIME
        val: 1510219317
     */
}

b01_p125_browser_version_server();


