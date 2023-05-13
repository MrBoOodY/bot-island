<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons=Person::paginate(20);
        return view('person.index' , compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('person.create');
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
            'job' => 'required',
            'photo' => 'required',
            'desc'=>'required',

        ]);
                $img = $request->photo;
                $imagename =time().'.'.$img->getClientOriginalExtension();
                $img->move('personFolder',$imagename);
                $img->photo = $imagename;
        Person::create([
            'word' => $request->word,
            'job'=>$request->job,
            'photo'=>$imagename,
            'desc'=>$request->desc,
        ]);
        session()->flash('Add','Added Successfully');
        return redirect()->route('person.index');
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
        $person=Person::where('id',$id)->first();
        return view('person.edit',compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $validatedData = $request->validate([
            'word' => 'required',
            'job' => 'required',
            'photo' => 'required',
            'desc'=>'required',

        ]);



if($request->photo != null) {

    $img = $request->photo;
    $imagename =time().'.'.$img->getClientOriginalExtension();
    $img->move('personFolder',$imagename);
    $img->photo = $imagename;

    Person::where('id',$request->id)->update([
        'word' => $request->word,
        'job'=>$request->job,
        'photo'=>$imagename,
        'desc'=>$request->desc,
    ]);
    session()->flash('Add','Updated Successfully');
        return redirect()->route('person.index');
}
else
Person::where('id',$request->id)->update([
    'word' => $request->word,
    'job'=>$request->job,
    'desc'=>$request->desc,
]);
session()->flash('Add','Updated Successfully');
return redirect()->route('person.index');
    }

    public function destroy($id)
    {
        $p = Person::find($id);
     $image_path =(public_path('public/personFolder/'.$p->photo));if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $p->delete();
        session()->flash('delete','Deleted Successfully');
        return redirect()->route('person.index');
    }
}
