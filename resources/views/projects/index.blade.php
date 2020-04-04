@extends('layouts.app')

@section('content')
	<div class="container mx-auto px-4">
		<h1 class="text-xl text-gray-700 text-bold">Projects</h1>

		@forelse ($projects as $project)
			<li>
				<a href="projects/{{ $project->id }}">{{ $project->title }}</a>
			</li>
		@empty
			<h3>Add new project</h3>
		@endforelse
	</div>

@endsection