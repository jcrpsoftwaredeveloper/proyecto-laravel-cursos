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
                <td style="padding-left: 15px;"><i class='bx bxs-user' style='color:#6283e8; vertical-align: middle'  ></i> {{$user->name}}</td>
                <td style="padding-left: 15px;"><i class='bx bx-envelope' style='color:#6283e8; vertical-align: middle'></i> {{$user->email}}</td>
                <td style="display: flex; justify-content: center; align-items: center">
                    <a href="{{route('admin.usuarios.show',$user->id)}}" class="bt-small bt-show"><i class='bx bxs-show' style='color:#ffffff; font-size: 25px; vertical-align: middle'  ></i></a>
                    <a href="{{route('admin.usuarios.edit',$user->id)}}" class="bt-small bt-edit"><i class='bx bxs-edit' style='color:#f9f7f7;  font-size: 25px; vertical-align: middle'></i></a>
                    <a href="{{route('admin.usuarios.delete',$user->id)}}" class="bt-small bt-delete"><i class='bx bxs-message-square-x' style='color:#fdf9f9;  font-size: 25px; vertical-align: middle'></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
