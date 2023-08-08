 <x-frontend.master>
     {{-- dynamic title using components --}}

     <x-slot name="title">WayzAway-Dashboard</x-slot>



     <div class="container" style="margin-top:100px">

         @foreach ($blogs as $blog)
             <div class="mx-auto w-50 ">
                 <strong>{{ $blog->created_at }}</strong>
             </div>
             <div class="mx-auto w-50 ">
                 <h2>{{ $blog->title }}</h2>

             </div>
             <div class="mx-auto w-50">
                 <img src="{{ asset('storage/image/blogs/' . $blog->image) }}" alt="" class="img-fluid"
                     style="">
             </div>

             <div class="mx-auto w-50 mt-3 pt-3 mb-3">
                 {{ $blog->content }}

             </div>
             <hr>
         @endforeach

     </div>


 </x-frontend.master>
