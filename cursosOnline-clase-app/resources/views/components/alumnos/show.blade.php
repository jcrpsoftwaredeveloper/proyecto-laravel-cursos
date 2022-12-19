@props(['alumnos'])

<div>
    <table>
        <thead>
        <tr>
            <th>User</th>
        </tr>
        </thead>
        <tbody>
        @foreach($alumnos as $alumno)
            <tr>
                <td>{{$alumno->user_id}}</td>
                <td>
                    <a href="{{route('admin.alumnos.show',$alumno->id)}}" class="bt-small bt-show">Ver</a>
                    <a href="{{route('admin.alumnos.edit',$categoria->id)}}" class="bt-small bt-edit">Editar</a>
                    <a href="{{route('admin.alumnos.delete',$categoria->id)}}" class="bt-small bt-delete">Borrar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
