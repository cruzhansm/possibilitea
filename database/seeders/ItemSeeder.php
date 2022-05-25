<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
                'id'=> 1,
                'item_name' => 'Porkchop with Rice',
                'price' => 99.00,
                'itemCat_id' => 1,
                'subcat_id' => 1,
                'img_path' => "/possibilitea/public/images/items/99-Meals-And-Single-Orders/99-meals-porkchop-with-rice.png"
            ),
            array(
                'id'=> 2,
                'item_name' => 'Pork Kawali with Rice',
                'price' => 99.00,
                'itemCat_id' => 1,
                'subcat_id' => 1,
                'img_path' => "/possibilitea/public/images/items/99-Meals-And-Single-Orders/99-meals-pork-kawali-with-rice.png"
            ),
            array(
                'id'=> 3,
                'item_name' => 'Pork Sinigang with Rice',
                'price' => 99.00,
                'itemCat_id' => 1,
                'subcat_id' => 1,
                'img_path' => "/possibilitea/public/images/items/99-Meals-And-Single-Orders/99-meals-pork-sinigang-with-rice.png"
            ),
            array(
                'id'=> 4,
                'item_name' => 'Bangus Daing with Rice',
                'price' => 99.00,
                'itemCat_id' => 1,
                'subcat_id' => 1,
                'img_path' => "/possibilitea/public/images/items/99-Meals-And-Single-Orders/99-meals-bangus-daing-with-rice.png"
            ),
            array(
                'id'=> 5,
                'item_name' => 'Butter Chicken with Rice',
                'price' => 99.00,
                'itemCat_id' => 1,
                'subcat_id' => 1,
                'img_path' => "/possibilitea/public/images/items/99-Meals-And-Single-Orders/99-meals-butter-chicken-with-rice.png"
            ),
            array(
                'id'=> 6,
                'item_name' => 'Sweet & Sour Chicken with Rice',
                'price' => 99.00,
                'itemCat_id' => 1,
                'subcat_id' => 1,
                'img_path' => "/possibilitea/public/images/items/99-Meals-And-Single-Orders/99-meals-sweet-and-sour-chicken-with-rice.png"
            ),
            array(
                'id'=> 7,
                'item_name' => 'Shrimp Gambas',
                'price' => 200.00,
                'itemCat_id' => 2,
                'subcat_id' => 1,
                'img_path' => "/possibilitea/public/images/items/99-Meals-And-Single-Orders/single-orders-shrimp-gambas.png"
            ),
            array(
                'id'=> 8,
                'item_name' => 'Buttered Chicken Half',
                'price' => 279.00,
                'itemCat_id' => 2,
                'subcat_id' => 1,
                'img_path' => "/possibilitea/public/images/items/99-Meals-And-Single-Orders/single-orders-buttered-chicken-half.png"
            ),
            array(
                'id'=> 9,
                'item_name' => 'Chicken Kawali',
                'price' => 280.00,
                'itemCat_id' => 2,
                'subcat_id' => 1,
                'img_path' => "/possibilitea/public/images/items/99-Meals-And-Single-Orders/single-orders-chicken-kawali.png"
            ),
            array(
                'id'=> 10,
                'item_name' => 'Crispy Pata Family',
                'price' => 525.00,
                'itemCat_id' => 2,
                'subcat_id' => 1,
                'img_path' => "/possibilitea/public/images/items/99-Meals-And-Single-Orders/single-orders-crispy-pata-family.png"
            ),
            array(
                'id'=> 11,
                'item_name' => 'Bam.E',
                'price' => 180.00,
                'itemCat_id' => 2,
                'subcat_id' => 1,
                'img_path' => "/possibilitea/public/images/items/99-Meals-And-Single-Orders/single-orders-bame.png"
            ),
            array(
                'id'=> 12,
                'item_name' => 'Chicken and Fries',
                'price' => 150.00,
                'itemCat_id' => 2,
                'subcat_id' => 1,
                'img_path' => "/possibilitea/public/images/items/99-Meals-And-Single-Orders/single-orders-chicken-and-fries.png"
            ),
            array(
                'id'=> 13,
                'item_name' => 'Pork Sinigang',
                'price' => 249.00,
                'itemCat_id' => 3,
                'subcat_id' => 2,
                'img_path' => "/possibilitea/public/images/items/Soup/pork-sinigang.png"
            ),
            array(
                'id'=> 14,
                'item_name' => 'Shrimp Sinigang',
                'price' => 229.00,
                'itemCat_id' => 3,
                'subcat_id' => 2,
                'img_path' => "/possibilitea/public/images/items/Soup/shrimp-sinigang.png"
            ),
            array(
                'id'=> 15,
                'item_name' => 'Bulalo Family',
                'price' => 389.00,
                'itemCat_id' => 3,
                'subcat_id' => 2,
                'img_path' => "/possibilitea/public/images/items/Soup/bulalo-family.png"
            ),
            array(
                'id'=> 16,
                'item_name' => 'Pepperoni',
                'price' => 280.00,
                'itemCat_id' => 4,
                'subcat_id' => 3,
                'img_path' => "/possibilitea/public/images/items/Pizza-And-Pasta/pizza-pepperoni.png"
            ),
            array(
                'id'=> 17,
                'item_name' => 'Hawaiian',
                'price' => 280.00,
                'itemCat_id' => 4,
                'subcat_id' => 3,
                'img_path' => "/possibilitea/public/images/items/Pizza-And-Pasta/pizza-hawaiian.png"
            ),
            array(
                'id'=> 18,
                'item_name' => '3 Cheese Pizza',
                'price' => 300.00,
                'itemCat_id' => 4,
                'subcat_id' => 3,
                'img_path' => "/possibilitea/public/images/items/Pizza-And-Pasta/pizza-3-cheese-family.png"
            ),
            array(
                'id'=> 19,
                'item_name' => 'Beef and Mushroom',
                'price' => 320.00,
                'itemCat_id' => 4,
                'subcat_id' => 3,
                'img_path' => "/possibilitea/public/images/items/Pizza-And-Pasta/pizza-beef-and-mushroom.png"
            ),
            array(
                'id'=> 20,
                'item_name' => 'Margaritta',
                'price' => 280.00,
                'itemCat_id' => 4,
                'subcat_id' => 3,
                'img_path' => "/possibilitea/public/images/items/Pizza-And-Pasta/pizza-margaritta.png"
            ),
            array(
                'id'=> 21,
                'item_name' => 'Carbonara',
                'price' => 170.00,
                'itemCat_id' => 5,
                'subcat_id' => 3,
                'img_path' => "/possibilitea/public/images/items/Pizza-And-Pasta/pasta-carbonara.png"
            ),
            array(
                'id'=> 22,
                'item_name' => 'Spaghetti',
                'price' => 150.00,
                'itemCat_id' => 5,
                'subcat_id' => 3,
                'img_path' => "/possibilitea/public/images/items/Pizza-And-Pasta/pasta-spaghetti.png"
            ),
            array(
                'id'=> 23,
                'item_name' => 'Lasagna',
                'price' => 180.00,
                'itemCat_id' => 5,
                'subcat_id' => 3,
                'img_path' => "/possibilitea/public/images/items/Pizza-And-Pasta/pasta-lasagna.png"
            ),
            array(
                'id'=> 24,
                'item_name' => 'Chicken Burger w/ Fries',
                'price' => 150.00,
                'itemCat_id' => 6,
                'subcat_id' => 4,
                'img_path' => "/possibilitea/public/images/items/Sandwiches/chicken-burger-with-fries.png"
            ),
            array(
                'id'=> 25,
                'item_name' => 'Beef Burger w/ Fries',
                'price' => 160.00,
                'itemCat_id' => 6,
                'subcat_id' => 4,
                'img_path' => "/possibilitea/public/images/items/Sandwiches/beef-burger-with-fries.png"
            ),
            array(
                'id'=> 26,
                'item_name' => 'Clubhouse',
                'price' => 150.00,
                'itemCat_id' => 6,
                'subcat_id' => 4,
                'img_path' => "/possibilitea/public/images/items/Sandwiches/clubhouse.png"
            ),
            array(
                'id'=> 27,
                'item_name' => 'Nachos',
                'price' => 120.00,
                'itemCat_id' => 7,
                'subcat_id' => 5,
                'img_path' => "/possibilitea/public/images/items/Sides-And-Add-Ons/sides-nachos.png"
            ),
            array(
                'id'=> 28,
                'item_name' => 'Fries',
                'price' => 100.00,
                'itemCat_id' => 7,
                'subcat_id' => 5,
                'img_path' => "/possibilitea/public/images/items/Sides-And-Add-Ons/sides-fries.png"
            ),
            array(
                'id'=> 29,
                'item_name' => 'Rice',
                'price' => 20.00,
                'itemCat_id' => 8,
                'subcat_id' => 5,
                'img_path' => "/possibilitea/public/images/items/Sides-And-Add-Ons/add-ons-rice.png"
            ),
            array(
                'id'=> 30,
                'item_name' => 'Rice Platter',
                'price' => 120.00,
                'itemCat_id' => 8,
                'subcat_id' => 5,
                'img_path' => "/possibilitea/public/images/items/Sides-And-Add-Ons/add-ons-rice-platter.png"
            ),
            array(
                'id'=> 31,
                'item_name' => 'Garlic Fried Rice',
                'price' => 160.00,
                'itemCat_id' => 8,
                'subcat_id' => 5,
                'img_path' => "/possibilitea/public/images/items/Sides-And-Add-Ons/add-ons-garlic-fried-rice.png"
            ),
            array(
                'id'=> 32,
                'item_name' => 'Classic (16oz)',
                'price' => 80.00,
                'itemCat_id' => 9,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/milktea-classic.png"
            ),
            array(
                'id'=> 33,
                'item_name' => 'Classic (22oz)',
                'price' => 90.00,
                'itemCat_id' => 9,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/milktea-classic.png"
            ),
            array(
                'id'=> 34,
                'item_name' => 'Taro (16oz)',
                'price' => 89.00,
                'itemCat_id' => 9,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/milktea-taro.png"
            ),
            array(
                'id'=> 35,
                'item_name' => 'Taro (22oz)',
                'price' => 99.00,
                'itemCat_id' => 9,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/milktea-taro.png"
            ),
            array(
                'id'=> 36,
                'item_name' => 'Thai (16oz)',
                'price' => 89.00,
                'itemCat_id' => 9,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/milktea-thai.png"
            ),
            array(
                'id'=> 37,
                'item_name' => 'Thai (22oz)',
                'price' => 99.00,
                'itemCat_id' => 9,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/milktea-thai.png"
            ),
            array(
                'id'=> 38,
                'item_name' => 'Matcha (16oz)',
                'price' => 89.00,
                'itemCat_id' => 9,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/milktea-matcha.png"
            ),
            array(
                'id'=> 39,
                'item_name' => 'Matcha (22oz)',
                'price' => 99.00,
                'itemCat_id' => 9,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/milktea-matcha.png"
            ),
            array(
                'id'=> 40,
                'item_name' => 'Wintermelon (16oz)',
                'price' => 89.00,
                'itemCat_id' => 9,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/milktea-wintermelon.png"
            ),
            array(
                'id'=> 41,
                'item_name' => 'Wintermelon (22oz)',
                'price' => 99.00,
                'itemCat_id' => 9,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/milktea-wintermelon.png"
            ),
            array(
                'id'=> 42,
                'item_name' => 'Okinawa (16oz)',
                'price' => 89.00,
                'itemCat_id' => 9,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/milktea-okinawa.png"
            ),
            array(
                'id'=> 43,
                'item_name' => 'Okinawa (22oz)',
                'price' => 99.00,
                'itemCat_id' => 9,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/milktea-okinawa.png"
            ),
            array(
                'id'=> 44,
                'item_name' => 'Dark Chocolate (16oz)',
                'price' => 89.00,
                'itemCat_id' => 9,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/milktea-dark-chocolate.png"
            ),
            array(
                'id'=> 45,
                'item_name' => 'Dark Chocolate (22oz)',
                'price' => 99.00,
                'itemCat_id' => 9,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/milktea-dark-chocolate.png"
            ),
            array(
                'id'=> 46,
                'item_name' => 'Pearl Milktea (16oz)',
                'price' => 110.00,
                'itemCat_id' => 10,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/cheesecake-pearl-milktea.png"
            ),
            array(
                'id'=> 47,
                'item_name' => 'Pearl Milktea (22oz)',
                'price' => 120.00,
                'itemCat_id' => 10,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/cheesecake-pearl-milktea.png"
            ),
            array(
                'id'=> 48,
                'item_name' => 'Nutella (16oz)',
                'price' => 115.00,
                'itemCat_id' => 10,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/cheesecake-nutella.png"
            ),
            array(
                'id'=> 49,
                'item_name' => 'Nutella (22oz)',
                'price' => 125.00,
                'itemCat_id' => 10,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/cheesecake-nutella.png"
            ),
            array(
                'id'=> 50,
                'item_name' => 'Oreo (16oz)',
                'price' => 115.00,
                'itemCat_id' => 10,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/cheesecake-oreo.png"
            ),
            array(
                'id'=> 51,
                'item_name' => 'Oreo (22oz)',
                'price' => 130.00,
                'itemCat_id' => 10,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/cheesecake-oreo.png"
            ),
            array(
                'id'=> 52,
                'item_name' => 'Taro (16oz)',
                'price' => 100.00,
                'itemCat_id' => 11,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/cream-cheese-taro.png"
            ),
            array(
                'id'=> 53,
                'item_name' => 'Taro (22oz)',
                'price' => 115.00,
                'itemCat_id' => 11,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/cream-cheese-taro.png"
            ),
            array(
                'id'=> 54,
                'item_name' => 'Dark Chocolate (16oz)',
                'price' => 100.00,
                'itemCat_id' => 11,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/cream-cheese-dark-chocolate.png"
            ),
            array(
                'id'=> 55,
                'item_name' => 'Dark Chocolate (22oz)',
                'price' => 115.00,
                'itemCat_id' => 11,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/cream-cheese-dark-chocolate.png"
            ),
            array(
                'id'=> 56,
                'item_name' => 'Thai (16oz)',
                'price' => 100.00,
                'itemCat_id' => 11,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/cream-cheese-thai.png"
            ),
            array(
                'id'=> 57,
                'item_name' => 'Thai (22oz)',
                'price' => 115.00,
                'itemCat_id' => 11,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/cream-cheese-thai.png"
            ),
            array(
                'id'=> 58,
                'item_name' => 'Matcha (16oz)',
                'price' => 100.00,
                'itemCat_id' => 11,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/cream-cheese-matcha.png"
            ),
            array(
                'id'=> 59,
                'item_name' => 'Matcha (22oz)',
                'price' => 115.00,
                'itemCat_id' => 11,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/cream-cheese-matcha.png"
            ),
            array(
                'id'=> 60,
                'item_name' => 'Red Velvet (16oz)',
                'price' => 120.00,
                'itemCat_id' => 12,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/frappe-red-velvet.png"
            ),
            array(
                'id'=> 61,
                'item_name' => 'Red Velvet (22oz)',
                'price' => 150.00,
                'itemCat_id' => 12,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/frappe-red-velvet.png"
            ),
            array(
                'id'=> 62,
                'item_name' => 'Cookies & Cream (16oz)',
                'price' => 120.00,
                'itemCat_id' => 12,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/frappe-oreo.png"
            ),
            array(
                'id'=> 63,
                'item_name' => 'Cookies & Cream (22oz)',
                'price' => 150.00,
                'itemCat_id' => 12,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/frappe-oreo.png"
            ),
            array(
                'id'=> 64,
                'item_name' => 'Dark Chocolate (16oz)',
                'price' => 120.00,
                'itemCat_id' => 12,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/frappe-dark-chocolate.png"
            ),
            array(
                'id'=> 65,
                'item_name' => 'Dark Chocolate (22oz)',
                'price' => 150.00,
                'itemCat_id' => 12,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/frappe-dark-chocolate.png"
            ),
            array(
                'id'=> 66,
                'item_name' => 'Creamy Taro (16oz)',
                'price' => 120.00,
                'itemCat_id' => 12,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/frappe-creamy-taro.png"
            ),
            array(
                'id'=> 67,
                'item_name' => 'Creamy Taro (22oz)',
                'price' => 150.00,
                'itemCat_id' => 12,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/frappe-creamy-taro.png"
            ),
            array(
                'id'=> 68,
                'item_name' => 'Mint Chocolate (16oz)',
                'price' => 120.00,
                'itemCat_id' => 12,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/frappe-mint-chocolate.png"
            ),
            array(
                'id'=> 69,
                'item_name' => 'Mint Chocolate (22oz)',
                'price' => 150.00,
                'itemCat_id' => 12,
                'subcat_id' => 6,
                'img_path' => "/possibilitea/public/images/items/Milktea-And-Frappe/frappe-mint-chocolate.png"
            ),
            array(
                'id'=> 70,
                'item_name' => 'Mixed Berries',
                'price' => 140.00,
                'itemCat_id' => 13,
                'subcat_id' => 7,
                'img_path' => "/possibilitea/public/images/items/Smoothies-And-Milkshake/smoothies-mixed-berries.png"
            ),
            array(
                'id'=> 71,
                'item_name' => 'Avocado Mango',
                'price' => 150.00,
                'itemCat_id' => 13,
                'subcat_id' => 7,
                'img_path' => "/possibilitea/public/images/items/Smoothies-And-Milkshake/smoothies-avocado-mango.png"
            ),
            array(
                'id'=> 72,
                'item_name' => 'Strawberry',
                'price' => 120.00,
                'itemCat_id' => 14,
                'subcat_id' => 7,
                'img_path' => "/possibilitea/public/images/items/Smoothies-And-Milkshake/milkshake-strawberry.png"
            ),
            array(
                'id'=> 73,
                'item_name' => 'Blueberry',
                'price' => 120.00,
                'itemCat_id' => 14,
                'subcat_id' => 7,
                'img_path' => "/possibilitea/public/images/items/Smoothies-And-Milkshake/milkshake-blueberry.png"
            ),
            array(
                'id'=> 74,
                'item_name' => 'Chocolate',
                'price' => 120.00,
                'itemCat_id' => 14,
                'subcat_id' => 7,
                'img_path' => "/possibilitea/public/images/items/Smoothies-And-Milkshake/milkshake-chocolate.png"  
            ),
            array(
                'id'=> 75,
                'item_name' => 'Blueberry',
                'price' => 100.00,
                'itemCat_id' => 15,
                'subcat_id' => 8,
                'img_path' => "/possibilitea/public/images/items/Yogurt-And-Coffee/yogurt-blueberry.png"  
            ),
            array(
                'id'=> 76,
                'item_name' => 'Strawberry',
                'price' => 100.00,
                'itemCat_id' => 15,
                'subcat_id' => 8,
                'img_path' => "/possibilitea/public/images/items/Yogurt-And-Coffee/yogurt-strawberry.png"  
            ),
            array(
                'id'=> 77,
                'item_name' => 'Mango',
                'price' => 100.00,
                'itemCat_id' => 15,
                'subcat_id' => 8,
                'img_path' => "/possibilitea/public/images/items/Yogurt-And-Coffee/yogurt-mango.png"  
            ),
            array(
                'id'=> 78,
                'item_name' => 'Cafe Latte',
                'price' => 100.00,
                'itemCat_id' => 16,
                'subcat_id' => 8,
                'img_path' => "/possibilitea/public/images/items/Yogurt-And-Coffee/coffee-cafe-latte.png"  
            ),
            array(
                'id'=> 79,
                'item_name' => 'Americano',
                'price' => 100.00,
                'itemCat_id' => 16,
                'subcat_id' => 8,
                'img_path' => "/possibilitea/public/images/items/Yogurt-And-Coffee/coffee-americano.png" 
            ),
            array(
                'id'=> 80,
                'item_name' => 'Cafe Matcha',
                'price' => 100.00,
                'itemCat_id' => 16,
                'subcat_id' => 8,
                'img_path' => "/possibilitea/public/images/items/Yogurt-And-Coffee/coffee-cafe-mocha.png" 
            ),
            array(
                'id'=> 81,
                'item_name' => 'Caramel Machiatto',
                'price' => 100.00,
                'itemCat_id' => 16,
                'subcat_id' => 8,
                'img_path' => "/possibilitea/public/images/items/Yogurt-And-Coffee/coffee-caramel-machiatto.png" 
            ),
            array(
                'id'=> 82,
                'item_name' => 'Melon Pop',
                'price' => 150.00,
                'itemCat_id' => 17,
                'subcat_id' => 9,
                'img_path' => "/possibilitea/public/images/items/Lemonade-And-Fruitea/lemonade-melon-pop.png" 
            ),
            array(
                'id'=> 83,
                'item_name' => 'Ocean',
                'price' => 120.00,
                'itemCat_id' => 17,
                'subcat_id' => 9,
                'img_path' => "/possibilitea/public/images/items/Lemonade-And-Fruitea/lemonade-ocean.png" 
            ),
            array(
                'id'=> 84,
                'item_name' => 'Cucumber',
                'price' => 130.00,
                'itemCat_id' => 17,
                'subcat_id' => 9,
                'img_path' => "/possibilitea/public/images/items/Lemonade-And-Fruitea/lemonade-cucumber.png" 
            ),
            array(
                'id'=> 85,
                'item_name' => 'Green Grape Ade',
                'price' => 120.00,
                'itemCat_id' => 17,
                'subcat_id' => 9,
                'img_path' => "/possibilitea/public/images/items/Lemonade-And-Fruitea/lemonade-green-grape-ade.png" 
            ),
            array(
                'id'=> 86,
                'item_name' => 'Lychee',
                'price' => 120.00,
                'itemCat_id' => 17,
                'subcat_id' => 9,
                'img_path' => "/possibilitea/public/images/items/Lemonade-And-Fruitea/lemonade-lychee.png" 
            ),
            array(
                'id'=> 87,
                'item_name' => 'Grapefruit',
                'price' => 120.00,
                'itemCat_id' => 17,
                'subcat_id' => 9,
                'img_path' => "/possibilitea/public/images/items/Lemonade-And-Fruitea/lemonade-grapefruit.png" 
            ),
            array(
                'id'=> 88,
                'item_name' => 'Honey Peach',
                'price' => 120.00,
                'itemCat_id' => 17,
                'subcat_id' => 9,
                'img_path' => "/possibilitea/public/images/items/Lemonade-And-Fruitea/lemonade-honey-peach.png" 
            ),
            array(
                'id'=> 89,
                'item_name' => 'Passion Fruit',
                'price' => 100.00,
                'itemCat_id' => 18,
                'subcat_id' => 9,
                'img_path' => "/possibilitea/public/images/items/Lemonade-And-Fruitea/fruitea-passion-fruit.png" 
            ),
            array(
                'id'=> 90,
                'item_name' => 'Peach Mango',
                'price' => 100.00,
                'itemCat_id' => 18,
                'subcat_id' => 9,
                'img_path' => "/possibilitea/public/images/items/Lemonade-And-Fruitea/fruitea-peach-mango.png" 
            ),
            array(
                'id'=> 91,
                'item_name' => 'Lemonade',
                'price' => 100.00,
                'itemCat_id' => 19,
                'subcat_id' => 10,
                'img_path' => "/possibilitea/public/images/items/Others/lemonade.png" 
            ),
            array(
                'id'=> 92,
                'item_name' => 'Four Seasons',
                'price' => 60.00,
                'itemCat_id' => 19,
                'subcat_id' => 10,
                'img_path' => "/possibilitea/public/images/items/Others/four-seasons.png" 
            ),
            array(
                'id'=> 93,
                'item_name' => 'Iced Tea',
                'price' => 60.00,
                'itemCat_id' => 19,
                'subcat_id' => 10,
                'img_path' => "/possibilitea/public/images/items/Others/icetea.png" 
            ),
            array(
                'id'=> 94,
                'item_name' => 'Coke',
                'price' => 20.00,
                'itemCat_id' => 19,
                'subcat_id' => 10,
                'img_path' => "/possibilitea/public/images/items/Others/coke.png" 
            ),
            array(
                'id'=> 95,
                'item_name' => 'Sprite',
                'price' => 20.00,
                'itemCat_id' => 19,
                'subcat_id' => 10,
                'img_path' => "/possibilitea/public/images/items/Others/sprite.png" 
            ),
            array(
                'id'=> 96,
                'item_name' => 'San Mig Light',
                'price' => 55.00,
                'itemCat_id' => 19,
                'subcat_id' => 10,
                'img_path' => "/possibilitea/public/images/items/Others/san-mig-light.png" 
            ),
            array(
                'id'=> 97,
                'item_name' => 'San Mig Flavored',
                'price' => 55.00,
                'itemCat_id' => 19,
                'subcat_id' => 10,
                'img_path' => "/possibilitea/public/images/items/Others/san-mig-flavored.png" 
            ),
            array(
                'id'=> 98,
                'item_name' => 'San Mig Pilsen Small',
                'price' => 60.00,
                'itemCat_id' => 19,
                'subcat_id' => 10,
                'img_path' => "/possibilitea/public/images/items/Others/san-mig-pilsen-small.png" 
            )
        );

        
        DB::table('items')->insert($data);
    }
}
