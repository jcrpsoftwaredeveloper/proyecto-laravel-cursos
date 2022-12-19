@if (!empty(trim($slot)))
 <div class="mensaje-temporal float-right mr-2">
     <div class="bg-cyan-100 border-l-4 border-cyan-500 text-cyan-900 p-4" role="alert">
         <p><i class="fa-solid fa-info"></i> {{$slot}}</p>
     </div>
 </div>
@endif
