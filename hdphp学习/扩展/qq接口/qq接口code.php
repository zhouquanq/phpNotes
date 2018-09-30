<?php  
//单入口载入
// require "./Connect2.1/API/qqConnectAPI.php";


//登陆按钮指向地址操作
// $qc = new QC();
// $qc->qq_login();


//回调以后处理
// if(Q('get.code') && Q('get.state')){
//     $qc = new Qc();
//    // 获得令牌AccessToken
//    $acs = $qc->qq_callback();
//    // 获得唯一标识用户id,用于存入数据库当做用户名
//    $oid = $qc->get_openid();
  

//     $qc = new Qc($acs,$oid);
//     //获得用户信息
//     $info = $qc->get_user_info();
    

//     //把$oid作为用户名，如果没有则注册，如果有则登陆
//     $data = M('user')->where(array('username'=>$oid))->find();
//     if(!$data){
//         $arr = array(
//             'username'  =>  $oid,
//             'nickname'  =>  $info['nickname']
//             );
//         $uid = M('user')->add($arr);
//     }else{
//         $uid = $data['uid'];
//     }
//     session('uid',$uid);
//     //重新跳转
//     go('');



// }
       








?>