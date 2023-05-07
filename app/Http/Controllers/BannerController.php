<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class BannerController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners=Banner::paginate(5);
        return view('banner.index' , compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required|mimes:jpeg,jpg,png,gif,webp',
        ]);
        try{
            $banners = new Banner();
            if($request->image != null)
            {
                $banner = $request->image;
                $imagename =time().'.'.$banner->getClientOriginalExtension();
                $banner->move('bannerFolder',$imagename);
                $banners->image = $imagename;
            }
            $banners->save();
            session()->flash('Add', 'Add Successfuly');
            return redirect()->route('banners.index');
            }catch(\Exception $e){

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }




    public function destroy($id)
    {
        $banners = Banner::find($id);
     $image_path =(public_path('public/bannerFolder/'.$banners->image));if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $banners->delete();
        session()->flash('delete','Deleted Successfully');
        return redirect()->route('banners.index');
    }
}
