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
     * 
     */
    public function __construct()
    {
        // $this->middleware('auth', ['only' => ['userEvents', 'delete']]);
        // Alternativly
        // $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    public function index()
    {
        $events = Event::where('date', '>=', date('Y/m/d', time()))->get();
        return $events;
    }
    public function userEvents($user){
        // $id = auth()->user()->id;
        $events = Event::where('user_id', '=', $user)->get();

        // $events = Event::where('date', '>=', date('Y/m/d', time()))->get();
        // dd($events);
        
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
        //Store new event
        $this->validate(request(), [
            'name' => 'required',
            'description'  => 'required',
            'date' => 'required',
            'start' => 'required',
            'end' => 'required',
            'lh' => 'required',
            'type' => 'required'
        ]);
        //Check for conflicting event
        $events = Event::where('lh', '=', $request->lh)
                        ->where('start', '>=', $request->start)
                        ->where('end', '>=', $request->end)
                        ->where('date', '=', $request->date)->get();
        if(sizeof($events) != 0){
            $event = $events[0];
            $event['conflict'] = True;
            return view('event', compact('event'));
        }
        else{
            //dd(auth()->user()->id);
        $event = new Event;
        $event->user_id = auth()->user()->id;
        $event->name = $request->name;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->start = $request->start;
        $event->end = $request->end;
        $event->lh = $request->lh;
        $event->type = $request->type;
        $event->save();
        return redirect('/dashboard');
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
        //Show particular event
        return view('event', compact('event'));
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
