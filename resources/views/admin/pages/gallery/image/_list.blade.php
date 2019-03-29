@foreach($category->images as $image)
	<tr>
		<td>
			<div class="image-tooltip">
				<img src='{{ asset($image->image_path) }}' alt='image' style="height: 50px !important" />
				<span>
					<img src='{{ asset($image->image_path) }}' alt='image big' style="height: 150px !important" />
				</span>
			</div>
		</td>
		<td class="d-flex options">
			{{-- <a href="{{ route('admin.gallery.show', ['image' => $image->id]) }}" class="flex-fill" title="Show">
				<i class="fa fa-eye"></i>
			</a> --}}
			{{-- <a href="{{ route('admin.gallery.edit', ['image' => $image->id]) }}" class="flex-fill" class="Edit">
				<i class="text-success fa fa-edit"></i>
			</a> --}}
			<form action="{{ route('admin.gallery-category.delete-image', ['category' => $category->id , 'image' => $image->id]) }}" method="POST" class="flex-fill">
				@csrf
				<a href="#" class="has-confirm">
					<i class="text-danger fa fa-trash"></i>
				</a>
			</form>
		</td>
	</tr>
@endforeach