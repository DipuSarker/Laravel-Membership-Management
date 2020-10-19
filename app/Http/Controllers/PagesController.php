<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class PagesController extends Controller
{
    public function posts()
    {
        // Single data in controller
        // $name = 'Dipu';
        // $age = 25;

        // return 'Name: '. $name . ' Age: ' . $age;

        // Objects
        // $user = new stdClass();
        // $user->name = 'dipu';
        // $user->age = 25;

        // print_r($user);

        //Multiple data /Array
        $post[] = "";
        $single_post = new stdClass();

        $single_post->name = 'Dipu';
        $single_post->age = 25;
        $single_post->gender = 'male';
        array_push($post, $single_post);

        $single_post = new stdClass();

        $single_post->name = 'Munna';
        $single_post->age = 20;
        $single_post->gender = 'male';
        array_push($post, $single_post);

        print_r($post);

    }

    public function postView()
    {
        // Single data in controller
        // $name = 'Dipu sarker';
        // $age = 25;

        // Objects
        // $user = new stdClass();
        // $user->name = 'dipu';
        // $user->age = 25;
        // $user->gender = 'male';

        //Multiple data /Array
        $posts = [];
        $singlePost = new stdClass();
        $singlePost->id = 1;
        $singlePost->title = "Simple Post 1";
        $singlePost->description = ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur. Possimus veniam dolorum totam eligendi aperiam perspiciatis consequatur reprehenderit quas atque molestias quam vitae libero, incidunt nihil in quae ipsum!';
        $singlePost->total_view = 20;
        array_push($posts, $singlePost);

        $singlePost = new stdClass();
        $singlePost->id = 2;
        $singlePost->title = "Simple Post 2";
        $singlePost->description = ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur. Possimus veniam dolorum totam eligendi aperiam perspiciatis consequatur reprehenderit quas atque molestias quam vitae libero, incidunt nihil in quae ipsum!';
        $singlePost->total_view = 100;
        array_push($posts, $singlePost);


        $singlePost = new stdClass();
        $singlePost->id = 3;
        $singlePost->title = "Simple Post 3";
        $singlePost->description = ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur. Possimus veniam dolorum totam eligendi aperiam perspiciatis consequatur reprehenderit quas atque molestias quam vitae libero, incidunt nihil in quae ipsum!';
        $singlePost->total_view = 200;
        array_push($posts, $singlePost);

        return view('posts', compact('posts'));
        // return view('posts')->withName($name)->withAge($age);
    }

    public function show($id)
    {
        $post = new stdClass();
        $post->id = $id;
        $post->title = "Simple Post 1";
        $post->description = ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur. Possimus veniam dolorum totam eligendi aperiam perspiciatis consequatur reprehenderit quas atque molestias quam vitae libero, incidunt nihil in quae ipsum!<br />Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur. Possimus veniam dolorum totam eligendi aperiam perspiciatis consequatur reprehenderit quas atque molestias quam vitae libero, incidunt nihil in quae ipsum!';
        $post->total_view = 20;
        return view('post-single', compact('post'));
    }


}
