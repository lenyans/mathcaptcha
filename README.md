# mathcaptcha
thinkphp5.1 带数学运算验证码类库

## 安装
> composer require lenyans/mathcaptcha


##使用

###模板里输出验证码

~~~
<div>{:mathcaptcha_img()}</div>
~~~
或者
~~~
<div><img src="{:mathcaptcha_src()}" alt="mathcaptcha" /></div>
~~~
> 上面两种的最终效果是一样的

### 控制器里验证
使用TP5的内置验证功能即可
~~~
$this->validate($data,[
    'mathcaptcha|验证码'=>'require|mathcaptcha'
]);
~~~
或者手动验证
~~~
if(!mathcaptcha_check($mathcaptcha)){
 //验证失败
};
~~~

### 验证效果

..