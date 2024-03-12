<?php

namespace App\Http\Controllers;
use App\Models\BlogArticle;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use App\Notifications\WelcomeUser;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show(): View{
        $posts = BlogArticle::orderBy('created_at', 'desc')->get();

        return view('blog', [
            'posts' => $posts
        ]);
    }

    public function showArticle($article): View {
        $article = BlogArticle::where('url', $article)->first();


        return view('blog.show', [
            'article' => $article,

        ]);
    }

    function joinNewsletter(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);

        $email = $request->input('email');

        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser && !$existingUser->superuser) {
            Auth::login($existingUser, true);
        } elseif ($existingUser && $existingUser->superuser) {
            return redirect(route('home'));
        } else {
            $user = User::create([
                'email' => $request->email,
                'first_name' => $request->email,
                'password' => Hash::make('password'),
            ]);

            Auth::login($user, true);
            $user->notify(new WelcomeUser());
            return redirect(route('join-success'));

        }

        return response()->json([
            'message' => 'success'
        ]);
    }
}
