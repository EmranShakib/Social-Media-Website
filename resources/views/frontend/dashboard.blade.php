 <x-frontend.layouts.master>
     {{-- dynamic title using components --}}

     <x-slot name="title">WayzAway-Dashboard</x-slot>

     <x-alert-message.alert />


     <div class="container jsjhr">
         <div class="row skfjh">
             <div class="col-md-2 sfjhe">
                 <div class=" sjfsj">
                     <img src="{{ asset('storage/image/profiles/' . Auth::user()->profile_image) }}" alt="Admin"
                         class="rounded-circle" width="150">
                     <h5 class="text-center pt-3">
                         {{ Auth::user()->name }}
                     </h5>
                     <p class="text-muted text-center">
                         Software Engineer
                     </p>
                     <hr>
                     <div class="d-flex">
                         <div>
                             <p>
                                 4K Followers
                             </p>
                         </div>
                         <div>
                             <p>
                                 24K Following
                             </p>
                         </div>
                     </div>
                     <hr>
                     <div class="text-center">
                         <a href="" class="font-weight-bold text-decoration-none text-center">
                             View My Profile
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="jfheuf">
                     <div class="d-flex justify-content-around">
                         <div>
                             <h6><i class="fas fa-edit text-primary pr-1"></i>Share an update</h6>
                         </div>
                         <div>
                             <h6>
                                 <i class="fas fa-arrow-up text-success pr-1"></i> upload a photo
                             </h6>
                         </div>
                         <div>
                             <h6 id="writeArticleHeader" style="cursor: pointer">
                                 <i class="fas fa-book-open text-info pr-1"></i> Write an article
                             </h6>
                         </div>
                     </div>
                     <hr>
                     <form action="{{ route('posts.store') }}" id="articleTextarea" style="display:none" method="POST"
                         enctype="multipart/form-data">
                         @csrf
                         <input type="file" class="mb-2"name="image">
                         <input type="text" placeholder="Enter the title" name="title">
                         <textarea cols="3" rows="3" class="form-control" placeholder="Write Something...." name="content"></textarea>
                         <button class="btn btn-sm btn-primary mt-2">Post</button>
                     </form>
                 </div>
                 <div class="box1">

                     @foreach ($posts as $post)
                         <div class="d-flex skfjkk">
                             <div class="lkt40">
                                 <img src="{{ asset('storage/image/profiles/' . $post->user->profile_image) }}"
                                     alt="" class="rounded-circle" width="150">

                             </div>
                             <div class="pl-2 pt-1 row">
                                 <h5>{{ $post->user->name }}</h5>

                             </div>


                         </div>
                         <hr>
                         <h6>{{ $post->title }}</h6>
                         <div>
                             <img src="{{ asset('storage/image/posts/' . $post->image) }}" alt="dcds"
                                 style="max-width: 100%; height:auto;">
                         </div>
                         <p class="text-muted">
                             {{ $post->content }}
                         </p>
                         <hr>
                         <div>

                         </div>
                         <div>

                         </div>

                         <div class="d-flex justify-content-around" style="margin-bottom: 20px">
                             <div>
                                 <i class="fa fa-heart"></i>
                                 Like
                             </div>
                             <div>
                                 <i class="fa fa-comment"></i>
                                 Comments
                             </div>
                             <div>
                                 <i class="fa fa-share"></i>
                                 Share
                             </div>
                         </div>
                     @endforeach

                 </div>













             </div>
             <div class="col-md-4">
                 <div class="left_box">
                     <span>
                         Keep in touch
                     </span>
                     <hr>
                     <div class="d-flex dfkj">
                         <div class="lkt40">
                             <img src="{{ asset('img/Wayzaway_logo.png') }}" alt="">

                         </div>
                         <div>
                             Tayy_Eb Chaudhary
                         </div>
                     </div>
                     <hr>
                     <div class="d-flex dfkj">
                         <div class="lkt40">
                             <img src="./Images/2.jpg" alt="">

                         </div>
                         <div>
                             Danial Ahmed
                         </div>
                     </div>
                     <hr>
                     <div class="d-flex dfkj">
                         <div class="lkt40">
                             <img src="./Images/3.jpeg" alt="">

                         </div>
                         <div>
                             Usman Khan
                         </div>
                     </div>
                     <hr>
                     <div class="d-flex dfkj">
                         <div class="lkt40">
                             <img src="./Images/4.jpg" alt="">

                         </div>
                         <div>
                             Waqar Ali
                         </div>
                     </div>
                 </div>

                 <div class="left_box mt-3">
                     <span>
                         Your Profile Trafic
                     </span>
                     <hr>
                     <img src="https://res.cloudinary.com/yaffa-publishing/image/fetch/v1456442193/http://yaffa-cdn.s3.amazonaws.com/adnews/live/images/dmImage/SourceImage/graph12_CE9EDD90-DC15-11E5-86900204D9902A1F.jpg"
                         class="w-100" alt="">
                 </div>

                 <div class="left_box mt-3">
                     <span class="font-weight-medium">
                         updated News Here
                     </span>
                     <hr>
                     <p>
                         Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut rem nisi natus totam veritatis
                         nam repellat veniam, praesentium quam perspiciatis adipisci reiciendis, at qui aperiam ex sit,
                         officia expedita beatae!
                     </p>
                 </div>
             </div>



         </div>

     </div>
     </div>
     <script>
         // Get references to the header and textarea elements
         const header = document.getElementById("writeArticleHeader");
         const textarea = document.getElementById("articleTextarea");

         // Add an event listener to the header to listen for clicks
         header.addEventListener("click", function() {
             // Toggle the visibility of the textarea when the header is clicked
             textarea.style.display = textarea.style.display === "none" ? "block" : "none";
         });
     </script>
 </x-frontend.layouts.master>
