<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=> $this->faker->name(),
            "description"=> $this->faker->text(),
            "short_description"=> $this->faker->text(),
            "author"=> $this->faker->name(),
            "price"=> $this->faker->randomElement([10, 20, 30, 60]),
            "cover_url"=> "",
            "isbn"=> $this->faker->ean13(),
            "published_date" => $this->faker->dateTime() 
        ];
    }
}
