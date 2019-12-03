<div class="main-container">
    <div class="containers container1" id="container1"><!--Page 1-->
        <!--Begin Action-->
        <!--<img src="images/default-header.jpg"/>-->
        <h2>Put your brand on the map</h2>
        <button id="modal-button">Expand Now</button>

        <!--<a href="#">Expand Now</a>-->
        <!--End Action-->
    </div>
    <div class="containers" id="container2"><!--Page 2-->
        <!--Begin Subpages of Page 2-->
            <div class="floating-box">
                <i class="fa fa-handshake-o" aria-hidden="true" style="font-size:100px;color:forestgreen; padding:3px;"></i>
                <p><a href="#">The Team</a></p>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>
            <div class="floating-box">
                <i class="fa fa-money" aria-hidden="true" style="font-size:100px;color:forestgreen; padding:3px;"></i>
                <p><a href="#">The Stakeholders</a></p>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>
            <div class="floating-box">
                <i class="fa fa-recycle" aria-hidden="true" style="font-size:100px;color:forestgreen; padding:3px;"></i>
                <p><a href="#">The Processes</a></p>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>
            <div class="floating-box">
                <i class="fa fa-question" aria-hidden="true" style="font-size:100px;color:forestgreen; padding:3px;"></i>
                <p><a href="#">FAQ</a></p>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>
        <!--End Subpages of Page 2-->
    </div>
    <div class ="containers" id="container3"><!--Page 3-->
        <!--Begin Flexslider-->
        <div class="w3-content w3-section">
            <img class="mySlides" src="images/img1.jpg" alt="Image1">
            <img class="mySlides" src="images/img2.jpg" alt="Image2">
            <img class="mySlides" src="images/img3.jpg" alt="Image3">
        </div>
        <!--slider script-->
        <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
        </script>
        <div class="container-flex">
        <p><b>Featured Brand.</b> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p></div>
        <!--End Flexslider-->
    </div>
    <div class ="containers" id="container4"><!--Page 4-->
        <div class="floating-box-b">
        <h3>Quick links</h3>
        <ul>
           <li><a>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
           <li><a>Aliquam tincidunt mauris eu risus.</a></li>
           <li><a>Vestibulum auctor dapibus neque.</a></li>
        </ul>
        </div>
        <div class="floating-box-b">
        <h3>Archives</h3>
        <ul>
           <li><a>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
           <li><a>Aliquam tincidunt mauris eu risus.</a></li>
           <li><a>Vestibulum auctor dapibus neque.</a></li>
        </ul>
        </div>        
        <div class="floating-box-b">
        <a><i class="fa fa-facebook" aria-hidden="true" style="font-size:30px; padding:3px;"></i></a>
        <a><i class="fa fa-linkedin" aria-hidden="true" style="font-size:30px; padding:3px;"></i></a>
        <a><i class="fa fa-twitter" aria-hidden="true" style="font-size:30px; padding:3px;"></i></a>
        <p>Seattle, Washington, United States.<br>+1 (818) 267-0077<br><a>letsconnect@4changeintgroup.com</a>
        </p>
        </div>
    </div>