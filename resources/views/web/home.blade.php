 @extends ('web.mainFrame')<!--namespace.bladename -->

@section ('content')


    
    
    <!--@include('web.AllCategories')-->
        

<div class='container-fluid'>
  <div class="row" >
        <!--carousel-->
    
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-toggle="collapse" data-interval="false">
          <ol class="carousel-indicators">
          @foreach($carousels as $key => $carousel)
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" class="@if ($loop->first) active @endif" ></li>
            @endforeach
          </ol>

          <div class="carousel-inner">
          @foreach($carousels as $key => $carousel)
            <div class="carousel-item  {{ $loop->first? 'active' :''}} ">
              <img src="{{asset('images/'.$carousel->image)}}" class="d-block w-100" alt="">
            </div>
            @endforeach
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>

        </div></div>

  
        <!--head div-->
        
        <div>
        <h1 class='head'><strong>WINTER COLLECTION 2020/2021</strong></h1>
        <p class='head-p' style="padding-bottom: 50px">We put the fashion in your playtime. Check out our looks for your children!</p>
        </div>
        
        
    <!-- category DIVS-->
        
        
    <div class='container-fluid'>
  <div class="row" >
 <div class='col-lg-6 div1' >
    <h2>NEWBORN</h2>
        <P>0-9 MONTHS</P>
     
    <badge class ='badge b'>
    <a href="#" class='category'>NEWBORN BOY></a><BR/>
     <a href="#" class='category'>NEWBORN GIRL></a>
        </badge></div>
    
      
      <div class='col-lg-6 div2' >
     <h1 >BABY</h1>
     <P >6-24 MONTHS</P>
        
    <badge class ='badge b'>
     <a href="#" class='category'>BABY BOY></a><BR/>
     <a href="#" class='category'>BABY GIRL></a>
      </badge> </div>

        
      
      
      <div class='container-fluid'>
      <div class="row">
 <div class='col-lg-6 div3'>
     <h1 >KIDS</h1>
     <P>2-7 YEARS</P>
     
      <badge class ='badge b'>
     <a href="#" class='category'>KIDS BOY></a><BR/>
     <a href="{{route('kids_girl')}}" class='category'>KIDS GIRL></a>
     </badge></div>
          
          
      <div class='col-lg-6 div4'>
     <h1 >JUNIORS</h1>
     <P >8-16 YEARS</P>
          
           <badge class ='badge b'>
          <a href="#" class='category'>JUNIOR BOY></a><BR/>
          <a href="#" class='category'>JUNIOR GIRL></a>
          </badge>
        </div>
        </div>
        </div>
                                
   


        
        
        <!--footer div-->
        
        <div style='padding: 70px'>
        <h1 class='head'><strong>The most fun, comfortable clothing for children</strong></h1>
        <p class='head-p'>
This childrenswear, which is already present in more than 40 countries, is designed in Spain and available to everyone. “Happy Fashion” means fun, casual clothes for any occasion!

We have been creating relaxed, comfortable fashion for everyone and every day for more than 30 years. Clothes for children, designed in Spain, produced ethically and sold in more than 40 different countries every season

Today we are present in more than 4,000 multi-brand points of sale across four continents. We work every day to reach further and further. Our collections prominently feature colours and prints, as well as comfortable, easy fabrics that can be easily combined.

These have proven to be perfect for active, imaginative children who are full of energy.</p>
        </div>
        
        
        
        <!--map-->
        
        <div class='jumbotron'>

        <a href="#" style='color: white;margin-left: 100px;font-size: 30px;margin-top: 250px;' title="Where to buy?">Where to buy? </a>
            
    <a href="{{route('Location')}}">
    <button type="button"  class='btn btn-warning location' ><i class="fas fa-map-marker-alt fa-lg"></i>STORE LOCATOR</button></a>
        
       
        
        </div>

        

         
      
  
        @endsection
      
    
        

       
