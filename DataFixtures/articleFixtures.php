<?php
include '../Config/database.php';
require_once '../vendor/autoload.php';

$users = "SELECT id FROM user";
$use = $conn->prepare($users);
    $use->execute();
    $user = $use->fetchAll();
$categorie = "SELECT id FROM categories";
$rec = $conn->prepare($categorie);
    $rec->execute();
    $categories = $rec->fetchAll();



$faker = Faker\Factory::create();

// insert ten users into the database
for ($i = 0; $i < 10; $i++ ) {
    $sql = "INSERT INTO article (`title`,`categories_id`, `user_id`, `slug`,`created_at`, `updated_at`, `description`, `youtube`, `cover`,`our_review`, `distribution`) 
    VALUES(:title, :categories_id, :user_id, :slug, :created_at, :updated_at, :description, :cover, :our_review, :distribution)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'title' => $faker->title(),
        'categories_id' => $categories,
        'user_id' => $user,
        'slug' => $faker->url(),
        'created_at' => $faker->date(),
        'updated_at' => $faker->date(),
        'description' =>$faker->paragraph(),
        'youtube' =>$faker->slug(),
        'cover' => $faker->date(),
        'our_review' => $faker->text(),
        'distribution' => '["distribution"]',
    ]);
}