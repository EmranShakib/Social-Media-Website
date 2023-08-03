<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('bannerImage'))
        {
            $bannerImage=$request->file('bannerImage');
            $bannerImageName=$bannerImage->getClientOriginalName();
            $bannerImage->storeAs('public/image/events',$bannerImageName);
        }
        if($request->hasFile('images'))
        {
            $images = $request->file('images');
            $imageNames = [];
            foreach($images as $image)
            {
                $imageName = $image->getClientOriginalName();
                $image->storeAs('public/image/events/others', $imageName);
                $imageNames[] = $imageName;
            }
           
        }

        $event = new Event();
        $event->category_id = 2;
        $event->user_id =Auth::user()->id;
        $event->title=$request->title;
        $event->description=$request->description;
        $event->date=$request->date;
        $event->start_time=$request->startTime;
        $event->end_time=$request->endTime;
        $event->location=$request->location;
        $event->banner_image=$bannerImageName;
        $event->other_image = json_encode($imageNames); // Convert array to JSON before saving
        $event->save();

        return redirect()->back()->with('success','New event created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $event=Event::where('id',$id)->first();
         $other_image=$event->other_image;
         $images=json_decode($other_image);
         return view('frontend.events.event_details',compact('event','images'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
