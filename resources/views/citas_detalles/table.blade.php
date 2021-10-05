<div class="table-responsive">
    <table class="table" id="citasDetalles-table">
        <thead>
            <tr>
                <th>Id Cita</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($citasDetalles as $citasDetalle)
            <tr>
                <td>{{ $citasDetalle->id_cita }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['citasDetalles.destroy', $citasDetalle->idcitas_detalle], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('citasDetalles.show', [$citasDetalle->idcitas_detalle]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('citasDetalles.edit', [$citasDetalle->idcitas_detalle]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
