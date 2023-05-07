<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts=Contact::get();
        return view('contact.index' , compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'word' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'num1' => 'required',
            'num2' => 'required',
            'num3' => 'required',
            'num4' => 'required',
            'link'=>'required',
        ]);
        Contact::create([
            'word' => $request->word,
            'address'=>$request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'num1' =>$request->num1,
            'num2' =>$request->num2,
            'num3' =>$request->num3,
            'num4' =>$request->num4,
            'link'=>$request->link,
        ]);
        session()->flash('Add','Added Successfully');
        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts=Contact::where('id',$id)->first();
        return view('contact.edit',compact('contacts'));
    }

   
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'word' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'num1' => 'required',
            'num2' => 'required',
            'num3' => 'required',
            'num4' => 'required',
            'link'=>'required',
        ]);
        Contact::where('id',$request->id)->update([
            'word' => $request->word,
            'address'=>$request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'num1' =>$request->num1,
            'num2' =>$request->num2,
            'num3' =>$request->num3,
            'num4' =>$request->num4,
            'link'=>$request->link,
        ]);
        session()->flash('Add','Updated Successfully');
        return redirect()->route('contacts.index');
        }


    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        session()->flash('delete','Deleted Successfully');
        return redirect()->route('contacts.index');
    }
}
