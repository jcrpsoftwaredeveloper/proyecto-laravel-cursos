 @props(['cursos', 'categorias'])

 <div>
     <table>
         <thead>
         <tr>
             <th>Referencia</th>
             <th>Título</th>
             <th>Imagen</th>
             <th>Acciones</th>
         </tr>
         </thead>
         <tbody>
         @foreach($cursos as $curso)
             <tr>
                 <td>{{$curso->ref}}</td>
                 <td>{{$curso->titulo}}</td>
                 <td class="align-middle">
                     @if (!empty($curso->imagen))
                         <img title="{{$curso->titulo}}"
                              class="object-scale-down h-10 w-10" style="width: 100px"
                              src="{{asset($curso->imagen)}}">
                     @else
                         <img title="{{$curso->titulo}}" style="width: 100px"
                              class="object-scale-down h-10 w-10"
                              src="{{asset('images/imagen_no_disponible.png')}}">
                     @endif
                 </td>
                 <td>
                     <a href="{{route('admin.cursos.show',$curso->id)}}" class="bt-small bt-show">ver</a>
                     <a href="{{route('admin.cursos.edit',$curso->id)}}" class="bt-small bt-edit">editar</a>
                     <a href="{{route('admin.cursos.delete',$curso->id)}}" class="bt-small bt-delete">Borrar</a>
                 </td>
             </tr>
         @endforeach
         </tbody>
     </table>

 </div>
