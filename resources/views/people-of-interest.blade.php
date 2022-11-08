
@extends('layouts.main')

@section('content')
    <h3>All people of interest</h3>
    <div id="react-app">
        
    </div>
    @viteReactRefresh
    @vite('resources/js/people-of-interest.jsx')  
@endsection

    

