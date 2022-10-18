
              <x-app-layout>
                
              

              
                <x-slot name="header">
                
                
                           </x-slot>
                   
                    <!DOCTYPE html>
                <html lang="en">
                <head>
                  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                
                  <meta http-equiv="X-UA-Compatible" content="ie=edge">
                
                  <meta name="copyright" content="MACode ID, https://macodeid.com/">
                
                  <title>One Health - Medical Center HTML5 Template</title>
                
                  <link rel="stylesheet" href="../assets/css/maicons.css">
                
                  <link rel="stylesheet" href="../assets/css/bootstrap.css">
                
                  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
                
                  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
                
                  <link rel="stylesheet" href="../assets/css/theme.css">
                </head>
                <body>
                
                
                
                  <!-- Back to top button -->
                  <div class="back-to-top"></div>
                
                  
                  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
                    <div class="hero-section">
                      <div class="container text-center wow zoomIn">
                        
                        <h1 class="display-4">APPOINTMENT MADE BY PATIENTS</h1>




                        
    <table style="margin-left: 9%;"><tr>
<th  style="background-color: black;">Customer name</th>
<th  style="background-color: black;">Email</th>
<th  style="background-color: black;">Date</th>
<th  style="background-color: black;">Phone number</th>

<th  style="background-color: black;">Status</th>
<th  style="background-color: black;">Approve</th>
<th  style="background-color: black;">cancel</th>
<th  style="background-color: black;">Send email</th></tr><tr>

@foreach($data as $appoint)


<td style="background-color: blue;">{{$appoint->name}}</td>
<td style="background-color: blue;">{{$appoint->email}}</td>
<td style="background-color: blue;">{{$appoint->date}}</td>
<td style="background-color: blue;">{{$appoint->number}}</td>

<td style="background-color: gray;">{{$appoint->status}}</td>
<td  >
    <a href="{{url('approved',$appoint->id)}}" style="background-color: orange; border-radius: 30%;">Approved</a>
</td>



<td>
    <a href="{{url('canceled',$appoint->id)}}" style="background-color: green; border-radius: 30%;">cancel</a>
</td>

<td>
    <a href="{{url('emailview',$appoint->id)}}" style="background-color: red;  border-radius: 30%;">Send email</a>
</td>



</tr>
@endforeach

    </table>





                       
</div>




      
                      </div>
                    </div>
                  </div>
                
                
                  
                  
                 
                 <!-- .page-section -->
                
                
                <script src="../assets/js/jquery-3.5.1.min.js"></script>
                
                <script src="../assets/js/bootstrap.bundle.min.js"></script>
                
                <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
                
                <script src="../assets/vendor/wow/wow.min.js"></script>
                
                <script src="../assets/js/theme.js"></script>
                  
                </body>
                </html>
                
                
                
                  
                </x-app-layout>
                          
                  
                 