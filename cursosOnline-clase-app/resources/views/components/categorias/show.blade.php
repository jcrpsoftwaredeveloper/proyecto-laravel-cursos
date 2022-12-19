 @props(['categorias'])

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
         @foreach($categorias as $categoria)
             <tr>
                 <td>{{$categoria->ref}}</td>
                 <td>{{$categoria->titulo}}</td>
                 <td class="align-middle">
                     @if (!empty($categoria->imagen))
                         <img title="{{$categoria->titulo}}"
                              class="object-scale-down h-10 w-10" style="width: 100px"
                              src="{{asset($categoria->imagen)}}">
                     @else
                         <img title="{{$categoria->titulo}}" style="width: 100px"
                              class="object-scale-down h-10 w-10"
                              src="{{asset('images/imagen_no_disponible.png')}}">
                     @endif
                 </td>
                 <td>
                     <a href="{{route('admin.categorias.show',$categoria->id)}}" class="bt-small bt-show">ver</a>
                     <a href="{{route('admin.categorias.edit',$categoria->id)}}" class="bt-small bt-edit">editar</a>
                     <a href="{{route('admin.categorias.delete',$categoria->id)}}" class="bt-small bt-delete">Borrar</a>
                 </td>
             </tr>
         @endforeach
         </tbody>
     </table>

 </div>
