<?php
namespace App\Models;

class Listing
    {
        public static function all()
        {
            return [
                [
                    'id' => 1,
                    'title' => 'Listing 1',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris euismod, nunc euismod consectetur convallis, nisi nunc ultricies nisi, euismod consectetur nisi nisi euismod.',
                ],
                [
                    'id' => 2,
                    'title' => 'Listing 2',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris euismod, nunc euismod consectetur convallis, nisi nunc ultricies nisi, euismod consectetur nisi nisi euismod.',
                ],
            ];
        }
    }


