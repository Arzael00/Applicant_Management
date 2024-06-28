@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Applicant</h1>
    <form action="{{ route('applicants.update', $applicant->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" value="{{ $applicant->name }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{ $applicant->email }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>
        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status" id="status" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
                <option value="unviewed" {{ $applicant->status == 'unviewed' ? 'selected' : '' }}>Unviewed</option>
                <option value="interviewed" {{ $applicant->status == 'interviewed' ? 'selected' : '' }}>Interviewed</option>
                <option value="hired" {{ $applicant->status == 'hired' ? 'selected' : '' }}>Hired</option>
                <option value="onboarding" {{ $applicant->status == 'onboarding' ? 'selected' : '' }}>Onboarding</option>
                <option value="resign" {{ $applicant->status == 'resign' ? 'selected' : '' }}>Resign</option>
            </select>
        </div>
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
        </div>
    </form>
</div>
@endsection
