<div class="justify-content-center d-none d-sm-none d-md-block d-lg-block d-xl-block noSidePadding">
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-nav justify-content-center d-none d-sm-none d-md-block d-lg-block d-xl-block nav-padding align-items-center" style="<?php if (basename($_SERVER["SCRIPT_FILENAME"], '.php')!= 'index') {echo 'background-color: transparent !important;';}?>">
        <div class="container align-items-center">
            <a class="navbar-brand" href="../">
                <img class="logosvg" src="./asset/unconfirmed/xentowordmark.svg" alt="Xento" height="75px"/>
                
            </a>
            <ul class="navbar-nav d-flex justify-content-end logo-nav">
            <li class="nav-item">
                <a class="nav-link active" href="../">-</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../about">-</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../portfolio">-</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../services">-</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../contact">-</a>
            </li>
            </ul>
        </div>
    </nav>
</div>

<div class="noSidePadding d-block d-sm-block d-md-none d-lg-none d-xl-none">
    <nav class="navbar navbar-expand-sm bg-nav navbar-light nav-padding">
        <a class="navbar-brand" href="../">
            <img src="../asset/id/logo-light.png" alt="MJD WS" width="125px"/>
        </a>
        <button class="navbar-toggle justify-self-end" type="button" onclick="openNav()">
            &#9776;
        </button>
        <script>
            function openNav() {
                document.getElementById("myNav").style.width = "100%";
            }
            function closeNav() {
                document.getElementById("myNav").style.width = "0%";
            }
        </script>
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