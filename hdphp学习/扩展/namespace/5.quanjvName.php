<?php
namespace houdunwang;

function var_dump($str){
    echo $str;
}

//此处是调用命名空间里面的var_dump,如果当前命名空间没有函数，则会自动去全局找
var_dump(123);

//前面加上反斜杠则是调用全局，系统里面的
\var_dump(123);










