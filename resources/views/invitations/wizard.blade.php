@extends('layouts.app')

@section('content')
<div id="wizard">
    <div class="step" data-step="1">
        <h2>Event Details</h2>
        <input type="text" id="title" placeholder="Event Title">
        <input type="date" id="date">
        <input type="text" id="location" placeholder="Location">
        <button class="next">Next</button>
    </div>
    <div class="step" data-step="2" style="display:none;">
        <h2>Guests</h2>
        <div id="guests"></div>
        <button id="addGuest">Add Guest</button>
        <button class="next">Next</button>
    </div>
    <div class="step" data-step="3" style="display:none;">
        <h2>Confirm</h2>
        <pre id="summary"></pre>
        <button id="send">Send Invitations</button>
    </div>
</div>
@endsection
