<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------

namespace lenyans\mathcaptcha;

use think\facade\Config;

class MathcaptchaController
{
    public function index($id = "")
    {
        $captcha = new Mathcaptcha((array)Config::pull('captcha'));
        return $captcha->entry($id);
    }
}
