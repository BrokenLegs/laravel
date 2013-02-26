
<div class="user">
<center>
	<p class="hidden-phone">Du är inloggad som</p>
	<p>
		{{HTML::link($user_data['info']['urls']['facebook'], $user_data['info']['name'], array('target="_blank" class="fblink"'));}}
	</p>
	<p class="hidden-phone">
		{{HTML::image($user_data['info']['image'] , '', array('class'=>'fbimg'));}}
	</p>
	{{HTML::link('home/logout', 'Logga ut');}}
	</center>
</div>