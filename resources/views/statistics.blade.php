{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('link_id', 'Link_id:') !!}
			{!! Form::text('link_id') !!}
		</li>
		<li>
			{!! Form::label('event_type', 'Event_type:') !!}
			{!! Form::text('event_type') !!}
		</li>
		<li>
			{!! Form::label('ip', 'Ip:') !!}
			{!! Form::text('ip') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}