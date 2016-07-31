<?php

function left($str, $len, $charset = "utf-8")
{
    //如果截取长度小于等于0，则返回空
    if (!is_numeric($len) or $len <= 0) {
        return "";
    }

    //如果截取长度大于总字符串长度，则直接返回当前字符串
    $sLen = strlen($str);
    if ($len >= $sLen) {
        return $str;
    }

    //判断使用什么编码，默认为utf-8
    if (strtolower($charset) == "utf-8") {
        $len_step = 3; //如果是utf-8编码，则中文字符长度为3
    } else {
        $len_step = 2; //如果是gb2312或big5编码，则中文字符长度为2
    }

    //执行截取操作
    $len_i = 0;
    //初始化计数当前已截取的字符串个数，此值为字符串的个数值（非字节数）
    $substr_len = 0; //初始化应该要截取的总字节数

    for ($i = 0; $i < $sLen; $i++) {
        if ($len_i >= $len) break; //总截取$len个字符串后，停止循环
        //判断，如果是中文字符串，则当前总字节数加上相应编码的中文字符长度
        if (ord(substr($str, $i, 1)) > 0xa0) {
            $i += $len_step - 1;
            $substr_len += $len_step;
        } else { //否则，为英文字符，加1个字节
            $substr_len++;
        }
        $len_i++;
    }
    $result_str = substr($str, 0, $substr_len);
    return $result_str;
}


function tab_hover()
{
    
}