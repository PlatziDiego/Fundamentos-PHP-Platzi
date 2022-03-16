<?php

$asociativeArray = [
    'access' => [
        'class' => "AccessControl::className()",
        'only' => ['logout'],
        'rules' => [
            [
                'actions' => ['logout'],
                'allow' => true,
                'roles' => ['@'],
            ],
        ],
    ],
    'verbs' => [
        'class' => "VerbFilter::className()",
        'actions' => [
            'logout' => ['post'],
        ],
    ],
];

$jsonEncodedArray = json_encode($asociativeArray);

//echo var_dump($jsonEncodedArray);

echo print_r($jsonEncodedArray, true);
