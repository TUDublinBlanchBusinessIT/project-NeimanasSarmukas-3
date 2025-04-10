<table class="table table-responsive" id="cruises-table">
    <thead>
        <th>Ship Id</th>
        <th>Dep Date</th>
        <th>Return Date</th>
        <th>Cruise Origin</th>
        <th>Cruise Destination</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($cruises as $cruise)
        <tr>
            <td>{!! $cruise->ship_id !!}</td>
            <td>{!! $cruise->dep_date !!}</td>
            <td>{!! $cruise->return_date !!}</td>
            <td>{!! $cruise->cruise_origin !!}</td>
            <td>{!! $cruise->cruise_destination !!}</td>
            <td>
                {!! Form::open(['route' => ['cruises.destroy', $cruise->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('cruises.show', [$cruise->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></i></a>
                    <a href="{!! route('cruises.edit', [$cruise->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-edit"></i></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>