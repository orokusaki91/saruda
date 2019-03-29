@foreach($categories as $category)
	<tr>
		<td>{{ $category->name }}</td>
		<td class="d-flex options">
			{{-- <a href="{{ route('admin.gallery-category.show', ['category' => $category->id]) }}" class="flex-fill" title="Show">
				<i class="fa fa-eye"></i>
			</a> --}}
			<a href="{{ route('admin.gallery-category.edit', ['category' => $category->id]) }}" class="flex-fill" class="Edit">
				<i class="text-success fa fa-edit"></i>
			</a>
			{{-- <a href="{{ route('admin.gallery-category.delete', ['category' => $category->id]) }}" class="flex-fill delete" class="Delete">
				<i class="text-danger fa fa-trash"></i>
			</a> --}}
			{{-- <form action="{{ route('admin.gallery-category.delete', ['category' => $category->id]) }}" method="POST" style="display: none;">
				@csrf
			</form> --}}
		</td>
	</tr>
@endforeach