
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
                        
                        <h1 class="display-4">MY  APPOINTMENT </h1>

                        <table   style="margin-left: 27%;">
<tr>
    <th style="background-color: black;">Name</th>
    <th style="background-color: black;">Date</th>
    <th style="background-color: black;">email</th>
    <th style="background-color: black;">Phone number</th>
    <th style="background-color: black;">Status</th>
    
</tr>

@foreach($appoint as $appoints)

<tr>
    <td style="background-color: blue;">{{$appoints->name}}</td>
    <td style="background-color: blue;">{{$appoints->date}}</td>
    <td style="background-color: blue;">{{$appoints->email}}</td>
    <td style="background-color: blue;">{{$appoints->number}}</td>
    <td style="background-color: orange;">{{$appoints->status}}</td>
    
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
                          
                  
                 