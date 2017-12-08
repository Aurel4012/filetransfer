<!DOCTYPE html>
<html>
        <head>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="css/style.css">

            <title>SUCESS</title>
            <meta charset="utf-8">
        </head>

    <body>

        <header class="container-fluid red"> 
        
        <div class="col-12 col-sm-12 col-md-12 d-flex justify-content-center"><img class="img-fluid px-2" alt="Responsive image" src="img/5.jpg"><img class="img-fluid px-2" alt="Responsive image" src="img/6.jpg"><img class="img-fluid px-2" alt="Responsive image" src="img/7.jpg"><img class="img-fluid px-2" alt="Responsive image" src="img/8.jpg"><img class="img-fluid px-2" alt="Responsive image" src="img/9.jpg"><img class="img-fluid px-2" alt="Responsive image" src="img/10.jpg"><img class="px-2" alt="Responsive image" src="img/13.jpg"></div>
        </header>

      <section class="container">
          
                <div class="row">
                <div class="col-12 col-sm-12 col-md-12 d-flex">
                <p><span id="red1">ZONE</span><span id="red2"> RED!</span></p>   
                </div>
                </div>
                <div class="row">
                <div class="col-10 col-sm-10 col-md-6 d-flex justify-content-center bg-light border border-primary rounded">

        

          <fieldset>

                
                <!-- File Button --> 
                <div class="form-group">
                     <div class="col-md-12 text-center">

                      <i class="fa fa-check fa-4x" aria-hidden="true"></i>



                                <h4>Vous avez terminé !</h4>
                                <p class="text-dark">L'e‐mail de téléchargement a
                                été envoyé, votre transfert
                                sera disponible pendant
                                7 jours</p><br>
                                <h4>Lien de téléchargement</h4>
                                <h6>{{ route('download', ['id'=>$id])}}</h6>
                  </div>
                </div>


            <!-- Button -->
              <div class="form-group">
              <div class="col-md-12 text-center">
                <a href="{{ route('home')}}"><button id="singlebutton" name="singlebutton" class="btn btn-primary">Un Autre ?</button></a>
              </div>
              </div>

          </fieldset>
        

                </div>
                </div>  
           
      </section>
        <article class="container">
            
            
        </article>

    </body>
</html>