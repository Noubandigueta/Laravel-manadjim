<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Post;
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

    public function storeMessage(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'subject' => 'required',
            'text' => 'required',
            ]);

            $msg = new Message();

            $msg->nom_utilisateur = $request->name;
            $msg->email_utilisateur = $request->email;
            $msg->tel_utilisateur = $request->phone;
            $msg->sujet = $request->subject;
            $msg->contenu = $request->text;

            $msg->save();

            return redirect()->route('app_contact')->with('status', 'Form Data Has Been validated and insert');
            // return Message::create([
            //     'nom_utilisateur' => $request->name,
            //     'email_utilisateur' => $request->email,
            //     'tel_utilisateur' => $request->phone,
            //     'sujet' => $request->subject,
            //     'contenu' => $request->text,
            // ]);
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
}
