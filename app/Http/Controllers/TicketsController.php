<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Category;
use Illuminate\Support\Facades\Auth;
class TicketsController extends Controller
{
    public function userTikets(){
        $tickets = Ticket::where('user_id',Auth::User()->id)->get();
        $categories = Category::all();

        return view('user.tickets',compact('tickets','categories'));

    }

    public function sendTicket(Request $request)
    {
        $ticket = new Ticket();
        $ticket->user_id = Auth::User()->id;
        $ticket->title = $request->ticket_title;
        $ticket->body = $request->ticket_body;
        $ticket->state = 'pending';
        $ticket->save();
        return back();

    }
}
