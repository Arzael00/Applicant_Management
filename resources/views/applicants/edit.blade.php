@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">{{ isset($applicant) ? 'Edit' : 'Create' }} Applicant</h1>
    <form action="{{ isset($applicant) ? route('applicants.update', $applicant->id) : route('applicants.store') }}" method="POST">
        @csrf
        @if(isset($applicant))
        @method('PUT')
        @endif
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $applicant->name ?? '') }}" class="mt-1 block w-full border font-medium text-indigo-700 border-black-300 rounded-md shadow-sm">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $applicant->email ?? '') }}" class="mt-1 block w-full border font-medium text-indigo-700 border-black-300 rounded-md shadow-sm">
        </div>
        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status" id="status" class="mt-1 block w-full border font-medium text-indigo-700 border-black-300 rounded-md shadow-sm">
                <option value="unviewed" {{ (old('status', $applicant->status ?? '') == 'unviewed') ? 'selected' : '' }}>Unviewed</option>
                <option value="interviewed" {{ (old('status', $applicant->status ?? '') == 'interviewed') ? 'selected' : '' }}>Interviewed</option>
                <option value="hired" {{ (old('status', $applicant->status ?? '') == 'hired') ? 'selected' : '' }}>Hired</option>
                <option value="onboarding" {{ (old('status', $applicant->status ?? '') == 'onboarding') ? 'selected' : '' }}>Onboarding</option>
                <option value="resign" {{ (old('status', $applicant->status ?? '') == 'resign') ? 'selected' : '' }}>Resign</option>
            </select>
        </div>
        <div class="mt-4">
        <button id="redirect-button" class="bg-indigo-500 text-white px-4 py-2 rounded">Save</button>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('redirect-button').addEventListener('click', function() {
        window.location.href = '{{ route('applicants.index') }}';
    });
</script>
@endsection