<?php 
$array = [
    '' =>[
    'class' =>'OpenStart',
    'templates' =>[
        'start' => 'input_pattern.php'
    ]
    ],
    'news' =>[
    'class' =>'OpenNews',
    'templates' =>[
        'news' => 'list_news_pattern.php',
        'browseNews' => 'browseNews.html'
    ]
    ],
    'admin' =>[
    'class' =>'OpenAdmin',
     'templates' =>[
        'add' => 'add_news_templates.php',
        'uppdate' => 'update_list_templates.php'
    ]
    ]
]
?>