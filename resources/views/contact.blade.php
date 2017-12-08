<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Un fichier à été partagé</h2>
    <p>Réception d'un fichier' :</p>
    <ul>
      <li><strong>Envoyé à</strong> : {{ $contact->mail_to }}</li>
      <li><strong>De la part de</strong> : {{ $contact->mail_from }}</li>
      <li><strong>Descriptif</strong> : {{ $contact->file_description }}</li>
      <li><strong><a href="{{route('download', ['id'=>$contact->id_upload])}}">Lien de téléchargement</a></strong></li>
    </ul>
  </body>
</html>