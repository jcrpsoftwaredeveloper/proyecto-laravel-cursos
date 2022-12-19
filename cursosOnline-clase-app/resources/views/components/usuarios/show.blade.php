@props(['users'])

<div>
    <table>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo electrónico</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{route('admin.usuarios.show',$user->id)}}" class="bt-small bt-show">Ver</a>
                    <a href="{{route('admin.usuarios.edit',$user->id)}}" class="bt-small bt-edit">Editar</a>
                    <a href="{{route('admin.usuarios.delete',$user->id)}}" class="bt-small bt-delete">Borrar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

