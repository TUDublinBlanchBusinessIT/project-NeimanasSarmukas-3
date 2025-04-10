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
                {!! Form::open(['route' => ['ports.destroy', $port->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ports.show', [$port->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></i></a>
                    <a href="{!! route('ports.edit', [$port->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-edit"></i></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>