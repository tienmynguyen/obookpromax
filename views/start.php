
<?php

session_start();
ob_start();

$page = "home";
    require_once $_SERVER['DOCUMENT_ROOT'] . '/controller/database_functions.php';
    
  
   

    $conn = db_connect();
    $banner1 = getbanner1($conn);
    $xuhong = getxuhuong($conn);
    $moi = getmoi($conn);
    $codien = getcodien($conn);
    $yeuthich = getyeuthich($conn);
    $thang = getthang($conn);
    $treem = gettreem($conn);
    $topbooks = get10topbook($conn);
$topbook = array();
$i=0;
    while($a = $topbooks->fetch_assoc()){
    $topbook[$i] = array($a['name'], $a['luotdoc']);
    $i++; 
    }
     ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="icon" href="/views/images/logotitle.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="/views/css/Type2.css">
    <link rel="stylesheet" href="/views/css/style.css">
</head>

<body id="main-contend-body" style=" overflow-x: hidden;  ">

    <!-- navbar -->
    <?php
     include $_SERVER['DOCUMENT_ROOT'] . '/views/access/header.php';
    ?>
    <!-- navbar -->
    <div class="stackmain">


        <!-- show case -->
        <section class="main">
            <div class="head col-6 d-none d-lg-flex" style=" z-index: 9;">
                <img src="/views/images/b.png" alt="" id="b">
                <img src="/views/images/o.png" alt="" id="o">
                <img src="/views/images/o2.png" alt="" id="o2">
                <img src="/views/images/k.png" alt="" id="k">
            </div>
            <img id="light" class=" light col-12 d-none d-lg-block" src="/views/images/light.png" alt="" style="       position: absolute;
        opacity: 50%;
        margin-top: 0px;
        padding-right: 1rem;
        padding-top: 1rem;">
            <img id="light2" class=" light col-12 d-none d-lg-block" src="/views/images/light3.png" alt="" style="       position: absolute;
        opacity: 50%;
        margin-top: 0px;
        padding-right: 1rem;
        padding-top: 1rem;">

            <img class="lamp d-none d-lg-block" onclick="on()" src="/views/images/lamp.png" alt="" />

            <div class="container py-5">
                <div class="row py-4">
                    <div id="title2" class="col-12 col-lg-5 text-center" style="z-index: 10; ">
                        <h1 class="titlemain">
                            <span>
                            Expand your mind
                        </span>
                        </h1>
                        <h2 style="color: #ffcbcb;">
                            read a book
                        </h2>
                        <a class="btn4" style="text-decoration: none; color: white;" href="#point-1"> <button type="button " class="btn btn-outline-light mt-4">Read now</button></a>

                    </div>
                    <div class="col-md-3 pt-5 d-none d-lg-block" style="z-index: 10;">
                        <img id="img1" src="/views/images/bookimg1.png" alt="" class="object-fit-cover col-md-12 d-none d-lg-block ">
                    </div>
                    <div class=" col-md-3 pt-5 d-none d-lg-block ">
                        <img id="video1" src="/views/images/00001-removebg-preview.png" class="object-fit-cover col-md-12 d-none d-lg-block" autoplay style="    margin-top: -7rem;
                  transform: scaleX(-1) !important; margin-top: 1rem;">
                    </div>


                </div>

            </div>
        </section>

    </div>
    <div class="light3 col-12" style="height: 15vh;  top: 0; position: sticky; z-index: 90; opacity: 0.4;"></div>
    <div class="stackother2" style="">


        <div class="row">
            <?php
           include $_SERVER['DOCUMENT_ROOT'] . '/views/access/navbar.php';
            ?>
            <div class="col-12 col-lg-10">
                <div class="cardslider_bannner px-5 pt-4">
                    <!-- <img src="/views/images/bannner4.png" alt="" style="width: 100%; border-radius: 5px;">
                    <img src="/views/images/bannner5.jpg" alt="" style="width: 100%; border-radius: 5px;">
                    <img src="/views/images/bannner6.jpg" alt="" style="width: 100%; border-radius: 5px;">
                    <img src="/views/images/bannner7.jpg" alt="" style="width: 100%; border-radius: 5px;"> -->
                    <?php
                        while($row = $banner1 ->fetch_assoc()) {
                            ?> 
                            <img src="<?php echo $row['url'] ?>" alt="" style="width: 100%; border-radius: 5px; max-height: 335px">
                            <?php
                        }
                    ?>
                </div>

                <div>

                    <!-- 4 of book -->
                    <div id="">
                        <div class="cardslider4book p-5">
                            <!-- Card object  -->
                            <div class="card banner" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-4">
                                        <img src="/views/images/read.png" class="img-fluid" alt="..." />
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Thư viện sách trực tuyến miễn phí</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end object card asdasd-->

                            <!-- Card object  -->
                            <div class="card banner" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-4">
                                        <img src="/views/images/track.png" class="img-fluid rounded-start" alt="..." />
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Đăng tải những cuốn sách tâm huyết của bạn</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="card banner" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-4">
                                        <img src="/views/images/library_explorer.png" class="img-fluid rounded-start" alt="..." />
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Thêm nguồn thu nhập từ chính đam mê</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="card banner" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-4">
                                        <img src="/views/images/fulltext.png" class="img-fluid rounded-start" alt="..." />
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Công cụ tìm kiếm toàn văn</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end object card -->
                        </div>
                    </div>

                    <!-- end 4 of book -->
                </div>
                <!-- show case2 -->

                <!-- toppic -->


                <!-- topic of book -->
                <div class="row justify-content-center">
                    <div class="col-11" style="color: white;">
                        <h5>
                            Đa dạng với 14 <span style="color: #f37779;">chủ đề</span> về nhiều lĩnh vực
                        </h5>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="topic col-11">
                        <div class="cardslider-kindof pt-2">
                            <!-- Card object  -->
                            <div class="teamkindof">
                                <img src="/views/images/art.svg" alt="" class="img-fluid" />
                                <h5>Nghệ thuật</h5>
                                <p>69,960 books</p>
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="teamkindof">
                                <img src="/views/images/science_fiction.svg" alt="" class="img-fluid" />
                                <h5>Khoa học viễn tưởng</h5>
                                <p>69,960 books</p>
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="teamkindof">
                                <img src="/views/images/fantasy.svg" alt="" class="img-fluid" />
                                <h5>Tưởng tượng</h5>
                                <p>69,960 books</p>
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="teamkindof">
                                <img src="/views/images/biographies.svg" alt="" class="img-fluid" />
                                <h5>tiểu sử</h5>
                                <p>69,960 books</p>
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="teamkindof">
                                <img src="/views/images/romance.svg" alt="" class="img-fluid" />
                                <h5>lãng mạn</h5>
                                <p>69,960 books</p>
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="teamkindof">
                                <img src="/views/images/children.svg" alt="" class="img-fluid" />
                                <h5>Trẻ em</h5>
                                <p>69,960 books</p>
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="teamkindof">
                                <img src="/views/images/history.svg" alt="" class="img-fluid" />
                                <h5>Lịch sử</h5>
                                <p>69,960 books</p>
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="teamkindof">
                                <img src="/views/images/medicine (1).svg" alt="" class="img-fluid" />
                                <h5>Y học</h5>
                                <p>69,960 books</p>
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="teamkindof">
                                <img src="/views/images/music.svg" alt="" class="img-fluid" />
                                <h5>Âm nhạc</h5>
                                <p>69,960 books</p>
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="teamkindof">
                                <img src="/views/images/mystery_and_detective_stories.svg" alt="" class="img-fluid" />
                                <h5>Trinh thám</h5>
                                <p>69,960 books</p>
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="teamkindof">
                                <img src="/views/images/textbooks.svg" alt="" class="img-fluid" />
                                <h5>Sách giáo khoa</h5>
                                <p>69,960 books</p>
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="teamkindof">
                                <img src="/views/images/recipes.svg" alt="" class="img-fluid" />
                                <h5>Nấu ăn</h5>
                                <p>69,960 books</p>
                            </div>
                            <!-- end object card -->
                            <!-- Card object  -->
                            <div class="teamkindof">
                                <img src="/views/images/religion.svg" alt="" class="img-fluid" />
                                <h5>Tôn giáo</h5>
                                <p>69,960 books</p>
                            </div>
                            <!-- end object card -->
                            <!-- Card object  -->
                            <div class="teamkindof">
                                <img src="/views/images/science.svg" alt="" class="img-fluid" />
                                <h5>Khoa học</h5>
                                <p>69,960 books</p>
                            </div>
                            <!-- end object card -->

                        </div>
                    </div>
                    <div id="point-1"></div>
                </div>

                <!-- end topic of book -->
            </div>
        </div>
    </div>

    <div class="stackmain2">



        <div class="row">

            <div class="d-none d-lg-block col-2 "></div>
            <div class="col-12 col-lg-10">



                <!-- one kind of book -->
                <div>
                    <div class="card-link">
                        <a id="card-link-title" href="#"> Sách xu hướng <img style="height: 100px;" src="/views/images/trend.png" alt=""></a>
                        <hr class="hrline" width="76%" style="margin: 0rem auto; height: 5px; background-color: white" />
                    </div>
                    <div class="cardslider p-5">
                       <?php 
                       
                       while($row = $xuhong ->fetch_assoc()){

                        ?>
                        
                        
                            <!-- Card object  -->
                        <div class="object-card-images">
                            <!-- mot card -->
                            <a href="./views/book.php?id=<?php echo $row['id']?>">
                            
                                <div>
                                    <img src="/views/images/<?php echo $row['img']?>" alt="." class="card-img-top img-avatar" />
                                </div>
                            </a>

                            <div>
                                <h3 class="cardName"><?php echo $row['name']?></h3>
                                <div class="card-text"><?php echo $row['note']?></div>

                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end object card -->

                        
                        <?php
                       }
                       ?>
                        
                    </div>
                </div>
                <div style="height: 30px;">

                </div>
                <div class="  trans1 row d-none d-lg-flex justify-content-center">
                    <div class="banner1 col-12" style=" height: 500px;     padding-right: 4rem;
                    height: 500px;
                    text-align: justify;">
                        <a href="#">
                            <div class="card3d">
                                <div class="wrapper">
                                    <img src="/views/images/img7.jpg" alt="" class="cover-image">
                                </div>
                                <img src="/views/images/hoangtube.png" alt="" class="character">
                            </div>
                        </a>
                        <div style="color: white ; z-index: 20; ">
                            <br> <br>
                            <h3>
                                Cuốn sách có lượt đọc nhiều <span style="color: #f37779;">nhất trong tuần</span>
                            </h3>
                            <h1 style="font-family: 'Cherry Bomb One', cursive;">
                                HOÀNG TỬ BÉ
                            </h1>
                            <p>
                                Hoàng tử bé là một cuốn sách kì lạ được viết bởi một tác giả kì lạ. Saint Exupéry đâu phải là một nhà văn thường, mà là một nhà văn phi công! Ông sáng tác Hoàng tử bé trong thời kì lưu vong khi nước Pháp bị chiếm đóng, ông không được bay theo đúng nghĩa.
                                Cuốn sách là một cuộc hành trình đi tìm lại trí tưởng tượng của bản thân mình, mà chính tác giả đã bỏ quên trong quá khứ. Ông khẳng định, thế giới của trẻ con khác với thế giới của người lớn.
                            </p>
                            <br>
                            <p>
                                Trong đôi mắt chúng bao giờ thế giới cũng được nhìn bằng lăng kính của trí tưởng tượng. Cuốn sách chứa đựng tư duy đạo đức sâu xa qua lăng kính của một cậu trai không có nhiều va chạm. Cậu ít có cơ hội tiếp xúc với thế giới bên ngoài, thế giới xung quanh
                                của cậu nhỏ hẹp cỡ chừng một ngôi nhà, nhưng bên trong cậu chứa đựng những cảm nhận tuyệt vời vượt xa sự tưởng tượng.
                            </p>
                        </div>
                    </div>
                </div>



                <div class="  trans1 row d-none d-lg-flex justify-content-center mt-5" style="    padding-left: 3rem;">
                    <div class="banner1 col-12" style=" height: 500px; text-align:justify; ">

                        <div style=" color: white ; z-index: 20; ">
                            <br> <br>
                            <h3>
                                Cuốn sách <span style="color: #f37779;">mới</span> đáng chú ý <span style="color: #f37779;">nhất trong tuần</span>
                            </h3>
                            <h1 style="font-family: 'Cherry Bomb One', cursive;">
                                người hùng áo trắng và kẻ địch vô hình
                            </h1>
                            <p>
                                Họ là những chiến binh dũng cảm trên mặt trận phòng chống dịch bệnh. Họ không ngừng cống hiến bản thân để chữa lành cho các bệnh nhân và bảo vệ sức khỏe của cộng đồng. Những người hùng áo trắng vẫn luôn sẵn sàng ngày đêm để tiếp tục chiến đấu với kẻ địch
                                vô hình này
                            </p>
                            <br>
                            <p>
                                Họ là những chiến binh dũng cảm trên mặt trận phòng chống dịch bệnh. Họ không ngừng cống hiến bản thân để chữa lành cho các bệnh nhân và bảo vệ sức khỏe của cộng đồng. Những người hùng áo trắng vẫn luôn sẵn sàng ngày đêm để tiếp tục chiến đấu với kẻ địch
                                vô hình này
                            </p>
                        </div>
                        <a href="#">
                            <div class="card3d">
                                <div class="wrapper">
                                    <img src="/views/images/mybook1.jpg" alt="" class="cover-image">
                                </div>
                                <img style="scale: 0.8;" src="/views/images/mybook1.jpg" alt="" class="character">
                            </div>
                        </a>
                    </div>
                </div>

                <!-- rank of book -->
                <div class=" trans1 row justify-content-center">
                    <div class="col-11" style="color: white;">
                        <h3>
                            <span style="color: #ed8f90;">TOP 10</span> sách có lượng đọc nhiều nhất  <span style="color: #f89496;">tháng</span>
                        </h3>
                    </div>
                </div>
                <div id="rankofb" class="  trans1  row justify-content-center mb-5" style="height: 300px; ">
                    <div class="rank col-12 d-flex" style="height: 300px; border-radius: 5px;  overflow-y: scroll;">
                        <div class="col-1">
                            <center>
                                <div class="numberrank" style="height: 75px; width: 75px; background-color: #B5DDD1;; border-radius: 5px; margin-top: 15px;display: flex;
                            flex-direction: column;
                            justify-content: center;
                            text-align: center; color: white">
                                    <h1 style="color: #ff9a9c;">
                                        1
                                    </h1>
                                </div>
                                <div class="numberrank" style="height: 75px; width: 75px; background-color: #D7E7A9;; border-radius: 5px; margin-top: 15px;display: flex;
                            flex-direction: column;
                            justify-content: center;
                            text-align: center; color: #ffffff;">
                                    <h1>
                                        2
                                    </h1>
                                </div>
                                <div class="numberrank" style="height: 75px; width: 75px; background-color: #D3C0F9;; border-radius: 5px; margin-top: 15px;display: flex;
                            flex-direction: column;
                            justify-content: center;
                            text-align: center; color: #ffffff;">
                                    <h1>
                                        3
                                    </h1>
                                </div>
                                <div class="numberrank" style="height: 75px; width: 75px; background-color: #F99A9C; border-radius: 5px; margin-top: 15px;display: flex;
                            flex-direction: column;
                            justify-content: center;
                            text-align: center; color: #ffffff;">
                                    <h1>
                                        4
                                    </h1>
                                </div>
                                <div class="numberrank" style="height: 75px; width: 75px; background-color: #FDBCCF;; border-radius: 5px; margin-top: 15px;display: flex;
                            flex-direction: column;
                            justify-content: center;
                            text-align: center; color: #ffffff;">
                                    <h1>
                                        5
                                    </h1>
                                </div>
                                <div class="numberrank" style="height: 75px; width: 75px; background-color: #B5DDD1; border-radius: 5px; margin-top: 15px;display: flex;
                            flex-direction: column;
                            justify-content: center;
                            text-align: center; color: #ffffff;">
                                    <h1>
                                        6
                                    </h1>
                                </div>
                                <div class="numberrank" style="height: 75px; width: 75px; background-color: #D7E7A9; border-radius: 5px; margin-top: 15px;display: flex;
                            flex-direction: column;
                            justify-content: center;
                            text-align: center; color: #ffffff;">
                                    <h1>
                                        7
                                    </h1>
                                </div>
                                <div class="numberrank" style="height: 75px; width: 75px; background-color: #D3C0F9; border-radius: 5px; margin-top: 15px;display: flex;
                            flex-direction: column;
                            justify-content: center;
                            text-align: center; color: #ffffff;">
                                    <h1>
                                        8
                                    </h1>
                                </div>
                                <div class="numberrank" style="height: 75px; width: 75px; background-color: #F99A9C; border-radius: 5px; margin-top: 15px;display: flex;
                            flex-direction: column;
                            justify-content: center;
                            text-align: center; color: #ffffff;">
                                    <h1>
                                        9
                                    </h1>
                                </div>
                                <div class="numberrank" style="height: 75px; width: 75px; background-color: #FDBCCF; border-radius: 5px; margin-top: 15px;display: flex;
                            flex-direction: column;
                            justify-content: center;
                            text-align: center; color: #ffffff;">
                                    <h1>
                                        10
                                    </h1>
                                </div>
                            </center>
                        </div>
                        <div class="col-4">
                            <center>
                                <div class="namerank mx-2 " style="height: 75px; background-color: #93beb1;; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: white ">
                                    <h4>
                                     <?php echo  $topbook[0][0]?>
                                    </h4>
                                </div>
                                <div class="namerank mx-2 " style="height: 75px;  background-color: #acbb80;; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                    <h4>
                                         <?php echo  $topbook[1][0]?>
                                    </h4>
                                </div>
                                <a href="/book2" style="text-decoration: none;">
                                    <div class="namerank mx-2 " style="height: 75px;  background-color: #a08ec3;; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                        <h6>
                                            <?php echo  $topbook[2][0]?>
                                        </h6>
                                    </div>
                                </a>
                                <div class="namerank mx-2 " style="height: 75px;  background-color: #cc7a7c; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                    <h4>
                                         <?php echo  $topbook[3][0]?>
                                    </h4>
                                </div>
                                <div class="namerank mx-2 " style="height: 75px;   background-color: #c58699;; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                    <h4>
                                         <?php echo  $topbook[4][0]?>
                                    </h4>
                                </div>
                                <div class="namerank mx-2 " style="height: 75px;  background-color: #82b0a2; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                    <h4>
                                         <?php echo  $topbook[5][0]?>
                                    </h4>
                                </div>
                                <div class="namerank mx-2 " style="height: 75px;   background-color: #a2b078; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                    <h4>
                                         <?php echo  $topbook[6][0]?>
                                        </h1>
                                </div>
                                <div class="namerank mx-2 " style="height: 75px;   background-color: #9b8fb2; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                    <h4>
                                       <?php echo  $topbook[7][0]?>
                                    </h4>
                                </div>
                                <div class="namerank mx-2 " style="height: 75px;   background-color: #b79192; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                    <h4>
                                         <?php echo  $topbook[8][0]?>
                                    </h4>
                                </div>
                                <div class="namerank mx-2 " style="height: 75px;   background-color: #ab7685; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                    <h4>
                                         <?php echo  $topbook[9][0]?>
                                    </h4>
                                </div>
                            </center>
                        </div>
                        <div class="col-7 ">

                            <div class="scorerank mx-2 " style="height: 75px; width: 100%;  background-color: #B5DDD1;; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: white ">
                                <h6>
                                    <?php echo  $topbook[0][1]?> lượt đọc
                                </h6>
                            </div>
                            <div class="scorerank mx-2 " style="height: 75px; width: 99%;   background-color: #D7E7A9;; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                <h6>
                                   <?php echo  $topbook[1][1]?> lượt đọc
                                </h6>
                            </div>
                            <div class="scorerank mx-2 " style="height: 75px; width: 90%;   background-color: #D3C0F9;; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                <h6>
                                   <?php echo  $topbook[2][1]?> lượt đọc
                                </h6>
                            </div>
                            <div class="scorerank mx-2 " style="height: 75px; width: 85%;   background-color: #F99A9C; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                <h6>
                                    <?php echo  $topbook[3][1]?> lượt đọc
                                </h6>
                            </div>
                            <div class="scorerank mx-2 " style="height: 75px; width: 83.4%;  background-color: #FDBCCF;; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                <h6>
                                   <?php echo  $topbook[4][1]?> lượt đọc
                                </h6>
                            </div>
                            <div class="scorerank mx-2 " style="height: 75px; width: 80%;  background-color: #B5DDD1; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                <h6>
                                   <?php echo  $topbook[5][1]?> lượt đọc
                                </h6>
                            </div>
                            <div class="scorerank mx-2 " style="height: 75px; width: 79%;  background-color: #D7E7A9; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                <h6>
                                    <?php echo  $topbook[6][1]?> lượt đọc
                                </h6>
                            </div>
                            <div class="scorerank mx-2 " style="height: 75px; width: 60%;  background-color: #D3C0F9; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                <h6>
                                    <?php echo  $topbook[7][1]?> lượt đọc
                                </h6>
                            </div>
                            <div class="scorerank mx-2 " style="height: 75px; width: 40%;  background-color: #F99A9C; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                <h6>
                                    <?php echo  $topbook[8][1]?> lượt đọc
                                </h6>
                            </div>
                            <div class="scorerank mx-2 " style="height: 75px; width: 39%;  background-color: #FDBCCF; border-radius: 5px; margin-top: 15px;display: flex; flex-direction: column; justify-content: center; text-align: center; color: #ffffff; ">
                                <h6>
                                   <?php echo  $topbook[9][1]?> lượt đọc
                                </h6>
                            </div>



                        </div>
                    </div>
                </div>

                <!-- end rank og book -->
                <!-- helloooo -->
                <div>
                    <div class="card-link">
                        <a id="card-link-title" href="#"> Sách mới <img style="height: 100px;" src="/views/images/trend.png" alt=""></a>
                        <hr class="hrline" width="76%" style="margin: 0rem auto; height: 5px; background-color: white" />
                    </div>
                    <div class="cardslider p-5">
                       <?php 
                       
                       while($row = $moi ->fetch_assoc()){

                        ?>
                        
                        
                            <!-- Card object  -->
                        <div class="object-card-images">
                            <!-- mot card -->
                            <a href="./views/book.php?id=<?php echo $row['id']?>">
                                <div>
                                    <img src="/views/images/<?php echo $row['img']?>" alt="." class="card-img-top img-avatar" />
                                </div>
                            </a>

                            <div>
                                <h3 class="cardName"><?php echo $row['name']?></h3>
                                <div class="card-text"><?php echo $row['note']?></div>

                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end object card -->

                        
                        <?php
                       }
                       ?>
                        
                    </div>
                </div>
                <!--  -->


                <!-- end kind of book -->
                <!-- one kind of book -->
                <div>
                    <div class="card-link">
                        <a id="card-link-title" href="#"> Sách cổ điển </a>
                        <hr width="90%" style="margin: 0rem auto; height: 5px; background-color: white" />
                    </div>
                    <div class="cardslider p-5">
                       <?php 
                       
                       while($row = $codien ->fetch_assoc()){

                        ?>
                        
                        
                            <!-- Card object  -->
                        <div class="object-card-images">
                            <!-- mot card -->
                            <a href="./views/book.php?id=<?php echo $row['id']?>">
                                <div>
                                    <img src="/views/images/<?php echo $row['img']?>" alt="." class="card-img-top img-avatar" />
                                </div>
                            </a>

                            <div>
                                <h3 class="cardName"><?php echo $row['name']?></h3>
                                <div class="card-text"><?php echo $row['note']?></div>

                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end object card -->

                        
                        <?php
                       }
                       ?>
                        
                    </div>
                </div>

                <!-- end kind of book -->

                       
                <!-- one kind of book -->
                <div>
                    <div class="card-link">
                        <a id="card-link-title" href="#"> Sách cho tháng </a>
                        <hr width="90%" style="margin: 0rem auto; height: 5px; background-color: white" />
                    </div>
                    <div class="cardslider p-5">
                       <?php 
                       
                       while($row = $thang ->fetch_assoc()){

                        ?>
                        
                        
                            <!-- Card object  -->
                        <div class="object-card-images">
                            <!-- mot card -->
                            <a href="./views/book.php?id=<?php echo $row['id']?>">
                                <div>
                                    <img src="/views/images/<?php echo $row['img']?>" alt="." class="card-img-top img-avatar" />
                                </div>
                            </a>

                            <div>
                                <h3 class="cardName"><?php echo $row['name']?></h3>
                                <div class="card-text"><?php echo $row['note']?></div>

                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end object card -->

                        
                        <?php
                       }
                       ?>
                        
                    </div>
                </div>

                <!-- end kind of book -->


                <!-- one kind of book -->
                <div>
                    <div class="card-link">
                        <a id="card-link-title" href="#"> Sách được yêu thích nhất </a>
                        <hr width="90%" style="margin: 0rem auto; height: 5px; background-color: white" />
                    </div>
                    <div class="cardslider p-5">
                       <?php 
                       
                       while($row = $yeuthich ->fetch_assoc()){

                        ?>
                        
                        
                            <!-- Card object  -->
                        <div class="object-card-images">
                            <!-- mot card -->
                            <a href="./views/book.php?id=<?php echo $row['id']?>">
                                <div>
                                    <img src="/views/images/<?php echo $row['img']?>" alt="." class="card-img-top img-avatar" />
                                </div>
                            </a>

                            <div>
                                <h3 class="cardName"><?php echo $row['name']?></h3>
                                <div class="card-text"><?php echo $row['note']?></div>

                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end object card -->

                        
                        <?php
                       }
                       ?>
                        
                    </div>
                </div>

                <!-- end kind of book -->


                <!-- one kind of book -->
                <div>
                    <div class="card-link">
                        <a id="card-link-title" href="#"> Sách trẻ em </a>
                        <hr width="90%" style="margin: 0rem auto; height: 5px; background-color: white" />
                    </div>
                    <div class="cardslider p-5">
                       <?php 
                       
                       while($row = $treem ->fetch_assoc()){

                        ?>
                        
                        
                            <!-- Card object  -->
                        <div class="object-card-images">
                            <!-- mot card -->
                            <a href="./views/book.php?id=<?php echo $row['id']?>">
                                <div>
                                    <img src="/views/images/<?php echo $row['img']?>" alt="." class="card-img-top img-avatar" />
                                </div>
                            </a>

                            <div>
                                <h3 class="cardName"><?php echo $row['name']?></h3>
                                <div class="card-text"><?php echo $row['note']?></div>

                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end object card -->

                        
                        <?php
                       }
                       ?>
                        
                    </div>
                </div>

                <!-- end kind of book -->
                <div class=" row justify-content-center">
                    <div class=" trans1 banner1 col-9" style="">
                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/views/images/bannner4.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/views/images/sale.png" class="d-block w-100" alt="...">
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                    </div>

                </div>
                <div style="height: 100px;">

                </div>

                <!-- something  -->

                <div class="row justify-content-center">
                    <center>
                        <p class="title5  ">
                            4 BƯỚC ĐỂ ĐỌC SÁCH THẬT HIỆU QUẢ
                        </p>
                    </center>
                    <div class="col-9" style="position: relative;">

                        <ul>
                            <li style="list-style: none;margin-top: 50px;">
                                <div class="box1 col-12 col-lg-5 d-flex" style=" background-color: #fea78c; border-radius: 10px;">
                                    <img style="height: 160px;" src="/views/images/girlreadbook.png" alt="">
                                    <p class="tetx9">
                                        bước 1. Đọc cuốn sách mình thích và tạo thói quen.
                                    </p>
                                </div>
                            </li>
                            <li class="col-12 d-flex justify-content-end" style="list-style: none; margin-top: 50px;">
                                <div class="box2 col-12 col-lg-5 d-flex" style=" background-color: #ffa3a6; border-radius: 10px;">
                                    <img style="height: 160px;" src="/views/images/stage.png" alt="">
                                    <p class="tetx9">
                                        bước 2. Thiết lập mục tiêu khi đọc những cuốn sách
                                    </p>
                                </div>
                            </li>

                            <li style="list-style: none; margin-top: 50px;">
                                <div class="box1 col-12 col-lg-5 d-flex" style=" background-color: #f583b4; border-radius: 10px;">
                                    <img style="height: 160px;" src="/views/images/tree.png" alt="">
                                    <p class="tetx9">
                                        bước 3. Trang trí không gian đọc để tạo cảm hứng
                                    </p>
                                </div>
                            </li>
                            <li class="col-12 d-flex justify-content-end" style="list-style: none; margin-top: 50px;">
                                <div class="box2 col-12 col-lg-5 d-flex" style=" background-color: #b1beea; border-radius: 10px;">

                                    <img style="height: 160px;" src="/views/images/writing.png" alt="">
                                    <p class=" tetx9">
                                        bước 4. Ghi nhật kí đọc sách
                                    </p>
                                </div>
                            </li>
                            <li style="list-style: none; margin-top: 50px;">
                                <div class="box1 col-12 col-lg-5 d-flex" style=" background-color: #c58ade; border-radius: 10px;">

                                    <p class="tetx9">
                                        Nếu bạn không thích sách, đó chẳng qua bạn chưa tìm đúng cuốn sách mình cần thôi
                                    </p>
                                    <img style="height: 160px;" src="/views/images/reading.png" alt="">
                                </div>
                            </li>


                        </ul>

                    </div>
                    <div class="line2 d-none d-lg-block" style="position: absolute; height: 950px; width: 1px; color: rgb(255, 255, 255); border-radius: 5px; margin-top: 60px;">
                        |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br> |
                        <br>|
                        <br> |
                        <br>|
                        <br> |
                        <br>|
                        <br>|
                        <br>|
                        <br>|
                        <br>|
                        <br>|
                        <br>|
                        <br>|
                        <br>|
                        <br>|
                        <br>|
                        <br>|


                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class="col-11">
                        <div class="trans1 responsive-container-block bigContainer">
                            <div class="responsive-container-block Container">
                                <div class="responsive-container-block leftSide">
                                    <p class="text-blk heading">Về Obooks</p>
                                    <p class="text-blk subHeading">
                                        Obooks là nơi bạn có thể tìm thấy hàng ngàn cuốn sách kinh điển, tiểu thuyết, trinh thám và nhiều thể loại khác để thỏa mãn niềm đam mê đọc sách của mình. Trang web của chúng tôi được thiết kế đơn giản, dễ sử dụng và đảm bảo mang đến cho bạn trải nghiệm
                                        đọc sách tuyệt vời nhất có thể.
                                        <br> Obooks được sinh ra không chỉ dành cho người đọc mà còn dành cho những người viết, những tác giả trẻ, những nhà văn mới.
                                    </p>
                                </div>
                                <div class="responsive-container-block rightSide">
                                    <img class="number1img" src="/views/images/Nbook/reading.jpg" />
                                    <img class="number2img" src="/views/images/Nbook/writing.jpg" />
                                    <img class="number3img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/b245.png" />
                                    <img class="number5img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Customer supports.png" />

                                    <img class="number4vid" src="/views/images/Nbook/NONE_BG.png" style="background-color: whitesmoke;" />
                                    <img class="number7img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d51.png" />
                                    <img class="number6img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d12.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-11" style="background-color: #b1beea; border-radius: 5px;">
                    <div class="row">
                        <p>
                            về Obooks:
                        </p>
                    </div>
                    <p>
                        Obooks là nơi bạn có thể tìm thấy hàng ngàn cuốn sách kinh điển, tiểu thuyết, trinh thám và nhiều thể loại khác để thỏa mãn niềm đam mê đọc sách của mình. Trang web của chúng tôi được thiết kế đơn giản, dễ sử dụng và đảm bảo mang đến cho bạn trải nghiệm
                        đọc sách tuyệt vời nhất có thể.
                    </p>
                    <br>
                    <div class="row">
                        <p>
                            sứ mệnh:
                        </p>
                    </div>
        
                    <p>
                        Obooks được sinh ra không chỉ dành cho người đọc mà còn dành cho những người viết, những tác giả trẻ, những nhà văn mới.
                    </p>
                </div> -->


                </div>

                <!-- new  -->


                <!-- something too -->


            </div>
        </div>
    </div>
    <!-- scroll to top -->
    <a href="#">
        <div id="totop">
            <div style="width: 50px; height: 50px; background-color: #D3C0F9; position: fixed; bottom: 20px; border-radius: 50%;
            right: 30px; z-index: 99; display: flex; align-items:center ; justify-content: center;">
                <img src="/views/images/arrow.png" style="height: 30px; width: 30px; transform: rotate(-90deg); margin-top: -4px;" alt="">
            </div>
        </div>
    </a>




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
                const triggerbottom = 650;

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

            })
    </script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/views/js/app.js"></script>


</body>

</html>