 @props(['categorias', 'users'])

 <div>
     <table>
         <thead>
         <tr>
             <th>Referencia</th>
             <th>Usuario</th>
             <th>Acciones</th>
         </tr>
         </thead>
         <tbody>
         @foreach($profesores as $profesor)
             <tr>
                 <td>{{$profesor->sueldo_hora}}</td>
                 <td>{{$users->id}}</td>
                 <td>
                     <a href="{{route('admin.profesores.show',$profesor->id)}}" class="bt-small bt-show">ver</a>
                     <a href="{{route('admin.profesores.edit',$profesor->id)}}" class="bt-small bt-edit">editar</a>
                     <a href="{{route('admin.profesores.delete',$profesor->id)}}" class="bt-small bt-delete">Borrar</a>
                 </td>
             </tr>
         @endforeach
         </tbody>
     </table>

 </div>
