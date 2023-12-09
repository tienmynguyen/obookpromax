<?php
session_start();
ob_start();
$page = "profile";
    
     require_once $_SERVER['DOCUMENT_ROOT'] . '/controller/database_functions.php';
     $conn = db_connect();
    $profilers = getuser($conn, $_SESSION["id"]);
    $profile = $profilers->fetch_assoc();

    $mybookrs = getmybook($conn,$_SESSION["id"]);
$lichsudocrs = getlichsudoc($conn, $_SESSION["id"]);
$sachyeuthichrs = getdanhsachyeuthich($conn, $_SESSION['id']);
    $countmybooks = 0;

    

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang cá nhân</title>
    <link rel="icon" href="/views/images/logotitle.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/views/css/section.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="/views/css/Type2.css">
    <link rel="stylesheet" href="/views/css/style.css">
    <link rel="stylesheet" href="/views/css/profile.css">
    <link rel="stylesheet" href="/views/css/alert.css">

</head>

<body style=" overflow-x: hidden;  ">
    <div class="alert hide3">
        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
        <span class="msg">Tải sách lên trang kiểm duyệt thành công</span>
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

    

    <div class="stackmain2">


        <div class="light3 col-12 d-none d-lg-block" style="height: 15vh;  top: 0; position: fixed; z-index: 90; opacity: 0.4;"></div>

        <!-- tabup -->
        


        <div class="row">
            <!-- navbar -->
            <?php
           include $_SERVER['DOCUMENT_ROOT'] . '/views/access/navbar.php';
            ?>
            <!-- navbar -->

            <!-- center -->
            <div class="col-12 col-lg-8" style=" height: 100vh;">
                <h5 class="mt-5 mx-5" style="color: white;">
                    <!-- Thu nhập và chiến lược
                    </h3>
                    <center>

                        <div class="col-12 " style="background-color: #000000; border-radius: 15px; overflow: hidden;">

                            <script src="https://www.amcharts.com/lib/3/amcharts.js?x"></script>
                            <script src="https://www.amcharts.com/lib/3/serial.js?x"></script>
                            <script src="https://www.amcharts.com/lib/3/themes/dark.js"></script>
                            <div id="chartdiv"></div>



                        </div>
                    </center> -->

                    <h3 class="mt-5 mx-5" style="color: white;
              ">
                        Sách của bạn
                    </h3>
                    <center>

                        <div class="col-11 " style="background-color: #3d3f3f; height: auto; border-radius: 10px;">
                            <div>
                                <div id="addcardhere" class="cardslider" style="transform: translateX(0) !important;">
                                    
                                    <?php while($mybooks = $mybookrs->fetch_assoc()){ ?>
                                     <!-- Card object  -->
                                    <div class="object-card-images">
                                        <!-- mot card -->
                                        <a href="./views/book.php?id=<?php echo $mybooks['id']?>">
                                        <div>
                                            <img src="/views/images/<?php echo $mybooks["img"] ?>" alt="." class="card-img-top img-avatar" />
                                        </div>
                                    </a>
                                        <div>
                                            <h3 class="cardName"><?php echo $mybooks["name"] ?></h3>
                                            <p>
                                                <div style="text-decoration: none !important; color:gray;
                                            font-size: 12px !important;" class="card-text"><?php echo $mybooks["luotdoc"] ?> lượt đọc </div>

                                            </p>
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end object card -->

                                       <?php
                                       $countmybooks++;
                                    
                                    } ?>
                                    
                                    
                                    
                                </div>
                            </div>
                    </center>

                    <h3 class="mt-5 mx-5" style="color: white;
              ">
                        Sách đọc gần đây
                    </h3>
                    <center>

                        <div class="col-11 " style="background-color: #3d3f3f; height: auto; border-radius: 10px;">
                            <div>
                                <div class="cardslider" style="transform: translateX(0) !important;">
                                    
                                <?php while($lichsudoc = $lichsudocrs->fetch_assoc()){?>

                                    <!-- Card object  -->
                                    <div class="object-card-images">
                                        <!-- mot card -->
                                        <a href="./views/book.php?id=<?php echo $lichsudoc['id']?>">
                                        <div>
                                            <img src="/views/images/<?php echo $lichsudoc["img"] ?>" alt="." class="card-img-top img-avatar" />
                                        </div>
                                    </a>
                                        <div>
                                            <h3 class="cardName"><?php echo $lichsudoc["name"] ?></h3>
                                            <p>
                                                <div style="text-decoration: none !important; color:gray;
                                            font-size: 12px !important;" class="card-text"><?php echo $lichsudoc["luotdoc"] ?> lượt đọc </div>

                                            </p>
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end object card -->
                                    <?php }?>

                                   
                                </div>
                            </div>
                        </div>
                    </center>
                    <h3 class="mt-5 mx-5" style="color: white;
              ">
                        Sách yêu thích
                    </h3>
                    <center>

                        <div class="col-11 " style="background-color: #3d3f3f; height: auto; border-radius: 10px;">
                            <div>
                                <div class="cardslider" style="transform: translateX(0) !important;">
                                    
                                <?php while($yeuthich = $sachyeuthichrs->fetch_assoc()){?>

                                    <!-- Card object  -->
                                    <div class="object-card-images">
                                        <!-- mot card -->
                                        <a href="./views/book.php?id=<?php echo $yeuthich['id']?>">
                                        <div>
                                            <img src="/views/images/<?php echo $yeuthich["img"] ?>" alt="." class="card-img-top img-avatar" />
                                        </div>
                                    </a>
                                        <div>
                                            <h3 class="cardName"><?php echo $yeuthich["name"] ?></h3>
                                            <p>
                                                <div style="text-decoration: none !important; color:gray;
                                            font-size: 12px !important;" class="card-text"><?php echo $yeuthich["luotdoc"] ?> lượt đọc </div>

                                            </p>
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end object card -->
                                    <?php }?>

                                   
                                </div>
                            </div>
                        </div>
                    </center>
                    </div>
                    <!-- /center -->
                    <!-- right -->
                    <!-- right -->
                    <div class="d-none d-lg-block col-lg-2" style=" position: fixed; right: 5px;">
                        <div class="myprofile">
                            <div class="avt" style="background-image: url(<?php echo $profile["avt"]?>);">

                            </div>
                        </div>
                        <div class="name">
                            <center>
                                <?php echo $profile["name"] ?>
                                <br> <span style="opacity: 0.9; font-size: small;">
                            <?php echo $_SESSION["name"];?>
                            
                        </span>
                            </center>


                        </div>
                        <div class="col-12 mt-1" style="background-color: #3d3f3f ; ">

                            <div>
                                <p style="color: white;">
                                    Số sách đã tải lên : <span id="sosach"> <?php echo $countmybooks ?> </span>
                                </p>
                            </div>
                        </div>
                        <!-- <div class="col-12 mt-1" style="background-color: #3d3f3f ; ">

                            <div>
                                <p style="color: white;">
                                    Số dư : <?php echo $profile["money"] ?>
                                </p>
                            </div>
                        </div> -->
                       
                        <a style="text-decoration: none;" href="/views/dangtai.php">
                            <div id="btn1" class="col-12 mt-1" style=" border: 1px solid white; border-radius: 5px;">
                           
                             <p id="text1" style="color: white; text-align: center;">
                                Tải sách lên
                            </p>
                           
                        </div>
                        </a>
                        <!-- <div id="btnruttien" class="col-12 mt-1" style=" border: 1px solid white; border-radius: 5px;">

                            <div id="btnruttien">
                                <p id="text1" style="color: white; text-align: center;">
                                    Rút tiền
                                </p>
                            </div>

                        </div> -->
                        <!-- <div class="col-12 mt-1" style=" border: 1px solid white; border-radius: 5px;">
                            <p id="text1" style="color: white; text-align: center;">
                                Nạp tiền
                            </p>
                        </div> -->
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
        <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->

        <!-- <script>
            function getdate(day){
                const today = new Date();
            const yyyy = today.getFullYear();
            let mm = today.getMonth() + 1; 
            let dd = today.getDate() + day;

                if(mm==1||mm==3||mm==5||mm==7||mm==8||mm==10||mm==12){
                    if(dd>31){
                        dd=dd-31;
                    }
                    if(dd<=0){
                       
                        mm--;
                        if(mm==7){
                            dd=31+dd;
                        }else{
                            dd=30+dd;
                        }
                        
                    }
                }else if(mm==2){
                    if(dd>28){
                        dd=dd-28;
                    }
                    if(dd<=0){
                        mm--;
                        dd=31+dd;
                    }
                }else{
                    if(dd>30){
                        dd=dd-30;
                    }
                    mm--
                    dd=31+dd;
                }
                
                if (dd < 10) dd = '0' + dd;
                
                if (mm < 10) mm = '0' + mm;

            const Today = yyyy+'-'+mm+'-'+dd;
            return Today;
            }
            var chartData = [{
                "date": getdate(-12),
                "distance": 227,
                "townName": "nhatvkdvh 90%,cndlvn 10%,tcntcnhn 10%",
                "townName2": "người hùng áo trắng",
                "townSize": 25,
                "latitude": 40.71,
                "duration": 408
            }, {
                "date": getdate(-11),
                "distance": 371,
                "townName": "nhatvkdvh 90%,cndlvn 10%,tcntcnhn 10%",
                "townSize": 14,
                "latitude": 38.89,
                "duration": 482
            }, {
                "date": getdate(-10),
                "distance": 433,
                "townName": "nhatvkdvh 90%,cndlvn 10%,tcntcnhn 10%",
                "townSize": 6,
                "latitude": 34.22,
                "duration": 562
            }, {
                "date": getdate(-9),
                "distance": 345,
                "townName": "nhatvkdvh 90%,cndlvn 10%,tcntcnhn 10%",
                "townSize": 7,
                "latitude": 30.35,
                "duration": 379
            }, {
                "date":getdate(-8),
                "distance": 480,
                "townName": "tcntcnhn 90%,cndlvn 10%,nhatcktvh 10%",
                "townName2": "trận chiến nội tâm của người hay nghĩ",
                "townSize": 10,
                "latitude": 25.83,
                "duration": 501
            }, {
                "date":getdate(-7),
                "distance": 386,
                "townName": "tcntcnhn 90%,cndlvn 10%,nhatcktvh 10%",
                "townSize": 7,
                "latitude": 30.46,
                "duration": 443
            }, {
                "date": getdate(-6),
                "distance": 348,
                "townName": "tcntcnhn 90%,cndlvn 10%,nhatcktvh 10%",
                "townSize": 10,
                "latitude": 29.94,
                "duration": 405
            }, {
                "date": getdate(-5),
                "distance": 238,
                "townName": "nhatvkdvh 90%,cndlvn 10%,tcntcnhn 10%",
                "townName2": "người anh hùng áo trắng và kẻ địch vô hình",
                "townSize": 16,
                "latitude": 29.76,
                "duration": 309
            }, {
                "date": getdate(-4),
                "distance": 218,
                "townName": "nhatvkdvh 90%,cndlvn 10%,tcntcnhn 10%",
                "townSize": 17,
                "latitude": 32.8,
                "duration": 287
            }, {
                "date": getdate(-3),
                "distance": 349,
                "townName": "nhatvkdvh 90%,cndlvn 10%,tcntcnhn 10%",
                "townSize": 11,
                "latitude": 35.49,
                "duration": 485
            }, {
                "date": getdate(-2),
                "distance": 603,
                "townName": "nhatvkdvh 90%,cndlvn 10%,tcntcnhn 10%",
                "townSize": 10,
                "latitude": 39.1,
                "duration": 890
            }, {
                "date": getdate(-1),
                "distance": 534,
                "townName": "cndlvn 90%,nhatvkdvh 10%,tcntcnhn 10%",
                "townName2": "cẩm nang du lịch VN",
                "townSize": 18,
                "latitude": 39.74,
                "duration": 810
            }, {
                "date": getdate(0),
                "townName": "cndlvn 90%,nhatvkdvh 10%,tcntcnhn 10%",
                "townSize": 12,
                "distance": 425,
                "duration": 670,
                "latitude": 40.75,
                "alpha": 0.4
            }, {
                "date": getdate(1),
                
                "latitude": 36.1,
                "duration": 470,
                "townName": "tcntcnhn 90%,nhatvkdvh 10%,cndlvn 10%",
                "townName2": "trận chiến nội tâm của người hay nghĩ",
                "bulletClass": "lastBullet"
            }, {
                "date": getdate(2)
            }, {
                "date": getdate(3)
            }, {
                "date": getdate(4)
            }, {
                "date": getdate(5)
            }, {
                "date": getdate(6)
            }];
           
            var chart = AmCharts.makeChart("chartdiv", {
                type: "serial",
                theme: "dark",
                dataDateFormat: "YYYY-MM-DD",
                dataProvider: chartData,

                addClassNames: true,
                startDuration: 1,
                color: "#FFFFFF",
                marginLeft: 0,

                categoryField: "date",
                categoryAxis: {
                    parseDates: true,
                    minPeriod: "DD",
                    autoGridCount: false,
                    gridCount: 50,
                    gridAlpha: 0.1,
                    gridColor: "#FFFFFF",
                    axisColor: "#555555",
                    dateFormats: [{
                        period: 'DD',
                        format: 'DD'
                    }, {
                        period: 'WW',
                        format: 'MMM DD'
                    }, {
                        period: 'MM',
                        format: 'MMM'
                    }, {
                        period: 'YYYY',
                        format: 'YYYY'
                    }]
                },

                valueAxes: [{
                    id: "a1",
                    title: "thu nhập (K VND)",
                    gridAlpha: 0,
                    axisAlpha: 0
                }, {
                    id: "a2",
                    position: "right",
                    gridAlpha: 0,
                    axisAlpha: 0,
                    labelsEnabled: false
                }, {
                    id: "a3",
                    title: "thời gian đọc",
                    position: "right",
                    gridAlpha: 0,
                    axisAlpha: 0,
                    inside: true,
                    duration: "mm",
                    durationUnits: {
                        DD: "d. ",
                        hh: "h ",
                        mm: "min",
                        ss: ""
                    }
                }],
                graphs: [{
                    id: "g1",
                    valueField: "distance",
                    title: "",
                    type: "column",
                    fillAlphas: 0.9,
                    valueAxis: "a1",
                    balloonText: "[[value]] k",
                    legendValueText: "[[value]] k",
                    legendPeriodValueText: "thu nhập: [[value.sum]]m",
                    lineColor: "#263138",
                    alphaField: "alpha",
                }, {
                    id: "g3",
                    title: "số giờ đọc",
                    valueField: "duration",
                    type: "line",
                    valueAxis: "a3",
                    lineColor: "#ff5755",
                    balloonText: "[[value]]",
                    lineThickness: 1,
                    legendValueText: "[[value]]",
                    bullet: "square",
                    bulletBorderColor: "#ff5755",
                    bulletBorderThickness: 1,
                    bulletBorderAlpha: 1,
                    dashLengthField: "dashLength",
                    animationPlayed: true
                }, {
                    id: "g2",
                    valueField: "latitude",
                    classNameField: "bulletClass",
                    title: "tên sách/ tỉ lệ:",
                    type: "line",
                    valueAxis: "a2",
                    lineColor: "#786c56",
                    lineThickness: 1,
                    legendValueText: "[[description]]",
                    descriptionField: "townName",
                    bullet: "round",
                    bulletSizeField: "townSize",
                    bulletBorderColor: "#786c56",
                    bulletBorderAlpha: 1,
                    bulletBorderThickness: 2,
                    bulletColor: "#000000",
                    labelText: "[[townName2]]",
                    labelPosition: "right",
                    balloonText: "[[value]]",
                    showBalloon: true,
                    animationPlayed: true,
                }],

                chartCursor: {
                    zoomable: false,
                    categoryBalloonDateFormat: "DD",
                    cursorAlpha: 0,
                    valueBalloonsEnabled: false
                },
                legend: {
                    bulletType: "round",
                    equalWidths: false,
                    valueWidth: 120,
                    useGraphSettings: true,
                    color: "#FFFFFF"
                }
            });
        </script> -->

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            const btn = document.getElementById('btn1');
            const tabup = document.getElementById('tabup');
            const tabup2 = document.getElementById('tabup2');
            const tabup_bg = document.getElementById('tabup_bg');
            const btn2 = document.getElementById('btn2');
            const btn3 = document.getElementById('btn3');
            // const btnruttien = document.getElementById('btnruttien');
            const btn22 = document.getElementById('btn22');

            btn22.addEventListener('click', function() {
                tabup_bg.classList.remove('show');
                tabup.classList.remove('show');
                const aler = document.querySelector('.alert');
                aler.classList.add('show3');
                aler.classList.remove('hide3');
                aler.classList.add('showAlert');
                setTimeout(function() {
                    aler.classList.add('hide3');
                    aler.classList.remove('show3');
                }, 3000);

            })
            btn.addEventListener('click', function() {
                tabup.classList.add('show');
                tabup_bg.classList.add('show');
            })
            btn2.addEventListener('click', function() {
                tabup.classList.remove('show');
                tabup_bg.classList.remove('show');
            })
            // btnruttien.addEventListener('click', function() {
            //     tabup2.classList.add('show');
            //     tabup_bg.classList.add('show');

            // })
            btn3.addEventListener('click', function() {
                tabup2.classList.remove('show');
                tabup_bg.classList.remove('show');
            })
           
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