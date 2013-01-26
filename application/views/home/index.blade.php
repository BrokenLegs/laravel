@layout('master')
@section('content')
	<div class="offset1 span4 leftcol">
		<div class="openinghours">
			<br>
			<h1>Öppettider</h1>
			<br>
			<p>
				<strong>
					Mån - Fre: 07:00 - 19:00<br><br>
					Lör        10:00 - 18:00<br><br>
					Sön		   12:00 - 16:00
				</strong>
			</p>
		</div>
		<div>
			<h1>Adress</h1>
			<p>
		    <strong>Odinsplatsen 5<br> 
		    411 02 GÖTEBORG<br><br>
		    Kontakt<br>
		    Telefon: 031-15 38 11
		    tien@tienärmegafuckingawesome.com
		    </strong
		    </p>

		</div>
	</div>
	<br>
	
	<div class="span4 rightcol">
		<h1>Veckans meny</h1>
		@include('partial.weeklymenu')
	{{HTML::link_to_route('new_home', 'Lägg till');}}

	</div>
@endsection 

