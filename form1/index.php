<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dengan Method $_GET dan $_POST</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <section class="py-5">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6 mx-auto">

                    <div class="card rounded-0">

                        <div class="card-body">

                            <div class="mb-3 text-center">
                                <img src="https://sacode.web.id/assets/img/logo/logo-sacode.png" alt="SaCode" width="100">
                                <h5 class="fw-normal">Silahkan Login!</h4>
                            </div>
                            <!-- login -->

                            <form action="post.php" method="post">

                                <div class="mb-3">
                                    <label for="username" class="form-label">Nama</label>
                                    <input 
                                        type="text" 
                                        name="username" 
                                        id="username" 
                                        placeholder="nama"
                                        required
                                        class="form-control rounded-3">
                                </div>
                                <!-- user input -->

                                <div class="mb-3">
                                    <label for="password" class="form-label">Kata sandi</label>
                                    <input 
                                        type="password"
                                        name="password"
                                        id="username" 
                                        placeholder="kata sandi"
                                        required
                                        class="form-control rounded-3">
                                </div>
                                <!-- password input -->

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Ingat Saya!
                                    </label>
                                </div>
                                <!-- check -->

                                <button 
                                    type="submit" 
                                    name="submit" 
                                    value="send"
                                    class="btn btn-primary rounded-0 w-100 rounded-3">
                                    Submit Now!
                                </button>
                                <!-- button sumbit -->

                                <div class="mt-3">
                                    <p>
                                        <span>&copy; 2023</span>
                                    </p>
                                </div>
                                <!-- copyright -->

                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>