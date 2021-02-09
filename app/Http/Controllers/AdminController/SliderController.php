<?php

namespace App\Http\Controllers\AdminController;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::get();
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|mimes:jpeg,jpg,png|max:2048'
        ]);
        Slider::create([
            'image' => UploadImage($request->image, 'slider', 'uploads/sliders')
        ]);
        flash('تم اضافة الصورة بنجاح');
        return redirect()->route('sliders.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $this->validate($request, [
            'image' => 'nullable|mimes:jpeg,jpg,png|max:2048'
        ]);
        $slider->update([
            'image' => $request->image == null ? $slider->image : UploadImageEdit($request->image, 'slider', 'uploads/sliders', $slider->image)
        ]);
        flash('تم تعديل الصورة بنجاح');
        return redirect()->route('sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $image = $slider->image;
        $slider->delete();
        if (file_exists(public_path('uploads/sliders/'.$image))) {
            @unlink(public_path('uploads/sliders/'.$image));
        }
        flash('تم الحذف بنجاح')->warning();
        return back();
    }
}