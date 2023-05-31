<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    private static $biodata = [
        'name' => 'Riski Prayoga',
        'nim' => '21103041034',
        'address' => "Sumatera Utara",
        'hobby' => [
            [
                'name' => 'berenang',
                'url' => 'https://images.unsplash.com/photo-1600965962361-9035dbfd1c50?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80'
            ],
            [
                'name' => 'Traveling',
                'url' =>  'https://images.unsplash.com/photo-1526772662000-3f88f10405ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80'
            ],
            [
                'name' => 'Mendengarkan musik',
                'url' => 'https://images.unsplash.com/photo-1617469859390-a3a579d11041?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80'
            ]
        ]
    ];

    public static function getBiodata()
    {
        return self::$biodata;
    }
}
