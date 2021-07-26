@extends('layouts.master')
@section('content')
   
   <div id="wrapper">
       <div class="section">
           <div class="slide">
               <image src="{{asset('assets/img/gallery/aviation.jpg')}}" alt="">
           </div>
           <div class="slide">
               <image src="{{asset('assets/img/gallery/fuels.jpg')}}" alt="">
           </div>
           <div class="slide">
               <image src="{{asset('assets/img/gallery/lubricants.jpg')}}" alt="">
           </div>
       </div>
   </div>
   
   
@endSection
