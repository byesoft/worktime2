<?php
return [
    'status' => [
        10 => '未通过', 11 => '正在做', 12 => '新任务', 19 => '已解决',
        50 => '可测试',
        60 => '已通过',//如果需要最后验收，就标通过，否则就直接标 完成
        90 => '待定',
        98 => '完成',//相当于关闭
        99 => '废弃'
    ],

    'priority' => [
        10 => '低', 20 => '中', 99 => '高', 999 => '急'
    ],

    'caty' => [
        10 => '需求', 20 => '改进', 30 => 'BUG'
    ],

    'department' => [
        1 => '策划', 2 => '美术', 3 => '程序', 5 => '测试'
    ]
];
