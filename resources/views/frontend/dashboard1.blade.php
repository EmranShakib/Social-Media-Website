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
                     @if (isset($posts))


                         @foreach ($posts as $post)
                             <div class="d-flex skfjkk">
                                 <div class="lkt40">
                                     <img src="{{ asset('storage/image/profiles/' . $post->user->profile_image) }}"
                                         alt="" class="rounded-circle" width="150">

                                 </div>


                                 <div class="pl-2 pt-1 row">
                                     <h6>{{ $post->user->name }}</h6>
                                     <!-- Display the "created at" time in a human-readable format (e.g., 10 minutes ago) -->
                                     <span>{{ $post->created_at->diffForHumans() . ' ' . $post->created_at->format('Y-m-d') }}</span>
                                     <!-- Display only the date part -->




                                 </div>


                                 @if (Auth::user()->id == $post->user_id)
                                     <div class="">
                                         <div class="dropdown">
                                             <a href="#" role="button" id="dropdownMenuLink"
                                                 data-bs-toggle="dropdown" aria-expanded="false">
                                                 <i class="fa-solid fa-ellipsis-vertical fa-lg"></i>
                                             </a>
                                             <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                 <li>

                                                     <button type="button" class="dropdown-item" data-toggle="modal"
                                                         data-target=".bd-example-modal-lg">Edit</button>

                                                 </li>


                                                 <li><a class="dropdown-item"
                                                         href="{{ route('posts.show', ['post' => $post->id]) }}">Delete
                                                     </a>
                                                 </li>




                                                 <!-- Add more dropdown options as needed -->
                                             </ul>
                                         </div>



                                     </div>
                                 @endif


                             </div>
                             <hr>
                             <h6>{{ $post->title }}</h6>
                             <div>
                                 <img src="{{ asset('storage/image/posts/' . $post->image) }}" alt=""
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
                                 <!-- Your Blade view file -->







                                 <div class="" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                     aria-expanded="false" aria-controls="collapseExample">
                                     <i class="fa fa-comment"></i>
                                     Comments
                                 </div>

                             </div>
                             <div class="collapse" id="collapseExample">
                                 <div class="card card-body">
                                   <div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <!-- Comments section -->
            <div class="comments">
                <!-- Example: Display existing comments -->
                <div class="comment mb-2">
                    <span class="user-name font-weight-bold">John Doe</span>
                    <span class="comment-text">This is a great post!</span>
                </div>
                <div class="comment mb-2">
                    <span class="user-name font-weight-bold">Jane Smith</span>
                    <span class="comment-text">Thanks for sharing!</span>
                </div>
                <!-- More comments can go here -->
            </div>
        </div>
    </div>

    <!-- Comment form -->
    <div class="row mt-4">
        <div class="col-md-12">
            <form id="commentForm" action="{{ route('comments.store') }}" method="post">
                @csrf
                <div class="form-group">
                     <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="input-group">
                        <textarea class="form-control" id="commentText" rows="1" placeholder="Write a comment..." name="comment"></textarea>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary btn-sm mt-2 ml-3">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

                                 </div>
                             </div>


                             {{-- post edit modal --}}
                             <!-- Large modal -->


                             <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                 aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-lg">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
                                             <button type="button" class="close" data-dismiss="modal"
                                                 aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                             <form action="{{ route('posts.update', ['post' => $post->id]) }}"
                                                 method="post" enctype="multipart/form-data">
                                                 @csrf
                                                 @method('patch')
                                                 <div class="form-group">
                                                     <img id="image-preview"
                                                         src="{{ asset('storage/image/posts/' . $post->image) }}"
                                                         alt="" style="max-width: 100%; height: 100px;">
                                                 </div>
                                                 <div class="form-group">
                                                     <input type="file" class="form-control" id="image-input"
                                                         name="image">
                                                 </div>

                                                 <div class="form-group">
                                                     <label for="recipient-name" class="col-form-label">Title:</label>
                                                     <input type="text" class="form-control" id="recipient-name"
                                                         name="title" value="{{ $post->title }}">
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="message-text" class="col-form-label">Content:</label>
                                                     <textarea class="form-control" id="message-text" name="content">{{ $post->content }}
            </textarea>
                                                 </div>

                                         </div>
                                         <div class="modal-footer">
                                             <button type="button" class="btn btn-danger btn-sm"
                                                 data-dismiss="modal">Close</button>
                                             <button type="submit" class="btn btn-success btn-sm">Save
                                                 Change</button>
                                         </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         @endforeach
                     @else
                         <p>Here have no post</p>
                     @endif

                 </div>













             </div>
             <div class="col-md-4">
                 <div class="left_box">
                     <span>
                         Keep in touch
                     </span>
                     <hr>
                     @if (isset($users))


                         @foreach ($users as $user)
                             @if ($user->id != Auth::user()->id)
                                 <a href="" class="text-decoration-none text-dark">
                                     <div class="d-flex dfkj">
                                         <div class="lkt40">
                                             <img src="{{ asset('storage/image/profiles/' . $user->profile_image) }}"
                                                 alt="">

                                         </div>
                                         <div>
                                             {{ $user->name }}
                                         </div>
                                     </div>
                                 </a>
                                 <hr>
                             @endif
                         @endforeach
                     @endif

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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#commentForm').submit(function(e) {
            e.preventDefault();
            var commentText = $('#commentText').val();

            // Perform AJAX request to save the comment to the server
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: {
                    _token: '{{ csrf_token() }}',
                    post_id: $('[name="post_id"]').val(), // Get the post_id from the hidden input
                    content: commentText
                },
                success: function(response) {
                    // On success, add the new comment to the comments section
                    var commentDiv = $('<div>').addClass('comment mb-2');
                    var userNameSpan = $('<span>').addClass('user-name font-weight-bold').text('You');
                    var commentTextSpan = $('<span>').addClass('comment-text').text(commentText);
                    commentDiv.append(userNameSpan).append(commentTextSpan);
                    $('.comments').prepend(commentDiv);

                    // Reset the textarea
                    $('#commentText').val('');
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>




     <script>
         // Get references to the header and textarea elements
         const header = document.getElementById("writeArticleHeader");
         const textarea = document.getElementById("articleTextarea");

         // Add an event listener to the header to listen for clicks
         header.addEventListener("click", function() {
             // Toggle the visibility of the textarea when the header is clicked
             textarea.style.display = textarea.style.display === "none" ? "block" : "none";
         });


         //    edit image dynamically
     </script>
 </x-frontend.layouts.master>
