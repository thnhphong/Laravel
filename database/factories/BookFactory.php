<?php
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use App\Models\Book;

class BookFactory extends Factory
{
    protected $model = Book::class();

    public function definition()
    {
$images = [
    'theonething.jpeg',
    'atomichabits.jpeg',
    'flow.jpeg',
    'thesubtleartofnotgivingafuck.jpg',
    'theartofdoingtwicetheworkinhalfthetime.jpeg',
    'sherlockholms.jpeg',
    'principles.jpeg',
    'freetofocus.jpeg',
    'richdadpoordad.jpeg',
    'essentialism.jpeg',
];
$imgSrc = 'img/' .$images[$this->faker->numberBetween(0, count($images) - 1)];

        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'rating' => $this->faker->randomElement(['★★★★★', '★★★★☆', '★★★☆☆']),
            'price' => $this->faker->randomFloat(2, 10, 50),
            'imgSrc' => Storage::url($imgSrc),
        ];
    }
}
