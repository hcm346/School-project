<?php

namespace App\Http\Controllers;

// use App\Ad;
use App\Http\Requests\AdStore;
use App\Models\Ad;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class AdController extends Controller
{
    use RegistersUsers;

    public function index()
    {
        $ads = DB::table('ads')->orderBy('created_at','DESC')->paginate(1);

        return view('ads', compact('ads'));

    // compact envoie la varaible ^ a linterieur
    }

    public function create() 
    {
        return view('create');
    }

    public function store(AdStore $request)
    {
    //    dd($request);
          $validated = $request->validated();

          if(!Auth::check()){

        $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',

        ]);
            // renvoie l'utilisateur creer donc on stock dans la variable
         $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

            $this->guard()->login($user);

        // co l'utilisateur creer et
        //  vu quil est co il va etre stocker dans la var ligne 52




    }

          $ad = new Ad();
          $ad->title = $validated['title'];
          $ad->description = $validated['description'];
          $ad->localisation = $validated['localisation'];
          $ad->price = $validated['price'];
          $ad->user_id = auth()->user()->id;

          $ad->save();   
          
          return redirect()->route('welcome')->with('success','bien joué le sang Votre annonce a été déposé.');
        
    }

    public function search()
    {
        
    }
}
