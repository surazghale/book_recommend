<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
class BooksController extends Controller
{
    public function index(){
    	$email = Auth::user()->user_id;
        if($email < 5000){
        $range = range(1,5000);
        foreach( $range as $i) {
            if($email == $i){
                $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://127.0.0.1:5000/reco/'.$email);
        //json_decode($res);
        

        $result =  $res->getBody();
        //echo $result;
        $obj = json_decode($result);
        //dd($obj);
        // parse_str($obj,$a);
       
        // // $obj->toArray();
        // dd($obj,$result,$res,$a);
    //     $data = array(
    //   "title" => "hello",
    //   "description" => "test test test"
    // );

        //dd($obj);
        return view('recommend',compact('obj'));

            }

        }
    	
    	
       
   } else {
    
   }


    }
    public function explore(){
        
    }
    public function top_ratings(){
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://127.0.0.1:5000/top_books');
        //json_decode($res);
        

        $result =  $res->getBody();
        //echo $result;
        $obj = json_decode($result);
        return view('top',compact('obj'));
        //dd($obj);
    }
    public function update_dataset(){
         $user_id = 4385;
         $book_id = '0000913154';
         $rating = 9;
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', 'http://127.0.0.1:5000/update_csv', [
            'json' => [
                'user_id' => $user_id,
                'book_id' => $book_id,
                'rating'  => $rating
                    
                ]]);
//         $client = new \GuzzleHttp\Client();
//         $res = $client->request('POST', "http://127.0.0.1:5000/update_csv/",[
//     'user_id' => 4385,
//     'book_id' => '0000913154',
//     'rating'  => 8
// ]);

        $result =  $res->getBody();
        //dd($book_id,$rating,$user_id);
    }

// APPENDING NEW USERS DATA TO DATASET
    public function append_new_users(){
        $user_id = 274064;
        $book_id = '0000913154';
        $rating = 6;
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', 'http://127.0.0.1:5000/append_new_users', [
            'json' => [
                'user_id' => $user_id,
                'book_id' => $book_id,
                'rating'  => $rating
                    
                ]]);
    }

}

