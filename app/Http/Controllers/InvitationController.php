<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InvitationController extends Controller
{
    public function wizard()
    {
        return view('invitations.wizard');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'event.title' => 'required|string',
            'event.date' => 'required|date',
            'event.location' => 'required|string',
            'guests.*.email' => 'required|email'
        ]);

        foreach ($data['guests'] as $guest) {
            Mail::raw("You are invited to {$data['event']['title']} at {$data['event']['location']} on {$data['event']['date']}", function ($message) use ($guest) {
                $message->to($guest['email'])->subject('Event Invitation');
            });
        }

        return ['status' => 'sent'];
    }
}
