<table class="table table-responsive" id="ports-table">
    <thead>
        <th>Port Name</th>
        <th>Port Country</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($ports as $port)
        <tr>
            <td>{!! $port->port_name !!}</td>
            <td>{!! $port->port_country !!}</td>
            <td>
                {!! Form::open(['route' => ['ports.destroy', $port->port_id], 'method' => 'delete']) !!} <!-- Changed from $port->id to $port->port_id -->
                <div class='btn-group'>
                    <a href="{!! route('ports.show', [$port->port_id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('ports.edit', [$port->port_id]) !!}" class='btn btn-default btn-xs'><i class="far fa-edit"></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
