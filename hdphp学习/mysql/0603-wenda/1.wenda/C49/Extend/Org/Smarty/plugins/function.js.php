<?php

function smarty_function_js($params, &$smarty)
{
    $file = $params['file'];
    $file = __PUBLIC__  . '/' . $file;
    return "<script type='text/javascript' src='{$file}'></script>";
}
