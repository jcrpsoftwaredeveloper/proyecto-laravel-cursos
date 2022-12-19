@if (!empty(trim($slot)))
 <div class="mensaje-temporal float-right mr-2">
     <div class="bg-red-100 border-l-4 border-red-500 text-red-900 p-4" role="alert">
         <p><i class="fa-solid fa-triangle-exclamation"></i> {{$slot}}</p>
     </div>
 </div>
 @endif
