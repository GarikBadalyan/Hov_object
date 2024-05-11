<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact1;
use App\Http\Requests\ContactRequest1;
use App\Models\User;
use App\Models\Country;
class ContactController extends Controller
{
   public function submit(ContactRequest1 $req1){
       //dd($req1);//stex stanum enq amboxj tvyalner@ mer formayi са tvyal classi obyectn e
       //dd($req1->input('subject')); //isk aystex mi tvyal enq imanum
//        $validate1 = $req1->validate([
//            'subject' => 'required|min:3|max:50',
//            'message' => 'required|min:6|max:500'
//        ]);
       $cont1 = new Contact1;
       $cont1->name = $req1->input('name');
       $cont1->email = $req1->input('email');
       $cont1->subject = $req1->input('subject');
       $cont1->message = $req1->input('message');
       $cont1->save();
       return redirect(route('home'))->with('success' ,'сообщение было добавлено');
   }

   public function allData(){

//       $user = User::find(3);
//       dump($user->country);
       $country = Country::find(1);
       dd($country->user);

       //       $contact2 = new Contact(); // es depqum menq stanum enq contact table-i miji tvyalner@ sax
//       dd($contact2->all());
       // verevi erku tox@ kareli e ayspes grel
//       $contact2 = Contact::all();
//       dd($contact2);
       //// kam aveli karch klini ayspes
       //dd(Contact::all());
       // stex menq stanum enq tvyalner voronq grvac en message2 faili mej
       //return view('messages2',['data1'=>Contact::all()]);//entex foreach@ comment e arvac bacel ev sra het kashxati
// estex menq stanum enq 2-rd id-ov elementi name-@ u myus tvyalner@ table-i anun@ contacts e
       //  $contact2 = new Contact();
       //   return view('messages2',['data1'=>$contact2->find(2)]);
//sa eli foreach -i het a ashxatum u kberi 'asc' cuyc e talis id-ov @st achman kargi araji erkus@
       // isk ete 'asc' -i tex@ grenq 'desc' kberi hakarak tasavorutyamb
       //$contact2 = new Contact();
       //return view('messages2',['data1'=>$contact2->orderBy('id','asc')->take(2)->get()]);
       //   $contact2 = new Contact();
       // stex data1-i mej pahvum e bolor tvyalner@
       //return view('messages2',['data1'=>$contact2->all()]);
//       $cont3 = new Contact1();
//    return view('messages2',['data'=>$cont3->all()]);
   }
}
