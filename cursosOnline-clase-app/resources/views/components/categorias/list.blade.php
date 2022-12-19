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
                 <td style="padding-left: 15px;"><i class='bx bxs-grid-alt' style='color:#6283e8' ></i> {{$categoria->ref}}</td>
                 <td style="padding-left: 15px;"><i class='bx bxs-pencil' style='color:#6283e8' ></i> {{$categoria->titulo}}</td>
                 <td class="align-middle" style="padding-left: 15px;">
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
                 <td style="display: flex; justify-content: center; align-items: center">
                     <a href="{{route('admin.categorias.show',$categoria->id)}}" class="bt-small bt-show"><i class='bx bxs-show' style='color:#fdf9f9;  font-size: 25px; vertical-align: middle'></i></a>
                     <a href="{{route('admin.categorias.edit',$categoria->id)}}" class="bt-small bt-edit"><i class='bx bxs-edit' style='color:#fdf9f9;  font-size: 25px; vertical-align: middle'></i></a>
                     <a href="{{route('admin.categorias.delete',$categoria->id)}}" class="bt-small bt-delete"><i class='bx bxs-message-square-x' style='color:#fdf9f9;  font-size: 25px; vertical-align: middle'></i></a>
                 </td>
             </tr>
         @endforeach
         </tbody>
     </table>

 </div>
