<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kindle : Home</title>
    <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/images/favicon.ico') }}"/>
	
	@livewireStyles

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <link id="switcher" href="{{ asset('assets/css/theme-color/default-theme.css') }}" rel="stylesheet">

    <link href="{{ asset('style.css') }}" rel="stylesheet">


	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 

 
 
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" defer></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js" defer></script>
    <![endif]-->
  </head>

  <body>
	@livewire('kindle.header')
	@livewire('kindle.hero')
	<main role="main">
		@livewire('kindle.counter')
		@livewire('kindle.layanan')
		@livewire('kindle.author')
		@livewire('kindle.message')
	</main>
	@livewire('kindle.footer')

	
    @livewireScripts
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" defer></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('assets/js/counter.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('assets/js/app.js') }}" defer></script>
   
 
	
	<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}" defer></script>
	
  </body>
</html>