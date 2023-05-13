<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services=Service::paginate(20);
        return view('service.index' , compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
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
            'icon' => 'required',
            'color' => 'required',
        ]);
        Service::create([
            'word' => $request->word,
            'icon'=>$request->icon,
            'color'=>$request->color,
        ]);
        session()->flash('Add','Added Successfully');
        return redirect()->route('services.index');
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
        $services=Service::where('id',$id)->first();
        return view('service.edit',compact('services'));
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
            'icon' => 'required',
            'color' => 'required',
        ]);
        $services=Service::where('id',$request->id)->update([
            'word' => $request->word,
            'icon'=>$request->icon,
            'color'=>$request->color,
        ]);
    session()->flash('Add','Updated Successfully');
    return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $s = Service::find($id);
           $s->delete();
           session()->flash('delete','Deleted Successfully');
           return redirect()->route('services.index');
    }
}
