<?php

include_once './pages/header.html';
/**  Objetivo
 *  Criar um array com as info dos produtos
 *  Laço que vai passar pelo array e criar produtos
 */

// poster, titulo, preço, avaliação
$produtos = [
    [
        'poster' => 'baldurs-gate-3.jpg',
        'titulo' => 'Baldurs\'s Gate 3',
        'preco' => 290.00,
        'avaliacao' => 3
    ],
    [
        'poster' => 'death-stranding.png',
        'titulo' => 'Death Stranding',
        'preco' => 139.00,
        'avaliacao' => 2
    ],
    [
        'poster' => 'jedi-survivor.png',
        'titulo' => 'Jedi Survivor',
        'preco' => 139.00,
        'avaliacao' => 5
    ],
    [
        'poster' => 'devil-may-cry5.png',
        'titulo' => 'Devil May Cry 5',
        'preco' => 1,
        'avaliacao' => 4
    ],
    [
        'poster' => 'ghost-of-tshushima.jpg',
        'titulo' => 'Ghost Of Tshushima',
        'preco' => 1,
        'avaliacao' => 4
    ],
    [
        'poster' => 'mirage.png',
        'titulo' => 'Mirage',
        'preco' => 1,
        'avaliacao' => 3
    ],
    [
        'poster' => 'requiem.png',
        'titulo' => 'Requiem',
        'preco' => 1,
        'avaliacao' => 4
    ],
    [
        'poster' => 'valhalla.jpg',
        'titulo' => 'Valhalla',
        'preco' => 1,
        'avaliacao' => 3
    ],
    [
        'poster' => 'wukong.png',
        'titulo' => 'Wukong',
        'preco' => 1,
        'avaliacao' => 4
    ]
];



include './pages/produto.php';