@foreach($images as $image)
	<tr>
		<td>{{ $image->name }}</td>
		<td>{{ $image->category->name }}</td>
		<td class="d-flex options">
			{{-- <a href="{{ route('admin.gallery.show', ['image' => $image->id]) }}" class="flex-fill" title="Show">
				<i class="fa fa-eye"></i>
			</a> --}}
			<a href="{{ route('admin.gallery.edit', ['image' => $image->id]) }}" class="flex-fill" class="Edit">
				<i class="text-success fa fa-edit"></i>
			</a>
			{{-- <a href="{{ route('admin.gallery.delete', ['image' => $image->id]) }}" class="flex-fill delete" class="Delete">
				<i class="text-danger fa fa-trash"></i>
			</a> --}}
			{{-- <form action="{{ route('admin.gallery.delete', ['image' => $image->id]) }}" method="POST" style="display: none;">
				@csrf
			</form> --}}
		</td>
	</tr>
@endforeach