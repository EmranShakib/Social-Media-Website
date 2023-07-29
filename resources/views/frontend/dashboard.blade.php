 <x-frontend.layouts.master>
     {{-- dynamic title using components --}}

     <x-slot name="title">WayzAway-Dashboard</x-slot>

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

                 <div style="height: 100px" class="border border-1">

                     <button type="button" class="btn btn-success" data-bs-toggle="modal"
                         data-bs-target="#exampleModal" data-bs-whatever="@mdo"
                         style="margin-left:70px;margin-top:30px">
                         <i class="fa-solid fa-calendar-days fa-beat"></i> Create Event
                     </button>

                     {{-- event modal --}}
                     <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Create New Event</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                     <form>
                                         <div class="form-group row mb-2">
                                             <label for="title" class="col-sm-2 col-form-label">Title:</label>
                                             <div class="col-sm-10">
                                                 <input type="text" class="form-control" id="title"
                                                     name="title" required>
                                             </div>
                                         </div>
                                         <div class="form-group row mb-2">
                                             <label for="description"
                                                 class="col-sm-2 col-form-label">Description:</label>
                                             <div class="col-sm-10">
                                                 <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                                             </div>
                                         </div>

                                         <div class="form-group row mb-2">
                                             <label for="date" class="col-sm-2 col-form-label">Date:</label>
                                             <div class="col-sm-4">
                                                 <input type="date" class="form-control" id="date"
                                                     name="date" required>
                                             </div>
                                             <label for="startTime" class="col-sm-2 col-form-label">Category</label>
                                             <div class="col-sm-4">
                                                  <select name="" id="" class="form-control">
                                                    <option value="">Select Category</option>
                                                    <option value="">Select Category</option>
                                                    <option value="">Select Category</option>
                                                  </select>
                                             </div>
                                         </div>

                                         <div class="form-group row mb-2">
                                             <label for="endTime" class="col-sm-2 col-form-label">Start Time:</label>
                                             <div class="col-sm-4">
                                                 <input type="time" class="form-control" id="endTime"
                                                     name="endTime" required>
                                             </div>
                                              <label for="startTime" class="col-sm-2 col-form-label">End
                                                 Time:</label>
                                             <div class="col-sm-4">
                                                 <input type="time" class="form-control" id="startTime"
                                                     name="startTime" required>
                                             </div>
                                         </div>
                                         <div class="form-group row mb-2">
                                             <label for="bannerImage" class="col-sm-2 col-form-label">Banner
                                                 Image:</label>
                                             <div class="col-sm-10">
                                                 <input type="file" class="form-control-file" id="bannerImage"
                                                     name="bannerImage">
                                             </div>
                                         </div>
                                         <div class="form-group row mb-2">
                                             <label for="multipleImages" class="col-sm-2 col-form-label">Multiple
                                                 Images:</label>
                                             <div class="col-sm-10">
                                                 <input type="file" class="form-control-file" id="multipleImages"
                                                     name="multipleImages" multiple>
                                                 
                                             </div>
                                         </div>
                                         <div class="form-group row mb-2">
                                             <div class="col-sm-10 offset-sm-2">
                                                 <button type="submit" class="btn btn-primary">Submit</button>
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary"
                                     data-bs-dismiss="modal">Close</button>
                                 <button type="button" class="btn btn-primary">Send message</button>
                             </div>
                         </div>
                     </div>
                     {{-- end event modal --}}
                     
                  

             </div>

             <div class="card text-black col-12 mb-2" style="margin-top:40px">
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
