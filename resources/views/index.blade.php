@extends('layouts.web')

@section('content')
    <div class="text-center">
        <h1 class="mb-2 text-3xl text-gray-700 uppercase">Last courses added</h1>
        <h2 class="text-xl text-gray-600">Develop into a technology professional through online training.</h2>
        <h3 class="text-lg text-gray-600">70% of graduates double their incomes.</h3>
    </div>

    <livewire:course-list>
    @endsection
