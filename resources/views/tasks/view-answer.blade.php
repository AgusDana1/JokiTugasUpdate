@extends('layout.app')

@section('content')
    <div class="p-6 bg-white shadow rounded">
        <h2 class="font-semibold text-xl mb-4">Jawaban Tugas: {{ $task->title }}</h2>

        <p class="mb-4 text-gray-700">{{ $task->description }}</p>

        <div class="bg-gray-100 p-4 rounded mb-4">
            <h3 class="font-medium">Jawaban:</h3>
            <p>{{ $task->answer->answer ?? 'Belum ada jawaban.' }}</p>
        </div>

        @if ($task->answer && $task->answer->file_path)
            <a href="{{ asset('storage/' . $task->answer->file_path) }}" class=""></a>
        @endif
    </div>
@endsection