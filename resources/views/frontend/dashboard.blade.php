 <x-frontend.master>
     {{-- dynamic title using components --}}

     <x-slot name="title">WayzAway-Dashboard</x-slot>



     <div class="container-fluid" style="margin-top:100px">
         <div class="row mt-3">
             <x-alert-message.alert />
             {{-- Left Side --}}
             <div class="col-md-9">

                 {{-- Search Bar --}}
                 <div class="d-flex col-12" style="background-color: hsl(327, 37%, 88%);height:100px">

                     <div class="row mx-auto my-auto">
                         <div class="col-3 ">
                             <label for="" class="pb-2">Start Date</label><br>
                             <input type="date" class="form-control" id="myDateInput">
                         </div>
                         <div class="col-3">
                             <label for=""class="pb-2">End Date</label><br>
                             <input type="date" class="form-control" id="myDateInput">
                         </div>
                         <div class="col-3">
                             <label for=""class="pb-2">Category</label><br>
                             <div class="form-group">
                                 <!-- Use Bootstrap's custom-select class to style the select element -->
                                 <select class="custom-select form-control" name="category" id="categorySelect">
                                     <option value="">All Categories</option>
                                     @foreach ($categories as $category)
                                         <option value="{{ $category->id }}">{{ $category->title }}</option>
                                     @endforeach>
                                     <!-- Add more options as needed -->
                                 </select>
                             </div>
                         </div>
                         <div class="col-3 form-group">
                             <label for=""class="pb-2"></label><br>
                             <button class="btn btn-danger mt-2">FIND EVENT</button>
                         </div>
                     </div>
                 </div>


                 <div class="col-12 bg-info ">
                     <div class="row">
                         <section style="background-color:white;">
                             <div class="container">
                                 <div class="row ">
                                     @foreach ($events as $event)
                                         <div class="col-md-6 col-lg-6 col-xl-6 mb-3">
                                             <div class="card text-black">
                                                 <span
                                                     class="badge bg-danger w-25 mt-2 shadow p-2">{{ $event->date }}</span>

                                                 <img src="{{ asset('storage/image/events/' . $event->banner_image) }}"
                                                     class="card-img-top" alt="Apple Computer" />

                                                 <div class="card-body">
                                                     {{-- <div class="text-center">
                                                     
                                                 </div> --}}
                                                     <div>
                                                         <div class="">
                                                             <span
                                                                 class="text-danger">{{ $event->category->title }}</span>
                                                         </div>
                                                         <div class="">
                                                             <h6>{{ $event->title }}</h6>
                                                         </div>
                                                         <div class="">
                                                             <span>{{ $event->start_time }}-
                                                                 {{ $event->end_time }}</span>
                                                         </div>
                                                         <div class="">
                                                             <span>Dhaka</span>
                                                         </div>
                                                         <div class="pt-2">
                                                             <a href="{{ route('events.show', ['event' => $event->id]) }}"
                                                                 class="btn btn-outline-dark btn-sm">More Details</a>

                                                             <button class="btn btn-sm btn-outline-dark favouriteBtn"
                                                                 data-id={{ $event->id }}> Add Favourite<i
                                                                     class="fas fa-heart fa-xl ms-2 text-danger"></i></button>

                                                         </div>
                                                     </div>


                                                     <div class="d-flex justify-content-between total font-weight-bold">


                                                         <div class="mt-2">

                                                             <a class="btn btn-outline-primary btn-sm commentData"
                                                                 data-bs-toggle="collapse" href="#comment{{ $event->id }}"
                                                                 role="button" aria-expanded="false"
                                                                 aria-controls="collapseExample" data-id="{{ $event->id }}">
                                                                 <i class="fas fa-comment fs-lg"></i>
                                                             </a>

                                                         </div>
                                                         <div>
                                                             <i class="fa-regular fa-bell fa-xl"></i>
                                                         </div>

                                                     </div>
                                                     <div class="collapse mt-2" id="comment{{ $event->id }}">
                                                         <div class="card card-body"
                                                             style="max-height: 200px; overflow-y: auto; scrollbar-width: thin;">
                                                             <div class="table-responsive">
                                                                 <table class="table">
                                                                     <tbody id="table-body">
                                                                         
                                                                         
                                                                         <!-- Add more rows here as needed -->
                                                                     </tbody>
                                                                 </table>
                                                             </div>

                                                         </div>
                                                         <form>
                                                            
                                                             <div class="form-floating mb-3 mt-2 shadow">
                                                                 <input type="text" class="form-control"
                                                                     id="comment" name="comment" required>
                                                                 <label for="comment">Write Comment</label>
                                                                
                                                               
                                                                 <div class="justify-content-center d-flex mt-2 ">
                                                                     <button
                                                                         class="btn btn-success btn-sm text-center mb-2 commentBtn"
                                                                         data-id="{{ $event->id }}">Sent <i
                                                                             class="fas fa-paper-plane"></i></button>
                                                                 </div>
                                                             </div>
                                                         </form>
                                                     </div>


                                                 </div>
                                             </div>
                                         </div>
                                         <x-frontend.ajax.comment_ajax/>
                                     @endforeach




                                 </div>
                             </div>
                         </section>
                     </div>
                 </div>

             </div>


             {{-- Right Side --}}
             <div class="col-md-3 col-lg-3 col-xl-3 mb-3">

                 <div style="height: 100px" class="border border-1">

                     <button type="button" class="btn btn-success" data-bs-toggle="modal"
                         data-bs-target="#exampleModal" data-bs-whatever="@mdo"
                         style="margin-left:70px;margin-top:30px">
                         <i class="fa-solid fa-calendar-days fa-beat"></i> Create Event
                     </button>

                     {{-- event modal --}}

                     <x-frontend.model.event_form :categories="$categories" />

                     {{-- end event modal --}}



                 </div>

                 <div class="card text-black col-12 mb-2" style="margin-top:40px">
                     <div class="card-header">Event Cateories</div>


                     <div class="card-body">

                         @foreach ($categories as $category)
                             <li>{{ $category->title }}</li>
                         @endforeach

                     </div>
                 </div>

                 <div class="card text-black col-12 mb-2">
                     <div class="card-header">Upcoming Event</div>


                     <div class="card-body">

                         @foreach ($upcomingEvents as $upcomingEvent)
                             <div class="row mb-3">

                                 <div class="col-md-6 col-6">
                                     <a href="{{ route('events.show', ['event' => $upcomingEvent->id]) }}"> <img
                                             src="{{ asset('storage/image/events/' . $upcomingEvent->banner_image) }}"
                                             alt="" style="width: 90px;height:80px"></a>
                                 </div>
                                 <div class="col-md-6 d-flex flex-column col-6">
                                     <span>{{ $upcomingEvent->title }}</span>
                                     <span>{{ $upcomingEvent->date }}</span>
                                     <span>{{ $upcomingEvent->start_time }}</span>
                                     <span><a
                                             href="{{ route('events.show', ['event' => $upcomingEvent->id]) }}">More..</a></span>

                                 </div>
                             </div>
                         @endforeach


                     </div>
                 </div>
             </div>
         </div>


     </div>
     </div>
     <x-frontend.ajax.favourite_ajax />
     

 </x-frontend.master>
