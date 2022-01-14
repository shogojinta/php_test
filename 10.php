<?php
    $array_1 = ['aaa',2,3];

    $array_2 = [
        ['red','blue','yellow'],
        ['green','parple','black']
    ];

    // echo '<pre>';
    // var_dump($array_2);
    // echo '</pre>';

    // echo $array_2[1][1];

    $array_member = [
        'name' =>'honda',
        'height' => 170,
        'hobby' => 'soccer'
    ];

    // echo $array_member['hobby'];

    // echo '<pre>';
    // var_dump($array_member);
    // echo '</pre>';

    $array_member_2 = [
        'honda' => [
            'height' => 170,
            'hobby' => 'soccer'
        ],
        'kagawa' => [
            'height' => 165,
            'hobby' => 'soccer'
        ]
    ];

    // echo $array_member_2['kagawa']['height'];

    // echo '<pre>';
    // var_dump($array_member_2);
    // echo '</pre>';

    $array_member_3 = [
        '1kumi' => [
            'honda' => [
                'height' => 170,
                'hobby' => 'soccer'
            ],
            'kagawa' => [
                'height' => 165,
            'hobby' => 'soccer'
            ]
        ],
        '2kumi' => [
            'nagatomo' => [
                'height' => 160,
                'hobby' => 'soccer'
            ],
            'inui' => [
                'height' => 168,
                'hobby' => 'soccer'
            ],
        ]
    ];

    echo $array_member_3['2kumi']['nagatomo']['height'];

    echo '<pre>';
    var_dump($array_member_3);
    echo '</pre>';
?>