
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
                        
                        <h1 class="display-4">ADDING DETAILS FOR DOCTORS</h1>





                        <form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data" >

@csrf
<div  style="padding: 15px; color:black; " >
<label for="" class="btn btn-primary" style="margin-right:13%; " >name</label>
<input type="text" name="name" style="color:black; "  value="{{$data->name}}">
</div>

<div  style="padding: 15px;  color:black;">
<label for="" class="btn btn-primary" style="margin-right:13%; ">phone</label>
<input type="number" name="phone" style="color:black;  color:black;" value="{{$data->phone}}">
</div>

<div  style="padding: 15px; color:black;">
<label for="" class="btn btn-primary" style="margin-right:11%; ">specialist</label>
<select name="specialist" id="speacialist" style="width: 20%; " value="{{$data->specialist}}">
<option value="">--select--</option>
<option value="teeth">teeth</option>
<option value="eye">eye</option>
<option value="ear">ear</option>
<option value="nose">nose</option>
</select>
</div>



<div  style="padding: 15px; color:black;">
<label for="" class="btn btn-primary" style="margin-right:11%;">room no.</label>
<input type="text" name="room" style="color:black;"  value="{{$data->room}}">
</div>

<div  style="padding: 15px; color:black;" class="btn btn-primary">
<label for="">doctor image</label>
<input type="file" name="image" style="color:black;" value="{{$data->image}}">
</div>


<div  style="padding: 15px; color:black;">
<input type="submit" value="update" style="color:black;" class="btn btn-primary"  >
</div>


</form></center>
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
                          
                  
                 