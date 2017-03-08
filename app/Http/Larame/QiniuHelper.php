<?php

/**
 * 七牛工具类
 */
class QiniuHelper
{
    /**
     * 获取七牛上传token
     * @return string token
     */
    public static function qiniuToken()
    {
        $auth = new Qiniu\Auth(env('QINIU_ACCESS_KEY'), env('QINIU_SECRET_KEY'));
        $token = $auth->uploadToken(env('QINIU_BUCKET'));
        return $token;
    }

}
