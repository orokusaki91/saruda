@foreach($records as $record)
	<tr>
		<td><img style="width: 250px !important; height: 150px !important;" src="{{ asset($record->image_path) }}" alt=""></td>
		<td class="d-flex options">
			{{-- <a href="{{ route('admin.workshop.baby.show', ['user' => $record->id]) }}" class="flex-fill" title="Show">
				<i class="fa fa-eye"></i>
			</a> --}}
			<a href="{{ route('admin.workshop.baby.article.edit', ['record' => $record->id]) }}" class="flex-fill" class="Edit">
				<i class="text-success fa fa-edit"></i>
			</a>
			{{-- <a href="{{ route('admin.workshop.baby.delete', ['record' => $record->id]) }}" class="flex-fill delete" class="Delete">
				<i class="text-danger fa fa-trash"></i>
			</a>
			<form action="{{ route('admin.workshop.baby.delete', ['record' => $record->id]) }}" method="POST" style="display: none;">
				@csrf
			</form> --}}
		</td>
	</tr>
@endforeach