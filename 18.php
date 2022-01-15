<?php
  $members = [
    'name' => 'honda',
    'height' => 170,
    'hobby' => 'soccer'
  ];

  foreach($members as $member){
    echo $member;
  }

  echo '<br>';

  foreach($members as $key => $value){
    echo $key . ':' . $value;
  }

  echo '<br>';

  $members_2 = [
    'honda' => [ 
      'height' => 170,
      'hobby' => 'soccer'
    ],
    'kagawa' => [
      'height' => 165,
      'hobby' => 'soccer'
    ]
  ];

  foreach($members_2 as $member_1){
    foreach($member_1 as $key => $value){
      echo $key . ':' . $value;
    }
  }

  echo '<br>';


?>