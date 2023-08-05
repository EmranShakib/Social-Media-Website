 <script src="https://code.jquery.com/jquery-3.7.0.min.js"
     integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

 <script>
     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
 </script>
 <script>
     $(document).ready(function() {

         // comment index
         $(document).on('click', '.commentData', function(e) {
             e.preventDefault();
                let eventId = $(this).data('id');
                 

             $.ajax({
                 url: "{{ route('comment.data') }}",
                 method: 'post',
                 data: {
                     eventId: eventId
                 },
                 success: function(res) {
                     if (res.status == 'success') {
                          
                        console.log(res.status);

                         let tableBody = $("#table-body");
                         
                          // Clear any existing rows
                         $.each(res.data, function(index, row) {
                             var newRow = $("<tr></tr>");

                             newRow.append("<td>" + row.comment + "</td>");
                           

                             tableBody.append(newRow);
                         });

                     }
                 }
             });

         });
         // comment store 
         $(document).on('click', '.commentBtn', function(e) {
             e.preventDefault();
             let eventId = $(this).data('id');
             let comment = $('#comment').val();
             $.ajax({
                 url: "{{ route('comments.store') }}",
                 method: 'post',
                 data: {
                     eventId: eventId,
                     comment: comment
                 },
                 success: function(res) {
                     if (res.status == 'success') {

                         if (res.status == 'success') {

                              $('#comment').val('');
                           let tableBody = $("#table-body");

                            
                         }
                     }
                 }
             });
         });

        
         




     });
 </script>
