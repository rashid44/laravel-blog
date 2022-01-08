<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->generateHtml(5),
            'body' => $this->generateHtml(16),
        ];
    }

    public function generateHtml($length)
    {
        $outputStr = '';
        $generatedStr = $this->faker->paragraph($length);
        $generatedStrToArr = explode('.', $generatedStr);

        $outputStr .= '<p>';

        for ($i = 0; $i < count($generatedStrToArr); $i++) {
            $outputStr .= $generatedStrToArr[$i];

            if (($i + 1) % 3 == 0) {
                $outputStr .= '.</p><p>';
            }

            if ($i == count($generatedStrToArr) - 1) {
                $outputStr .= '</p>';
            }
        }

        return $outputStr;
    }
}
