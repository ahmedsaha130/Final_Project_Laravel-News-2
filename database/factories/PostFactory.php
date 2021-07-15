<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence,
            'body'=>$this->faker->text,
            'post_image'=>'posts/post_image/imge.jpg',
            'view'=>$this->faker->text,
            'feature'=>$this->faker->text,
            'user_id'=>User::all()->random()
        ];
    }
}
