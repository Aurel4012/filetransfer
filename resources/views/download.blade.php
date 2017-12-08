<!DOCTYPE html>
<html>
        <head>
            <link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{url('/css/font-awesome.min.css')}}">
            <link rel="stylesheet" type="text/css" href="{{url('/css/style.css')}}">

            <title>DOWNLOAD</title>
            <meta charset="utf-8">
        </head>

    <body>
        
        <header class="container-fluid red"> 
        
        <div class="col-12 col-sm-12 col-md-12 d-flex justify-content-center"><img class="img-fluid px-2" alt="Responsive image" src="{{url('img/5.jpg')}}"><img class="img-fluid px-2" alt="Responsive image" src="{{url('img/6.jpg')}}"><img class="img-fluid px-2" alt="Responsive image" src="{{url('img/7.jpg')}}"><img class="img-fluid px-2" alt="Responsive image" src="{{url('img/8.jpg')}}"><img class="img-fluid px-2" alt="Responsive image" src="{{url('img/9.jpg')}}"><img class="img-fluid px-2" alt="Responsive image" src="{{url('img/10.jpg')}}"><img class="px-2" alt="Responsive image" src="{{url('img/13.jpg')}}"></div>
        </header>

      <section class="container">
          
                <div class="row">
                <div class="col-12 col-sm-12 col-md-12 d-flex">
                <p id="ZONE">ZONE<span id="red2"> RED </span>!</p>  
                </div>
                </div>
                <div class="row">
                <div class="col-10 col-sm-10 col-md-6 d-flex justify-content-center bg-light border border-primary rounded">

        

          <fieldset>

                
                <!-- File Button --> 
                <div class="form-group">
                     <div class="col-md-12 text-center">
                      <br>
                      <i class="fa fa-cloud-download fa-4x" aria-hidden="true"></i>


                       
                        
                             
                 </div>
                </div>


            <!-- Button -->
              <div class="form-group">
              <div class="col-md-12 text-center">
                <h6>Télécharger le fichier:</h6>
                <h6>{{ $file->real_name }}</h6>
                <a href="{{route('forcedl',['id'=>$file->id_upload])}}">
                  <button id="telecharger" data-lien="{{route('thanks')}}" name="singlebutton" action="" class="btn btn-primary">Telecharger</button>
                </a>
              </div>
              </div>

          </fieldset>
        

                </div>
                </div>  
      </section>
        <article class="container">
            
            
        </article>
    <script type="text/javascript" src="{{url('js/jquery-3.2.1.slim.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/clickthanks.js')}}"></script>
    </body>
</html>