@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-center w-full">
            <p class="text-grey text-sm font-normal">
                <a href="/projects" class="text-grey text-sm font-normal no-underline">My projects</a> / {{ $project->title }}
            </p>

            <a href="/projects/create" class="button">New Project</a>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">

                <div class="mb-8">
                    <h2 class="text-lg text-grey font-normal mb-3">Tasks</h2>
                    {{-- tasks --}}
                    @foreach($project->tasks as $task)
                        <div class="card mb-3">
                            <form action="{{ $task->path() }}" method="POST">
                                @method('PATCH')
                                @csrf

                                <div class="flex">
                                    <input name="body" type="text" value="{{ $task->body }}" class="w-full {{ $task->completed ? 'text-grey' : '' }}">
                                    <input name="completed" type="checkbox" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                </div>
                            </form>
                        </div>
                    @endforeach
                    <div class="card mb-3">
                        <form action="{{ $project->path() . '/tasks' }}" method="POST">
                            @csrf
                            <input class="w-full" placeholder="Add a new task..." name="body">
                        </form>
                    </div>
                </div>

                <div class="mb-8">
                    <h2 class="text-lg text-grey font-normal mb-3">General Notes</h2>
                    {{-- generar notes--}}
                    <textarea class="card w-full" style="min-height: 200px">lorem ipsum.</textarea>
                </div>
            </div>
            <div class="lg:w-1/4 px-3">
                <div class="">
                    @include('projects.card')
                </div>
            </div>
        </div>
    </main>
@endsection