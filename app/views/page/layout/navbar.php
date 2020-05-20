<!-- Start header -->
<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url('/'); ?>"><img src="<?php echo base_url('public/assets/page/'); ?>images/logo.png" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="<?php echo base_url('/'); ?>">Home</a></li>
                    <li><a class="nav-link" href="about.html">Aboutus</a></li>
                    <li><a class="nav-link" href="cycv.html">Produck</a></li>
                    <li><a class="nav-link" href="contact.html">Contact Us</a></li>
                    <li><a class="nav-link active" style="background:#fff;color:#000;" href="<?php echo base_url('auth'); ?>">Login</a></li>
                </ul>
            </div>
            <div class="search-box">
                <input type="text" class="search-txt" placeholder="Search">
                <a class="search-btn">
                    <img src="<?php echo base_url('public/assets/page/'); ?>images/search_icon.png" alt="#" />
                </a>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->