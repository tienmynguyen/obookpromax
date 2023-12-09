
<?php
session_start();

 require_once $_SERVER['DOCUMENT_ROOT'] . '/controller/database_functions.php';
     $conn = db_connect();

if(isset($_POST['dangtai'])){
   
   
    $ten = $_POST['ten'];
     $tacgia = $_POST['tacgia'];
      $mota = $_POST['mota'];
    $dodai = $_POST['dodai'];
        $theloai = "";
        if (isset($_POST['phieuluu'])) {
            $theloai = $theloai .' '.$_POST['phieuluu'];
        }
        if (isset($_POST['langman'])) {
            $theloai = $theloai .' '.$_POST['langman'];
        }
        if (isset($_POST['doithuong'])) {
            $theloai = $theloai .' '.$_POST['doithuong'];
        }
        if (isset($_POST['tieuthuyet'])) {
            $theloai = $theloai .' '.$_POST['tieuthuyet'];
        }
        if (isset($_POST['khoahoc'])) {
            $theloai = $theloai .' '.$_POST['khoahoc'];
        }
        if (isset($_POST['treem'])) {
            $theloai = $theloai .' '.$_POST['treem'];
        }
        if (isset($_POST['nghethuat'])) {
            $theloai = $theloai .' '.$_POST['nghethuat'];
        }
    $filesach = "";
    $trangbia = "";
         $target_dir = "../views/images/chuakiemduyet/";  
        if(isset($_FILES['trangbia'])){
             $target_file = $target_dir . basename($_FILES["trangbia"]["name"]); 
        
        
          $status_upload = move_uploaded_file($_FILES["trangbia"]["tmp_name"], $target_file);
           if ($status_upload) { // nếu upload file không có lỗi 
            $trangbia = basename($_FILES["trangbia"]["name"]);
        }
        }
        if(isset($_FILES['filesach'])){
             $target_file2 = $target_dir .  basename($_FILES["filesach"]["name"]);
       
            $status_upload = move_uploaded_file($_FILES["filesach"]["tmp_name"], $target_file2);
            if ($status_upload) { // nếu upload file không có lỗi 
            $filesach = basename($_FILES["filesach"]["name"]);
        }
        }

 


    sachcho($conn,$_SESSION['id'],$ten,$tacgia,$dodai,$mota,$theloai,$trangbia,$filesach);

    unset($_POST['dangtai']);
       

    }
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng tải sách</title>
       <link rel="icon" href="/views/images/logotitle.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/views/css/section.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="/views/css/Type2.css">
    <link rel="stylesheet" href="/views/css/style.css">
    <link rel="stylesheet" href="/views/css/profile.css">
    <link rel="stylesheet" href="/views/css/dangtai.css">
  
</head>

<body style="color: white; overflow-x: hidden;">
    



