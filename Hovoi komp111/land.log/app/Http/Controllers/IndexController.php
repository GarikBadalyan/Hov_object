<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\People;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Mail;


class IndexController extends Controller
{
    public function execute(Request $request ){
        if($request->isMethod('post')){
             $this->validate($request,[
                 'name' => 'required|max:255',
                 'email' => 'required|email',
                 'text' => ''
                 ]);
             $data = $request->all();
             $result = Mail::send('site.email',['data'=>$data],function ($message) use ($data){
                $mail_admin = env('MAIL_ADMIN');
                $message->from($data['email'],$data['name']);
                $message->to($mail_admin)->subject('Question');
             });
             if($result){
                 return redirect()->route('home')->with('status','Email is send');
             }
        }
       // dd($request);


        $pages = Page::all();
        $portfolios = Portfolio::all();         //get(array('name','filter','images'));
        $services = Service::all();  //where('id','<',20)
        $peoples = People::all();       //take(3)->get();
        $tags = DB::table('portfolios')->distinct()->pluck('filter');
        //dd($tags);
        $menu = [];
foreach ($pages as $page){
    //dd($page->name);
    $item = ['title'=>$page->name,'alias'=>$page->alias];
    array_push($menu,$item);
}
// dd($menu);                        // section service-i id contect.blade.php-i miji
$item = ['title'=>'Services1','alias'=>'service'];
//dd($item);
array_push($menu,$item);
// section portfolio-i id contect.blade.php-i miji
$item = ['title'=>'Portfolio1','alias'=>'Portfolio'];
array_push($menu,$item);
// section team-i id contect.blade.php-i miji
$item = ['title'=>'Team1','alias'=>'team'];
array_push($menu,$item);
// section contact-i id contect.blade.php-i miji
$item = ['title'=>'Contact1','alias'=>'contact'];
array_push($menu,$item);
//dd($menu);
return view('site.index',[
    'menu' => $menu,
    'pages' => $pages,
    'portfolios' => $portfolios,
    'services' => $services,
    'peoples' => $peoples,
    'tags' => $tags,
           ]);
    }
}


















//$menu = [];
//foreach ($pages as $page){
//    //dd($page->name);
//    $item = ['title'=>$page->name,'alias'=>$page->alias];
//    array_push($menu,$item);
//}
//// dd($menu);                        // section service-i id contect.blade.php-i miji
//$item = ['title'=>'Services1','alias'=>'service'];
////dd($item);
//array_push($menu,$item);
//// section portfolio-i id contect.blade.php-i miji
//$item = ['title'=>'Portfolio1','alias'=>'Portfolio'];
//array_push($menu,$item);
//// section team-i id contect.blade.php-i miji
//$item = ['title'=>'Team1','alias'=>'team'];
//array_push($menu,$item);
//// section contact-i id contect.blade.php-i miji
//$item = ['title'=>'Contact1','alias'=>'contact'];
//array_push($menu,$item);
////dd($menu);
//return view('site.index',[
//    'menu' => $menu,
//    'pages' => $pages,
//    'portfolios' => $portfolios,
//    'services' => $services,
//    'peoples' => $peoples,
//           ]);
