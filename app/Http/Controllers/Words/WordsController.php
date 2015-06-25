<?php namespace App\Http\Controllers\Words;

use App\Http\Controllers\Controller;
use App\Words;
use Auth, View;
use Request;

class WordsController extends Controller
{

    public function index()
    {
        $dictwords = Words::paginate(25);

        return View::make('words/words', ['dictwords' => $dictwords]);

        /* foreach ($dictwords as $word)
         {
             var_dump($word->word);
         }*/

    }

    public function findword()
    {
        $input = Request::get('search');
        $find = Words::where('word', '=', $input)->get();
        //return $find ;
        if (!empty($find)) {
            return View::make('words/meaning', ['find' => $find]);
            //return $find;
        }


    }

    public function wordgame()
    {
        $correct = Words::select('id', 'word', 'definition')->orderBYRaw(('RAND()'))->take(1)->get();
        $random = Words::select('id', 'definition')->orderByRaw(('RAND()'))->take(3)->get();
        return View::make('words/wordgame', ['random' => $random], ['correct' => $correct]);
        //return $correct ;
    }

    public function findans()
    {
       // $ans = Request::get('radio');
        $id = Request::get('id');

        //echo $ans.'</br>'.$id; die;
        $finalans = Words::select('id')->where('definition', 'like', Request::get('radio'))->get()->toArray();
        //print_r($finalans);die;
        if (($finalans) == null)
            $result = false;
        else {
            if ($finalans[0]['id'] == $id) {
                $result = true;
            } else
                $result = false;
            // echo $result;
        }
        return View::make('words/result', ['result' => $result]);
    }

}

?>
