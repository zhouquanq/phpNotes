<?php if(!defined('HDPHP_PATH'))exit;C('SHOW_NOTICE',FALSE);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>HDSHOP 后台登录</title>
     <script type="text/javascript" src='http://127.0.0.1/project/shop_edu/Application/Admin/View/Public/Js/jquery-1.8.2.min.js'></script>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/project/shop_edu/Static/hdjs/hdjs.css"/>
    <script src="http://127.0.0.1/project/shop_edu/Static/hdjs/hdjs.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="http://127.0.0.1/project/shop_edu/Application/Admin/View/Public/Css/login.css" />
    <link rel="stylesheet" href="http://127.0.0.1/project/shop_edu/Application/Admin/View/Public/Js/JqueryUI/jquery-ui-1.9.2.min.css" />
   
    <script type="text/javascript" src='http://127.0.0.1/project/shop_edu/Application/Admin/View/Public/Js/JqueryUI/jquery-ui-1.9.2.min.js'></script>
    <script type="text/javascript" src='http://127.0.0.1/project/shop_edu/Application/Admin/View/Public/Js/login.js'></script>
    
    
</head>
<body>
    <div id='top'>
        <a href='http://www.houdunwang.com' target='_blank'>
            <img src='http://127.0.0.1/project/shop_edu/Application/Admin/View/Public/Images/blogo.png' width='270' height='52'/>
        </a>
        <a href='' class='home'>-商城首页-</a>
    </div>
    <div id='main'>
        <div id="login">
            <p class='user_logo'><b>登录</b></p>
            <div class='login_form'>
                <form onsubmit="return hd_submit(this,'<?php echo U('Login/index');?>','<?php echo U('Index/index');?>')" name="login">
                    <p>
                        <label>用户名：</label>
                        <input type="text" name="username" class='input-big'/>
                    </p>
                    <p>
                        <label>密码：</label>
                        <input type="password" name="password" class='input-big'/>
                    </p>
                    <p class='verify'>
                        <span>验证码：</span>
                        <input type="text" name="code" class='input-medium'/>
                        <img width="80" height="25" src="<?php echo U('code');?>" id="getCode"/>
                    </p>
                    <p class='login_btn'>
                        <input type='submit' name='submit' value='' class='loginbg'/>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <div id='dialog'></div>
</body>
</html>