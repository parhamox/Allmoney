<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            // Income Categories
            ['name' => 'حقوق', 'type' => 'income'],
            ['name' => 'سرمایه‌گذاری', 'type' => 'income'],
            ['name' => 'آزاد', 'type' => 'income'],
            ['name' => 'درآمد اجاره', 'type' => 'income'],
            ['name' => 'سود سهام', 'type' => 'income'],
            ['name' => 'پاداش', 'type' => 'income'],
            ['name' => 'بازنشستگی', 'type' => 'income'],
            ['name' => 'کمک‌های مالی', 'type' => 'income'],
            ['name' => 'هدیه', 'type' => 'income'],
            ['name' => 'پس‌انداز', 'type' => 'income'],
            ['name' => 'فروش سهام', 'type' => 'income'],
            ['name' => 'درآمد کسب‌وکار', 'type' => 'income'],
            ['name' => 'برنده شدن در قرعه کشی', 'type' => 'income'],
            ['name' => 'ارث', 'type' => 'income'],

            // Expense Categories
            ['name' => 'خواربار', 'type' => 'expense'],
            ['name' => 'خدمات', 'type' => 'expense'],
            ['name' => 'اجاره', 'type' => 'expense'],
            ['name' => 'حمل و نقل', 'type' => 'expense'],
            ['name' => 'سرگرمی', 'type' => 'expense'],
            ['name' => 'بهداشت و درمان', 'type' => 'expense'],
            ['name' => 'بیمه', 'type' => 'expense'],
            ['name' => 'غذا خوردن بیرون', 'type' => 'expense'],
            ['name' => 'سفر', 'type' => 'expense'],
            ['name' => 'آموزش', 'type' => 'expense'],
            ['name' => 'پوشاک', 'type' => 'expense'],
            ['name' => 'مراقبت شخصی', 'type' => 'expense'],
            ['name' => 'متفرقه', 'type' => 'expense'],
            ['name' => 'خیریه', 'type' => 'expense'],
            ['name' => 'پرداخت وام', 'type' => 'expense'],
            ['name' => 'نگهداری خانه', 'type' => 'expense'],
            ['name' => 'اشتراک‌ها', 'type' => 'expense'],
            ['name' => 'هدایا', 'type' => 'expense'],
            ['name' => 'وام مسکن', 'type' => 'expense'],
            ['name' => 'مراقبت از کودکان', 'type' => 'expense'],
            ['name' => 'مراقبت از حیوانات خانگی', 'type' => 'expense'],
            ['name' => 'مالیات', 'type' => 'expense'],
            ['name' => 'مشارکت پس‌انداز', 'type' => 'expense'],
            ['name' => 'بازپرداخت بدهی', 'type' => 'expense'],
            ['name' => 'لوازم خانه', 'type' => 'expense'],
            ['name' => 'الکترونیک', 'type' => 'expense']
        ]);
    }
}
