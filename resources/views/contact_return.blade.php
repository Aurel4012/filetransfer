<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <div  style="background-color: black;text-align: center;"><span style="color: white;font-size: 40px;">ZONE</span><span style="color: red;font-size: 40px;"> RED!</span></div><br> 
    <h2>Bonjour le fichier que vous avez partagé à été téléchargé</h2>
    <ul>
      <li><strong>Envoyé à</strong> : {{ $contact->mail_to }}</li>
      <li><strong>De la part de</strong> : {{ $contact->mail_from }}</li>
      <li><strong>Descriptif</strong> : {{ $contact->file_description }}</li>
      <li><strong><a href="{{route('download', ['id'=>$contact->id_upload])}}">Lien de téléchargement</a></strong></li>
    </ul>
  </body>
</html>