
   
    
    
    <nav class="d-block d-lg-none navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/hone">OBooks</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link  <?php if ($page == "home") {echo "active"; } ?>" <?php   if($page == "home"){ ?> aria-current="page" <?php } ?> href="/trangchu">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link   <?php if ($page == "profile") {echo "active"; } ?>" <?php   if($page == "profile"){ ?> aria-current="page" <?php } ?> href="/profile">Trang cá nhân</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == "lib") {echo "active"; } ?>" <?php   if($page == "lib"){ ?> aria-current="page" <?php } ?> href="/lib">Thư viện</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == "post") {echo "active"; } ?>" <?php   if($page == "post"){ ?> aria-current="page" <?php } ?> href="/post">Diễn đàn</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
