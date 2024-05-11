<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Animal;
class AnimalController extends Controller
{
    //
    function submit(){
        //sa mek@ mi qanisin
//        $user = User::find(1);
//        //dd($user->animal);
//        $animal = $user->animal;
//        foreach ($animal as $anim){
//            echo $anim->name.'<br>';
//        }
        //sa hakarakn e
//        $animal = Animal::find(1);
//        dd($animal->user);
//        $animals = Animal::all();
//        //dd($animals);
//        foreach ($animals as $animal){
//            echo $animal->user->name.'<br>';   //Animal modeli mej@ unenq user functia
//           // echo $animal->user;
//       }

        // sa noynn e tpum inch werevin@ u sa e chisht@
//        $animals = Animal::with('user')->get();
//         foreach ($animals as $animal) {
//           echo $animal->user->name.'<br>';
//         }

// sa eli all() -ov e bayc karevor e sa
//        $animals = Animal::all();
//        $animals->load('user');
//        foreach ($animals as $animal){
//            echo $animal->user->name.'<br>';
//        }


//     $users = User::has('animal')->get();
//     foreach ($users as $user){
//         dump($user);
//     }
// vonc vor 2 id-ov elementi koxmic nor dashter e avelacnum
//        $user = User::find(2);
//        $animal = new Animal(['name'=>'new Animal','text'=>'some text']);
        //$user->animal()->save($animal);
//        $user->animal()->create([
//            'name'=>'new Animal','text'=>'some text'
//        ]);
//        $animals = Animal::all();
//        dd($animals);
//stex menq user_id-n 1-er poxecinq 2-i
//        $animal = Animal::find(1);
//        $user = User::find(2);
//        $animal->user()->associate($user);
//        $animal->save();
//        return;
        // sranov bolor user_id nern enq poxum
//        $animals= Animal::all();
//        $user = User::find(2);
//        foreach ($animals as $animal){
//            $animal->user()->associate($user);
//            $animal->save();
//            return;
//        }

        // 3id-ov dasht@ kardum enq
//       $animal = Animal::find(3);
//       echo $animal->name;//Animal modelum ka getNameAttribute()metod@ sa sra het kapvac e
//       return;

//        $animal = Animal::find(3);
//        $animal->name = 'some text';
//        echo  $animal->name;//stex eli Animal modelum ka setNameAttribute method@ vori miji name
//        return;
//stex menq 1 id-ov elementi name -i arjeq@ darcnum enq masiv json formatov
        $animal = Animal::find(1);
        $arr = ['key'=>'hello world'];
        $animal->name = $arr;
        $animal->save();
      //dd($animal->name);
        //dd($animal)
      //dd($animal->toArray());
        //dd($animal->toJson());
        dd((string)$animal);
      // return;


    }
}
