<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $id = Auth::user()->id;
        if($id < 7000){
        $range = range(1,7000);
        foreach( $range as $i) {
            if($id == $i){
        //         $client = new \GuzzleHttp\Client();
        // $res = $client->request('GET', 'http://127.0.0.1:5000/reco/'.$id);
        // //json_decode($res);
        

        // $result =  $res->getBody();
        // //echo $result;
        // $obj = json_decode($result);
        $client_2 = new \GuzzleHttp\Client();
        $res_2 = $client_2->request('GET', 'http://127.0.0.1:5000/top_books');
        //json_decode($res);
        

        $result_2 =  $res_2->getBody();
        
        
        //echo $result;
        $obj_2 = json_decode($result_2);
        //return view('top',compact('obj'));
        return view('home',compact('obj','obj_2'));
     }
    

        }
        
        
       
   } else{
    $user_id = Auth::user()->id;
    $client = new \GuzzleHttp\Client();
    $res = $client->request('GET', 'http://127.0.0.1:5000/append_new_users/'.$user_id);
    $result =  $res->getBody();
    $obj = json_decode($result);
    //dd($obj);
    return view('top',compact('obj'));

    // $client = new \GuzzleHttp\Client();
    //     $res = $client->request('GET', 'http://127.0.0.1:5000/append_new_users');
   }
}
public function explore(){
     $id = Auth::user()->id;
     $email = Auth::user()->email;
     $name = Auth::user()->name;
        if($id < 7000){
        $range = range(1,7000);
        foreach( $range as $i) {
            if($id == $i){
                $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://127.0.0.1:5000/reco/'.$id);
        //json_decode($res);
        

        $result =  $res->getBody();
        //echo $result;
        $obj = json_decode($result);
        return view('explore',compact('obj','name','email'));
}
}
}
}

 
    public function update_dataset(Request $request){
        $user_id = Auth::user()->id;
        $book_id = $request->input('book_id');
        $rating = $request->input('rating');
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', 'http://127.0.0.1:5000/update_csv', [
            'json' => [
                'user_id' => $user_id,
                'book_id' => $book_id,
                'rating'  => $rating
                    
                ]]);
         $result =  $res->getBody();
        //dd($book_id,$rating,$user_id);
    }
//         $client = new \GuzzleHttp\Client();
//         $res = $client->request('POST', "http://127.0.0.1:5000/update_csv/",[
//     'user_id' => 4385,
//     'book_id' => '0000913154',
//     'rating'  => 8
// ]);

       

//+++++++++++===================APPEND NEW USERS ======================*************************************
    public function append_new_users(){
        $user_id = Auth::user()->id;
        $book_id = $request->input('book_id');
        $rating = $request->input('rating');
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', 'http://127.0.0.1:5000/append_new_users', [
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
    public function logout(){
        Auth::logout();
     return redirect('/login');
    }

    }
