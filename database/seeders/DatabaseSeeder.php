<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem fistrum va usté muy cargadoo caballo blanco caballo negroorl papaar papaar pupita va usté muy cargadoo benemeritaar papaar papaar la caidita qué dise usteer.',
            'body' => '<p>Lorem fistrum va usté muy cargadoo caballo blanco caballo negroorl papaar papaar pupita va usté muy cargadoo benemeritaar papaar papaar la caidita qué dise usteer. Se calle ustée mamaar quietooor está la cosa muy malar la caidita te voy a borrar el cerito ese pedazo de a wan hasta luego Lucas no puedor. Caballo blanco caballo negroorl amatomaa al ataquerl ese pedazo de no te digo trigo por no llamarte Rodrigor a wan mamaar fistro fistro benemeritaar hasta luego Lucas. Se calle ustée pecador papaar papaar caballo blanco caballo negroorl diodenoo te va a hasé pupitaa a wan no te digo trigo por no llamarte Rodrigor caballo blanco caballo negroorl. Llevame al sircoo por la gloria de mi madre de la pradera ese que llega por la gloria de mi madre a gramenawer. Me cago en tus muelas fistro tiene musho peligro te va a hasé pupitaa torpedo de la pradera ese que llega. </p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem fistrum va usté muy cargadoo caballo blanco caballo negroorl papaar papaar pupita va usté muy cargadoo benemeritaar papaar papaar la caidita qué dise usteer.',
            'body' => '<p>Lorem fistrum va usté muy cargadoo caballo blanco caballo negroorl papaar papaar pupita va usté muy cargadoo benemeritaar papaar papaar la caidita qué dise usteer. Se calle ustée mamaar quietooor está la cosa muy malar la caidita te voy a borrar el cerito ese pedazo de a wan hasta luego Lucas no puedor. Caballo blanco caballo negroorl amatomaa al ataquerl ese pedazo de no te digo trigo por no llamarte Rodrigor a wan mamaar fistro fistro benemeritaar hasta luego Lucas. Se calle ustée pecador papaar papaar caballo blanco caballo negroorl diodenoo te va a hasé pupitaa a wan no te digo trigo por no llamarte Rodrigor caballo blanco caballo negroorl. Llevame al sircoo por la gloria de mi madre de la pradera ese que llega por la gloria de mi madre a gramenawer. Me cago en tus muelas fistro tiene musho peligro te va a hasé pupitaa torpedo de la pradera ese que llega. </p>'
        ]);
    }
}
