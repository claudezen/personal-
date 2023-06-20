<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class books extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'title' => 'Harry Potter and the ...',
                'description' => 'A thrilling tale of magic and adventure',
                'genre' => 'Fantasy',
                'price' => 29.99
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'description' => 'A powerful exploration of injustice',
                'genre' => 'Drama',
                'price' => 12.50
            ],
            [
                'title' => 'The Great Gatsby',
                'description' => 'Jazz Age decadence and lost love',
                'genre' => 'Fiction',
                'price' => 15.99
            ],
            [
                'title' => 'Pride and Prejudice',
                'description' => 'Classic tale of love and society',
                'genre' => 'Romance',
                'price' => 9.99
            ],
            [
                'title' => '1984',
                'description' => 'Dystopian vision of a totalitarian world',
                'genre' => 'Science Fiction',
                'price' => 14.95
            ],
            [
                'title' => 'The Catcher in the Rye',
                'description' => 'Coming-of-age story of teenage rebellion',
                'genre' => 'Fiction',
                'price' => 11.75
            ],
            [
                'title' => 'The Hobbit',
                'description' => 'A journey through Middle-earth',
                'genre' => 'Fantasy',
                'price' => 17.50
            ],
            [
                'title' => 'The Alchemist',
                'description' => 'A fable about following your dreams',
                'genre' => 'Fiction',
                'price' => 10.99
            ],
            [
                'title' => 'Gone Girl',
                'description' => 'A psychological thriller',
                'genre' => 'Mystery',
                'price' => 13.25
            ],
            [
                'title' => 'The Lord of the Rings',
                'description' => 'Epic high fantasy adventure',
                'genre' => 'Fantasy',
                'price' => 49.99
            ],
            [
                'title' => 'The Girl on the Train',
                'description' => 'Gripping mystery with an unreliable narrator',
                'genre' => 'Thriller',
                'price' => 8.99
            ],
            [
                'title' => 'Brave New World',
                'description' => 'Futuristic dystopia of genetic engineering',
                'genre' => 'Science Fiction',
                'price' => 16.50
            ],
            [
                'title' => 'The Da Vinci Code',
                'description' => 'A thrilling quest for hidden secrets',
                'genre' => 'Mystery',
                'price' => 11.50
            ],
            [
                'title' => 'The Chronicles of Narnia',
                'description' => 'Magical adventures in a fantasy world',
                'genre' => 'Fantasy',
                'price' => 22.75
            ],
            [
                'title' => 'The Catch-22',
                'description' => 'Darkly humorous portrayal of war',
                'genre' => 'Satire',
                'price' => 13.99
            ],
            [
                'title' => 'The Hunger Games',
                'description' => 'A thrilling dystopian survival story',
                'genre' => 'Science Fiction',
                'price' => 11.25
            ],
            [
                'title' => 'Moby-Dick',
                'description' => 'A tale of obsession and revenge at sea',
                'genre' => 'Adventure',
                'price' => 14.50
            ],
            [
                'title' => 'The Fault in Our Stars',
                'description' => 'Heartbreaking story of young love and cancer',
                'genre' => 'Young Adult',
                'price' => 9.75
            ],
            [
                'title' => 'The Road',
                'description' => 'Post-apocalyptic journey of a father and son',
                'genre' => 'Dystopian',
                'price' => 12.99
            ],
        ];
        

        foreach ($books as $bookData) {
            Book::create($bookData);
        }
    }
}
