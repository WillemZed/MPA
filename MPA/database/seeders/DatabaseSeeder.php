<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Genre;
use App\Models\Song;
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


        //Post::factory(5)->create();
        $kenshi = Artist::create([
            'name' => 'Yonezu Kenshi',
            'slug' => 'kenshi'
        ]);

        $eve = Artist::create([
            'name' => 'Eve',
            'slug' => 'eve'
        ]);

        $sim = Artist::create([
            'name' => 'SiM',
            'slug' => 'sim'
        ]);

        $bts = Artist::create([
            'name' => 'BTS',
            'slug' => 'bts'
        ]);

        $sinatra = Artist::create([
            'name' => 'Frank Sinatra',
            'slug' => 'sinatra'
        ]);

        $kpop = Genre::create([
            'name' => 'K-pop',
            'slug' => 'k-pop'
        ]);

        $rock = Genre::create([
            'name' => 'Rock',
            'slug' => 'rock'
        ]);

        $jpop = Genre::create([
            'name' => 'J-pop',
            'slug' => 'j-pop'
        ]);

        $jazz = Genre::create([
            'name' => 'Jazz',
            'slug' => 'jazz'
        ]);

        $heavyMetal = Genre::create([
            'name' => 'Heavy-metal',
            'slug' => 'heavy-metal'
        ]);

        Song::create([
            'title' => 'Lemon',
            'artist_id' => $kenshi->id,
            'genre_id' => $jpop->id
        ]);

        Song::create([
            'title' => 'Dynamite',
            'artist_id' => $bts->id,
            'genre_id' => $kpop->id
        ]);

        Song::create([
            'title' => 'Dramaturgy',
            'artist_id' => $eve->id,
            'genre_id' => $rock->id
        ]);

        Song::create([
            'title' => 'Fly me to the moon',
            'artist_id' => $sinatra->id,
            'genre_id' => $jazz->id
        ]);

        Song::create([
            'title' => 'The rumbling',
            'artist_id' => $sim->id,
            'genre_id' => $heavyMetal->id
        ]);

        Song::create([
            'title' => 'Paprika',
            'artist_id' => $kenshi->id,
            'genre_id' => $jpop->id
        ]);



        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My First Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => 'Lorem ipsum dolar sit amet.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut quam non sapien consectetur auctor vel eget ex. Fusce venenatis ex magna. Proin facilisis consequat nulla, id lobortis orci accumsan a. Nunc lobortis ex eget varius malesuada. Proin pretium condimentum auctor. Proin accumsan eros elit, vitae fermentum tortor ultricies id. Nam luctus lectus ex, ac scelerisque augue vulputate nec. Ut dignissim justo vitae magna pharetra, at pulvinar erat mollis. Suspendisse pharetra, urna ac facilisis fermentum, dui urna pharetra purus, malesuada ultrices velit enim sit amet mauris. Suspendisse potenti. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque mi erat, bibendum ultrices ullamcorper at, euismod quis nulla. Fusce ac neque tristique, tincidunt ligula ac, blandit tortor. Integer convallis, lectus id rutrum pharetra, augue sem gravida tellus, eget porttitor mauris ante lobortis purus. Aliquam erat volutpat.</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Second Post',
        //     'slug' => 'my-second-post',
        //     'excerpt' => 'Lorem ipsum dolar sit amet.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut quam non sapien consectetur auctor vel eget ex. Fusce venenatis ex magna. Proin facilisis consequat nulla, id lobortis orci accumsan a. Nunc lobortis ex eget varius malesuada. Proin pretium condimentum auctor. Proin accumsan eros elit, vitae fermentum tortor ultricies id. Nam luctus lectus ex, ac scelerisque augue vulputate nec. Ut dignissim justo vitae magna pharetra, at pulvinar erat mollis. Suspendisse pharetra, urna ac facilisis fermentum, dui urna pharetra purus, malesuada ultrices velit enim sit amet mauris. Suspendisse potenti. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque mi erat, bibendum ultrices ullamcorper at, euismod quis nulla. Fusce ac neque tristique, tincidunt ligula ac, blandit tortor. Integer convallis, lectus id rutrum pharetra, augue sem gravida tellus, eget porttitor mauris ante lobortis purus. Aliquam erat volutpat.</p>'

        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Third Post',
        //     'slug' => 'my-third-post',
        //     'excerpt' => 'Lorem ipsum dolar sit amet.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut quam non sapien consectetur auctor vel eget ex. Fusce venenatis ex magna. Proin facilisis consequat nulla, id lobortis orci accumsan a. Nunc lobortis ex eget varius malesuada. Proin pretium condimentum auctor. Proin accumsan eros elit, vitae fermentum tortor ultricies id. Nam luctus lectus ex, ac scelerisque augue vulputate nec. Ut dignissim justo vitae magna pharetra, at pulvinar erat mollis. Suspendisse pharetra, urna ac facilisis fermentum, dui urna pharetra purus, malesuada ultrices velit enim sit amet mauris. Suspendisse potenti. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque mi erat, bibendum ultrices ullamcorper at, euismod quis nulla. Fusce ac neque tristique, tincidunt ligula ac, blandit tortor. Integer convallis, lectus id rutrum pharetra, augue sem gravida tellus, eget porttitor mauris ante lobortis purus. Aliquam erat volutpat.</p>'

        // ]);
    }
}
