<!DOCTYPE html>
<html>
        <head>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
             <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="css/style.css">

            <title>filetransfert</title>
            <meta charset="utf-8">
        </head>
    <body>
        <header class="container-fluid red"> 
        
        <div class="col-12 col-sm-12 col-md-12 d-flex justify-content-center"><img class="img-fluid px-2" alt="Responsive image" src="img/5.jpg"><img class="img-fluid px-2" alt="Responsive image" src="img/6.jpg"><img class="img-fluid px-2" alt="Responsive image" src="img/7.jpg"><img class="img-fluid px-2" alt="Responsive image" src="img/8.jpg"><img class="img-fluid px-2" alt="Responsive image" src="img/9.jpg"><img class="img-fluid px-2" alt="Responsive image" src="img/10.jpg"><img class="px-2" alt="Responsive image" src="img/13.jpg"></div>
        </header>
        <section class="container">
          
                <div class="row">
                <div class="col-12 col-sm-12 col-md-12 d-flex">
                <p>ZONE<span id="red2"> RED </span>!</p>  
                </div>
            </div>
              <div class="row">
                <div class="col-10 col-sm-10 col-md-6 justify-content-center bg-light border border-primary rounded w-75 p-3">
 	{!! Form::open(['route' => 'upload', 'files' => true]) !!}
 	<legend class="col-10 col-sm-10 col-md-12 d-flex justify-content-center">Partage ton fichier avec tes amis</legend>
	{!! Form::token();!!}
   	{!!Form::email('mail_to', '',['placeholder'=>'Envoyé à', 'class' => 'form-control input-md'])!!}<br>
    <!-- {!! $errors !!} -->
   	{!!Form::email('mail_from', '',['placeholder'=>'Ton mail', 'class' => 'form-control input-md'])!!}<br>
   	{!!Form::text('file_description', '',['placeholder'=>'Descriptif (facultatif)', 'class' => 'form-control input-md'])!!}<br>
    {!!Form::file('file_url', $attributes = array(),['class' => 'py-4'])!!}<br>
    {!!Form::submit('Envoyer!',['class' => 'btn btn-primary px-2'])!!}
	{!! Form::close() !!}

                </div>
                </div>  
        </section>
        <article class="container">
         
            
        </article>

    </body>
</html>