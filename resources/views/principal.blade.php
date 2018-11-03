@extends('layouts.front')

@section('contenido')
		<section class="posts">
			<h2>Vista de los últimos 10 Tweets del usuario</h2>
			<div class="lista">
				@foreach($tweets as $tw)
				<article class="post">
					<div class="contenido">
						<h3>{{$tw->created_at}}</h3>
						<p>{{$tw->tweet}}</p>
						<div class="autor">Por {{$tw->autor->name}}</div>
					</div>
				</article>
				@endforeach
			</div>
		</section>
@endsection
