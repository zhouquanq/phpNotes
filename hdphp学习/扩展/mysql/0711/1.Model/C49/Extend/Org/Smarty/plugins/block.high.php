<?php
/**
 * [smarty_block_high 高悬赏标签函数]
 * @param  [type] $params  [具体的参数]
 * @param  [type] $content [标签中间的内容]
 * @param  [type] &$smarty [smarty对象]
 * @return [type]          [description]
 */
function smarty_block_high($params, $content, &$smarty)
{
    //取得的条数
    $rows = isset($params['rows']) ? $params['rows'] : 1000;
    //组合sql
    $sql = "SELECT * FROM ask WHERE solve=0 AND reward>1 LIMIT {$rows}";
    //获得具体数据
    $data = M()->query($sql);
// $data 数组
//  Array
// (
//     [0] => Array
//         (
//             [asid] => 1
//             [content] => php怎么样？好学吗？
//             [time] => 0
//             [solve] => 0
//             [answer] => 1
//             [reward] => 3
//             [uid] => 1
//             [cid] => 15
//         )

//     [1] => Array
//         (
//             [asid] => 2
//             [content] => mysql每天都是黑窗口是什么意思？
//             [time] => 0
//             [solve] => 0
//             [answer] => 0
//             [reward] => 4
//             [uid] => 2
//             [cid] => 15
//         )
// )
// 
// <dd>
// <a href=""><b>[$field.reward]</b>[$field.content]</a>
// <span>[$field.answer]回答</span>
// </dd>

    //循环组合字符串
    $str = '';
    foreach ($data as $v) {
        //赋值一个临时变量
        $linshi = $content;
       foreach ($v as $f => $value) {
            $linshi = str_replace("[\$field.$f]", $value, $linshi);
       }
       $str .= $linshi;
    }
    return $str;
}



