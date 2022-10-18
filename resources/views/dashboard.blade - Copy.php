<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    </x-app-layout>

    <table>
<tr>
    <th>Doctor Name</th>
    <th>Date</th>
    <th>Message</th>
    <th>Status</th>
    <th>cancel appointment</th>
</tr>

@foreach($appoint as $appoints)

<tr>
    <td>{{$appoints->doctor}}</td>
    <td>{{$appoints->date}}</td>
    <td>{{$appoints->message}}</td>
    <td>{{$appoints->status}}</td>
    <td><a href="{{url('cancel_update'),$appoints->id}}">cancel</a></td>
</tr>

@endforeach

</table>





<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            *{
                text-decoration: none;
                color: white;
                background-size: cover;
                background-position: center;
               
            }

            .suma{
                padding: 2%;
                margin bottom: 2%;
                text-align: center;
                color: white;
            }

            .azama{
                padding: 3%;
                
                 }

.hud{
    padding: 20%
}
            .int{
                color: white;
    width: 10%;
    text-align: center;
    float: left;
    margin-left: 4.7%;
    text-decoration: none;
    background-color: blue;
    padding: 2%;
    border-radius:10%;
    
}



        </style>
      </head>
    <body style="background-image: url(../assets/blblue2.jpg);">
<div  class="azama"  style="background-image: url(../assets/blue.jpg);">
<div  class="suma" style="color: white;" ><h1><strong>WESTLIFE HOSPITAL</strong> </h1> </div>
<div class="suma">
<div class="int" style="color: white;"><a href="about.php"> ABOUT</a></div> 
<div class="int"><a href="services.php">SERVICES</a> </div> 
<div class="int"><a href="thirdparties.php">THIRDPARTIES</a> </div>


        <div class="int">
            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" 
                        >Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" >LOG IN</a></div><div class="int">

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">REGISTER</a>
                        @endif
                    @endauth
                </div>
            @endif </div>
            </div>
         <div  class="hud" style="background-image: url(../assets/doctor1.jpg);"></div> 
                           
                       
                       

                
                   
                
    </body>
</html>
