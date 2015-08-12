<h1>About This Site</h1>

<p>There are over {{{ $number_of_cats }}} cats on this page.</p>

<hr>

<h2>Detecting App Env</h2>

@if (App::environment('local'))

  The environment is local


@elseif (App::environment('local', 'staging'))

 The environment is either local OR staging...

@endif