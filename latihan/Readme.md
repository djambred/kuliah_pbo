# LATIHAN SEBELUM UTS


## I HAVE A RESTAURANT
- Have Menu
- Have Food
- Have Drink
- Every Food and Drink has their own Price

##### Membuat Model, Migration, dan Seeder Category 
```php
php artisan make:model Category -ms
```
##### MIGRATION CATEGORY
```php
$table->string('name');
```
##### SEEDER CATEGORY
```php
use App\Models\Category;

Category::firstOrCreate([
    'name' => food;
]);
```
##### Membuat Model, Migration, dan Seeder Food
```php
php artisan make:model Food -ms
```
##### MIGRATION FOOD
```php
$table->foreignId('category_id')->constrained()->onDelete('cascade');
$table->string('name');
$table->string('image');
$table->integer('price');
```
##### SEEDER FOOD
```php
```

##### Membuat Model, Migration, dan Seeder Drink 
```php
php artisan make:model Drink -ms
```
##### MIGRATION DRINK
```php
$table->foreignId('category_id')->constrained()->onDelete('cascade');
$table->string('name');
$table->string('image');
$table->integer('price');
```

##### Perubahan