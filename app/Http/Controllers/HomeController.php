<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Post;
use App\Services\EmailService;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //La page/vue home.blade.php
    public function home()
    {
        return view(('home.home'));
    }

    //La page/vue about.blade.php
    public function about()
    {
        return view(('home.about'));
    }

    public function contact()
    {
        return view(('contact.contact'));
    }

    public function sendMessage(Request $request){
        if($request->isMethod('post')){
            $username = $request->input('name');
            $userEmail = $request->input('email');
            $userPhone = $request->input('phone');
            $subject = $request->input('subject');
            $contenu = $request->input('text');
            $adminEmail = 'noubabongo@gmail.com';

            $emailContact = new EmailService;
            $emailContact->emailContact($subject, $userEmail, $adminEmail, $username, true, $contenu, $userPhone);

            return redirect()->route('app_contact')->with('success', 'Votre message est envoyé avec succès!');
        }

    }

    public function bateau(){
        return view('services.bateauVue');
    }

    public function graphisme(){
        return view('services.graphismeVue');
    }

    public function agrobusiness(){
        return view('services.agrobusinessVue');
    }

    public function blogs(){
        //Récupération de tous les posts
        $posts = Post::latest()->get();
        return view('blogs.blogs', compact("posts"));
    }

    //La page du dashboard.blade.php
    public function dashboard()
    {
        if(Auth::check()){
            if(Auth::user()->type == 'admin'){
                $users = User::all();
                // dd($users);
                return view('home.dashboard')->with(compact('users'));
            }else{
                return view('home.dashboardUser');
            }
        }

    }

    public static function enleverCaracteresSpeciaux($text) {
        $utf8 = array(
        '/[áàâãªä]/u' => 'a',
        '/[ÁÀÂÃÄ]/u' => 'A',
        '/[ÍÌÎÏ]/u' => 'I',
        '/[íìîï]/u' => 'i',
        '/[éèêë]/u' => 'e',
        '/[ÉÈÊË]/u' => 'E',
        '/[óòôõºö]/u' => 'o',
        '/[ÓÒÔÕÖ]/u' => 'O',
        '/[úùûü]/u' => 'u',
        '/[ÚÙÛÜ]/u' => 'U',
        '/ç/' => 'c',
        '/Ç/' => 'C',
        '/ñ/' => 'n',
        '/Ñ/' => 'N',
        '//' => '-', // conversion d'un tiret UTF-8 en un tiret simple
        // '/[]/u' => ' ', // guillemet simple
        '/[«»]/u' => ' ', // guillemet double
        '/ /' => ' ', // espace insécable (équiv. à 0x160)
        );
        return preg_replace(array_keys($utf8), array_values($utf8), $text);
        }
}
