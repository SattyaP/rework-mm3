<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventPhoto;
use Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::orderBy('id')->paginate(10);
        $event_photo = EventPhoto::all();

        return view('admin.event.index', compact('event','event_photo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
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
            'title' => 'required',
            // 'image' => 'required|image|mimes:png,jpg'
        ]);
        // $image = $request->file('image')->store('public/events');
        $event = Event::create([
            'title' => $request->title,
            // 'image' => $image
        ]);

        if($event){
            Session::flash('success', 'Success adding data event');
            return redirect()->route('event.index');
        } else {
            Session::flash('error', 'Failed adding data event');
            return redirect()->route('event.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        // Storage::delete($event->image);
        $event->delete();

        if($event){
            Session::flash('success', 'Success adding data event');
            return redirect()->route('event.index');
        } else {
            Session::flash('error', 'Failed adding data event');
            return redirect()->route('event.index');
        }
    }
}
