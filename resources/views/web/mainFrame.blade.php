 
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>project</title>
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{asset('jquery-3.5.1.min.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src ='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js'></script>
    
   

    
    <link href='{{asset("kids.project.style.css")}}' rel='stylesheet'/>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'/>
	<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css' rel='stylesheet'/>


  <!--for cart-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('kids.project.style.css') }}">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name='author' content='gencyclo'/>
   
    
  <script>
          $(document).ready(function(){
            $('.carousel').carousel()
          });
</script>
<script type="text/javascript">
        $(".update-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script src="https://js.stripe.com/v3/"></script>
<script>
    window.onload = function() {
            var stripe = Stripe('pk_test_51INp48EyjupkMN4OPfgxClbi2Ntj8xa60V8go21af4MNNoUDBhPcwhu9aWngfas6plyTWXzCWPsnLDoH5uPYUL5I00RJUkF274');
            var elements = stripe.elements();
            var style = {
                base: {
                    color: '#32325d',
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };
            var card = elements.create('card', {
                style: style
            });
            card.mount('#card-element');
            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });
            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                stripe.createToken(card).then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);
                    }
                });
            });
            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);
                // Submit the form
                form.submit();
            }
        }
</script>

<style>
    .StripeElement {
        box-sizing: border-box;
        height: 40px;
        padding: 10px 12px;
        border: 1px solid transparent;
        border-radius: 4px;
        background-color: white;
        box-shadow: 0 1px 3px 0 orange;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }
    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 orange;
    }
    .StripeElement--invalid {
        border-color: orange;
    }
    .StripeElement--webkit-autofill {
        background-color: orange; !important;
    }
    </style>




</head>


                 
                
     
                  <!--cart-->
                 

         
          
          <!--/cart-->


           <!--navigation1-->
<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-light">

  <a class="navbar-brand" href="{{route('HomePage')}}">
    <img src="{{URL('images/Logo.png')}}" style='width: 12.5rem' alt="mdb logo">
  </a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav1"
    aria-controls="basicExampleNav1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <!-- Links -->
  <div class="collapse navbar-collapse" id="basicExampleNav1">

    <!-- Right -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="{{route('cart')}}"  class="nav-link navbar-link-2 waves-effect">  
        <i class="fas fa-shopping-cart pl-0" ></i> Cart     
          <span class="badge badge-pill badge-info" >{{ count((array) session('cart')) }}</span>
          
          
        </a>
      
      </li>
      <!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink3" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="true">
          <i class="united kingdom flag m-0"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#!">Action</a>
          <a class="dropdown-item" href="#!">Another action</a>
          <a class="dropdown-item" href="#!">Something else here</a>
        </div>
      </li>-->
      <li class="nav-item">
        <a href="{{route('index')}}" class="nav-link waves-effect">
          Shop
        </a>
      </li>
      <li class="nav-item">
        <a href="#!" class="nav-link waves-effect">
          Contact
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('login')}}" class="nav-link waves-effect">
          Sign in
        </a>
      </li>
      <li class="nav-item pl-2 mb-2 mb-md-0">
        <a href="{{route('register')}}" type="button"
          class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">Sign up</a>
      </li>
    </ul>

  </div>
  <!-- Links -->

</nav>
<!-- Navbar -->

                 
               
                 <!--navigation2-->
                 <nav class="navbar sticky-top navbar navbar-expand-lg  nav2">
                

           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarTogglerDemo01" >
             <a class="navbar-brand" href="#" style='color: #3a6f8f;'>CLOTHES</a>
             <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
             
             @include('web.AllCategories')
             </ul>
          

               <!--dropdown-->
               <div class="dropdown">
                  <button onclick="myFunction()" class="dropbtn">Admin</button>
                  <div id="myDropdown" class="dropdown-content">
                    <a href="{{route('create_product')}}">Add Product</a>
                    <a href="{{route('list_product')}}">products List</a>
                    <a href="{{route('create_carousel')}}">Add carousel</a>
                  </div>
                </div>

             <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" style="color: white;">Search</button>
             </form>
           </div>
         </nav>
         
         

         
  
            @yield ('content')
       


<!--foooter-->
        
<footer >
          <div class='footer'>
          <div class='container'>
    
    <div row>

      <div class='col'>
<div class="div-ul">
	<h5  class='h55'>ABOUT</h5>
<ul>
	<li><a href="#" class='footer-links'>ABOUT US</a></li>
	<li><a href="#" class='footer-links'>STORE LOCATOR</a></li>
	<li><a href="#" class='footer-links'>TERMS & CONDITIONS</a></li>
    <li><a href="#" class='footer-links'>PRIVACY POLICY</a></li>
    <li><a href="#" class='footer-links'>RETURS & REFUND</a></li>
</ul>
</div>
</div>
        
<div class='col'>
        <div class="div-ul">
	<h5 class='h55'>SHOP BY</h5>
<ul>
	<li><a href="#" class='footer-links'>NEW COLLECTION</a></li>
	<li><a href="#" class='footer-links'>NEW BORN</a></li>
	<li><a href="#" class='footer-links'>BABY</a></li>
    <li><a href="#" class='footer-links'>KIDS</a></li>
    <li><a href="#" class='footer-links'>JUNIORS</a></li>
</ul>
</div>
</div>   
      
        
<div class='col'>
<div class="div-ul">
	<h5 class='h55'>NAVIGATION</h5>
<ul>
	<li><a href="#" class='footer-links'>ACCOUNT</a></li>
	<li><a href="#" class='footer-links'>ORDERS</a></li>
	<li><a href="#" class='footer-links'>CONTACT US</a></li>
</ul>
</div>
</div>

        
<div class='col'>
    <div class='icons'>
        
       <i class="fab fa-facebook-f fa-lg i fa-fw"></i>
        <i class="fab fa-twitter fa-lg i fa-fw"></i>
        <i class="fab fa-instagram fa-lg i fa-fw "></i>
        <i class="fab fa-google-play fa-lg i fa-fw"></i>
        <i class="fab fa-apple fa-lg i fa-fw"></i>
        </div>    
      </div>
        

        <div class='clearfix'>  <div>
          <div class='copyright'>copyright &copy; 2021 all right reserved <div>
            
            
            
            
            
            
            
            

</div>
       </div> 
       </footer>
</html>
  