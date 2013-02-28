<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Du måste logga in</h3>
	</div>
	<div class="modal-body">
		<p>För att kommentera eller betygsätta måste du först logga in genom din facebook</p>
		<p>Logga in {{HTML::link('connect/session/facebook', 'här', array(''))}}</p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Stäng</button>

	</div>
</div>