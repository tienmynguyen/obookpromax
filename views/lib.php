
<?php
session_start();
ob_start();
  require_once $_SERVER['DOCUMENT_ROOT'] . '/controller/database_functions.php';
$conn = db_connect();

$page = "lib";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thư viện</title>
    <link rel="icon" href="/views/images/logotitle.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" href="/views/css/Type2.css" />
    <link rel="stylesheet" href="/views/css/lib.css" />
    <link rel="stylesheet" href="/views/css/style.css" />
    <link rel="stylesheet" href="/views/css/profile.css" />
</head>

<body id="main-contend-body" style="overflow-x: hidden">
    <!-- navbar -->
    <!-- navbar -->
    <?php
     include $_SERVER['DOCUMENT_ROOT'] . '/views/access/header.php';
    ?>
    <!-- navbar -->
    <!-- navbar -->

    <div class="stackmain2">
        <div class="light3 col-12 d-none d-lg-block" style="height: 15vh; top: 0; position: fixed; z-index: 90; opacity: 0.4"></div>

        <div class="row ">
            
            <!-- navbar-->
              <?php
              include $_SERVER['DOCUMENT_ROOT'] . '/views/access/navbar.php';
              ?>
             <!-- navbar-->

            <!-- center -->
            <div class="col-12 col-lg-8 row p-lg-5 discenter" id="centerlib" style="height: 100vh">


            <?php
            
            $sql = "SELECT * FROM `thuvien`";
           
           
            for($ck = 0; $ck <3 ; $ck++){
              $result = $conn->query($sql);
            while($row = $result ->fetch_assoc()) {?>

                <!-- Card object  -->
                
                <div class="col-5 col-md-3 col-lg-2 object-card-images ">
                    <!-- mot card -->
                    <a href="views/book.php?id=<?php echo $row["id"]?>">
                        <div>
                            <img src="/views/images/<?php echo $row['img'] ?>" alt="." class="card-img-top img-avatar" />
                        </div>
                    </a>

                    <div class="pt-3">
                        <div class="d-none cardCategoryBook">  <?php echo $row['theloai'] ?> </div>
                        <div class='d-none cardSizeBook'> <?php echo $row['dodai'] ?> </div>
                        <h3 class="cardName"style=" font-size: medium; "><?php echo $row['name'] ?></h3>
                        <div class="card-text" style="font-size: small;"><?php echo $row['note'] ?></div>
                    </div>
                    <!-- end card -->
                </div>
             
                <?php
            }
          }
            ?>

            </div>
            <!-- /center -->

            <!-- right -->
            <div id="right-fil" class="col-6 col-lg-2 py-5" style="position: fixed; right: 0">
                <div style="padding-top: 10px; padding-left: 5px; padding-right: 5px">
                    <div class="fil col-12" style="">
                    <center>
                      <div style="font-size: xx-large; color: white;">
                        Bộ lọc
                      </div>
                    </center>
                  </div>
                    <div class="fil-search col-12 mt-1" style="">
                        <input id="FilterBooksBar" style="width: 100%; height: 100%" type="text" onkeyup="FilterBooks()" name="FilterBooksBar" placeholder="Tìm kiếm" />
                    </div>
                    <!--  -->
                    <div id="" class="col-12 mt-0 range-line" style="">
                    <div class="price-input">
                          <div class="field">
                            <span>Min</span>
                            <input type="number" class="input-min" onchange="FilterBooks()" value="25">
                          </div>
                          <div class="separator">-</div>
                          <div class="field">
                            <span>Max</span>
                            <input type="number" class="input-max" onchange=" FilterBooks()" value="75">
                          </div>
                        </div>
                        <div class="sliderL1">
                          <div class="progress"></div>
                        </div>
                        <div class="range-input">
                          <input type="range" class="range-min" min="0" max="100" value="25" step="1">
                          <input type="range" class="range-max" min="0" max="100" value="75" step="1">
                        </div>
                      </div>
                    <!--  -->
                    <div onclick="showall()" id="tatca" class="btn-fil col-12 mt-1" style="">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                <path
                  d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"
                />
                <path
                  d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"
                />
              </svg>
                        Tất cả</p>
                        <div class='d-none categoryBook'> </div>
                    </div>
                    <div onclick="show('phieuluu')" id="phieuluu" class="btn-fil col-12 mt-1" style="">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flag" viewBox="0 0 16 16">
                <path
                  d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21.294 21.294 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21.317 21.317 0 0 0 14 7.655V1.222z"
                />
              </svg>
                        Phiêu lưu</p>
                        <div class='d-none categoryBook'>phieuluu</div>
                    </div>
                    <div onclick="show('nghethuat')" id="nghethuat" class="btn-fil col-12 mt-1" style="">
                    <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16">
                <path
                  d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.39 3.39 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3.122 3.122 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043.002.001h-.002z"
                />
              </svg>
                        Nghệ thuật</p>
                        <div class='d-none categoryBook'>nghethuat</div>
                    </div>
                    <div onclick="show('treem')" id="treem" class="btn-fil col-12 mt-1" style="">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon" viewBox="0 0 16 16">
                <path
                  fill-rule="evenodd"
                  d="M8 9.984C10.403 9.506 12 7.48 12 5a4 4 0 0 0-8 0c0 2.48 1.597 4.506 4 4.984ZM13 5c0 2.837-1.789 5.227-4.52 5.901l.244.487a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.244-.487C4.789 10.227 3 7.837 3 5a5 5 0 0 1 10 0Zm-6.938-.495a2.003 2.003 0 0 1 1.443-1.443C7.773 2.994 8 2.776 8 2.5c0-.276-.226-.504-.498-.459a3.003 3.003 0 0 0-2.46 2.461c-.046.272.182.498.458.498s.494-.227.562-.495Z"
                />
              </svg>
                        Trẻ em</p>
                        <div class='d-none categoryBook'>treem</div>
                    </div>
                    <div onclick="show('khoahocvientuong')" id="khoahocvientuong" class="btn-fil col-12 mt-1" style="">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shuffle" viewBox="0 0 16 16">
                <path
                  fill-rule="evenodd"
                  d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.624 9.624 0 0 0 7.556 8a9.624 9.624 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.595 10.595 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.624 9.624 0 0 0 6.444 8a9.624 9.624 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5z"
                />
                <path
                  d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192zm0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192z"
                />
              </svg>
                        Khoa học viễn tưởng</p>
                        <div class='d-none categoryBook'>khoahocvientuong</div>
                    </div>
                    <div onclick="show('tuongtuong')" id="tuongtuong" class="btn-fil col-12 mt-1" style="">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-snapchat" viewBox="0 0 16 16">
                <path
                  d="M15.943 11.526c-.111-.303-.323-.465-.564-.599a1.416 1.416 0 0 0-.123-.064l-.219-.111c-.752-.399-1.339-.902-1.746-1.498a3.387 3.387 0 0 1-.3-.531c-.034-.1-.032-.156-.008-.207a.338.338 0 0 1 .097-.1c.129-.086.262-.173.352-.231.162-.104.289-.187.371-.245.309-.216.525-.446.66-.702a1.397 1.397 0 0 0 .069-1.16c-.205-.538-.713-.872-1.329-.872a1.829 1.829 0 0 0-.487.065c.006-.368-.002-.757-.035-1.139-.116-1.344-.587-2.048-1.077-2.61a4.294 4.294 0 0 0-1.095-.881C9.764.216 8.92 0 7.999 0c-.92 0-1.76.216-2.505.641-.412.232-.782.53-1.097.883-.49.562-.96 1.267-1.077 2.61-.033.382-.04.772-.036 1.138a1.83 1.83 0 0 0-.487-.065c-.615 0-1.124.335-1.328.873a1.398 1.398 0 0 0 .067 1.161c.136.256.352.486.66.701.082.058.21.14.371.246l.339.221a.38.38 0 0 1 .109.11c.026.053.027.11-.012.217a3.363 3.363 0 0 1-.295.52c-.398.583-.968 1.077-1.696 1.472-.385.204-.786.34-.955.8-.128.348-.044.743.28 1.075.119.125.257.23.409.31a4.43 4.43 0 0 0 1 .4.66.66 0 0 1 .202.09c.118.104.102.26.259.488.079.118.18.22.296.3.33.229.701.243 1.095.258.355.014.758.03 1.217.18.19.064.389.186.618.328.55.338 1.305.802 2.566.802 1.262 0 2.02-.466 2.576-.806.227-.14.424-.26.609-.321.46-.152.863-.168 1.218-.181.393-.015.764-.03 1.095-.258a1.14 1.14 0 0 0 .336-.368c.114-.192.11-.327.217-.42a.625.625 0 0 1 .19-.087 4.446 4.446 0 0 0 1.014-.404c.16-.087.306-.2.429-.336l.004-.005c.304-.325.38-.709.256-1.047Zm-1.121.602c-.684.378-1.139.337-1.493.565-.3.193-.122.61-.34.76-.269.186-1.061-.012-2.085.326-.845.279-1.384 1.082-2.903 1.082-1.519 0-2.045-.801-2.904-1.084-1.022-.338-1.816-.14-2.084-.325-.218-.15-.041-.568-.341-.761-.354-.228-.809-.187-1.492-.563-.436-.24-.189-.39-.044-.46 2.478-1.199 2.873-3.05 2.89-3.188.022-.166.045-.297-.138-.466-.177-.164-.962-.65-1.18-.802-.36-.252-.52-.503-.402-.812.082-.214.281-.295.49-.295a.93.93 0 0 1 .197.022c.396.086.78.285 1.002.338.027.007.054.01.082.011.118 0 .16-.06.152-.195-.026-.433-.087-1.277-.019-2.066.094-1.084.444-1.622.859-2.097.2-.229 1.137-1.22 2.93-1.22 1.792 0 2.732.987 2.931 1.215.416.475.766 1.013.859 2.098.068.788.009 1.632-.019 2.065-.01.142.034.195.152.195a.35.35 0 0 0 .082-.01c.222-.054.607-.253 1.002-.338a.912.912 0 0 1 .197-.023c.21 0 .409.082.49.295.117.309-.04.56-.401.812-.218.152-1.003.638-1.18.802-.184.169-.16.3-.139.466.018.14.413 1.991 2.89 3.189.147.073.394.222-.041.464Z"
                />
              </svg>
                        Tưởng tượng</p>
                        <div class='d-none categoryBook'>tuongtuong</div>
                    </div>
                    <div onclick="show('tieusu')" id="tieusu" class="btn-fil col-12 mt-1" style="">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                <path
                  d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"
                />
              </svg>
                       Tiểu sử</p>
                        <div class='d-none categoryBook'>tieusu</div>
                    </div>
                    <div onclick="show('langman')" id="langman" class="btn-fil col-12 mt-1" style="">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-through-heart" viewBox="0 0 16 16">
                <path
                  fill-rule="evenodd"
                  d="M2.854 15.854A.5.5 0 0 1 2 15.5V14H.5a.5.5 0 0 1-.354-.854l1.5-1.5A.5.5 0 0 1 2 11.5h1.793l.53-.53c-.771-.802-1.328-1.58-1.704-2.32-.798-1.575-.775-2.996-.213-4.092C3.426 2.565 6.18 1.809 8 3.233c1.25-.98 2.944-.928 4.212-.152L13.292 2 12.147.854A.5.5 0 0 1 12.5 0h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.854.354L14 2.707l-1.006 1.006c.236.248.44.531.6.845.562 1.096.585 2.517-.213 4.092-.793 1.563-2.395 3.288-5.105 5.08L8 13.912l-.276-.182a21.86 21.86 0 0 1-2.685-2.062l-.539.54V14a.5.5 0 0 1-.146.354l-1.5 1.5Zm2.893-4.894A20.419 20.419 0 0 0 8 12.71c2.456-1.666 3.827-3.207 4.489-4.512.679-1.34.607-2.42.215-3.185-.817-1.595-3.087-2.054-4.346-.761L8 4.62l-.358-.368c-1.259-1.293-3.53-.834-4.346.761-.392.766-.464 1.845.215 3.185.323.636.815 1.33 1.519 2.065l1.866-1.867a.5.5 0 1 1 .708.708L5.747 10.96Z"
                />
              </svg>
                        Lãng mạn</p>
                        <div class='d-none categoryBook'>langman</div>
                    </div>
                    <div onclick="show('lichsu')" id="lichsu" class="btn-fil col-12 mt-1" style="">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-asia-australia" viewBox="0 0 16 16">
                <path
                  d="m10.495 6.92 1.278-.619a.483.483 0 0 0 .126-.782c-.252-.244-.682-.139-.932.107-.23.226-.513.373-.816.53l-.102.054c-.338.178-.264.626.1.736a.476.476 0 0 0 .346-.027ZM7.741 9.808V9.78a.413.413 0 1 1 .783.183l-.22.443a.602.602 0 0 1-.12.167l-.193.185a.36.36 0 1 1-.5-.516l.112-.108a.453.453 0 0 0 .138-.326ZM5.672 12.5l.482.233A.386.386 0 1 0 6.32 12h-.416a.702.702 0 0 1-.419-.139l-.277-.206a.302.302 0 1 0-.298.52l.761.325Z"
                />
                <path
                  d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM1.612 10.867l.756-1.288a1 1 0 0 1 1.545-.225l1.074 1.005a.986.986 0 0 0 1.36-.011l.038-.037a.882.882 0 0 0 .26-.755c-.075-.548.37-1.033.92-1.099.728-.086 1.587-.324 1.728-.957.086-.386-.114-.83-.361-1.2-.207-.312 0-.8.374-.8.123 0 .24-.055.318-.15l.393-.474c.196-.237.491-.368.797-.403.554-.064 1.407-.277 1.583-.973.098-.391-.192-.634-.484-.88-.254-.212-.51-.426-.515-.741a6.998 6.998 0 0 1 3.425 7.692 1.015 1.015 0 0 0-.087-.063l-.316-.204a1 1 0 0 0-.977-.06l-.169.082a1 1 0 0 1-.741.051l-1.021-.329A1 1 0 0 0 11.205 9h-.165a1 1 0 0 0-.945.674l-.172.499a1 1 0 0 1-.404.514l-.802.518a1 1 0 0 0-.458.84v.455a1 1 0 0 0 1 1h.257a1 1 0 0 1 .542.16l.762.49a.998.998 0 0 0 .283.126 7.001 7.001 0 0 1-9.49-3.409Z"
                />
              </svg>
                        Lịch sử</p>
                        <div class='d-none categoryBook'>lichsu</div>
                    </div>
                    <div onclick="show('amnhac')" id="amnhac" class="btn-fil col-12 mt-1" style="">
                    <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16">
                <path
                  d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"
                />
                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z" />
                <path
                  d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"
                />
              </svg>
                        Âm nhạc</p>
                        <div class='d-none categoryBook'>amnhac</div>
                    </div>
              <div onclick="show('trinhtham')" id="trinhtham" class="btn-fil col-12 mt-1" style="">
              <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
                />
              </svg>
                        Trinh thám</p>
                        <div class='d-none categoryBook'>trinhtham</div>
                    </div>
              <div onclick="show('sachgiaokhoa')" id="sachgiaokhoa" class="btn-fil col-12 mt-1" style="">
              <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                <path
                  d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"
                />
              </svg>
                        Sách giáo khoa</p>
                        <div class='d-none categoryBook'>sachgiaokhoa</div>
                    </div>
              <div onclick="show('nauan')" id="nauan" class="btn-fil col-12 mt-1" style="">
              <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-egg-fried" viewBox="0 0 16 16">
                <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                <path
                  d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z"
                />
              </svg>
                        Nấu ăn</p>
                        <div class='d-none categoryBook'>nauan</div>
                    </div>
            <div onclick="show('tongiao')" id="tongiao" class="btn-fil col-12 mt-1" style="">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                <path
                  d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"
                />
                <path
                  d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"
                />
              </svg>
                        Tôn giáo</p>
                        <div class='d-none categoryBook'>tongiao</div>
                    </div>
            <div onclick="show('khoahoc')" id="khoahoc" class="btn-fil col-12 mt-1" style="">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code" viewBox="0 0 16 16">
                <path
                  d="M5.854 4.854a.5.5 0 1 0-.708-.708l-3.5 3.5a.5.5 0 0 0 0 .708l3.5 3.5a.5.5 0 0 0 .708-.708L2.707 8l3.147-3.146zm4.292 0a.5.5 0 0 1 .708-.708l3.5 3.5a.5.5 0 0 1 0 .708l-3.5 3.5a.5.5 0 0 1-.708-.708L13.293 8l-3.147-3.146z"
                />
              </svg>
                        Khoa học</p>
                        <div class='d-none categoryBook'>khoahoc</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- scroll to top -->
    <a href="#">
        <div id="totop">
            <div style="
            width: 50px;
            height: 50px;
            background-color: #d3c0f9;
            position: fixed;
            bottom: 20px;
            border-radius: 50%;
            right: 30px;
            z-index: 99;
            display: flex;
            align-items: center;
            justify-content: center;
          ">
                <img src="/views/images/arrow.png" style="
              height: 30px;
              width: 30px;
              transform: rotate(-90deg);
              margin-top: -4px;
            " alt="" />
            </div>
        </div>
    </a>
    <div id="fil-mobile-butn" class="d-block d-lg-none">
        <div style="
          width: 50px;
          height: 50px;
          background-color: #d3c0f9;
          position: fixed;
          bottom: 70px;
          border-radius: 50%;
          right: 30px;
          z-index: 99;
          display: flex;
          align-items: center;
          justify-content: center;
        ">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path
            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
          />
        </svg>
        </div>
    </div>

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
        const cursor = document.querySelector(".cursor");

        var timeout;
        let main2 = document.getElementById("main2");

        let totop = document.getElementById("totop");
        let fil_mobile_btn = document.getElementById("fil-mobile-butn");
        let right_fil = document.getElementById("right-fil");
        fil_mobile_btn.addEventListener("click", function() {
            right_fil.classList.toggle("on-fil");
        });
        showall();

        function showall() {
            const object1 = document.querySelectorAll(".object-card-images");
            for (var i = 0; i < object1.length; i++) {
                object1[i].classList.add("show");
            }
            const topic0 = document.querySelectorAll(".btn-fil");
            for (var i = 0; i < topic0.length; i++) {
                topic0[i].classList.remove("btn-select");
            }
            const tatca = document.getElementById("tatca");
            tatca.classList.add("btn-select");
        }

        function hiddenall() {
            const object1 = document.querySelectorAll(".object-card-images");
            for (var i = 0; i < object1.length; i++) {
                object1[i].classList.remove("show");
            }
        }

        
        window.addEventListener("scroll", function() {
            var scroll_y = this.scrollY;

            if (scroll_y > 2000) {
                totop.style.display = "block";
            } else {
                totop.style.display = "none";
            }
        });
    </script>
    <script>
        function FilterBooks(){
            const inputfilbooks = document.getElementById("FilterBooksBar");
            const filbooks = inputfilbooks.value.toUpperCase();
            const object1 = document.querySelectorAll(".object-card-images");
            const rangeInput = document.querySelectorAll(".range-input input");
            const categorybook =document.querySelectorAll(".btn-select");
            let minVal = parseInt(rangeInput[0].value),
                maxVal = parseInt(rangeInput[1].value);
            let cateBook = categorybook[0].getElementsByClassName("categoryBook")[0].innerText.toUpperCase();
                for (var i = 0; i < object1.length; i++) {
                let namef =  object1[i].getElementsByClassName("cardName")[0];
                let name2f = object1[i].getElementsByClassName("card-text")[0];
                let name3f =  object1[i].getElementsByClassName("cardSizeBook")[0].innerText;
                let name4f = object1[i].getElementsByClassName("cardCategoryBook")[0];
                let filtext = namef.innerText.toUpperCase();
                let filtext2 = name2f.innerText.toUpperCase();
                let filtext4 =name4f.innerText.toUpperCase();
                if((filtext.includes(filbooks)==true || filtext2.includes(filbooks) == true)&&(name3f >=minVal &&name3f<=maxVal)&&(filtext4.includes(cateBook)==true))  object1[i].classList.add("show");
                else object1[i].classList.remove("show");
                
                }

        }
        //ShowbookFS();

    </script>

    <script>

        function show(str) {
                    const btntest = document.getElementById(str);
                    const topic0 = document.querySelectorAll(".btn-fil");
                    for (var i = 0; i < topic0.length; i++) {
                        topic0[i].classList.remove("btn-select");
                    }
                    btntest.classList.add("btn-select");
                    FilterBooks();
                }
    </script>

    <script>   
          const rangeInput = document.querySelectorAll(".range-input input"),
            priceInput = document.querySelectorAll(".price-input input"),
            range = document.querySelector(".sliderL1 .progress");
          let priceGap = 10;

          priceInput.forEach((input) => {
            input.addEventListener("input", (e) => {
              let minPrice = parseInt(priceInput[0].value),
                maxPrice = parseInt(priceInput[1].value);

              if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
                if (e.target.className === "input-min") {
                  rangeInput[0].value = minPrice;
                  range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
                  FilterBooks();
                } else {
                  rangeInput[1].value = maxPrice;
                  range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                  FilterBooks();
                }
              }
            });
          });

          rangeInput.forEach((input) => {
            input.addEventListener("input", (e) => {
              let minVal = parseInt(rangeInput[0].value),
                maxVal = parseInt(rangeInput[1].value);

              if (maxVal - minVal < priceGap) {
                if (e.target.className === "range-min") {
                  rangeInput[0].value = maxVal - priceGap;
                } else {
                  rangeInput[1].value = minVal + priceGap;
                }
              } else {
                priceInput[0].value = minVal;
                priceInput[1].value = maxVal;
                range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
                range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
                FilterBooks();
              }
             
            });
          });
          
    </script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/views/js/app.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <?php
            
            mysqli_close($conn);
            ?>
</body>

</html>