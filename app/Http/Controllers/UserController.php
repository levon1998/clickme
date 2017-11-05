<?php

namespace App\Http\Controllers;

use App\Score;
use App\Share;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $score = 0;
        if (Auth::check()) {
            $score = Score::where('user_id', Auth::user()->id)->first();
            $score = $score->score;
        }
        $leaders = Score::orderBy('score', 'desc')->limit(10)->get();
        return view('users.index', compact('score', 'leaders'));
    }
    public function save(Request $request)
    {
        if (!Auth::check()) {
            return false;
        }
        $findResult = Score::where('user_id', Auth::user()->id)->first();
        if ($findResult) {
            if ($findResult->score < $request->input('total')) {
                $findResult->score = $request->input('total');
                $findResult->save();
                return "ok";
            }
            return 'success';
        } else {
            $score = new Score();
            $score->score = $request->input('total');
            $score->user_id = Auth::user()->id;
            $score->save();
        }
        return "success";
    }
    public function export(Request $request)
    {
        return true;
//        $data = $request->input('base64data');
//        $image = explode('base64,',$data);
//        $time =  microtime(true);
//        $ip = $request->ip();
//        $name = bcrypt($time.$ip);
//        file_put_contents(base64_decode($image[1]));
//        Image::make(file_get_contents($data->base64_image))->save('/uploadimg/'.$name);
//        $share = new Share();
//        $share->image = '/uploadimg/'.$name;
//        $share->save();
    }
}
