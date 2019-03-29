@foreach($categories as $category)
	<tr>
		<td>
			<a href="{{ route('admin.gallery-category.show', ['category' => $category->id]) }}">{{ $category->name }}</a>
		</td>
		<td class="d-flex options">
			{{-- <a href="{{ route('admin.gallery-category.show', ['category' => $category->id]) }}" class="flex-fill" title="Show">
				<i class="fa fa-eye"></i>
			</a> --}}
			<a href="{{ route('admin.gallery-category.edit', ['category' => $category->id]) }}" class="flex-fill" class="Edit">
				<i class="text-success fa fa-edit"></i>
			</a>
			<form class="flex-fill" action="{{ route('admin.gallery-category.delete', ['category' => $category->id]) }}" method="POST">
				@csrf

				<a href="#" class="has-confirm">
					<i class="text-danger fa fa-trash"></i>
				</a>
			</form>
		</td>
	</tr>
@endforeach