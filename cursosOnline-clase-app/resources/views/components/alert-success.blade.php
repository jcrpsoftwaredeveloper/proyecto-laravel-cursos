@if (!empty(trim($slot)))
 <div class="mensaje-temporal float-right mr-2">
     <div class="bg-emerald-100 border-l-4 border-emerald-500 text-emerald-900 p-4" role="alert">
         <p><i class="fa-solid fa-thumbs-up"></i> {{$slot}}</p>
     </div>
 </div>
 @endif
