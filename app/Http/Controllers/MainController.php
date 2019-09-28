<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Tag;
use App\Submission;
use App\Photography;
use App\PhotoTag;

class MainController extends Controller
{
    /**
     * Register for new Contestant
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerNew(Request $request)
    {
        $request->validate([
          'name' => 'required|string|max:50',
          'mail' => 'required|email',
          'password' => 'required',
          'confirmPassword' => 'required|same:password'
        ]);
        //register new contestan after validations
        $user = new User;
        $user->email = $request->mail;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->save();
        //authenticate the user for the sistem
        Auth::login($user);

        return redirect()->route('dashboard');
    }

    /**
     * Login
     */
    public function logIn(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required|string|max:50'
        ]);
        //retriving the user if it exist
        $user = User::where('email', $request->email)->first();

        if ($user != null && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withInput()->withErrors(["noValid" => "noValid","email" => "noValid", "password" => "noValid"]);
        }
    }

    /**
     * LogOut
     */
    public function logOut(Request $request)
    {
        Auth::logout();
        $request->session()->regenerate();
        return redirect()->route('index');
    }

    /**
     * change language
     */
    public function changeLang(Request $request)
    {
        session(['lang' => $request->lang ]);
        return redirect()->back();
    }

    /**
     * get tags with letter
     */
    public function getTags(Request $request)
    {
        $request->validate([
            'letter' => 'string|max:5'
        ]);
        $letter = $request->letter;
        $tags = Tag::where('name', 'like', $letter.'%')->get();
        return $tags;
    }

    /**
     * get tags with letter
     */
    public function submitPhoto(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:30',
            'description' => 'required|string|max:200',
            'category' => 'required',
            'photo' => 'required|image'
        ]);

        //create the new submission
        $newSubmission = new Submission;
        $newSubmission->estado = "P";
        $newSubmission->id_user = Auth::id();
        $newSubmission->save();
        $idSubmission = $newSubmission->id;

        //create the new photography
        $newPhoto = new Photography;
        $newPhoto->image = str_replace("public","storage",Storage::putFile('public/photos', $request->photo, 'public'));
        $newPhoto->name = $request->title;
        $newPhoto->description = $request->description;
        $newPhoto->id_submission=$idSubmission;
        $newPhoto->id_category = $request->category;
        $newPhoto->save();
        $idPhoto = $newPhoto->id;

        //add the tags
        if($request->tags != null){
            foreach ($request->tags as $tag) {
                $tag = Tag::firstOrCreate(['name' => $tag], ['description' => 'agregado']);
                $newPT = new PhotoTag;
                $newPT->id_photography = $idPhoto;
                $newPT->id_tag = $tag->id;
                $newPT->save();
            }
        }
        return redirect()->back()->with('message' , 'Agregado');

    }
}
