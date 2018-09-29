<?php
//2015年6月8日-------------
//进入后台
1.index.php/Admin
2.index.php?m=Admin

//把jq放入到项目根目录的static目录下面，为了让前后台可以共用

//地址生成用U函数
//1.在html页面使用
{|U:'Admin/Index/welcome'} 代表访问Admin模块Index控制器welcome方法
//2.php页面使用
U('Admin/Index/welcome')

//模型 做逻辑处理与数据库操作
//在Common/Model/定义扩展模型 UserModel.class.php
//一张表一个模型
//K('User')->login(); 使用User模型调用里面的login方法


//$this->create() 触发自动验证

//Q('post.code','','strtoupper') 代表 strtoupper($_POST['code'])

//模型的CURD（增改查删）操作***********

//where() 写where条件的
//find() 获得数据（取得一条数据）



//在模型中 $this->where("username='{$username}'")->find();就是相当于
//select * from user where username='admin' limit 1;

//2015年6月9日-------------
//git*****************************
//git 克隆
git clone https://git.oschina.net/hdmzy/c49.git

//git 更新
git pull

//模型的CURD（增改查删）操作***********

//where() 写where条件的
//find() 获得数据（取得一条数据）
//all() 获得全部数据
//add() 添加
//field('cid,cname') 获取cid,cname字段
//delete() 删除  如果里面的有参数按照数字来删除 delete(5)
//update() 修改
//count() 统计总数

//$this->ajax($sonCid); 相当于 echo json_encode($sonCid);die;

//U传递参数的使用**************
//在html页面的使用
{|U:'Admin/Category/addSon',array('cid'=>$v['cid'])}

//在php里面
U('Admin/Category/addSon',array('cid'=>1));

//调取hdjs的模态框
//1.载入相关文件************
//<script src="__STATIC__/Js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
//<link rel="stylesheet" type="text/css" href="__STATIC__/hdjs/hdjs.css"/>
//<script src="__STATIC__/hdjs/hdjs.min.js" type="text/javascript" charset="utf-8"></script>

//2.应用************
//<a href="javascript:hd_modal_test();">显示模态框</a>
//<script>
//  function hd_modal_test() {
//      hd_modal({
//          width: 600,//宽度
//          height: 300,//高度
//          title: '提示',//标题
//          content: '这是显示内容',//提示信息
//          button: true,//显示按钮
//          button_success: "确定",//确定按钮文字
//          button_cancel: "关闭",//关闭按钮文字
//          timeout: 0,//自动关闭时间 0：不自动关闭
//          shade: true,//背景遮罩
//          shadeOpacity: 0.9,//背景透明度
//          success: function () {//点击确定后的事件
//
//          },
//          cancel: function () {//点击关闭后的事件
//
//          }
//      });
//  }
//</script>

//hd框架的if使用方法
//<if value="$oldData['is_listhtml']==0">checked</if>

//2015年6月10日***************
//集成百度编辑器的方法：http://www.hdphp.com/index.php?m=Index&c=Content&a=index&cid=22&aid=71


//模型的CURD（增改查删）操作***********

//where() 写where条件的
//find() 获得数据（取得一条数据）
//all() 获得全部数据
//add() 添加
//field('cid,cname') 获取cid,cname字段
//delete() 删除  如果里面的有参数按照数字来删除 delete(5)
//update() 修改
//count() 统计总数
//limit() 截取多少条

//2015年6月11日14:04:30-----------
getField('tag_tid',true); 只获得tag_tid，并且返回一维数组


//2015年6月12日14:59:23--------
//创建自定义标签
//1.找到Common/Tag目录里面的CommonTag.class.php
//2.更改文件，要继承Tag
//3.修改配置项 'TPL_TAGS'=> array('CommonTag')//标签类



//2015年6月15日15:51:29--------
//如何自定义函数
(1) 找到Common/Lib 在下面建立文件function.php
(2) 找到Common/Config/config.php 
//自动加载文件
'AUTO_LOAD_FILE'=> array('function.php'),     







