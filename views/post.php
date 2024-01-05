<?php
session_start();
ob_start();
$page = "post";


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Diễn đàn</title>
    <link rel="icon" href="/views/images/logotitle.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="/views/chatbot/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="/views/chatbot/script.js" defer></script>
    <link rel="stylesheet" href="/views/css/Type2.css" />
    <link rel="stylesheet" href="/views/css/style.css" />
    <link rel="stylesheet" href="/views/css/post.css" />
    <link rel="stylesheet" href="/views/css/alert.css">
</head>

<body id="main-contend-body" style="overflow-x: hidden" class="show-chatbot">
<div>
    <button class="chatbot-toggler">
      <span class="material-symbols-rounded">mode_comment</span>
      <span class="material-symbols-outlined">close</span>
    </button>
    <div class="chatbot">
        <header>
            <h2>Obooks-Chatbot</h2>
            <span class="close-btn material-symbols-outlined">close</span>
        </header>
        <ul class="chatbox">
            <li class="chat incoming">
                <span class="material-symbols-outlined">smart_toy</span>
                <p>Xin chào👋<br>Tôi có thể giúp gì cho bạn?</p>
            </li>
        </ul>
        <div class="chat-input">
            <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
            <span id="send-btn" class="material-symbols-rounded">send</span>
        </div>
    </div>

    </div>
    <div class="alert hide3">
        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
        <span class="msg">Đã đăng bài</span>
        <div class="close-btn">
            <span class="fas fa-times"></span>
        </div>
    </div>
    <!-- navbar -->
    <!-- navbar -->
    <?php
     include $_SERVER['DOCUMENT_ROOT'] . '/views/access/header.php';
    ?>
    <!-- navbar -->
    <!-- navbar -->

    <!-- tabup -->
    <div>
        <div id="tabup" class="tabup row justify-content-center">
            <div class="">
                <div style="position: relative">
                    <button id="btn2" type="button" class="btn btn-dark" style="position: absolute; top: 1rem; right: 1rem">
              X
            </button>
                </div>
            </div>
            <div class="col-12 p-5">
                <center style="
              font-size: 1rem;
              font-weight: bold;
              text-transform: uppercase;
            ">
                    TẠO BÀI VIẾT
                </center>

                <div class="row mt-2">
                    <div class="comment-box p-2" id="bcomment">
                        <div class="user">
                            <div class="image">
                                <img src="/views/images/profile.png" alt="" />
                            </div>
                            <div class="name">Bình luận của bạn</div>
                        </div>
                        <form action="" method="post">
                            <textarea id="textareapost" name="comment" placeholder="Your Messenge"></textarea>
                        </form>
                    </div>
                </div>
                <div class="col-12" style="
              background: none;
              border: solid 1px antiquewhite;
              color: white;
              border-radius: 5px;
            ">
                    <div class="row">
                        <div class="col-12 col-lg-5 pt-2 pt-lg-0" style="
                  font-weight: bold;
                  align-self: center;
                  padding-left: 2rem;
                ">
                            Thêm vào bài viết của bạn
                        </div>
                        <div class="col-12 col-lg-7 px-0" style="padding: 1rem">
                            <div class="row justify-content-center d-flex">
                                <div class="col-2">
                                    <input type="file" id="addfile" class="Tabup__item">
                                    <label onclick="addcard()" for="addfile">
                        <i 
                        class="fa-regular fa-images fa-beat-fade"
                        style="font-size: 2rem; color: greenyellow"
                      ></i>
                      </label>
                                    </input>
                                </div>
                                <div class="col-2">
                                    <div class="Tabup__item">
                                        <i class="fa-solid fa-user-plus fa-beat-fade" style="font-size: 2rem; color: lightskyblue"></i>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="Tabup__item">
                                        <i class="fa-regular fa-face-smile fa-beat-fade" style="font-size: 2rem; color: yellow"></i>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="Tabup__item">
                                        <i class="fa-solid fa-location-dot fa-beat-fade" style="font-size: 2rem; color: orangered"></i>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="Tabup__item">
                                        <i class="fa-solid fa-calendar-lines-pen" style="font-size: 2rem; color: orangered"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 m-1" style="display: block">
                    <button id="btn22" type="button" class="btn btn-dark">
              Đăng bài
            </button>
                </div>
            </div>
        </div>

        <div id="tabup_bg" class="tabup_bg" style="
          position: fixed;
          width: 100vw;
          height: 100vh;
          background: rgba(0, 0, 0, 0.8);
          z-index: 988;
        "></div>
    </div>

    <div class="stackmain2">
        <div class="light3 col-12 d-none d-lg-block" style="height: 15vh; top: 0; position: fixed; z-index: 90; opacity: 0.4"></div>

        <div class="row " >
            <!-- navbar -->
            <?php

             include $_SERVER['DOCUMENT_ROOT'] . '/views/access/navbar.php';

            ?>
            <!-- navbar -->
            <!-- center -->
            <center>
                <div class="col-12 col-lg-8 row discenter p-lg-5" style="align-items: center;">
                <div id="main-contend-body-post">

                </div>
                <div class="row">
                    <div class="col-12 col-lg-5 p-1">
                        <div class="sizenho col-12 px-3" style="background-image: url(/views/images/spiderman.jpg)">
                            <p class="text-post" style="">
                                <span> spider-man 3 </span> <br /> dịch giả: ttqk
                            </p>
                        </div>
                        <div class="col-12 mt-3 px-3 pt-2" style="
                  background-color: #4a4a4a;
                  height: 250px;
                  background-size: cover;
                  border-radius: 10px;
                ">
                            <div class="d-flex">
                                <div class="avtmem" style="background-image: url(/views/images/avata/joinwick.jpg);"></div>
                                <p class="m-2">
                                    <span style="font-size: 20px; color: black"> Ntmy </span>
                                    <br /> banana-reader
                                </p>
                            </div>
                            <div class="mt-2" style="
                    height: 50%;
                    width: 100%;
                    background-color: #777777;
                    border-radius: 10px;
                  ">
                                <p class="m-2">
                                    Diễn biến cốt tryện thật thú vị, kết hợp song song đó là sự mô tả linh hoạt cảm xúc nội tâm nhân vật của tác giả.

                                    <br /> Cuốn sách này đã thật sự đã chinh phục được tôi.
                                </p>
                            </div>
                            <div class="col-12 d-flex mt-2 gap-3 px-3" style="justify-content: end; align-items: center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path
                      fill-rule="evenodd"
                      d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"
                    />
                  </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path
                      d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                    />
                    <path
                      fill-rule="evenodd"
                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"
                    />
                  </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 px-1 px-lg-3">
                        <div class="col-12 px-3" style="
                  background-image: url(/views/images/mybook3.png);
                  height: 515px;
                  border-radius: 10px;
                  background-size: cover;
                  display: flex;
                  align-items: end;
                ">
                            <p class="text-post">
                                <span> GRIS </span>
                                <br /> cuộc chiến nội tâm của người hay nghĩ <br /> tác giả: ttqk
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12 col-lg-7 px-3">
                        <div class="sizelon col-12 px-3" style="background-image: url(/views/images/gatsby.jpg)">
                            <p class="text-post">
                                <span> </span>
                                <br />
                                <br />
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 ">
                        <div class="sizelon2 col-12  pt-2" style="background-color: #4a4a4a">
                            <div class="d-flex">
                                <div class="avtmem" style="background-image: url(/views/images/avata/quachtinh.jpg);"></div>
                                <p class="m-2">
                                    <span style="font-size: 20px; color: black"> Dnka </span>
                                    <br /> watermelon-reader
                                </p>
                            </div>
                            <div class="mt-2" style="
                    height: 77%;
                    width: 100%;
                    background-color: #777777;
                    border-radius: 10px;
                  ">
                                <p class="m-2">
                                    😍😍😍 Vừa đọc xong cuốn sách "The Great Gatsby" của tác giả F. Scott Fitzgerald.💕💕💕 <br /> Đây là một tác phẩm văn học kinh điển nổi tiếng của Mỹ thuộc thể loại tiểu thuyết lãng mạn bậc nhất. Điểm đáng chú ý nhất
                                    của cuốn sách đó là việc tìm hiểu về những đường cong và góc cạnh của nhân vật Gatsby, người được xem là tâm điểm của truyện với rất nhiều bí mật đặc biệt và trái tim đau khổ. Nếu bạn muốn đọc một cuốn sách với lối
                                    viết lãng mạn và kịch tính, liệu sự giàu có có mang lại hạnh phúc thật sự cho con người, thì "The Great Gatsby" chắc chắn là một lựa chọn không thể tuyệt vời hơn.🎉🎉
                                </p>
                            </div>
                            <div class="col-12 d-flex mt-2 gap-3 px-3" style="justify-content: end; align-items: center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path
                      fill-rule="evenodd"
                      d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"
                    />
                  </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path
                      d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                    />
                    <path
                      fill-rule="evenodd"
                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"
                    />
                  </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-6 post-card-k">
                        <div class="post-card-k1">
                            <div class="post-card-k2">
                                <img src="/views/images/avata/postt1.jpg" alt="">
                            </div>
                            <div class="post-card-k3">
                                <div>
                                    <div class="k3-tittle">Một ngày tuyệt vời </div>
                                    <div class="k3-p">Còn gì tuyệt hơn là đọc sách mỗi sáng tại một nơi có phong cảnh đẹp và yên bình, nhâm nhi ly coffe và trò chuyện cùng các bạn đọc khác </div>
                                    <a href="#" class="k3-button">
                                        
                                        XEM THÔNG TIN
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 post-card-k">
                        <div class="post-card-k1">
                            <div class="post-card-k2">
                                <img src="/views/images/avata/postt2.jpg" alt="">
                            </div>
                            <div class="post-card-k3">
                                <div>
                                    <div class="k3-tittle">Thói quen tốt</div>
                                    <div class="k3-p">Thói quen của các bạn học sinh trường THCS GD là đọc sách tại obooks vào mỗi giờ nghỉ trưa</div>
                                    <a href="#" class="k3-button">
                                        
                                        XEM THÔNG TIN
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 post-card-k">
                        <div class="post-card-k1">
                            <div class="post-card-k2">
                                <img src="/views/images/avata/postt3.png" alt="">
                            </div>
                            <div class="post-card-k3">
                                <div>
                                    <div class="k3-tittle">Nhà tài trợ vàng</div>
                                    <div class="k3-p">Được tài trợ hơn 4 tỉ VND từ tác giả cuốn truyện dài "Anh Năm" vì đã giúp tác giả tiếp cận được nhiều hơn tới người đọc</div>
                                    <a href="#" class="k3-button">
                                        
                                        XEM THÔNG TIN
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 post-card-k">
                        <div class="post-card-k1">
                            <div class="post-card-k2">
                                <img src="/views/images/avata/postt4.jpg" alt="">
                            </div>
                            <div class="post-card-k3">
                                <div>
                                    <div class="k3-tittle">Giả lập trang sách</div>
                                    <div class="k3-p">Không cần chiếm nhiều diện tích, trọng lượng người đọc vẫn có thể có được cảm giác đọc sách chân thật nhất ở mọi nơi với Obooks</div>
                                    <a href="#" class="k3-button">
                                        
                                        XEM THÔNG TIN
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            </center>

            <!-- /center -->

            <!-- right -->
            <div class="btn_thongbao2 d-none d-lg-block" style="position: fixed; right: 5px">
                <div class="col-12 mt-5" style="background-color: #3d3f3f;  border-radius: 5px;">
                    <div>
                        <p style="color: white; text-transform:uppercase; text-align: center; font-size: larger;">Diễn đàn bài viết</p>
                    </div>
                </div>
                <div id="btn_taobaiviet" class="col-12 mt-1 btn_left" style="border: 1px solid white; border-radius: 5px">
                    <p class="text1" style="text-align: center;padding-top: 0.2rem;">Tạo bài viết</p>
                </div>
                <div id="btn_thongbao" class="col-12 mt-1 btn_left" style="border: 1px solid white; border-radius: 5px">
                    <p class="text1" style="text-align: center; padding-top: 0.2rem;">Thông báo</p>
                </div>
            </div>
        </div>
    </div>
    <!-- scroll to top -->

    <div class="animation-area">
        <ul class="box-area" style="">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        const tabup = document.getElementById("tabup");
        const tabup_bg = document.getElementById("tabup_bg");
        const btn2 = document.getElementById("btn2");
        const btn22 = document.getElementById("btn22");
        const btn1 = document.getElementById("btn_taobaiviet");

        btn1.addEventListener("click", function() {
            tabup.style.display = "block";
            tabup_bg.style.display = "block";
        });
        btn2.addEventListener("click", function() {
            tabup.style.display = "none";
            tabup_bg.style.display = "none";
        });
        btn22.addEventListener('click', function() {
            tabup.style.display = "none";
            tabup_bg.style.display = "none";
            const aler = document.querySelector('.alert');
            aler.classList.add('show3');
            aler.classList.remove('hide3');
            aler.classList.add('showAlert');
            setTimeout(function() {
                aler.classList.add('hide3');
                aler.classList.remove('show3');
            }, 3000);

        });
    </script>
    <script>
        const cursor = document.querySelector(".cursor");

        var timeout;
        let main2 = document.getElementById("main2");

        let totop = document.getElementById("totop");

        showall();

        function showall() {
            const object1 = document.querySelectorAll(".object-card-images");
            for (var i = 0; i < object1.length; i++) {
                object1[i].classList.add("show");
            }
        }

        function hiddenall() {
            const object1 = document.querySelectorAll(".object-card-images");
            for (var i = 0; i < object1.length; i++) {
                object1[i].classList.remove("show");
            }
        }

        function show(str) {
            hiddenall();

            str = "." + str;
            const topic = document.querySelectorAll(str);
            for (var i = 0; i < topic.length; i++) {
                topic[i].classList.add("show");
            }
        }
        window.addEventListener("scroll", function() {
            var scroll_y = this.scrollY;

            if (scroll_y > 2000) {
                totop.style.display = 'block';
            } else {
                totop.style.display = 'none';
            }
        });


    </script>
    <script src="https://kit.fontawesome.com/483477fc25.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/views/js/app.js"></script>

    <script src="/views/js/add.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>