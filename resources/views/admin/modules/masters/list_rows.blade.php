@forelse($items as $item)
<tr>
    <th scope="row">{{(($items->currentPage() * $items->perPage()) + $loop->iteration) - $items->perPage()}}</th>
    <td>{{$item->name}}</td>
    <td>{{$item->type }}</td>
    
    <td><a data-placement="bottom" title="Click to change status"
            class="btn btn-{{$item->status == '1' ? 'primary' : 'info'}} btn-sm waves-effect"
            onclick="changeStatus({{$item->id}})"
            href="javascript:void(0)">{{$item->status == '1' ? 'Active' : 'Inactive'}}</a></td>
    <td>
        <a class="btn btn-primary btn-sm waves-effect" href="{{ route('masters.edit',$item->id)}}"><i
                class="mdi mdi-eye"></i></a>
        {{--  <a class="btn btn-secondary btn-sm waves-effect" href="#"><i class="mdi mdi-pencil"></i></a>  --}}
        <a class="btn btn-danger btn-sm waves-effect" onclick="deleteRecord('{{$item->id}}')" href="#"><i
                class="mdi mdi-delete"></i></a>
    </td>
</tr>
@empty
<tr>
    <td colspan="5" align="center"> No User Found!</td>
</tr>
@endforelse