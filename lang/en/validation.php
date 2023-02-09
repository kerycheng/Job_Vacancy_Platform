<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute必須接受',
    'active_url'           => ':attribute必須是一個合法的 URL',
    'after'                => ':attribute 必須是 :date 之後的一個日期',
    'after_or_equal'       => ':attribute 必須是 :date 之後或相同的一個日期',
    'alpha'                => ':attribute只能包含字母',
    'alpha_dash'           => ':attribute只能包含字母、數字、中劃線或下劃線',
    'alpha_num'            => ':attribute只能包含字母和數字',
    'array'                => ':attribute必須是一個數組',
    'before'               => ':attribute 必須是 :date 之前的一個日期',
    'before_or_equal'      => ':attribute 必須是 :date 之前或相同的一個日期',
    'between'              => [
        'numeric' => ':attribute 必須在 :min 到 :max 之間',
        'file'    => ':attribute 必須在 :min 到 :max KB 之間',
        'string'  => ':attribute 必須在 :min 到 :max 個字符之間',
        'array'   => ':attribute 必須在 :min 到 :max 項之間',
    ],
    'boolean'              =>':attribute字符必須是 true 或false, 1 或 0 ',
    'confirmed'            => ':attribute 二次確認不匹配',
    'date'                 => ':attribute 必須是一個合法的日期',
    'date_format'          => ':attribute 與給定的格式 :format 不符合',
    'different'            => ':attribute 必須不同於 :other',
    'digits'               => ':attribute必須是 :digits 位.',
    'digits_between'       => ':attribute 必須在 :min 和 :max 位之間',
    'dimensions'           => ':attribute具有無效的圖片尺寸',
    'distinct'             => ':attribute字段具有重複值',
    'email'                => ':attribute必須是一個合法的電子郵件地址',
    'exists'               => '選定的 :attribute 是無效的.',
    'file'                 => ':attribute必須是一個文件',
    'filled'               => ':attribute的字段是必填的',
    'image'                => ':attribute必須是 jpeg, png, bmp 或者 gif 格式的圖片',
    'in'                   => '選定的 :attribute 是無效的',
    'in_array'             => ':attribute 字段不存在於 :other',
    'integer'              => ':attribute 必須是個整數',
    'ip'                   => ':attribute必須是一個合法的 IP 地址。 ',
    'json'                 => ':attribute必須是一個合法的 JSON 字符串',
    'max'                  => [
        'numeric' => ':attribute 的最大長度為 :max 位',
        'file'    => ':attribute 的最大為 :max',
        'string'  => ':attribute 的最大長度為 :max 字符',
        'array'   => ':attribute 的最大個數為 :max 個.',
    ],
    'mimes'                => ':attribute 的文件類型必須是 :values',
    'min'                  => [
        'numeric' => ':attribute 的最小長度為 :min 位',
        'file'    => ':attribute 大小至少為 :min KB',
        'string'  => ':attribute 的最小長度為 :min 字符',
        'array'   => ':attribute 至少有 :min 項',
    ],
    'not_in'               => '選定的 :attribute 是無效的',
    'numeric'              => ':attribute 必須是數字',
    'present'              => ':attribute 字段必須存在',
    'regex'                => ':attribute 格式是無效的',
    'required'             => ':attribute 字段是必須的',
    'required_if'          => ':attribute 字段是必須的當 :other 是 :value',
    'required_unless'      => ':attribute 字段是必須的，除非 :other 是在 :values 中',
    'required_with'        => ':attribute 字段是必須的當 :values 是存在的',
    'required_with_all'    => ':attribute 字段是必須的當 :values 是存在的',
    'required_without'     => ':attribute 字段是必須的當 :values 是不存在的',
    'required_without_all' => ':attribute 字段是必須的當 沒有一個 :values 是存在的',
    'same'                 => ':attribute和:other必須匹配',
    'size'                 => [
        'numeric' => ':attribute 必須是 :size 位',
        'file'    => ':attribute 必須是 :size KB',
        'string'  => ':attribute 必須是 :size 個字符',
        'array'   => ':attribute 必須包括 :size 項',
],
'string'               => ':attribute 必須是一個字符串',
'timezone'             => ':attribute 必須是個有效的時區.',
'unique'               => ':attribute 已存在',
'url'                  => ':attribute 無效的格式',

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
| The following language lines are used to swap attribute place-holders
| with something more reader friendly such as E-Mail Address instead
| of "email". This simply helps us make messages a little cleaner.
|
*/

'attributes' => [
   // 'name'         => '名字',
   // 'age'         => '年齡',
],

];