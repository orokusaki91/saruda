@foreach($partners as $partner)
	<tr>
		<td>{{ $partner->name }}</td>
		<td class="d-flex options">
			{{-- <a href="{{ route('admin.partner.show', ['user' => $partner->id]) }}" class="flex-fill" title="Show">
				<i class="fa fa-eye"></i>
			</a> --}}
			<a href="{{ route('admin.partner.edit', ['partner' => $partner->id]) }}" class="flex-fill" class="Edit">
				<i class="text-success fa fa-edit"></i>
			</a>
			{{-- <a href="{{ route('admin.partner.delete', ['partner' => $partner->id]) }}" class="flex-fill delete" class="Delete">
				<i class="text-danger fa fa-trash"></i>
			</a>
			<form action="{{ route('admin.partner.delete', ['partner' => $partner->id]) }}" method="POST" style="display: none;">
				@csrf
			</form> --}}
		</td>
	</tr>
@endforeach