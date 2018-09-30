<?php
/**
 * 定义子命名空间
 * 不提倡在一个文件中定义多个命名空间，但是也是可以的。
 */
//定义子命名空间
namespace mazhenyu\mayu;
function test(){
    echo 'mazhenyu\mayu\test' . '<br/>';
}

test();
//子命名空间下面还可以再定义子命名空间
\mazhenyu\mayu\test();

namespace mazhenyu\mayu\ma;
function test(){
    echo 'mazhenyu\mayu\ma\test' . '<br/>';
}
test();

namespace test;
function test(){
    echo 'test/test' . '<br/>';
}
test();
\mazhenyu\mayu\test();





