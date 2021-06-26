<?php

namespace Database\Seeders;

use App\Models\SiteProfile;
use Illuminate\Database\Seeder;

class SiteProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteProfile::create([
            'title'       => 'Book Web',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui alias aut repellat consequuntur sapiente quaerat est similique totam repudiandae debitis! Quos enim unde magni accusamus. Excepturi, esse repellat? Minima, tenetur',
            'location'    => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1270865.4491960125!2d-0.101599!3d51.528642!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sus!4v1624557208516!5m2!1sen!2sus" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'address'     => 'Karachi',
            'mobile'      => '+923077521235',
            'email'       => 'info@bookwebstore.com',
            'facebook'    => 'https://facebook.com/saifurrehman200',
            'Youtube'     => 'https://facebook.com/saifurrehman200',
            'Twitter'     => 'https://facebook.com/saifurrehman200',
            'Instagram'   => 'https://facebook.com/saifurrehman200',
        ]);
    }
}
