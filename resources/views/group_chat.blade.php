@extends('layouts.member')

@section('content')
    <div class="container">
        <group-chat-room :conversation="{{ $conversation }}" :current-user="{{ auth()->user() }}"></group-chat-room>
    </div>
@endsection