<div>
            <div  class=" row justify-content-center">
                <div class="">
                    <a href="/profile">
                        <div style="position: relative;">
                        <button id="btn2" type="button" class="btn btn-dark" style="position: absolute;top:1rem; right:1rem;">Đóng</button>
                    </div>
                    </a>

                </div>
                
              
                    <div class="col-11 p-5">

                    <center style="font-size: 1rem; font-weight: bold;">
                        TẢI SÁCH LÊN
                    </center>

                  <form  method="post" enctype="multipart/form-data">
                      <div class="row mt-2">
                        <div class="input-group">
                            <input type="text" class="form-control" name="ten" placeholder="Tên sách" aria-label="Username">
                            <span class="input-group-text">và</span>
                            <input type="text" class="form-control" name="tacgia" placeholder="Bút danh" aria-label="Server">
                        </div>
                    </div>
                        <input type="text" class="form-control mt-2" name="dodai" placeholder="Độ dài" aria-label="Server">
                    <div class="row mt-3">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text" id="inputGroup-sizing-lg">Mô tả</span>
                            <input type="text" name="mota" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                            <label for="">Thể loại</label>
                            <br>
                            <div style="display: flex;" class="gap-5">
                                <div>
                                <input type="checkbox" id="vehicle1" name="phieuluu" value="phieuluu">
                            <label for="phieuluu"> Phiêu lưu</label><br>
                            <input type="checkbox" id="vehicle2" name="langman" value="langman">
                            <label for="langman"> Lãng mạn</label><br>
                            
                            </div>
                            <div>
                                <input type="checkbox" id="vehicle3" name="doithuong" value="doithuong">
                            <label for="doithuong"> Đời thường</label><br>
                                <input type="checkbox" id="vehicle4" name="tieuthuyet" value="tieuthuyet">
                            <label for="tieuthuyet"> Tiểu thuyết</label><br>
                            </div>
                            <div>
                                <input type="checkbox" id="vehicle5" name="khoahoc" value="khoahoc">
                            <label for="khoahoc">Khoa học</label><br>
                            <input type="checkbox" id="vehicle6" name="treem" value="treem">
                            <label for="treem">Trẻ em</label><br>
                            
                            </div>
                            <div>
                                <input type="checkbox" id="vehicle7" name="nghethuat" value="nghethuat">
                            <label for="nghethuat">Nghệ thuật</label><br>
                            </div>
                            </div>
                            </div>
                         <div class="d-flex">
                            
                        <div class="col-6 mt-3">
                            <div class="container">
                                <p >Trang bìa: </p>
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" name="trangbia" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload" style="background-image: url(./images/arrow.png);"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview" style="background-image: url(./images/TRANGBIA.png);" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-6 mt-3">
                            <p>File sách:</p>
                            <input type="file" name="filesach" id="" accept=".pdf">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <input id="btn22" type="submit" name="dangtai" class="btn btn-dark" value="Tải sách lên"></input>

                    </div>
                  </form>
                   

                   




                </div>
               
            </div>
           
        
           
            </div>

       



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
        <script>
            const cursor = document.querySelector(".cursor");
            let b = document.getElementById('b');
            let o = document.getElementById('o');
            let o2 = document.getElementById('o2');
            let k = document.getElementById('k');
            let l = document.getElementById('light');
            let l2 = document.getElementById('light2');
            let v = document.getElementById('video1');
            let t = document.getElementById('title2');
            let i = document.getElementById('img1');
            let chartarea = document.getElementById('chartarea');
            var timeout;
            let main2 = document.getElementById('main2');

            let totop = document.getElementById('totop');

            const slide = document.querySelectorAll('.cardslider');
            const slide2 = document.querySelectorAll('.card-link');
            const box1 = document.querySelectorAll('.box1');
            const box2 = document.querySelectorAll('.box2');
            const title5 = document.querySelectorAll('.title5');
            const line2 = document.querySelectorAll('.line2');
            const trans1 = document.querySelectorAll('.trans1');

            function on() {

                l.classList.toggle("off");
                l2.classList.toggle("off");


            }


            window.addEventListener('scroll', function()

                {

                    var scroll_y = this.scrollY;

                    if (scroll_y > 2000) {
                        totop.style.display = 'block';
                    } else {
                        totop.style.display = 'none';
                    }
                    //transition
                    const triggerbottom = 9000;

                    slide.forEach((cardslider) => {
                        const boxtop = cardslider.getBoundingClientRect().top;

                        if (boxtop < triggerbottom) {
                            cardslider.classList.add('show');
                        } else {
                            cardslider.classList.remove('show');
                        }
                    })

                    slide2.forEach((cardslider) => {
                        const boxtop = cardslider.getBoundingClientRect().top;

                        if (boxtop < triggerbottom) {
                            cardslider.classList.add('show');
                        } else {
                            cardslider.classList.remove('show');
                        }
                    })
                    box1.forEach((cardslider) => {
                        const boxtop = cardslider.getBoundingClientRect().top;

                        if (boxtop < triggerbottom) {
                            cardslider.classList.add('show');
                        } else {
                            cardslider.classList.remove('show');
                        }
                    })
                    box2.forEach((cardslider) => {
                        const boxtop = cardslider.getBoundingClientRect().top;

                        if (boxtop < triggerbottom) {
                            cardslider.classList.add('show');
                        } else {
                            cardslider.classList.remove('show');
                        }
                    })
                    title5.forEach((cardslider) => {
                        const boxtop = cardslider.getBoundingClientRect().top;

                        if (boxtop < triggerbottom) {
                            cardslider.classList.add('show2');
                        } else {
                            cardslider.classList.remove('show2');
                        }
                    })
                    line2.forEach((cardslider) => {
                        const boxtop = cardslider.getBoundingClientRect().top;

                        if (boxtop < triggerbottom) {
                            cardslider.classList.add('show2');
                        } else {
                            cardslider.classList.remove('show2');
                        }
                    })
                    trans1.forEach((cardslider) => {
                        const boxtop = cardslider.getBoundingClientRect().top;

                        if (boxtop < triggerbottom) {
                            cardslider.classList.add('show2');
                        } else {
                            cardslider.classList.remove('show2');
                        }
                    })

                });
        </script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
        </script>
        <script>
            $(document).ready(function() {
                $(".cardslider").slick({
                    dots: false,
                    slidesToShow: 6,
                    slidesToScroll: 4,
                    infinite: false,
                    arrows: false,
                    prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'>&#8672;</i></button>",
                    nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'>&#8674;</i></button>",
                    responsive: [{
                            breakpoint: 1400,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4,
                                infinite: false,
                                dots: false,
                            },
                        }, {
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                infinite: false,
                                dots: false,
                            },
                        }, {
                            breakpoint: 1050,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4,
                                arrows: false,
                                infinite: false,
                            },
                        }, {
                            breakpoint: 577,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                                arrows: false,
                                infinite: false,
                            },
                        },
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ],
                });
            });
        </script>
        <script src="/views/js/app.js"></script>
        <!-- <script src="/views/js/alert.js"></script> -->
        <script>
            $(".step").click(function() {
                $(this).addClass("active").prevAll().addClass("active");
                $(this).nextAll().removeClass("active");
            });

            $(".step01").click(function() {
                $("#line-progress").css("width", "3%");
                $(".discovery").addClass("active").siblings().removeClass("active");
            });

            $(".step02").click(function() {
                $("#line-progress").css("width", "35%");
                $(".strategy").addClass("active").siblings().removeClass("active");
            });

            $(".step03").click(function() {
                $("#line-progress").css("width", "66%");
                $(".creative").addClass("active").siblings().removeClass("active");
            });

            $(".step04").click(function() {
                $("#line-progress").css("width", "97%");
                $(".production").addClass("active").siblings().removeClass("active");
            });
        </script>

</body>
</html>