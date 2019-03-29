@foreach($records as $day)
	<tr>
		<td>{{ $day->id }}</td>
		<td>{{ $day->day_name }}</td>
		<td>{{ $day->workingHours }}</td>
		<td class="d-flex options">
			{{-- <a href="{{ route('admin.workinghours.show', ['user' => $day->id]) }}" class="flex-fill" title="Show">
				<i class="fa fa-eye"></i>
			</a> --}}
			<a href="{{ route('admin.workinghours.edit', ['day' => $day->id]) }}" class="flex-fill" class="Edit">
				<i class="text-success fa fa-edit"></i>
			</a>
			{{-- <a href="{{ route('admin.workinghours.delete', ['day' => $day->id]) }}" class="flex-fill delete" class="Delete">
				<i class="text-danger fa fa-trash"></i>
			</a>
			<form action="{{ route('admin.workinghours.delete', ['day' => $day->id]) }}" method="POST" style="display: none;">
				@csrf
			</form> --}}
		</td>
	</tr>
@endforeach