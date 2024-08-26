<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Admin;

class ContactsFactory extends Factory
{
    /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'content' => '商品のお届けについて',
        'content' => '商品の交換について',
        'content' => '商品トラブル',
        'content' => 'ショップへのお問い合わせ',
        'content' => 'その他',
        ];
    }
}
