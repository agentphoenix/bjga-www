@layout('template')

@section('title')
	Latest News
@endsection

@section('content')
	<h1>Latest News</h1>

	@foreach ($news as $n)
		<h3>{{ $n['title'] }} <small>{{ $n['date'] }}</small></h3>

		<p>{{ $n['summary'] }}</p>

		@if ( ! empty($n['content']))
			<div class="btn-group hidden-phone">
				<p><a data-target="#{{ $n['contentId'] }}" data-toggle="modal" class="btn">Read More</a></p>
			</div>
			<div class="visible-phone">
				<p><a data-target="#{{ $n['contentId'] }}" data-toggle="modal" class="btn btn-block btn-large">Read More</a></p>
			</div>

			{{ View::make('partials.modal')->with('modalTitle', $n['contentTitle'])->with('modalContent', $n['content'])->with('modalId', $n['contentId']) }}
		@endif
	@endforeach
@endsection