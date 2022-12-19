 @props(['perfiles', 'users'])

 <div>
     <table>
         <thead>
         <tr>
             <th>Nombre</th>
             <th>Primer apellido</th>
             <th>Usuario</th>
         </tr>
         </thead>
         <tbody>
         @foreach($perfiles as $perfil)
             <tr>
                 <td>{{$perfil->nombre}}</td>
                 <td>{{$perfil->apellido1}}</td>
                 <td>{{$perfil->user_id}}</td>
                 <td>
                     <a href="{{route('admin.perfiles.show',$perfil->id)}}" class="bt-small bt-show">Ver</a>
                     <a href="{{route('admin.perfiles.edit',$perfil->id)}}" class="bt-small bt-edit">Editar</a>
                     <a href="{{route('admin.perfiles.delete',$perfil->id)}}" class="bt-small bt-delete">Borrar</a>
                 </td>
             </tr>
         @endforeach
         </tbody>
     </table>

 </div>
