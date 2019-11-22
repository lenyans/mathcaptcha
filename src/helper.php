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

Route::get('mathcaptcha/[:id]', "\\lenyans\\mathcaptcha\\MathcaptchaController@index");

Validate::extend('mathcaptcha', function ($value, $id = '') {
    return mathcaptcha_check($value, $id);
});

Validate::setTypeMsg('mathcaptcha', ':attribute错误!');

/**
 * @param string $id
 * @param array  $config
 * @return \think\Response
 */
function mathcaptcha($id = '', $config = [])
{
    $captcha = new \lenyans\mathcaptcha\Mathcaptcha($config);
    return $captcha->entry($id);
}

/**
 * @param $id
 * @return string
 */
function mathcaptcha_src($id = '')
{
    return Url::build('/mathcaptcha' . ($id ? "/{$id}" : ''));
}

/**
 * @param $id
 * @return mixed
 */
function mathcaptcha_img($id = '')
{
    return '<img src="' . mathcaptcha_src($id) . '" alt="mathcaptcha" />';
}

/**
 * @param        $value
 * @param string $id
 * @param array  $config
 * @return bool
 */
function mathcaptcha_check($value, $id = '')
{
    $captcha = new \lenyans\mathcaptcha\Mathcaptcha((array) Config::pull('mathcaptcha'));
    return $captcha->check($value, $id);
}
