{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('link_id', 'Link_id:') !!}
			{!! Form::text('link_id') !!}
		</li>
		<li>
			{!! Form::label('tag_id', 'Tag_id:') !!}
			{!! Form::text('tag_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}