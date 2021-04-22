<?php include 'include/header.php';?>
<div class="containers">
        <div class="navbars">
            <div class="logo">
                <!-- <img src="logo.svg" alt=""> -->
                <div class="logotext">Social Trends</div>
            </div>
    
            <div class="navlinks">
                <ul class="navlinklist">
                    <li class="navlink" style="border-bottom: 2px solid;font-weight: 700;">Profile Analytics</li>
                    <li class="navlink">Hashtag Research</li>
                    <!-- <li class="navlink attraction">Get Pro</li> -->
                </ul>
            </div>
    
            <div class="profiledisplay">
                <div class="profileimage">
                    <img src="https://picsum.photos/200" alt="">
                </div>
            </div>
        </div>
        <div class="bodyarea">
            <div class="sidebar">
                <ul class="sidebarlist">
                    <li class="sidebarlinks"><i class="fab fa-facebook-square"></i> Facebook <span class="btn-add"><a href="#"><i class="fa fa-plus-circle"></i></span></a></li>
                    <li class="sidebarlinks activesidebar"><i class="fab fa-instagram"></i> Instagram <span class="btn-add"><a href="#"><i class="fa fa-plus-circle"></i></span></a></li>
                    <li class="sidebarlinks"><i class="fab fa-twitter-square"></i> Twitter <span class="btn-add"><a href="#"><i class="fa fa-plus-circle"></i></span></a></li>
                    <li class="sidebarlinks"><i class="fab fa-youtube-square"></i> Youtube <span class="btn-add"><a href="#"><i class="fa fa-plus-circle"></i></span></a></li>
                </ul>
            </div>
            <div class="displayarea">
               <div class="display-area-hedding">Post to Likes</div>
                <div class="areas">
                    <div id="chart"></div>

                    <script>
                      
                      var _seed = 42;
      Math.random = function() {
        _seed = _seed * 16807 % 2147483647;
        return (_seed - 1) / 2147483646;
      };
    </script>

     <div id="chart"></div>

    <script>
      
        
                        </script>
                </div>
                <div class="display-area-hedding">Some headding goes here</div>
                <div class="areas"></div>
                <div class="display-area-hedding">Some headding goes here</div>
                <div class="areas"></div>
                <div class="display-area-hedding">Some headding goes here</div>
                <div class="areas"></div>
            </div>
        </div>

    </div>


    <?php include 'include/footer.php';?>