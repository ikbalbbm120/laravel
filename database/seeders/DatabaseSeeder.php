<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\category;
use App\Models\post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            

        User::create([
            'name' => 'ikbal',
            'username' => 'ikbal',
            'email' => 'jmbdkuda@gmail.com',
            'password' => bcrypt('1234')
        ]);

        // User::create([
        //     'name' => 'ngentot',
        //     'email' => 'ngentotenakbanget@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);
        User::factory(3)->create();
        category::create([
            'nama' => 'web programing',
            'slug' => 'web-programing'
        ]);
        category::create([
            'nama' => 'web design',
            'slug' => 'web design'
        ]);
        category::create([
            'nama' => 'personal',
            'slug' => 'personal'
        ]);

        Post::Factory(10)->create();

        // post::create([
        //     'title' => 'judul pertama',
        //     'slug' => 'judul pertama',
        //     'excerpt' => 'lorem ipsum pertama',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam earum officia cum eum nesciunt repudiandae architecto eos aut. Officiis, temporibus dolorum ea nulla, deleniti est ad vitae accusamus mollitia fuga fugit recusandae, at dolorem. A ex dolore tempore nemo laudantium dignissimos, officiis commodi consequatur quibusdam molestias voluptates nam deserunt quos, aliquam est. Aut, laborum consectetur, quis animi blanditiis consequuntur magnam nulla accusamus laboriosam quod hic quia suscipit commodi debitis ea nisi natus vero ipsum repellendus quisquam saepe alias doloremque omnis? Qui veritatis perspiciatis ducimus laborum? Nulla, facere harum! Quos aperiam, nobis et dolor dolorum, nemo quisquam excepturi quasi dolores eligendi amet sint explicabo voluptatibus impedit? Dolorem laborum animi quas quos? Minus reprehenderit, hic, aliquid ducimus ut fugiat neque dolor, sapiente unde perspiciatis ullam. Illo debitis corporis inventore ipsum nostrum aliquam modi velit. Ut eius ipsum quia dicta nulla pariatur perspiciatis mollitia soluta at adipisci, facere, impedit recusandae rerum hic accusamus debitis! Enim iusto amet facilis dignissimos, similique laborum distinctio reprehenderit porro eius sequi placeat aliquid? Voluptas eveniet molestias quaerat adipisci! A qui veniam iure tenetur magnam laborum quisquam labore aperiam dolore at exercitationem incidunt magni reiciendis harum cum eligendi, ipsa necessitatibus ex repellat est minus itaque sapiente? Voluptates, est fuga.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // post::create([
        //     'title' => 'judul kedua',
        //     'slug' => 'judul kedua',
        //     'excerpt' => 'lorem ipsum kedua',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam earum officia cum eum nesciunt repudiandae architecto eos aut. Officiis, temporibus dolorum ea nulla, deleniti est ad vitae accusamus mollitia fuga fugit recusandae, at dolorem. A ex dolore tempore nemo laudantium dignissimos, officiis commodi consequatur quibusdam molestias voluptates nam deserunt quos, aliquam est. Aut, laborum consectetur, quis animi blanditiis consequuntur magnam nulla accusamus laboriosam quod hic quia suscipit commodi debitis ea nisi natus vero ipsum repellendus quisquam saepe alias doloremque omnis? Qui veritatis perspiciatis ducimus laborum? Nulla, facere harum! Quos aperiam, nobis et dolor dolorum, nemo quisquam excepturi quasi dolores eligendi amet sint explicabo voluptatibus impedit? Dolorem laborum animi quas quos? Minus reprehenderit, hic, aliquid ducimus ut fugiat neque dolor, sapiente unde perspiciatis ullam. Illo debitis corporis inventore ipsum nostrum aliquam modi velit. Ut eius ipsum quia dicta nulla pariatur perspiciatis mollitia soluta at adipisci, facere, impedit recusandae rerum hic accusamus debitis! Enim iusto amet facilis dignissimos, similique laborum distinctio reprehenderit porro eius sequi placeat aliquid? Voluptas eveniet molestias quaerat adipisci! A qui veniam iure tenetur magnam laborum quisquam labore aperiam dolore at exercitationem incidunt magni reiciendis harum cum eligendi, ipsa necessitatibus ex repellat est minus itaque sapiente? Voluptates, est fuga.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // post::create([
        //     'title' => 'judul ketiga',
        //     'slug' => 'judul ketiga',
        //     'excerpt' => 'lorem ipsum ketiga',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam earum officia cum eum nesciunt repudiandae architecto eos aut. Officiis, temporibus dolorum ea nulla, deleniti est ad vitae accusamus mollitia fuga fugit recusandae, at dolorem. A ex dolore tempore nemo laudantium dignissimos, officiis commodi consequatur quibusdam molestias voluptates nam deserunt quos, aliquam est. Aut, laborum consectetur, quis animi blanditiis consequuntur magnam nulla accusamus laboriosam quod hic quia suscipit commodi debitis ea nisi natus vero ipsum repellendus quisquam saepe alias doloremque omnis? Qui veritatis perspiciatis ducimus laborum? Nulla, facere harum! Quos aperiam, nobis et dolor dolorum, nemo quisquam excepturi quasi dolores eligendi amet sint explicabo voluptatibus impedit? Dolorem laborum animi quas quos? Minus reprehenderit, hic, aliquid ducimus ut fugiat neque dolor, sapiente unde perspiciatis ullam. Illo debitis corporis inventore ipsum nostrum aliquam modi velit. Ut eius ipsum quia dicta nulla pariatur perspiciatis mollitia soluta at adipisci, facere, impedit recusandae rerum hic accusamus debitis! Enim iusto amet facilis dignissimos, similique laborum distinctio reprehenderit porro eius sequi placeat aliquid? Voluptas eveniet molestias quaerat adipisci! A qui veniam iure tenetur magnam laborum quisquam labore aperiam dolore at exercitationem incidunt magni reiciendis harum cum eligendi, ipsa necessitatibus ex repellat est minus itaque sapiente? Voluptates, est fuga.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // post::create([
        //     'title' => 'judul ke empat',
        //     'slug' => 'judul ke empat',
        //     'excerpt' => 'lorem ipsum ke empat',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam earum officia cum eum nesciunt repudiandae architecto eos aut. Officiis, temporibus dolorum ea nulla, deleniti est ad vitae accusamus mollitia fuga fugit recusandae, at dolorem. A ex dolore tempore nemo laudantium dignissimos, officiis commodi consequatur quibusdam molestias voluptates nam deserunt quos, aliquam est. Aut, laborum consectetur, quis animi blanditiis consequuntur magnam nulla accusamus laboriosam quod hic quia suscipit commodi debitis ea nisi natus vero ipsum repellendus quisquam saepe alias doloremque omnis? Qui veritatis perspiciatis ducimus laborum? Nulla, facere harum! Quos aperiam, nobis et dolor dolorum, nemo quisquam excepturi quasi dolores eligendi amet sint explicabo voluptatibus impedit? Dolorem laborum animi quas quos? Minus reprehenderit, hic, aliquid ducimus ut fugiat neque dolor, sapiente unde perspiciatis ullam. Illo debitis corporis inventore ipsum nostrum aliquam modi velit. Ut eius ipsum quia dicta nulla pariatur perspiciatis mollitia soluta at adipisci, facere, impedit recusandae rerum hic accusamus debitis! Enim iusto amet facilis dignissimos, similique laborum distinctio reprehenderit porro eius sequi placeat aliquid? Voluptas eveniet molestias quaerat adipisci! A qui veniam iure tenetur magnam laborum quisquam labore aperiam dolore at exercitationem incidunt magni reiciendis harum cum eligendi, ipsa necessitatibus ex repellat est minus itaque sapiente? Voluptates, est fuga.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
