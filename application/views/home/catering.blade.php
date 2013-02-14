@layout('master')

@section('content')
{{HTML::link('connect/session/facebook', 'Login with facebook', array('class' => 'btn'))}}

<?php phpinfo()?>
@endsection