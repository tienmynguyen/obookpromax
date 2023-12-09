<?php 
session_start();
ob_start();
    require_once $_SERVER['DOCUMENT_ROOT'] . '/controller/database_functions.php';
    $conn = db_connect();
    $id = $_GET["id"];
    $sql = "SELECT * FROM `thuvien` where id =".$id;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if(isset($_SESSION['is_login'])){
         $userid = $_SESSION['id'];
    }
   
    $rscmt = getcmt($conn,$id);


    if (isset($_POST['cmt'])) {
     $cmt = $_POST['comment'];
    sentcmt($conn, $id, $userid, $cmt);
    unset($_POST['cmt']);
    unset($cmt);
    $hd = "location:book.php?id=".$id;
    header($hd);
    
    }
    
    if(isset($_POST['yeuthich'])){
    setyeuthich($conn, $id, $userid);
    unset($_POST['yeuthich']);
    }

     ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $row['name']?></title>
    <link rel="icon" href="/images/logotitle.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="/views/css/preview.css" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" />
</head>

<body style="background-color: #1c1e1e">
   <!-- navbar -->
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/views/access/header.php';
    ?>
    <!-- navbar -->

    <!-- main -->
    <center>
        <div class="col-10 pt-4">
            <div id="bg1" class="row gap-2" style="background-color: antiquewhite; border-radius: 5px">
                <div class="col-12 col-lg-3 m-lg-3 bdtop">
                    <div>
                        <img class="baner1 pt-5" src="/views/images/<?php echo $row['img']?>" alt="" style="width: 190px; border-radius: 5px" />
                        <div class="bt1 pt-2">
                            <button type="button" onclick="reading()" class="btn btn-dark" style="width: 190px">
                  Đọc
                </button>
                        </div>

                        <div class="bt2 pt-2">

                            <a href="/views/reading/samples/docs/sach/<?php echo $id.".pdf"?>"><button type="button" class="btn btn-outline-primary" style="width: 190px">
                    Tải xuống
                  </button></a>
                        </div>
                        <div class="dropdown1 pt-2">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 190px">
                    Thao tác
                  </button>
                                <ul class="dropdown-menu">
                                    <?php if(isset($_SESSION['is_login'])){if($_SESSION['is_login']==true){?>
                                         <li><form action="" method="post">
                                        <input type="submit" class="dropdown-item" value="Yêu thích" name="yeuthich" >
                                    </form></li> 
                                    
                                    <?php }}?>
                                    <li><a class="dropdown-item" href="#">Sách tương tự</a></li>
                                    <li><a class="dropdown-item" href="#">Ẩn sách</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- star -->
                        <div class="row justify-content-center">
                            <div class="star-rate">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                        <!-- star -->

                        <div class="row">
                            <div class="col"></div>
                            <div class="icon1 col-3">
                                <img src="/views/images/reviews.svg" alt="" style="width: 2rem" /> Review
                            </div>
                            <div class="icon1 col-3">
                                <img src="/views/images/notes.svg" alt="" style="width: 2rem" /> Notes
                            </div>
                            <div class="icon1 col-3">
                                <img src="/views/images/share.svg" alt="" style="width: 2rem" /> Share
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                    <div class="row d-none d-lg-block" style="height: 500px">
                        <center>
                            <div class="col-11 mt-4" style="border: 1px solid; border-radius: 5px; height: 100px">
                                <div class="col-11">kiểm tra các thư viện gần đó</div>
                                <div class="col-11">
                                    <a href="https://labs.library.link/services/borrow/?isbn=9781408857885&embed=True&radius=500&refer=https://openlibrary.org/books/OL32856480M/A_Court_of_Mist_and_Fury">mèo thế giới</a
                    >
                  </div>
                  <div class="col-11">
                    <a
                      href="https://labs.library.link/services/borrow/?isbn=9781408857885&embed=True&radius=500&refer=https://openlibrary.org/books/OL32856480M/A_Court_of_Mist_and_Fury"
                      >Library link</a
                    >
                  </div>
                </div>
              </center>
            </div>
          </div>

          <div class="col-12 col-lg-8 m-lg-3">
            <div
              class="rowum"
              style="
                height: 100px;
                border-radius: 5px;
                border: 1px dashed;
                height: 1000px;
                overflow-y: scroll;
              "
            >
              <div class="row">
                <h5 class="col-4"><?php echo $row['note']?></h5>
                <br />
                <h3
                  class="col-12"
                  style="font-family: Pacifico; font-size: xxx-large"
                >
                  <?php echo $row['name']?>
                </h3>
                <div class="rate col-11 mt-5 mx-4" style=""></div>

                <div class="d-md-flex gap-5" style="justify-content: center">
                  <div
                    class="col-10 col-md-3 mt-2 mx-1"
                    style="border: 1px solid; border-radius: 5px"
                  >
                    Ngày xuất bản <br />
                    2016
                  </div>
                  <div
                    class="col-10 col-md-3 mt-2 mx-1"
                    style="border: 1px solid; border-radius: 5px"
                  >
                    Nhà xuất bản <br />
                    chưa cập nhật
                  </div>
                  <div
                    class="col-10 col-md-3 mt-2 mx-1"
                    style="border: 1px solid; border-radius: 5px"
                  >
                    Ngôn ngữ<br />
                    tiếng Việt
                  </div>
                </div>

                <div class="col-3 mt-2">tổng quan</div>
                <div class="col-3 mt-2">chi tiết</div>
                <div class="col-3 mt-2">đánh giá</div>
                <div class="col-3 mt-2">liên quan</div>
                <hr />
                <div class="col-4 mt-3">
                  <p class="">
                    Bản xem trước bằng:
                    <a href="" id="hreftext" class="txta">tiếng Anh</a>.
                                    </p>
                                </div>
                                <p style="text-align: justify">
                                    <?php echo $row['gioithieu']?>
                                </p>
                                <div class="col-4">
                                    <p class="">
                                        Chủ đề:
                                        <a id="hreftext1" href="#" class="txta"> Giả tưởng</a>,
                                        <a id="hreftext2" href="#" class="txta"> phiêu lưu</a>.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 pb-3" style="border: none; border-radius: 5px">
                                <div class="col-5">
                                    <h2>Nhận xét cộng đồng</h2>
                                </div>
                                <div class="cmt row">
                                    <div class="col-2 mt-2">Tâm trạng</div>
                                    <div class="col-3 col-md-3 col-lg-2 mt-2" style="border: 1px solid; border-radius: 20px; height: 30px">
                                        <p>Sợ hãi 20%</p>
                                    </div>
                                    <div class="col-3 col-md-3 col-lg-2 mx-2 mt-2" style="border: 1px solid; border-radius: 20px; height: 30px">
                                        <p>Tức giận 8%</p>
                                    </div>
                                    <div class="col-3 col-md-3 col-lg-2 mr-5 mx-lg-2 mt-2" style="border: 1px solid; border-radius: 20px; height: 30px">
                                        <p>Lãng mạn 14%</p>
                                    </div>
                                    <div class="col-3 col-md-3 col-lg-2 mx-5 mx-lg-2 mt-2" style="border: 1px solid; border-radius: 20px; height: 30px">
                                        <p>Kì lạ 14%</p>
                                    </div>
                                </div>
                                <div class="cmt row pt-2">
                                    <div class="col-2 col-2 mt-2">Chiều dài</div>
                                    <div class="col-3 col-md-3 col-lg-2 mt-2" style="border: 1px solid; border-radius: 20px; height: 30px">
                                        <p>Dài 66%</p>
                                    </div>
                                    <div class="col-3 col-md-3 col-lg-2 mx-2 mt-2" style="border: 1px solid; border-radius: 20px; height: 30px">
                                        <p>Trung_bình_30%</p>
                                    </div>
                                    <div class="col-3 col-md-3 col-lg-2 mx-5 mx-lg-2 mt-2" style="border: 1px solid; border-radius: 20px; height: 30px">
                                        <p>Ngắn 3%</p>
                                    </div>
                                </div>
                                <div class="cmt row pt-2">
                                    <div class="col-2 col-2 mt-2">Cảnh báo</div>
                                    <div class="col-4" style="border: 1px solid; border-radius: 20px; height: 30px">
                                        <p>Kích hoạt cảnh báo 50%</p>
                                    </div>
                                    <div class="col-4 mx-2" style="border: 1px solid; border-radius: 20px; height: 30px">
                                        <p>chủ đề người lớn 10%</p>
                                    </div>
                                </div>
                                <!-- comment -->
                                <div class="cmt pt-3 commentbook">
                                    <div style="
                      margin: 0 auto;
                      text-transform: uppercase;
                      font-size: large;
                      font-weight: 700;
                      text-align: center;
                      padding-bottom: 10px;
                    ">
                                        Bình luận
                                    </div>

                                    <div class="comment-session">
                                        <!-- one post comment -->
                                        <?php 
                                        
                                        while($row = $rscmt->fetch_assoc()){
                                            $rsuser = getuser($conn, $row['userid']);
                                            $user = $rsuser->fetch_assoc();
                                            ?>
                                            <div class="post-comment">
                                            <div class="list pcomment">
                                                <div class="user">
                                                    <div class="user-image">
                                                        <img src="<?php echo $user['avt']?>" alt="" />
                                                    </div>
                                                    <div class="user-meta">
                                                        <div class="name"><?php echo $user['user']?></div>
                                                        <div class="day"><?php echo $row['date']?></div>
                                                    </div>
                                                </div>
                                                <div class="comment-post">
                                                    <?php echo $row['cmt']?>
                                            </div>
                                            </div>
                                        </div>
                                            <?php


                                        }
                                        
                                        
                                        ?>
                                        <!-- one post comment -->
                                        

                                        <!-- comment-box -->
                                        <?php 
                                        
                                        if(isset($_SESSION['is_login'])){if($_SESSION['is_login']==true){
                                            ?>
                                            <div class="comment-box p-2" id="bcomment">
                                            <div class="user">
                                                <div class="image">
                                                    <img src="<?php echo $_SESSION['avt']?>" alt="" />
                                                </div>
                                                <div class="name">Bình luận của bạn</div>
                                            </div>
                                            <form action="" method="post">
                                                <textarea name="comment" placeholder="Your Messenge"></textarea>
                                                <input type="submit" name="cmt" class="comment-submit">
                          comment
                        </input>
                                            </form>
                                        </div>
                                      
                                    <?php }}
                                        
                                        ?>
                                    </div>
                                </div>

                                <!--end  comment -->
                            </div>
                    </div>
                    <!-- card -->
                    <!-- one kind of book -->
                    <div class="cardonbook" style="
                margin-top: 3rem;
                height: 100px;
                border-radius: 5px;
                border: 1px dashed;
                height: auto;
                overflow-y: scroll;
              ">
                        <div class="card-link">
                            <a id="card-link-title" href="#"> Sách liên quan </a>
                            <hr class="hrline" width="76%" style="
                    margin: 0rem auto;
                    height: 5px;
                    background-color: rgb(220, 20, 20);
                  " />
                        </div>
                        <div class="cardslider p-5">
                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img2.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Harry potter</h3>
                                    <div class="card-text">7 chương</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img3.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Ông già và biển cả</h3>
                                    <div class="card-text">Ông lão đánh cá và con cá ngừ.</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img4.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Chúa tể của những chiếc nhẫn</h3>
                                    <div class="card-text">Updateing...</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img5.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Don Quixote</h3>
                                    <div class="card-text">Ngữ văn 9</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img6.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Chiến tranh và hoà bình</h3>
                                    <div class="card-text">Updateing</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img7.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Hoàng tử bé</h3>
                                    <div class="card-text">Updateing...</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img8.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">SherLock Holmes</h3>
                                    <div class="card-text">Chom Nasus</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img9.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Romeo và Juliet</h3>
                                    <div class="card-text">Độc dược Tình yêu.</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img10.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Tôi là Bêtô</h3>
                                    <div class="card-text">Updateing...</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img11.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Căn nhà kẹo</h3>
                                    <div class="card-text">a way to crazy.</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img12.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Người đi đâu</h3>
                                    <div class="card-text">a way to crazy.</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img13.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Suy nghĩ và làm giàu</h3>
                                    <div class="card-text">a way to crazy.</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img13.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Think And Grow Rich</h3>
                                    <div class="card-text">Người dịch: Thảo Triệu</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img14.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Hình Hài Của Nước</h3>
                                    <div class="card-text">Dịch: Thu Phương-Hồng Thu</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img15.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Perfect</h3>
                                    <div class="card-text">Tác giả: Rachel Joyce</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img16.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Life of Pi</h3>
                                    <div class="card-text">Uppdating...</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img17.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Hoàng Tử Bé</h3>
                                    <div class="card-text">Nhà xuất bản Kim Đồng</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img18.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Việt Nam Phong Tục</h3>
                                    <div class="card-text">Tác giả: Phan Kế Bình</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img19.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Hai Số Phận</h3>
                                    <div class="card-text">Tác giả: Jeffrey Archer</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img20.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">IRON HANS</h3>
                                    <div class="card-text">
                                        Tuyển tập truyện cổ tích thế giới
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img21.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">NGA</h3>
                                    <div class="card-text">Truyện ngắn đặc sắc</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img22.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Không Gia Đình</h3>
                                    <div class="card-text">Tác giả: Hector Malot</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img23.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Truyện Thúy Kiều</h3>
                                    <div class="card-text">Nguyễn Du</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img24.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Đối thoại cùng ma</h3>
                                    <div class="card-text">Tác giả: Eva Ibbotson</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img25.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Nếu chỉ còn một ngày để sống</h3>
                                    <div class="card-text">NIGOLA YOON</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img26.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Những Người Khốn Khổ</h3>
                                    <div class="card-text">Tác giả: VICTOR HUGO</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img27.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Cái Chết Huy Hoàng</h3>
                                    <div class="card-text">Tác giả: J. D. ROBB</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img28.JPG" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Harry Potter và hoàng tử lai</h3>
                                    <div class="card-text">Nhà xuất bản Trẻ</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img29.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Tiếng Hán-Tạng nguyên thủy</h3>
                                    <div class="card-text">
                                        Bài chi tiết: Phương ngữ tiếng Hán
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img30.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">The Fault In our Stars</h3>
                                    <div class="card-text">Tác giả: John Green</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img31.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Hỏa Ngục</h3>
                                    <div class="card-text">Tác giả: DAN BROWN</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img32.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Hai Đứa Trẻ</h3>
                                    <div class="card-text">Tác giả: Thạch Lam</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img33.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Nếu được yêu như thế</h3>
                                    <div class="card-text">Tác giả: Nguyên Ngộ Không</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img34.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">The Sun The Moon The Stars</h3>
                                    <div class="card-text">Tác giả: Junot Diaz</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img35.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Săn Cá Thần</h3>
                                    <div class="card-text">Tác giả: Đặng Thiếu Quang</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->

                            <!-- Card object  -->
                            <div class="object-card-images">
                                <!-- mot card -->
                                <div>
                                    <img src="/views/images/img36.jpg" alt="." class="card-img-top img-avatar" />
                                </div>
                                <div>
                                    <h3 class="cardName">Ngôi Nhà Nghìn Hành Lang</h3>
                                    <div class="card-text">Tác giả: Thu Phương</div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end object card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </center>



        <!-- Footer -->
        <footer class="text-center text-lg-start bg-dark text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block" style="color: white;">
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
            let bg1 = document.getElementById("bg1");
            let hreftext = document.getElementById("hreftext");
            let hreftext1 = document.getElementById("hreftext1");
            let hreftext2 = document.getElementById("hreftext2");

            const pcmt = document.getElementsByClassName("pcomment");
            let bcomment = document.getElementById("bcomment");

            let cardtext = document.getElementById("card-link-title");
            const objcard = document.getElementsByClassName("object-card-images");
            var check1 = true;
            var w = window.outerWidth;

            function reading() {
                if (w > 1400) {
                    <?php
                    $_SESSION["bookid"] = $id;
                        ?>
                    document.location = '/views/reading/samples/docs/index.php';
                } else {
                    document.location.href = 'https://drive.google.com/file/d/1q_NrF5ADvBndaJInWNWnh_8i4C46sU0d/view';
                }
            }



            function onclickfunction(s, x, y) {
                bg1.style.backgroundColor = "" + s;
                bg1.style.color = "" + x;

                hreftext.style.color = "violet";
                hreftext1.style.color = "violet";
                hreftext2.style.color = "violet";

                bcomment.style.backgroundColor = "" + y;
                for (let i = 0; i < pcmt.length; i++) {
                    pcmt[i].style.backgroundColor = "" + y;
                }

                cardtext.style.color = "" + x;
                for (let j = 0; j < objcard.length; j++) {
                    objcard[j].style.backgroundColor = "" + y;
                }

                // if (s == "antiquewhite") {
                //   bg1.style.backgroundColor = "" + s;
                //   bg1.style.color = "" + x;

                //   hreftext.style.color = "black";
                //   hreftext1.style.color = "black";
                //   hreftext2.style.color = "black";

                //   bcomment.style.color = "" + y;
                //   pcomment.style.color = "" + y;
                //   pcomment1.style.color = "" + y;

                //   check1 = true;
                // } else {
                //   bg1.style.backgroundColor = "" + s;
                //   bg1.style.color = "" + x;
                //   cardtext.style.color = "red";
                //   hreftext.style.color = "violet";
                //   hreftext1.style.color = "violet";
                //   hreftext2.style.color = "violet";
                //   check1 = false;
                // }
            }
        </script>

        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe " crossorigin="anonymous "></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="/views/js/app.js"></script>
</body>

</html>