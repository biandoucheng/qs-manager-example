<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the sizerules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute必须是 yes， on， 1，或 true.',
    'active_url' => ':attribute不是一个有效的URL地址.',
    'after' => ':attribute必须是一个小于:date的日期.',
    'after_or_equal' => ':attribute必须是一个大于或等于:date的日期.',
    'alpha' => ':attribute只能包含字母.',
    'alpha_dash' => ':attribute只能包含字母、数字、破折号和下划线.',
    'alpha_num' => ':attribute只能包含字母、数字.',
    'array' => ':attribute必须是一个数组.',
    'before' => ':attribute必须是一个大于:date的日期.',
    'before_or_equal' => ':attribute必须是一个小于或等于:date的日期.',
    'between' => [
        'numeric' => ':attribute的大小必须在:min和:max 之间.',
        'file' => ':attribute的大小必须在:min和:max kb 之间.',
        'string' => ':attribute的长度必须在:min和:max个字符之间.',
        'array' => ':attribute的元素个数必须在:min和:max 之间.',
    ],
    'boolean' => ':attribute的值必须是 true 或 false.',
    'confirmed' => 'The:attributeconfirmation does not match.',
    'date' => ':attribute不是一个有效的日期.',
    'date_equals' => ':attribute必须是一个等于:date的日期.',
    'date_format' => ':attribute的值不符合:format 的日期格式.',
    'different' => ':attribute和:other必须是两个不同的值.',
    'digits' => ':attribute必须是:digits 位数字.',
    'digits_between' => ':attribute的位数必须介于:min和:max 之间.',
    'dimensions' => ':attribute不是一个符合规则的图片.',
    'distinct' => ':attribute已存在.',
    'email' => ':attribute必须是一个有效的邮箱地址.',
    'ends_with' => ':attribute的值必须以以下的值之一结尾::values',
    'exists' => ':attribute不存在.',
    'file' => ':attribute不是一个文件.',
    'filled' => ':attribute的值不可为空.',
    'gt' => [
        'numeric' => ':attribute必须大于:value.',
        'file' => ':attribute必须大于:value kb.',
        'string' => ':attribute长度必须大于:value个字符.',
        'array' => ':attribute中的元素个数必须大于:value个.',
    ],
    'gte' => [
        'numeric' => ':attribute必须大于或等于:value.',
        'file' => ':attribute必须大于或等于:value kb.',
        'string' => ':attribute长度必须大于或等于:value个字符.',
        'array' => ':attribute中的元素个数必须大于或等于:value个.',
    ],
    'image' => ':attribute不是一张图片.',
    'in' => ':attribute不在可选范围.',
    'in_array' => ':attribute不在:other中.',
    'integer' => ':attribute不是整型数字.',
    'ip' => ':attribute不是一个有效的IP地址.',
    'ipv4' => ':attribute不是一个有效的 IPv4 地址.',
    'ipv6' => ':attribute不是一个有效的 IPv6 地址.',
    'json' => ':attribute不是一个有效的 JSON 字符串.',
    'lt' => [
        'numeric' => ':attribute必须小于:value.',
        'file' => ':attribute必须小于:value kb.',
        'string' => ':attribute长度必须小于:value个字符.',
        'array' => ':attribute中的元素个数必须小于:value个.',
    ],
    'lte' => [
        'numeric' => ':attribute必须小于或等于:value.',
        'file' => ':attribute必须小于或等于:value kb.',
        'string' => ':attribute长度必须小于:value个字符.',
        'array' => ':attribute中的元素个数必须小于或等于:value个.',
    ],
    'max' => [
        'numeric' => ':attribute不能大于:max.',
        'file' => ':attribute不能大于:max kb.',
        'string' => ':attribute长度不能大于:max个字符.',
        'array' => ':attribute中的元素个数不能大于:max个.',
    ],
    'mimes' => ':attribute必须是以下类型之一::values.',
    'mimetypes' => ':attribute必须是以下文件类型之一::values.',
    'min' => [
        'numeric' => ':attribute不能小于:min.',
        'file' => ':attribute不能小于:minkb.',
        'string' => ':attribute的长度不能小于:min个字符.',
        'array' => ':attribute中的元素个数不能小于:min个.',
    ],
    'not_in' => ':attribute不合法.',
    'not_regex' => ':attribute格式不正确.',
    'numeric' => ':attribute不是一个数字.',
    'present' => ':attribute不可忽略.',
    'regex' => ':attribute格式不正确.',
    'required' => ':attribute必填.',
    'required_if' => '当:other的值为:value:attribute必填.',
    'required_unless' => '当:other的值不在:values中时:attribute必填.',
    'required_with' => '当:values存在时:attribute必填.',
    'required_with_all' => '当:values都存在时:attribute必填.',
    'required_without' => '当:values不存在时:attribute必填.',
    'required_without_all' => '当:values一个都没出现时:attribute必填.',
    'same' => ':attribute和:other不匹配.',
    'size' => [
        'numeric' => ':attribute大小必须为:size.',
        'file' => ':attribute大小必须为:size kb.',
        'string' => ':attribute大小必须为:size个字符.',
        'array' => ':attribute中元素个数必须为:size个.',
    ],
    'starts_with' => ':attribute必须以以下其中之一开头::values',
    'string' => ':attribute不是字符串类型.',
    'timezone' => ':attribute不是时区类型.',
    'unique' => ':attribute已存在.',
    'uploaded' => ':attribute上传失败.',
    'url' => ':attribute不是一个正确的url格式.',
    'uuid' => ':attribute不是一个有效的UUID.',

    /*自定义验证规则*/
    'bt_dates' => ':attribute大小必须介于:min与:max 之间.',
    'num_val_bt' => ':attribute大小必须介于:min与:max 之间.',
    'is_today' => ':attribute必须等于今天.',
    'bf_today' => ':attribute必须小于今天.',
    'af_today' => ':attribute必须大于今天.',
    'num_size' => ':attribute长度必须等于:len.',
    'num_between' => ':attribute长度必须介于:min与:max 之间.',
    'max_date_af' => ':attribute间隔不能超过:max 天.',
    'my_mimes' => ':attribute必须是以下类型之一::mimes.',


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
