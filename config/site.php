<?php

return [
    'menu' => [
        [
            'name' => 'Página Inicial',
            'description' => '',
            'url' => '/',
            'icon' => 'fab fa-medium',
            'children' => []
        ],
        [
            'name' => 'Institucional',
            'description' => '',
            'url' => '',
            'icon' => 'fab fa-medium',
            'children' => []
        ],
        [
            'name' => 'Serviços',
            'description' => '',
            'url' => '',
            'icon' => 'fab fa-medium',
            'children' => [
                [
                    'name' => 'Registro de Imóveis',
                    'description' => '',
                    'url' => '/servicos/registro-imoveis',
                    'icon' => 'fab fa-medium',
                ],
                [
                    'name' => 'Títulos e Documentos',
                    'description' => '',
                    'url' => '/servicos/titulos-documentos',
                    'icon' => 'fab fa-medium',
                ]
            ]
        ],
        [
            'name' => 'Tabela de Custas e Emolumentos',
            'description' => '',
            'url' => '/tabela-de-custas-e-emolumentos',
            'icon' => 'fab fa-medium',
            'children' => []
        ],
        [
            'name' => 'Contato',
            'description' => '',
            'url' => '',
            'icon' => 'fab fa-medium',
            'children' => [
                [
                    'name' => 'Contato',
                    'description' => '',
                    'url' => '',
                    'icon' => 'fab fa-medium',
                ]
            ]
        ]
    ],

    'funcionamento' => [
        'email' => 'atendimento@1oficiosinop.com.br',
        'horario_atendimento' => 'De segunda a sexta, das 09h às 17',
        'celular' => '(66) 3531-2501',
        'telefone_fixo' => '(66) 3531-2501',
    ]
];
