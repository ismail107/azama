
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
                      <div class="container text-center wow zoomIn" style="text-align:center;">
                        
                        <h1 class="display-4">APPOINTMENT MADE BY PATIENTS</h1>




                        
    <table style="margin-left: 25%;" ><tr>
    <th  style="background-color: black;">Doctor name</th>
<th  style="background-color: black;">Phone</th>
<th  style="background-color: black;">Speciality</th>
<th  style="background-color: black;">Room nnumber</th>
<th  style="background-color: black;">Image</th>
<th  style="background-color: black;">delete</th>
<th  style="background-color: black;">update</th>



@foreach($data as $doctor)
<tr>
<td style="background-color: blue; ">{{$doctor->name}}</td>
<td style="background-color: blue;">{{$doctor->phone}}</td>
<td style="background-color: blue;">{{$doctor->specialist}}</td>
<td style="background-color: blue;">{{$doctor->room}}</td>
<td><img  height="80" width="80" src="doctorimage/{{$doctor->image}}" alt=""></td>

<td><a onclick="return confirm('a u sure to delete this')"href="{{url('deletedoctor',$doctor->id)}}" 
style="background-color: orange; border-radius: 30%;">delete</a></td>
<td><a href="{{url('updatedoctor',$doctor->id)}}"style="background-color: red; border-radius: 30%;">update</a></td>
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
                          
                  
                 