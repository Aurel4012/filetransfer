<!DOCTYPE html>
<html>
        <head>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
             <link rel="stylesheet" href="css/font-awesome.css">
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
                  <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="col-10 col-sm-10 col-md-12 d-flex justify-content-center">Partage ton fichier avec tes amis</legend>

<!-- File Button --> 
<div class="form-group col-12">
     <div class="col-md-12">
<div class="col-md-6"><i class="fa fa-check-square-o fa-6" aria-hidden="true"></i></i></div>
                <h4>Ajoute ton fichier</h4>
  <div class="col-md-12">
   <input id="filebutton" name="filebutton" class="input-file p-2" type="file">
  </div>
</div>




                </div>
                </div>  
            <h4 class="text-light bg-dark">{{ route('download') }}</h4>
        </section>
        <article class="container">
         
            
        </article>

    </body>
</html>