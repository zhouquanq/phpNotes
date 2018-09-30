<?php
/**
 * 命名空间别名，use可以写多行，也可以写一行用逗号隔开比如 use a\b as a,\b\c as c,\h\d
 */
//别名：如果一个文件中有多个命名空间则可以给命名空间起别名让调用更加简单

namespace a\b\c\d\e\f\g\h;
use a\b\c\d\e\f\g\h as aa;//把上面的命名空间起别名aa
use a\b\c\d\e\f\g\h;//这样也可以起别名，也就是最后一个h就是默认别名

function test(){
    echo 'test|a\b\c\d\e\f\g\h' . '<br/>';
}
h\test();
aa\test();

//定义新的命名空间
namespace n\f\g;
function test(){
    echo 'test|n\f\g' . '<br/>';
}


test();








