<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/',
            'new-tab' => false,
        ],

        // Custom
        [
            'section' => 'Custom',
        ],
        [
            'title' => 'Device',
            'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet' => 'line',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Device Config',
                    'bullet' => 'dot',
                    'page' =>'config',
                
                ],
                [
                    'title' => 'Device Assign',
                    'bullet' => 'dot',
                
                ],
              
            ]
        ],
    
        [
            'section' => 'Reports',
        ],
        [
            'title' => 'Reports',
            'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet' => 'line',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Device Wise',
                    'bullet' => 'dot',
                    
                
                ],
                [
                    'title' => 'Vugichugi Wise',
                    'bullet' => 'dot',
                
                ],
              
            ]
        ],
        // Layout
     

       
        
        
    ]

];
