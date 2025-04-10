<table class="table table-responsive" id="ships-table">
    <thead>
        <th>Ship Name</th>
        <th>Capacity</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($ships as $ship)
        <tr>
            <td>{!! $ship->ship_name !!}</td>
            <td>{!! $ship->capacity !!}</td>
            <td>
                {!! Form::open(['route' => ['ships.destroy', $ship->ship_id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ships.show', [$ship->ship_id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('ships.edit', [$ship->ship_id]) !!}" class='btn btn-default btn-xs'><i class="far fa-edit"></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
