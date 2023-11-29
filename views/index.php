
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng nhập</title>
    <link rel="icon" href="/views/images/logotitle.png">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />



    <link rel="stylesheet" href="/views/css/login.css" />
</head>

<body>
    <div class="section">
        <div id="ball1" class="d-none d-xl-block bg-ball">

        </div>
        <div class="container">
            <div class="row full-height justify-content-start">
                <div class="col-12 col-md-12 col-xl-5 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class=" mb-0 pb-3">
                            <span>Đăng nhập </span><span>Đăng ký</span>
                        </h6>
                        <input class="sawpbt checkbox" onclick="moveball()" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <form action="../views/login.php" method="post">
                                            <h4 class="mb-4 pb-3">Đăng nhập</h4>
                                            <div class="form-group">
                                                <input id="email" name="email" type="email" class="form-style" placeholder="Email" />
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input id="pass" name="pass" type="password" class="form-style" placeholder="Password" />
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <!-- <a href="#" class="btn mt-4">Đăng nhập</a> -->

                                            <input class="btn mt-4" type="submit" value="Đăng Nhập" name="dangnhap">
                                            </form>
                                            <p class="mb-0 mt-4 text-center">
                                                <a href="#" class="link">quên mật khẩu?</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-3 pb-3">Đăng ký</h4>
                                            <form action="../views/signup.php" method="post">
                                            <div class="form-group">
                                                <input type="text" class="form-style" placeholder="Name" name="name" />
                                                <i class="input-icon uil uil-user"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="tel" class="form-style" placeholder="Phone Number" name="phonenumber" />
                                                <i class="input-icon uil uil-phone"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="email" class="form-style" placeholder="Email" name="email" />
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" class="form-style" placeholder="Password" name="pass" />
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <input class="btn mt-4" type="submit" value="Đăng ký" name="dangki">
                                            <!-- <a href="" class="btn mt-4">Đăng ký</a> -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" banner1-area col-12 col-xl-6 d-none d-xl-block " style=" ">
                    <div id="banner1" class="banner1 col-12 col-lg-12 " style="">

                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>

    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-0 d-none d-lg-block" style="color: white;">
                <span>Kết nối với chúng tôi qua:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="" style="color: white;">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i> Book is life
                        </h6>
                        <p>
                            mở rộng tiềm thức chỉ bằng cách đọc một cuốn sách.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset"></a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> Đà nẵng </p>
                        <p>
                            <i class="fas fa-envelope me-3"></i> mynt.22it@vku.udn.vn
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +84 64 16 8838</p>
                        <p><i class="fas fa-print me-3"></i> </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 form Ninh Nam
            <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script>
        let ball = document.getElementById('ball1');
        let banner1 = document.getElementById('banner1');
        var check = true;

       

        function moveball() {

            ball.classList.toggle('off');
            if (check) {


                ball.classList.add("move-ball-1");
                ball.classList.remove("move-ball-2");
                banner1.classList.add('banner1-swap1');
                banner1.classList.remove('banner1-swap2');
                check = !check;

            } else if (!check) {
                ball.classList.add("move-ball-2");
                ball.classList.remove("move-ball-1");

                banner1.classList.add('banner1-swap2');
                banner1.classList.remove('banner1-swap1');
                check = !check;
            }

        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>