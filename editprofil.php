<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="miin.css"> -->
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
            
            <span class="text-primary">EduCore</span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
            </div>
            <a href="inscription.html" class="btn btn-primary px-4">Login&Registre</a>

        </div>
    </nav>

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Profile</span></p>
                <h1 class="mb-4">Profile Parameter</h1>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder=" Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="Last Name" placeholder="Last Name" required="required" data-validation-required-message="Please enter your Last Name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Email" required="required" data-validation-required-message="Please enter your Email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control" id="Password" placeholder="Password" required="required" data-validation-required-message="Please enter your Password" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Confirmer</button>
                            </div>
                        </form>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <!-- Contact End -->
</body>
</html>