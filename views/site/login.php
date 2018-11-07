<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>网站登录管理后台</title>
    <style>
        *{padding:0px; margin:0px; list-style:none;}
        body{width:100%;margin:0px;padding:0px;background:url(/images/pic/bg03.jpg);width:100%;height:100%}
        .top{width:960px;height:336px;margin:0 auto; background:url(/images/pic/bg01s.jpg) no-repeat; position:relative}
        .bottom{width:960px;height:305px;margin:0 auto; background:url(/images/pic/bg02.jpg) no-repeat; position:relative}
        #username,#p_t,#userpwd,#validatecode{ position:absolute;top:206px;left:187px;width:193px;height:34px;border:0px;font-size:14px;line-height:30px;color:#666}
        #p_t,#userpwd{left:402px; z-index:2}
        #validatecode{left:618px; z-index:2;width:113px}
        #vcodesrc{ position:absolute;top:165px;left:616px; font-family:Arial}
        #userpwd{z-index:1;color:#333}
        #login_bt{position:absolute;top:207px;left:751px;width:102px;height:33px; background:transparent; z-index:3;border:0px; cursor:pointer}
        .forget{color:#94adc3;position:absolute;top:247px;left:805px;font-size:12px; text-decoration:none}
        .forget1{color:#ff6600;position:absolute;top:247px;left:745px;font-size:12px; text-decoration:none}
        .item_list{position:absolute;top:70px;left:505px;width:300px;padding-top:20px;}
        ul,li{padding:0;margin:0; font-size:12px;list-style:none; border:0;font-weight:normal;}
        .item_list ul{width:100%}
        .item_list li{width:100%;line-height:24px;color:#fff;}
    </style>
</head>
<body>
<div class="top">
    <form id="userLoginActionForm" method="POST" action="/site/login" >
        <input type="text" id="username" name="u" value="admin" maxlength="20"  />
        <input type="text" autofocus="true" id="p_t" name="p" value=""  />
        <input type="text" id="validatecode" name="c" value="1024" maxlength="20"  />
        <input type="submit" value="" id="login_bt" name="login_bt" />
        <a href="" class="forget">忘记密码？</a>
    </form>
</div>
<div class="bottom">

    <div class="item_list">
        <ul>
            <li>一、有新的要求就请提出来</li>
        </ul>
    </div>

</div>

</body>
</html>