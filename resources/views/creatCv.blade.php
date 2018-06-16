<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<style>

</style>
<body>
<form action="/creatCv/store" method="get">
<label>Nom </label>
<input type="text" required="" placeholder="nom" name="Nom">

<br>
<label>Date de Naissance</label>
<input type="date" name="Date_nai">
<br>
<label>lieu de naissance</label>
<input type="text" required palceholder="lieu de naissance" name="Lieu_nai">
    <br>
    <label>Nationnalité</label>
    <input type="text" required placeholder="Nationalité" name="Nationalite">
    <br>
    <label>Adresse</label>
    <input type="text" required placeholder="Adresse" name="Adresse">
    <br>
    <label>Télephone</label>
    <input type="number" required placeholder="Télephone" name="Telephone">
    <br>
    <label>Adresse E-mail</label>
    <input type="email" required placeholder="Adresse E-mail" name="Email">
    <br>
    <input type="submit" value="Envoyer">
</form>
</body>
<html>