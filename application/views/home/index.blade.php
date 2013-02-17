@layout('master')
@section('content')

	<div class="offset1 span4 leftcol">
		<div class="openinghours">
			<br>
			<h1>Öppettider</h1>
			<br>
			<p>
				<strong>
					Mån - Fre: 07:00 - 15:00
				</strong>
			</p>
		</div>
		<div>
			<h1>Adress</h1>
			<p>
		    <strong>Odinsplatsen 5<br> 
		    411 02 GÖTEBORG<br><br>
		    Kontakt<br>
		    Telefon: 031-15 38 11<br>
		    info@greencircle.com
		    </strong>
		    </p>

		</div>
	</div>
	<br>
	
	<div class="span4 rightcol">
		<h1>Veckans meny</h1>
		@include('partial.weeklymenuindex')
		{{HTML::link_to_route('new_home', 'Lägg till');}}
	</div>
	<div class="offset1 span8 maps">
		<iframe width="98%" height="350" frameborder="0" scrolling="no" marginheight="2" marginwidth="2" src="https://maps.google.se/maps?hl=sv&amp;q=Odinsplatsen+5,+411+02+G%C3%96TEBORG&amp;ie=UTF8&amp;hq=&amp;hnear=Odinsplatsen+5,+411+02+G%C3%B6teborg&amp;gl=se&amp;ll=57.709426,11.985551&amp;spn=0.006431,0.021136&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
	</div>
@endsection 

