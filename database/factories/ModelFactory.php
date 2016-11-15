<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
    ];
});

$factory->define(App\Project::class, function (Faker\Generator $faker) {
    $min = App\User::min('id');
    $max = App\User::max('id');
    return [
        'user_id'   => $faker->numberBetween($min, $max), //User 테이블의 ID 값 기준으로 생성함
        'name'      => $faker->word, //문자열 데이터 임의로 생성
        'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),//과거 2년에서 1년 사이 데이터
        'updated_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
    ];

});

$factory->define(App\Task::class, function (Faker\Generator $faker) {
    $min = App\Project::min('id');
    $max = App\Project::max('id');
    return [
        'project_id'   => $faker->numberBetween($min, $max), //User 테이블의 ID 값 기준으로 생성함
        'name'      => $faker->word, //문자열 데이터 임의로 생성
		'description' => $faker->text,
        'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),//과거 2년에서 1년 사이 데이터
        'updated_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
    ];

});

$factory->define(App\Featuredwork::class, function (Faker\Generator $faker) {

    return [
        'name'      => $faker->word, 
		'description' => $faker->paragraph,
		'detail_link' => $faker->word,
        'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),//과거 2년에서 1년 사이 데이터
        'updated_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
    ];

});
