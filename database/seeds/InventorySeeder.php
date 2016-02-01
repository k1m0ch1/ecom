<?php

use Illuminate\Database\Seeder;
use Fzaninotto\Faker;
use App\Models\Inventory;

class InventorySeeder extends Seeder{

    public function run(){

        Inventory::create(array(
            'book_id' => '1',
            'stock' => '10',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '2',
            'stock' => '10',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '3',
            'stock' => '10',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '4',
            'stock' => '10',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '5',
            'stock' => '10',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '6',
            'stock' => '10',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '7',
            'stock' => '10',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '8',
            'stock' => '10',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '9',
            'stock' => '20',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '10',
            'stock' => '10',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '11',
            'stock' => '20',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '12',
            'stock' => '10',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '13',
            'stock' => '20',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '14',
            'stock' => '10',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '15',
            'stock' => '20',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '16',
            'stock' => '10',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '17',
            'stock' => '20',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '18',
            'stock' => '20',
            'quota' => '20'
        ));

        Inventory::create(array(
            'book_id' => '19',
            'stock' => '20',
            'quota' => '20'
        ));
    }
}