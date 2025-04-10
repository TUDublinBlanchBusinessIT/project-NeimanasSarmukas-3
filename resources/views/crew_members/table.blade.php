<table class="table table-responsive" id="crewMembers-table">
    <thead>
        <th>Crew Name</th>
        <th>Crew Role</th>
        <th>Ship Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($crewMembers as $crewMember)
        <tr>
            <td>{!! $crewMember->crew_name !!}</td>
            <td>{!! $crewMember->crew_role !!}</td>
            <td>{!! $crewMember->ship_id !!}</td>
            <td>
                {!! Form::open(['route' => ['crew_members.destroy', $crewMember->crew_id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('crew_members.show', [$crewMember->crew_id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('crew_members.edit', [$crewMember->crew_id]) !!}" class='btn btn-default btn-xs'><i class="far fa-edit"></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
