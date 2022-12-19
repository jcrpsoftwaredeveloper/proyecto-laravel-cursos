 @props(['cursos', 'categorias', 'profesores', 'users'])

 <div>
     <table>
         <thead>
         <tr>
             <th>Referencia</th>
             <th>Título</th>
             <th>Imagen</th>
             <th>Categoría</th>
             <th>Profesor</th>
             <th>Acciones</th>
         </tr>
         </thead>
         <tbody>
         @foreach($cursos as $curso)
             <tr>
                 <td><i class='bx bxs-book' style='color:#6283e8' ></i> {{$curso->ref}}</td>
                 <td><i class='bx bxs-pencil' style='color:#6283e8' ></i> {{$curso->titulo}}</td>
                 <td style="display: flex; justify-content: center; align-items: center">
                     @if (!empty($curso->imagen))
                         <i class='bx bx-image-alt' style='color:#6283e8' ></i> <img title="{{$curso->titulo}}"
                              class="object-scale-down h-10 w-10" style="width: 100px"
                              src="{{asset($curso->imagen)}}">
                     @else
                         <i class='bx bx-image-alt' style='color:#6283e8' ></i> <img title="{{$curso->titulo}}" style="width: 100px"
                              class="object-scale-down h-10 w-10"
                              src="{{asset('images/imagen_no_disponible.png')}}">
                     @endif
                 </td>
                 <td>
                     @foreach($categorias as $categoria)
                         @if($categoria->id == $curso->categoria_id)
                             <i class='bx bx-grid-alt' style='color:#6283e8' ></i> {{"[".$categoria->ref."]-".$categoria->titulo}}
                         @endif
                     @endforeach
                 </td>
                 <td>
                     @foreach($profesores as $profesor)
                         @if($profesor->id==$curso->profesor_id)
                             @foreach($users as $user)
                                 @if($user->id==$profesor->user_id)
                                     <i class='bx bxs-user' style='color:#6283e8; vertical-align: middle'  ></i> {{$user->name}}
                                 @endif
                             @endforeach
                         @endif
                     @endforeach
                 </td>
                 <td style="display: flex; justify-content: center; align-items: center">
                     <a href="{{route('admin.cursos.show',$curso->id)}}" class="bt-small bt-show"><i class='bx bxs-show' style='color:#fdf9f9;  font-size: 25px; vertical-align: middle'></i></a>
                     <a href="{{route('admin.cursos.edit',$curso->id)}}" class="bt-small bt-edit"><i class='bx bxs-edit' style='color:#fdf9f9;  font-size: 25px; vertical-align: middle'></i></a>
                     <a href="{{route('admin.cursos.delete',$curso->id)}}" class="bt-small bt-delete"><i class='bx bxs-message-square-x' style='color:#fdf9f9;  font-size: 25px; vertical-align: middle'></i></a>
                 </td>
             </tr>
         @endforeach
         </tbody>
     </table>

 </div>
