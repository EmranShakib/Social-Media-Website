 <x-frontend.layouts.master>
     {{-- dynamic title using components --}}

     <x-slot name="title">WayzAway-Profile-page</x-slot>

     <x-alert-message.alert />

     <div class="container-fluid">
         <div class="row mt-3">

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
                                     <option value="1">Category 1</option>
                                     <option value="2">Category 2</option>
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

                 <div class="col-12 bg-info  ">
                     <div class="row">
                         <section style="background-color:white;">
                             <div class="container py-5">
                                 <div class="row ">
                                     <div class="col-md-6 col-lg-6 col-xl-6 mb-3">
                                         <div class="card text-black">
                                             <span class="badge bg-primary w-25 mt-2">July 2023</span>

                                             <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/3.webp"
                                                 class="card-img-top" alt="Apple Computer" />

                                             <div class="card-body">
                                                 {{-- <div class="text-center">
                                                     
                                                 </div> --}}
                                                 <div>
                                                     <div class="">
                                                         <span class="text-danger">Sports</span>
                                                     </div>
                                                     <div class="">
                                                         <h6>Internation Sport Conference in 2021</h6>
                                                     </div>
                                                     <div class="">
                                                         <span>12:00 AM - 2:00 PM</span>
                                                     </div>
                                                     <div class="">
                                                         <span>Dhaka</span>
                                                     </div>
                                                     <div class="">
                                                         <button class="btn btn-outline-dark btn-sm">More
                                                             Details</button>
                                                     </div>
                                                 </div>
                                                 <div class="d-flex justify-content-end total font-weight-bold">
                                                     <i class="fa-regular fa-bell fa-xl"></i>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>



                                 </div>
                             </div>
                         </section>
                     </div>
                 </div>

             </div>

             
             {{-- Right Side --}}
             <div class="col-md-3 col-lg-3 col-xl-3 mb-3">
                 <div class="">
                    <div class="mb-2">
                     <img src="{{ asset('storage/image/profiles/' . Auth::user()->profile_image) }}" alt=""
                         class="rounded-circle" style="width:50px;height:50px"> {{ Auth::user()->name }} 
                </div>
                     <div class="card text-black col-12 mb-2">
                         <div class="card-header">Feature Event</div>
                         <span class="badge bg-primary w-25 mt-2">July 2023</span>

                         <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/3.webp"
                             class="card-img-top" alt="Apple Computer" />

                         <div class="card-body">
                             {{-- <div class="text-center">
                                                     
                                                 </div> --}}
                             <div>
                                 <div class="">
                                     <span class="text-danger">Sports</span>
                                 </div>
                                 <div class="">
                                     <h6>Internation Sport Conference in 2021</h6>
                                 </div>
                                 <div class="">
                                     <span>12:00 AM - 2:00 PM</span>
                                 </div>
                                 <div class="">
                                     <span>Dhaka</span>
                                 </div>
                             </div>
                             <div class="d-flex justify-content-end total font-weight-bold">
                                 <i class="fa-regular fa-bell fa-xl"></i>
                             </div>
                         </div>
                     </div>

                     <div class="card text-black col-12 mb-2">
                         <div class="card-header">Event Cateories</div>


                         <div class="card-body">
                             <li>fdjgh</li>
                             <li>fdjgh</li>
                             <li>fdjgh</li>
                             <li>fdjgh</li>

                         </div>
                     </div>

                     <div class="card text-black col-12 mb-2">
                         <div class="card-header">Upcoming Event</div>


                         <div class="card-body">
                             <li>fdjgh</li>
                             <li>fdjgh</li>
                             <li>fdjgh</li>
                             <li>fdjgh</li>

                         </div>
                     </div>
                 </div>
             </div>


         </div>
     </div>


 </x-frontend.layouts.master>
