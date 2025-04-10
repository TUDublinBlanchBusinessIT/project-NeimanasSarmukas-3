<table class="table table-responsive" id="passengers-table">
    <thead>
        <th>Pass Name</th>
        <th>Pass Email</th>
        <th>Pass Cabin</th>
        <th>Cruise Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($passengers as $passenger)
        <tr>
            <td>{!! $passenger->pass_name !!}</td>
            <td>{!! $passenger->pass_email !!}</td>
            <td>{!! $passenger->pass_cabin !!}</td>
            <td>{!! $passenger->cruise_id !!}</td>
            <td>
                {!! Form::open(['route' => ['passengers.destroy', $passenger->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('passengers.show', [$passenger->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></i></a>
                    <a href="{!! route('passengers.edit', [$passenger->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-edit"></i></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>