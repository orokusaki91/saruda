@foreach($records as $record)
	<tr>
		<td><a href="{{ route('admin.workshop.prehistory.article', ['article' => $record->id]) }}">{{ $record->title }}</a></td>
		<td>{{ $record->price }}</td>
		<td class="d-flex options">
			{{-- <a href="{{ route('admin.workshop.prehistory.show', ['user' => $record->id]) }}" class="flex-fill" title="Show">
				<i class="fa fa-eye"></i>
			</a> --}}
			<a href="{{ route('admin.workshop.prehistory.edit', ['record' => $record->id]) }}" class="flex-fill" class="Edit">
				<i class="text-success fa fa-edit"></i>
			</a>
			{{-- <a href="{{ route('admin.workshop.prehistory.delete', ['record' => $record->id]) }}" class="flex-fill delete" class="Delete">
				<i class="text-danger fa fa-trash"></i>
			</a>
			<form action="{{ route('admin.workshop.prehistory.delete', ['record' => $record->id]) }}" method="POST" style="display: none;">
				@csrf
			</form> --}}
		</td>
	</tr>
@endforeach