<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
<<<<<<< HEAD
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',
=======
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

>>>>>>> ae55eabf7373d5ebda76e6e836bc54dae3446e3f

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
