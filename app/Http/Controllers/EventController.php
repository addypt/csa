<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = App\Event::where('date', '>=', date('Y/m/d', time()))->get();
        return $events;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function check(Request $request){
        $this->validate(request(), [
            'date' => 'required',
            'time' => 'required',
            'lh' => 'required'
        ]);
        //Check for conflicting event
        $events = Event::where('lh', '=', $request->lh)
                        ->where('start', '>=', $request->start)
                        ->where('end', '>=', $request->end)
                        ->where('date', '=', $request->date)->get();
        if(sizeof($events) != 0){
            return ['conflict' => True];
        }
        else{
            return ['conflict' => False];
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'description'  => 'required',
            'date' => 'required',
            'start' => 'required',
            'end' => 'required',
            'lh' => 'required'
        ]);
        //Check for conflicting event
        $events = Event::where('lh', '=', $request->lh)
                        ->where('start', '>=', $request->start)
                        ->where('end', '>=', $request->end)
                        ->where('date', '=', $request->date)->get();
        if(sizeof($events) != 0){
            $events['error'] = True;
            return $events;
        }
        else{
        $event = new Event;
        $event->name = $request->name;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->start = $request->start;
        $event->end = $request->end;
        $event->lh = $request->lh;
        $event->save();
        return $event;
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
