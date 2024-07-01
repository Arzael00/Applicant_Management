@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Applicants</h1>
    <a href="{{ route('applicants.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Applicant</a>
    <table class="min-w-full mt-4 font-medium text-indigo-700">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applicants as $applicant)
            <tr>
                <td>{{ $applicant->name }}</td>
                <td>{{ $applicant->email }}</td>
                <td>{{ $applicant->status }}</td>
                <td>
                    <a href="{{ route('applicants.show', $applicant->id) }}" class="bg-green-500 text-white px-2 py-1 rounded">
                        View
                    </a>
                    <a href="{{ route('applicants.edit', $applicant->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">
                        Edit
                    </a>
                    <form action="{{ route('applicants.destroy', $applicant->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
