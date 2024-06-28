@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Applicant Details</h1>
    <div class="mb-4 font-medium text-indigo-700">
        <strong>Name:</strong> {{ $applicant->name }}
    </div>
    <div class="mb-4 font-medium text-indigo-700">
        <strong>Email:</strong> {{ $applicant->email }}
    </div>
    <div class="mb-4 font-medium text-indigo-700">
        <strong>Status:</strong> {{ $applicant->status }}
    </div>
    <a href="{{ route('applicants.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
        Back to Applicants
    </a>
</div>
@endsection
