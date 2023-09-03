@extends('layouts.app')

@section('title', 'Livewire Example ')

@section('content')
   {{-- @Livewire('counter') // version compatible --}}
    <livewire:counter />
    <br />
    <livewire:notes />
@endsection
