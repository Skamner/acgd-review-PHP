<?php

include '../Config/DataBase.php';
include '../Vendor/autoload.php';

$users = 'SELECT id FROM user';
$stmt = $conn->prepare($users);
$stmt->execute();
$user = $stmt->fectchAll();

$category = [
    1 => [
        'slug' => 'cinema',
        'CreateAt' => '2021-01-01 00:00:00',
        'UpdateAt' => '2021-01-01 00:00:00',
        'silder' => '1.jpg',
        'title' => 'cinema',
        'seoTitle' => 'tout sur le cinema',
        'seoDescription' => 'cinema'


        ],
        2 => [ 'slug' => 'serie',
        'CreateAt' => '2021-01-01 00:00:00',
        'UpdateAt' => '2021-01-01 00:00:00',
        'silder' => '1.jpg',
        'title' => 'cinema',
        'seoTitle' => 'tout sur les series',
        'seoDescription' => 'serie'
        ],
        3 => [ 'slug' => 'gaming',
        'CreateAt' => '2021-01-01 00:00:00',
        'UpdateAt' => '2021-01-01 00:00:00',
        'silder' => '1.jpg',
        'title' => 'cinema',
        'seoTitle' => 'tout sur le gaming',
        'seoDescription' => 'gaming'
        ],
        4 => [ 'slug' => 'musique',
        'CreateAt' => '2021-01-01 00:00:00',
        'UpdateAt' => '2021-01-01 00:00:00',
        'silder' => '1.jpg',
        'title' => 'cinema',
        'seoTitle' => 'tout sur la musique',
        'seoDescription' => 'musique'
        ],
        5 => [ 'slug' => 'livre',
        'CreateAt' => '2021-01-01 00:00:00',
        'UpdateAt' => '2021-01-01 00:00:00',
        'silder' => '1.jpg',
        'title' => 'cinema',
        'seoTitle' => 'tout sur les livres',
        'seoDescription' => 'livre'
        ],
        6 => [ 'slug' => 'evenements',
        'CreateAt' => '2021-01-01 00:00:00',
        'UpdateAt' => '2021-01-01 00:00:00',
        'silder' => '1.jpg',
        'title' => 'cinema',
        'seoTitle' => 'tout sur les dernier evenements',
        'seoDescription' => 'evenements'
        ],
];

foreach ($category as $value) {
    $sql = "INSERT INTO categories (`slug`, `created_at`, `updated_at`, `slider`, `title`, `sio_title`, `meta_description`, `user_id`) 
            VALUES (:slug, :created_at, :updated_at, :slider, :title, :sio_title, :meta_description, :user_id)";
    
    $stmt = $conn->prepare($sql);
    
    $stmt->execute([
        ':slug' => $value['slug'],
        ':created_at' => $value['createdAt'],
        ':updated_at' => $value['updatedAt'],
        ':slider' => $value['slider'], // en JSON
        ':title' => $value['title'],
        ':sio_title' => $value['seoTitle'],
        ':meta_description' => $value['metaDescription'],
        ':user_id' => $user[0]['id']
    ]);
}
