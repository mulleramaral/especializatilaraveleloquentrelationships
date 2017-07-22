<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\PostViews;
use Illuminate\Support\Facades\DB;

class Relationships extends Controller
{
    public function oneToOne()
    {
        /*
        DB::beginTransaction();

        $post = Post::create([
            'title' => 'Titulo do post',
            'description' => 'Descrição do post',
            'date' => date('Y-m-d'),
            'time' => date('Hms')
        ]);

        $postViews = PostViews::create([
            'qtde' => 0,
            'id_post' => $post->id
        ]);

        if($postViews && $post){
            DB::commit();
        }else{
            DB::rollback();
        }

        return "{$post->id} - {$postViews->id}";
        */

        //recuperando quantidade de views do post
        $post = Post::find(7);

        $postViews = $post->qtdViews;
        $newQtdViews = $postViews->qtde + 1;
        //dd($newQtdViews);
       //dd($postViews->toArray());

        $updatepostview = $postViews->update([
            'qtde' => $newQtdViews
        ]);

        dd($updatepostview);


        /*
        $viewPost = PostViews::find(3);
        dd($viewPost->post->toArray());
        */
    }
}
