<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing {
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Architecto, iure eaque nostrum vero aspernatur excepturi! 
                Possimus rem accusamus reiciendis non fugit ipsum, ea 
                expedita dolorem totam provident enim ullam doloribus.'

            ],
            [
                'id' => 1,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Architecto, iure eaque nostrum vero aspernatur excepturi! 
                Possimus rem accusamus reiciendis non fugit ipsum, ea 
                expedita dolorem totam provident enim ullam doloribus.'
            ]
        ];
    }   
    public static function find($id){
        $listings = self::all();
        foreach ($listings as $listing){
            if ($listing['id'] == '$id') {
                return $listing;
            }
        }
    }
};
