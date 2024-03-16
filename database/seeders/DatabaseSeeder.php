<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Matthew',
            'email' => 'Matthew@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Dosy',
            'email' => 'dosy@gmail.com',
            'password' => bcrypt('12345')
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web-Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);
        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => ' Voluptatum deserunt maxime provident libero! Doloribus possimus soluta laborum minima cum voluptas harum sunt dolorem, voluptate esse neque magni repudiandae veniam atque repellat quasi quod numquam recusandae nostrum non minus natus sit tempore. Vel nobis dolor suscipit exercitationem eius doloribus maiores odit doloremque magnam fuga?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati, repellat voluptates delectus consequuntur id commodi sunt, eum perferendis, iure assumenda aliquam explicabo laudantium praesentium dolorem veniam! At, voluptatibus suscipit! Ea fuga cumque sapiente at tempora reiciendis incidunt sunt culpa corporis neque placeat doloremque, ipsum nisi iure maiores quibusdam facilis asperiores dolores voluptatibus dolorum id. Voluptatum deserunt maxime provident libero! Doloribus possimus soluta laborum minima cum voluptas harum sunt dolorem, voluptate esse neque magni repudiandae veniam atque repellat quasi quod numquam recusandae nostrum non minus natus sit tempore. Vel nobis dolor suscipit exercitationem eius doloribus maiores odit doloremque magnam fuga?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => ' Voluptatum deserunt maxime provident libero! Doloribus possimus soluta laborum minima cum voluptas harum sunt dolorem, voluptate esse neque magni repudiandae veniam atque repellat quasi quod numquam recusandae nostrum non minus natus sit tempore. Vel nobis dolor suscipit exercitationem eius doloribus maiores odit doloremque magnam fuga?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati, repellat voluptates delectus consequuntur id commodi sunt, eum perferendis, iure assumenda aliquam explicabo laudantium praesentium dolorem veniam! At, voluptatibus suscipit! Ea fuga cumque sapiente at tempora reiciendis incidunt sunt culpa corporis neque placeat doloremque, ipsum nisi iure maiores quibusdam facilis asperiores dolores voluptatibus dolorum id. Voluptatum deserunt maxime provident libero! Doloribus possimus soluta laborum minima cum voluptas harum sunt dolorem, voluptate esse neque magni repudiandae veniam atque repellat quasi quod numquam recusandae nostrum non minus natus sit tempore. Vel nobis dolor suscipit exercitationem eius doloribus maiores odit doloremque magnam fuga?',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => ' Voluptatum deserunt maxime provident libero! Doloribus possimus soluta laborum minima cum voluptas harum sunt dolorem, voluptate esse neque magni repudiandae veniam atque repellat quasi quod numquam recusandae nostrum non minus natus sit tempore. Vel nobis dolor suscipit exercitationem eius doloribus maiores odit doloremque magnam fuga?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati, repellat voluptates delectus consequuntur id commodi sunt, eum perferendis, iure assumenda aliquam explicabo laudantium praesentium dolorem veniam! At, voluptatibus suscipit! Ea fuga cumque sapiente at tempora reiciendis incidunt sunt culpa corporis neque placeat doloremque, ipsum nisi iure maiores quibusdam facilis asperiores dolores voluptatibus dolorum id. Voluptatum deserunt maxime provident libero! Doloribus possimus soluta laborum minima cum voluptas harum sunt dolorem, voluptate esse neque magni repudiandae veniam atque repellat quasi quod numquam recusandae nostrum non minus natus sit tempore. Vel nobis dolor suscipit exercitationem eius doloribus maiores odit doloremque magnam fuga?',
            'category_id' => 2,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => ' Voluptatum deserunt maxime provident libero! Doloribus possimus soluta laborum minima cum voluptas harum sunt dolorem, voluptate esse neque magni repudiandae veniam atque repellat quasi quod numquam recusandae nostrum non minus natus sit tempore. Vel nobis dolor suscipit exercitationem eius doloribus maiores odit doloremque magnam fuga?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati, repellat voluptates delectus consequuntur id commodi sunt, eum perferendis, iure assumenda aliquam explicabo laudantium praesentium dolorem veniam! At, voluptatibus suscipit! Ea fuga cumque sapiente at tempora reiciendis incidunt sunt culpa corporis neque placeat doloremque, ipsum nisi iure maiores quibusdam facilis asperiores dolores voluptatibus dolorum id. Voluptatum deserunt maxime provident libero! Doloribus possimus soluta laborum minima cum voluptas harum sunt dolorem, voluptate esse neque magni repudiandae veniam atque repellat quasi quod numquam recusandae nostrum non minus natus sit tempore. Vel nobis dolor suscipit exercitationem eius doloribus maiores odit doloremque magnam fuga?',
            'category_id' => 3,
            'user_id' => 2
        ]);
    }
}
