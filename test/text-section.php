<div class="text-s-container">
    <div class="container">
        <p class="title-support" data-aos="fade-up" data-aos-delay="150">TUK <span>will power the eTukTuk network to install innovative and efficient charging stations throughout developing countries and beyond.</span> TUK<span> is the reason that adopters will have fair and equal access to equitable transportation solutions that don’t pollute our planet.
 <br/></span>
            <span style="color: #ffd400">By working together, we are going to change the world, one eTukTuk at a time.</span>
        </p>
    </div>

    <div class="title-container" style="width: unset; ">
        <h2 class="gradient-title" data-aos="fade-up" data-aos-delay="50">Earn Rewards as you supply the <br/>power to change the world</h2>
    </div>

    <div class="timeline">
        <img src="public/tuktuk.png" class="tuktuk" id="tuktuk"/>
        <div class="blue-container" id="blue-container">
            <img src="public/line-blue.png" class="blue-line" width="100%" />
        </div>
        <div class="green-container">
            <img src="public/line-green.png" class="green-line" width="100%"/>
        </div>
    </div>
    <div class="container">
        <div class="flexbox" style="max-width: 1613px; margin: 0px auto;">
            <div>
                <div class="card" data-aos="fade-up" data-aos-delay="50">
                    <div class="title">
                        Connect Your Wallet
                    </div>
                    <div class="content" style="color: #999; max-width: 408px;
    margin: 0px auto;">
                        <p>Connect to manage everything in one place. </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card" data-aos="fade-up" data-aos-delay="150">
                    <div class="title">
                        Watch the Network Grow
                    </div>
                    <div class="content" style="color: #999; max-width: 408px;
    margin: 0px auto;">
                        <p>Stake your TUK token and earn rewards as the network expands.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card" data-aos="fade-up" data-aos-delay="250">
                    <div class="title">
                        Be Part of the rEVolution
                    </div>
                    <div class="content" style="color: #999; max-width: 408px;
    margin: 0px auto;">
                        <p>Drive away CO2, poor health, and financial exclusion for billions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="http://marcel-pirnay.be/" class="btn" style="width: 300px; display: block; margin: 0px auto;">
        <svg width="300" height="62">
            <defs>
                <linearGradient id="grad1">
                    <stop offset="0%" stop-color="#ffd400"/>
                    <stop offset="100%" stop-color="#b49909"/>
                </linearGradient>
            </defs>
            <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="290" height="50"></rect>
        </svg>
        <span>Join The Community</span>
    </a>
    <img src="public/text-bg.png" class="text-hero hidden-sm"/>

</div>

 </div>

<div class="blacklight-container">
    <div class='blacklight'></div>
</div>

<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(document).scrollTop() > 100) {
                $('nav').addClass('nav-bg');
            }
            else {
                $('nav').removeClass('nav-bg');
            }
        });
    });

    $(document).ready(function() {
        var pixelToMove = 20;
        $(document).mousemove(function(e) {
            var width = $(this).innerWidth();
            var height = $(this).innerHeight();
            var newValueX = (e.pageX / width) * pixelToMove;
            var newValueY = (e.pageY / height) * pixelToMove;
            $(".bg-hero").css('right', '-' + newValueX + '%');
            $(".bg-hero").css('top', '-' + newValueY + '%');
        });
    })

    function inViewport( element ){

        // Get the elements position relative to the viewport

        var bb = element.getBoundingClientRect();

        // Check if the element is outside the viewport
        // Then invert the returned value because you want to know the opposite

        return !(bb.top > innerHeight || bb.bottom < 0);

    }

    const window_width = window.innerWidth;
    const window_height = window.innerHeight;

    $(document).ready(function() {
        resize_tuk();
    });

    $( window ).resize(function() {
        resize_tuk();
    });

    function resize_tuk(){
        var blue_line = $("#blue-container").height();
        var tuktuk = $("#tuktuk").height();

        document.querySelector(
            ".tuktuk"
        ).style.top = `${(blue_line / 2) -  (tuktuk / 2)}px`;

        document.querySelector(
            ".timeline"
        ).style.height = `${blue_line}px`;
    }


    document.querySelector(
        ".green-line"
    ).style.width = `${window_width}px`;

    document.querySelector(
        ".blue-line"
    ).style.width = `${window_width}px`

    window.addEventListener("scroll", function () {
        const distance = window.scrollY


        document.querySelector(
            ".bg-hero-title"
        ).style.transform = `translateY(-${distance * 0.3}px)`


        if( inViewport( document.querySelector(
            ".green-container"
        ) ) ){
            var offset = window.pageYOffset - window_height + 100;
            var step = window_height / 10;
            document.querySelector(
                ".green-container"
            ).style.width = `${(offset) * (window_height /800) }px`

            document.querySelector(
                ".tuktuk"
            ).style.left = `${(offset) * (window_height /800) - 155}px`
        }

        document.querySelector(
            ".text-hero"
        ).style.top = `-${distance * 0.2}px`

    });
</script>