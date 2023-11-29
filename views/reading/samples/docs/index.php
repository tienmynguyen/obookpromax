<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/controller/database_functions.php';
$conn = db_connect();


setluotdoc($conn, $_SESSION["bookid"]);
if(isset($_SESSION["id"])){
  setlichsudoc($conn, $_SESSION["bookid"], $_SESSION["id"]);
}

?>




<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
  <!--<![endif]-->

  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <script
      type="text/javascript"
      src="../../extras/jquery.min.1.7.js"
    ></script>
    <script
      type="text/javascript"
      src="../../extras/jquery-ui-1.8.20.custom.min.js"
    ></script>
    <script
      type="text/javascript"
      src="../../extras/jquery.mousewheel.min.js"
    ></script>
    <script
      type="text/javascript"
      src="../../extras/modernizr.2.5.3.min.js"
    ></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <script type="text/javascript" src="../../lib/hash.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="move.css" />
    <link rel="stylesheet" href="audio.css" />
  </head>

  <body style="background-color: rgb(83, 83, 83)">
    <!-- navbar -->

    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark"
      style="z-index: 10"
    >
      <div class="container">
        <a class="navbar-brand" href="/trangchu">OBooks</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/trangchu"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/lib">Thư viện</a>
            </li>
            <li class="nav-item dropdown" onclick="movebook()">
              <a
                class="nav-link dropdown-toggle audioctrlbtn"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Thao tác
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Đăng xuất</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div
      id="audioctrl1"
      style="
        background-color: rgb(255, 255, 255);
        height: 80.5vh;
        position: absolute;
        right: 30px;
        top: -100vh;
        overflow: hidden;
      "
    >
      <div class="wrapper">
        <div class="top-bar">
          <i class="material-icons">expand_more</i>
          <span>ĐANG PHÁT</span>
          <i class="material-icons">more_horiz</i>
        </div>
        <div class="img-area">
          <img src="" alt="" />
        </div>
        <div class="song-details">
          <p class="name"></p>
          <p class="artist"></p>
        </div>
        <div class="progress-area">
          <div class="progress-bar">
            <audio id="main-audio" src=""></audio>
          </div>
          <div class="song-timer">
            <span class="current-time">0:00</span>
            <span class="max-duration">0:00</span>
          </div>
        </div>
        <div class="controls">
          <i id="repeat-plist" class="material-icons" title="Playlist looped"
            >repeat</i
          >
          <i id="prev" class="material-icons">skip_previous</i>
          <div class="play-pause">
            <i class="material-icons play">play_arrow</i>
          </div>
          <i id="next" class="material-icons">skip_next</i>
          <i id="more-music" class="material-icons">queue_music</i>
        </div>
        <div class="music-list">
          <div class="header">
            <div class="row">
              <i class="list material-icons">queue_music</i>
              <span>Danh sách phát</span>
            </div>
            <i id="close" class="material-icons">close</i>
          </div>
          <ul>
            <!-- here li list are coming from js -->
          </ul>
        </div>
      </div>
    </div>

    <div class="book" id="book1">
      <div>
        <div id="canvas pt-5">
          <div id="book-zoom">
            <div class="sample-docs">
              <div ignore="1" class="tabs">
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="hard"></div>
              <div class="hard"></div>
              <div class="hard p29"></div>
              <div class="hard p30"></div>
            </div>
          </div>

          <div id="slider-bar" class="turnjs-slider">
            <div id="slider"></div>
          </div>
        </div>
      </div>
    </div>

    <script></script>
    <script type="text/javascript">
      function loadApp() {
        var flipbook = $(".sample-docs");

        // Check if the CSS was already loaded

        if (flipbook.width() == 0 || flipbook.height() == 0) {
          setTimeout(loadApp, 10);
          return;
        }

        // Mousewheel

        $("#book-zoom").mousewheel(function (event, delta, deltaX, deltaY) {
          var data = $(this).data(),
            step = 100,
            flipbook = $(".sample-docs"),
            actualPos = $("#slider").slider("value") * step;

          if (typeof data.scrollX === "undefined") {
            data.scrollX = actualPos;
            data.scrollPage = flipbook.turn("page");
          }

          data.scrollX = Math.min(
            $("#slider").slider("option", "max") * step,
            Math.max(0, data.scrollX + deltaX)
          );

          var actualView = Math.round(data.scrollX / step),
            page = Math.min(
              flipbook.turn("pages"),
              Math.max(1, actualView * 2 - 2)
            );

          if ($.inArray(data.scrollPage, flipbook.turn("view", page)) == -1) {
            data.scrollPage = page;
            flipbook.turn("page", page);
          }

          if (data.scrollTimer) clearInterval(data.scrollTimer);

          data.scrollTimer = setTimeout(function () {
            data.scrollX = undefined;
            data.scrollPage = undefined;
            data.scrollTimer = undefined;
          }, 1000);
        });

        // Slider

        $("#slider").slider({
          min: 1,
          max: 100,

          start: function (event, ui) {
            if (!window._thumbPreview) {
              _thumbPreview = $("<div />", {
                class: "thumbnail",
              }).html("<div></div>");
              setPreview(ui.value);
              _thumbPreview.appendTo($(ui.handle));
            } else setPreview(ui.value);

            moveBar(false);
          },

          slide: function (event, ui) {
            setPreview(ui.value);
          },

          stop: function () {
            if (window._thumbPreview) _thumbPreview.removeClass("show");

            $(".sample-docs").turn(
              "page",
              Math.max(1, $(this).slider("value") * 2 - 2)
            );
          },
        });

        // URIs

        Hash.on("^page\/([0-9]*)$", {
          yep: function (path, parts) {
            var page = parts[1];

            if (page !== undefined) {
              if ($(".sample-docs").turn("is"))
                $(".sample-docs").turn("page", page);
            }
          },
          nop: function (path) {
            if ($(".sample-docs").turn("is")) $(".sample-docs").turn("page", 1);
          },
        });

        // Arrows

        $(document).keydown(function (e) {
          var previous = 37,
            next = 39;

          switch (e.keyCode) {
            case previous:
              $(".sample-docs").turn("previous");

              break;
            case next:
              $(".sample-docs").turn("next");

              break;
          }
        });

        // Create the flipbook

        flipbook
          .turn({
            elevation: 50,
            acceleration: false,
            gradients: true,
            autoCenter: true,
            duration: 1000,
            pages: 73,
            when: {
              turning: function (e, page, view) {
                var book = $(this),
                  currentPage = book.turn("page"),
                  pages = book.turn("pages");

                if (currentPage > 3 && currentPage < pages - 3) {
                  if (page == 1) {
                    book.turn("page", 2).turn("stop").turn("page", page);
                    e.preventDefault();
                    return;
                  } else if (page == pages) {
                    book
                      .turn("page", pages - 1)
                      .turn("stop")
                      .turn("page", page);
                    e.preventDefault();
                    return;
                  }
                } else if (page > 3 && page < pages - 3) {
                  if (currentPage == 1) {
                    book.turn("page", 2).turn("stop").turn("page", page);
                    e.preventDefault();
                    return;
                  } else if (currentPage == pages) {
                    book
                      .turn("page", pages - 1)
                      .turn("stop")
                      .turn("page", page);
                    e.preventDefault();
                    return;
                  }
                }

                Hash.go("page/" + page).update();

                if (page == 1 || page == pages) $(".sample-docs .tabs").hide();
              },

              turned: function (e, page, view) {
                var book = $(this);

                $("#slider").slider("value", getViewNumber(book, page));

                if (page != 1 && page != book.turn("pages"))
                  $(".sample-docs .tabs").fadeIn(500);
                else $(".sample-docs .tabs").hide();

                book.turn("center");
                updateTabs();
              },

              start: function (e, pageObj) {
                moveBar(true);
              },

              end: function (e, pageObj) {
                var book = $(this);

                setTimeout(function () {
                  $("#slider").slider("value", getViewNumber(book));
                }, 1);

                moveBar(false);
              },

              missing: function (e, pages) {
                for (var i = 0; i < pages.length; i++)
                  addPage(pages[i], $(this));
              },
            },
          })
          .turn("page", 2);

        $("#slider").slider("option", "max", numberOfViews(flipbook));

        flipbook.addClass("animated");

        // Show canvas

        $("#canvas").css({
          visibility: "visible",
        });
      }

      // Hide canvas

      $("#canvas").css({
        visibility: "hidden",
      });

      yepnope({
        test: Modernizr.csstransforms,
        yep: ["../../lib/turn.min.js", "css/jquery.ui.css"],
        nope: ["../../lib/turn.html4.min.js", "css/jquery.ui.html4.css"],
        both: ["css/docs.css", "js/docs.js"],
        complete: loadApp,
      });
    </script>
    <script>
      const audioctrlbtn = document.getElementsByClassName("audioctrlbtn");
      const audioctrl = document.getElementById("audioctrl1");
      const book = document.getElementById("book1");

      var check = true;

      function movebook() {
        if (check) {
          book.classList.add("move-book");
          book.classList.remove("move-book-2");

          audioctrl.classList.add("on");
          audioctrl.classList.remove("off");
          check = !check;
        } else if (!check) {
          book.classList.add("move-book-2");
          book.classList.remove("move-book");

          audioctrl.classList.add("off");
          audioctrl.classList.remove("on");
          check = !check;
        }
      }
    </script>
    <script src="js/music-list.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
