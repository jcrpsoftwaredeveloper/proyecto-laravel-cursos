@props(['perfiles', 'users'])

<div>
    <table>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Usuario</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($perfiles as $perfil)
            <tr>
                <td><i class='bx bx-male' style='color:#6283e8; vertical-align: middle'></i> {{$perfil->nombre}}</td>
                <td>{{$perfil->apellido1." ".$perfil->apellido2}}</td>
                <td><i class='bx bx-map' style='color:#6283e8; vertical-align: middle' ></i> {{$perfil->direccion}}</td>
                <td><i class='bx bx-phone' style='color:#6283e8; vertical-align: middle' ></i> {{$perfil->telefono}}</td>
                <td>
                    @foreach($users as $user)
                        @if($user->id == $perfil->user_id)
                            <i class='bx bxs-user' style='color:#6283e8; vertical-align: middle' ></i> {{$user->name}}
                        @endif
                    @endforeach
                </td>
                <td style="display: flex; justify-content: center; align-items: center">
                    <a href="{{route('admin.perfiles.show',$perfil->id)}}" class="bt-small bt-show"><i class='bx bxs-show' style='color:#ffffff; font-size: 25px; vertical-align: middle'  ></i></a>
                    <a href="{{route('admin.perfiles.edit',$perfil->id)}}" class="bt-small bt-edit"><i class='bx bxs-edit' style='color:#f9f7f7;  font-size: 25px; vertical-align: middle'></i></a>
                    <a href="{{route('admin.perfiles.delete',$perfil->id)}}" class="bt-small bt-delete"><i class='bx bxs-message-square-x' style='color:#fdf9f9;  font-size: 25px; vertical-align: middle'></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
