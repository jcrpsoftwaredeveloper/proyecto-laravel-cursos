 @props(['alumnos', 'users'])

 <div>
     <table>
         <thead>
         <tr>
             <th>Nombre</th>
             <th>Email</th>
             <th>Creado</th>
             <th> </th>
         </tr>
         </thead>
         <tbody>
         @foreach($alumnos as $alumno)
             <tr>
                 <td style="padding-left: 15px;">
                     @foreach($users as $user)
                         @if($user->id == $alumno->user_id)
                             <i class='bx bxs-user' style='color:#6283e8; vertical-align: middle'  ></i> {{$user->name}}
                         @endif
                     @endforeach
                 </td>
                 <td style="padding-left: 15px;">
                     @foreach($users as $user)
                         @if($user->id == $alumno->user_id)
                             <i class='bx bx-envelope' style='color:#6283e8; vertical-align: middle'></i> {{$user->email}}
                         @endif
                     @endforeach
                 </td>
                 <td style="text-align: center"><i class='bx bxs-calendar' style='color:#6283e8' ></i> {{$alumno->created_at}}</td>
                 <td style="display: flex; justify-content: center; align-items: center">
                     <a href="{{route('admin.alumnos.show',$alumno->id)}}" class="bt-small bt-show"><i class='bx bxs-show' style='color:#fdf9f9;  font-size: 25px; vertical-align: middle'></i></a>
                     <a href="{{route('admin.alumnos.edit',$alumno->id)}}" class="bt-small bt-edit"><i class='bx bxs-edit' style='color:#fdf9f9;  font-size: 25px; vertical-align: middle'></i></a>
                     <a href="{{route('admin.alumnos.delete',$alumno->id)}}" class="bt-small bt-delete"><i class='bx bxs-message-square-x' style='color:#fdf9f9;  font-size: 25px; vertical-align: middle'></i></a>
                 </td>
             </tr>
         @endforeach
         </tbody>
     </table>
 </div>

 {{--
 <td><?php foreach($data['categoriaDatalist'] as $categoriaKey => $categoriaRow){
                                    if($categoriaRow['id'] == $row['categoria_id']){
                                        echo "[" . $categoriaRow['id'] . "] - " . $categoriaRow['descripcion'];
                                    }
                        } ?></td>
 --}}
