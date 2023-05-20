<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{asset ('css/log.css')}}">
    <link rel="stylesheet" href="{{asset ('font-awesome/css/font-awesome.min.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('images/Logo_effiServices.png') }}" />
</head>

<body>
    <div class="container shadow">
        <form id="contact" method="POST" action="{{route('login')}}">
            @csrf
            <div style="display: flex; justify-content: center; margin-bottom: 10px;">
                <img src="{{asset('img/logo_rita.jpeg')}}" alt="logo" style="width: 50%">
            </div>
            <h3 style="text-align: center; color: red">Bienvenu dans NKUL VBG!</h3>
            <h4 style="text-align: center;">Veuillez renseignez vos informations</h4>

            <fieldset>
                <input type="email" class="form-control" name="email" required />
            </fieldset>

            <fieldset>
                <input type="password" class="form-control" name="password"/>
            </fieldset>

            <fieldset>
                <button name="submit" type="submit" id="contact-submit">Se connecter</button>
            </fieldset>

        </form>
    </div>
</body>

</html>
