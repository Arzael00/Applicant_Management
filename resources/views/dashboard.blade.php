<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
@endsection

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                Welcome
            </div>
        </div>
        <div class="mt-4">
            <a href="{{ route('applicants.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create New Applicant
            </a>
            <a href="{{ route('applicants.index') }}" class="bg-indigo-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Show Applicants
            </a>
        </div>
    </div>
</div>
@endsection
