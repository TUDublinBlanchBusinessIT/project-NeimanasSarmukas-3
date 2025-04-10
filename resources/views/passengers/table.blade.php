<table class="table table-responsive" id="passengers-table">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Cabin</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($passengers as $passenger)
        <tr>
            <td>{!! $passenger->pass_name !!}</td>
            <td>{!! $passenger->pass_email !!}</td>
            <td>{!! $passenger->pass_cabin !!}</td>
            <td>
                {!! Form::open(['route' => ['passengers.destroy', $passenger->pass_id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('passengers.show', [$passenger->pass_id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('passengers.edit', [$passenger->pass_id]) !!}" class='btn btn-default btn-xs'><i class="far fa-edit"></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
