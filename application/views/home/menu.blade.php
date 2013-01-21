@layout('master')
@section('content')
    <ul class="nav nav-tabs" id="myTab">
    	<li class="active bigbtn"><a href="#veckans">Veckans rätter</a></li>
    	<li class="bigbtn"><a href="#menu">Vår meny</a></li>
        <li class="bigbtn"><a href="#lunch">Frukost/Lunch</a></li>
    </ul> 
    <div class="tab-content">
    	<div class="offset1 tab-pane active" id="veckans">
    		<h1>Veckans meny</h1>
		<br>
		<p>
			<strong>
				Måndag: Pasta Carbonara<br><br>
				Tisdag: Spagetti Bolognese<br><br>
				Onsdag:	Plankstek<br><br>
				Torsdag: Pizza<br><br>
				Fredag: Pyttipanna<br><br>
				Lördag: Stekt kyckling<br><br>
				Söndag: Piroger
			</strong>
		</p>
    	</div>
    	<div class="tab-pane" id="menu">
    		<div class="span4">
    			<h3>Baguetter</h3>
    			<ul><strong>
    					<li>Fetaost & Oliver <span class="price">35:-</span></li>
    					<li>Kycklingröra<span class="price">35:-</span></li>
    					<li>Köttbullar & Potatissallad<span class="price">35:-</span></li>
    					<li>Köttbullar&Rödbetssallad<span class="price">35:-</span></li>
    					<li>Salami&Brieost<span class="price">35:-</span></li>
    					<li>Ost&Skinka<span class="price">30:-</span></li>
    					<li>Räkor<span class="price">45:-</span></li>
    					<li>Västkuströra<span class="price">35:-</span></li>
    					<li>Tonfiskröra<span class="price">35:-</span></li>
    					<li>Baguette inkl. Dricka<span class="price">39:-</span></li>
    				</strong>
    			</ul>

    			<h3>Dryck</h3>
    			<ul>
    				<strong>
    					<li>Läsk<span class="price">12:-</span></li>
    					<li>Juice<span class="price">15:-</span></li>
    					<li>Pucko<span class="price">35:-</span></li>
    					<li>Kaffe & Te Latte<span class="price">30:-</span></li>
    					<li>Capuccino<span class="price">30:-</span></li>
    					<li>Espresso<span class="price">20:-</span></li>
    					<li>Dubbel Espresso<span class="price">20:-</span></li>
    					<li>Te<span class="price">20:-</span></li>
    				</strong>
    			</ul>
    			<h3>Beställning Smörgåstårta</h3>
    			<ul>
    				<strong>
    					<li>Bit<span class="price">fr. 49:-</span></li>
    					<li>Landgångar<span class="price">75:-</span></li>
    					<li>Gourmettallrik<span class="price">99:-</span></li>
    					<li>Tårta<span class="price">fr.168:-</span></li>
    				</strong>
    			</ul>
    		</div>
    		<div class="offset1 span4">
    			<h3>Varmrätter</h3>
    				<ul>
	    				
	    					<li><strong>Veckans rätter<span class="price">75:-</strong></span><br>
	    						Veckans rätt inkl dryck, olika varje vecka
	    					</li>
	    					<li><strong>Nudelsoppa<span class="price">59:-</strong></span><br>
	    						Räkor, Chikuwa, Böngroddar, Salladkål
	    					</li>
	    					<li><strong>Grillad Smörgås<span class="price">59:-</strong></span><br>
	    						Välj mellan:<br>
	    						Ost & Skinka / Kyckling & Mozzarella
	    					</li>
	    					<li><strong>Wraps Taco<span class="price">69:-</strong></span><br>
	    						Tortilla, Köttfärs, Ost, Sås, Guacamole,
								Grönsaker
	    					</li>
	    					<li><strong>Wraps Kyckling<span class="price">69:-</strong></span><br>
	    						Tortilla, Kyckling, Valnötter, Sås, Grönsaker
	    					</li>
	    					<h4>Dricka ingår i alla rätter</h4>
    			</ul>
    			
    			<h3>Salladsbar</h3>
    			<h4>Mixa din egen sallad och välj mellan:</h4>
    			<ul>
    				<li><strong>Kyckling<span class="price">65:-</span></strong></li>
    				<li><strong>Tonfisk<span class="price">65:-</span></strong></li>
    				<li><strong>Räkor<span class="price">69:-</span></strong></li>
    				<li><strong>Kräftstjärtar<span class="price">69:-</span></strong></li>
    				<li><strong>Keso<span class="price">69:-</span></strong></li>
    				<li><strong>Mix</strong>(3 valfria)<strong><span class="price">69:-</span></strong></li>
    				<li><strong>Tacos<span class="price">69:-</span></strong></li>
    				<li><strong>Nachos<span class="price">69:-</span></strong></li>
    			</ul>
    			<h3>Övrigt</h3>
    			<ul></ul>
    		</div>
    	</div>
        <div class="offset1 tab-pane active" id="lunch">
        </div>
    </div>
    <script> 
        $('#myTab a').click(function (e) {
		    e.preventDefault();
		    $(this).tab('show');
    	});
    </script>
@endsection