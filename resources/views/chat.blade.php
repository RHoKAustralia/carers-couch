@extends('layouts.member')
@section('content')
    <div class="container">
        <chat-room :conversation="{{ $conversation }}" :current-user="{{ auth()->user() }}"></chat-room>
    </div>
@endsection