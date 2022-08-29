<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
      public function run()
    {
        $insertData = array([
            'title' => '.NET 6 \u2013 Modern Cross-Platform Development - Sixth Edition',
            'concept' => 'Cross Platform Mobile Development',
			'language' => 'C#',
			'publication_date'=>'2021-11-09 00:00:00',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'title' => 'The Python Workshop',
            'concept' => 'Programming Language',
			'language' => 'Python',
			'publication_date'=>'2021-11-06 00:00:00',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
        ],[
            'title' => 'Hands on Data Processing',
            'concept' => 'Big Data',
			'language' => 'Python',
			'publication_date'=>'2021-11-09 00:00:00',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
        ],[
            'title' => 'Machine Learning',
            'concept' => 'Big Data',
			'language' => 'Python',
			'publication_date'=>'2021-11-24 00:00:00',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
        ],
		[
            'title' => 'Machine Learning',
            'concept' => 'Big Data',
			'language' => 'Python',
			'publication_date'=>'2021-11-24 00:00:00',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
        ],
		[
            'title' => 'Azure Data Engineer Associate Certification Guide',
            'concept' => 'Azure',
			'language' => 'Microsoft',
			'publication_date'=>'2021-02-08 00:00:00',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
        ],[
            'title' => 'Mastering Go - Third Edition',
            'concept' => 'Programming Language',
			'language' => 'Go',
			'publication_date'=>'2021-08-31 00:00:00',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
        ],[
            'title' => 'Node.js Design Patterns - Third Edition',
            'concept' => 'Design Patterns ',
			'language' => 'Javascript',
			'publication_date'=>'2021-03-30 00:00:00',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
        ],
		[
            'title' => 'Full-Stack Web Development with GraphQL and React - Second Edition',
            'concept' => 'Full-Stack Web Development',
			'language' => 'React',
			'publication_date'=>'2021-11-24 00:00:00',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
        ]
		);
		Product::insert($insertData);
    }
    
}
