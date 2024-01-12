@extends ('web.mainFrame')<!--namespace.bladename -->

@section ('content')



<!--map-->
<div class='row'>
<div class='col-lg-8 mb-4 map1'>
	<iframe style='width: 100%; height: 400px; border: 0;' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6917.229936309533!2d31.295679389672863!3d29.9041931189567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145837d53acb92e9%3A0x7d9dc7aab15557f0!2z2YXYudix2LYg2KfZhNmC2KfZh9ix2Ycg2KfZhNiv2YjZhNmKINmE2YTZg9iq2KfYqA!5e0!3m2!1sen!2seg!4v1610390232719!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!--contact details column-->
<div class='col-lg-4 mb-4 map2'>
	<h3>Contact details</h3>
	<p>
		cairo books exhibition
		<br/>
	</p>
	<br/>
	<p>
		<abbr title='phone'>P</abbr> : (123) 456-7890
	</p>
	<p>
		<abbr title='email'>E</abbr> : 
		<a href='mailto:name@example,com'>mailto:name@example,com</a>
	</p>
	<p>
		<abbr title='Hours'>H</abbr> : monday-friday 9:00 AM to 5:00 PM
	
	</p>
</div>
</div>



<!--contact form-->
<div class='row'>
<div class='col-lg-8 mb-4 map3'>
	<h3>send us a messege</h3>
	<form name='sentmessege' id='contactform' novalidate>
	
<div class='control group-form-group'>
<div class='controls'>
		<label for='name'>full name:</label>
	<input type='text' class='form-control' id='name'>
	<p>help-block</p>
	<button type ='button' class ='btn btn-md btn-outline-warning'>send</button>

</div>
</div>
</div>
                                                     </div>




</body>
@endsection

