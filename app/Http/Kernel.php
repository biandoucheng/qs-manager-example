<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        #系统中间件
        \App\Http\Middleware\CheckForMaintenanceMode::class,//定义了启动维护模式下可以访问的路由
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,//检测上传请求体长度是都超过最大限制
        \App\Http\Middleware\TrimStrings::class,//定义了不允许修剪的字段
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,//将''字段的值转化为null
        \App\Http\Middleware\TrustProxies::class,//程序应该被信任的代理

    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,//定义了不需要被加密的cookie
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,//将cookie队列里的cookie设置到响应头里面去
            \Illuminate\Session\Middleware\StartSession::class,//开启laravel的session会话
            \Illuminate\Routing\Middleware\SubstituteBindings::class,//路由参数与模型的绑定
        ],

        'api' => [
            \App\Http\Middleware\EncryptCookies::class,//定义了不需要被加密的cookie
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,//将cookie队列里的cookie设置到响应头里面去
            \Illuminate\Session\Middleware\StartSession::class,//开启laravel的session会话
            \Illuminate\Routing\Middleware\SubstituteBindings::class,//路由参数与模型的绑定
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,//http缓存有关
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,//检测url是否过期
    ];

    /**
     * The priority-sorted list of middleware.
     *
     * This forces non-global middleware to always be in the given order.
     *
     * @var array
     */
    protected $middlewarePriority = [
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ];
}
