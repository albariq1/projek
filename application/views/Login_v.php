<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">

    <!-- my css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Style.css') ?>">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Toko Albariq</title>
</head>

<body>
    <section class="background">
        <div class="section">
            <div class="row">
                <div class="col toko text-center">
                    <h1>TOKO ALBARIQ</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 background-review text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h1 id="login">
                                LOGIN
                            </h1><br>
                            <form action="<?php echo base_url('dashboard') ?>" style="max-width:500px;margin:auto" method="POST">
                                <div class="input-container">
                                    <i class="fa fa-user icon"></i>
                                    <input class="input-field" type="text" placeholder="Username" name="password">
                                </div>
                                <div class="input-container">
                                    <i class="fa fa-key icon"></i>
                                    <input class="input-field" type="password" placeholder="Password" name="password">
                                </div>

                                <p>
                                    <button type="submit" class="btn btn-primary " style="width: 200px;">Submit</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>