<div class="justify-content-center d-none d-sm-none d-md-block d-lg-block d-xl-block noSidePadding">
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-nav justify-content-center d-none d-sm-none d-md-block d-lg-block d-xl-block nav-padding align-items-center" style="<?php if (basename($_SERVER["SCRIPT_FILENAME"], '.php')!= 'index') {echo 'background-color: #1f2439 !important;';}?>">
        <div class="container align-items-center">
            <a class="navbar-brand" href="../">
                <img class="logosvg" src="./asset/id/xentowordmark.svg" alt="Xento" height="75px"/>
                
            </a>
            <ul class="navbar-nav d-flex justify-content-end logo-nav">
            <li class="nav-item">
                <a class="nav-link" href="../">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../about">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../portfolio">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../services">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../contact">Link</a>
            </li>
            </ul>
        </div>
    </nav>
</div>

<div class="noSidePadding d-block d-sm-block d-md-none d-lg-none d-xl-none">
    <nav class="navbar navbar-expand-sm bg-nav fixed-top navbar-light nav-padding">
        <a class="navbar-brand" href="../">
            <img src="./asset/id/xentowordmark.svg" alt="Xento" height="50px"/>
        </a>
        <button class="navbar-toggle justify-self-end" type="button" onclick="openNav()">
            &#9776;
        </button>
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content text-center">
                <a href="../">-</a>
                <a href="./about">-</a>
                <a href="./portfolio">-</a>
                <a href="./services">-</a>
                <a href="./contact">-</a>
            </div>
        </div>
    </nav>
</div>