<?php

namespace App\Http\Controllers;

use App\Models\Locale;
use App\Models\Post;
use App\Models\PostUser;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function welcome()
    {
        $search = request()->query('search');
        if ($search) {
            $posts = Post::where('body', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%")
                ->orWhere('title', 'LIKE', "%{$search}%")
                ->paginate(6);
        } else {
            $posts = Post::where('status', 'избранная')->paginate(6);
            $posts->withPath('/');
        }

        return view('welcome', compact( 'posts'));
    }

    public function post($id)
    {
        $post = Post::where('id', $id)->first();
        $similarity = $post->title;

        $posts = Post::where('body', 'LIKE', "%{$similarity}%")
            ->orWhere('description', 'LIKE', "%{$similarity}%")
            ->orWhere('title', '!==', "%{$similarity}%")
            ->get();

        return view('post', compact('post', 'similarity', 'posts'));
    }

    public function all()
    {
        $search = request()->query('search');
        if ($search) {
            $posts = Post::where('body', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%")
                ->orWhere('title', 'LIKE', "%{$search}%")
                ->paginate(6);
        } else {
            $posts = Post::paginate(6);
            $posts->withPath('/news');
        }

        return view('posts', compact('posts'));
    }

    public function add(Request $request)
    {
        PostUser::create([
            'user_id' => $request->user_id,
            'post_id' => $request->post_id
        ]);

        return redirect()->back()->with('success', 'Post was successfully added to favorites');
    }

    public function locale($id)
    {
        $locale = Locale::where('id', $id)->first();

        return view('locale', compact('locale'));
    }
}
