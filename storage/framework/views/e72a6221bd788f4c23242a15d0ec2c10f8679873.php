<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="<?php echo e(asset ('css/log.css')); ?>"> -->
    <link rel="stylesheet" href="<?php echo e(asset ('css/login_v2.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset ('font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/Logo_effiServices.png')); ?>" />
</head>

<body class="login-page">
    <!-- <div class="container shadow d-none">
        <form id="contact" method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div style="display: flex; justify-content: center; margin-bottom: 10px;">
                <img src="<?php echo e(asset('img/logo_rita.jpeg')); ?>" alt="logo" style="width: 50%">
            </div>
            <h3 style="text-align: center; color: red">Bienvenu dans NKUL VBG!</h3>
            <h4 style="text-align: center;">Veuillez renseignez vos informations</h4>

            <fieldset>
                <input type="email" class="form-control" name="email" required />
            </fieldset>

            <fieldset>
                <input type="password" class="form-control" name="password" />
            </fieldset>

            <fieldset>
                <button name="submit" type="submit" id="contact-submit">Se connecter</button>
            </fieldset>
        </form>
    </div> -->

    <div class="session">
        <div class="left">
            <img src="<?php echo e(asset('img/logo_rita.jpeg')); ?>" alt="logo" class="logo">
        </div>
        <form id="contact" method="POST" class="py-5 position-relative" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <p><img src="<?php echo e(asset('img/logo_rita.jpeg')); ?>" alt="logo" class="logo-2"></p>
            <div class="w-100">
                <h4><span>NKUL-VBG</span></h4>
                <p class="w-100">Welcome back Admin! Log in to your account now.</p>
                <div class="floating-label">
                    <input placeholder="Email" required type="email" name="email" id="email" autocomplete="on">
                    <label for="email">Email:</label>
                    <div class="icon">
                        <svg enable-background="new 0 0 100 100" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <style type="text/css">
                                .st0 {
                                    fill: none;
                                }
                            </style>
                            <g transform="translate(0 -952.36)">
                                <path d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z" />
                            </g>
                            <rect class="st0" width="100" height="100" />
                        </svg>

                    </div>
                </div>
                <div class="floating-label">
                    <input placeholder="Password" required type="password" name="password" id="password" autocomplete="off">
                    <label for="password">Password:</label>
                    <div class="icon">

                        <svg enable-background="new 0 0 24 24" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <style type="text/css">
                                .st0 {
                                    fill: none;
                                }

                                .st1 {
                                    fill: #010101;
                                }
                            </style>
                            <rect class="st0" width="24" height="24" />
                            <path class="st1" d="M19,21H5V9h14V21z M6,20h12V10H6V20z" />
                            <path class="st1" d="M16.5,10h-1V7c0-1.9-1.6-3.5-3.5-3.5S8.5,5.1,8.5,7v3h-1V7c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5V10z" />
                            <path class="st1" d="m12 16.5c-0.8 0-1.5-0.7-1.5-1.5s0.7-1.5 1.5-1.5 1.5 0.7 1.5 1.5-0.7 1.5-1.5 1.5zm0-2c-0.3 0-0.5 0.2-0.5 0.5s0.2 0.5 0.5 0.5 0.5-0.2 0.5-0.5-0.2-0.5-0.5-0.5z" />
                        </svg>
                    </div>

                </div>
                
            </div>
            <button type="submit" id="contact-submit">Log in</button>
        </form>
    </div>

</body>

</html><?php /**PATH /Users/kamgafrank/Documents/projects/NKUL_VGB/resources/views/login.blade.php ENDPATH**/ ?>