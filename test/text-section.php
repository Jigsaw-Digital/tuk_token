<div class="text-s-container">
    <div class="container">
        <p class="title-support" data-aos="fade-up" data-aos-delay="150">eTukTuk <span>
             is bringing a network of efficient charging stations to developing countries<br/>
            across the globe, making sure that everyone has fair and equal access to equitable<br/>
            transportation solutions that don’t pollute our planet.<br/></span>
            <span style="color: #ffd400">By working together, we are going to change the world, one TukTuk at a time.</span>
        </p>
    </div>

    <div class="title-container" style="width: unset; margin-bottom: 200px;">
        <h2 class="gradient-title" data-aos="fade-up" data-aos-delay="50">Earn Rewards as you supply the<br/>power to change the world.</h2>
    </div>

    <div class="timeline">
        <img src="public/tuktuk.png" class="tuktuk"/>
        <div class="blue-container">
            <img src="public/line-blue.png" class="blue-line" width="100%" />
        </div>
        <div class="green-container">
            <img src="public/line-green.png" class="green-line" width="100%"/>
        </div>
    </div>
    <div class="container box-container" style="margin-top: 50px; margin-bottom:50px;">
        <div class="flexbox" style="max-width: 1613px; margin: 0px auto;">
            <div>
                <div class="card" data-aos="fade-up" data-aos-delay="50">
                    <div class="title">
                        Lock it In.
                    </div>
                    <div class="content" style="color: #999; max-width: 408px;
    margin: 0px auto;">
                        <p>Create your vault and connect your wallet to manage everything you own in one place.  </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card" data-aos="fade-up" data-aos-delay="150">
                    <div class="title">
                        Watch the Network Grow.
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
                        Join the rEVolution.
                    </div>
                    <div class="content" style="color: #999; max-width: 408px;
    margin: 0px auto;">
                        <p>Drive away CO2, poor health, and financial exclusion for billions. </p>
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

<div style="position: relative; height:200px; margin-top:50px;">
    <div class='blacklight'></div>
</div>

<script>
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
    document.querySelector(
        ".green-line"
    ).style.width = `${window_width}px`

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

<style>
    .timeline {
        /*margin-top: -100px;*/
        position: relative;
        height: 400px;
        overflow: hidden;
    }

    .green-container {
        position: absolute;
        left: 0px;
        overflow: hidden;
        width: 200px;
        z-index: 999;
    }

    .blue-container {
        position: absolute;
        left: 0px;
        overflow: hidden;
    }

    .green-line {
        width: 0px;
    }

    .tuktuk {
        height: 250px;
        position: absolute;
        left: 0px;
        z-index: 9999;
        top: 50%;
    }

    .bg-hero-title {
        float: left;
        text-align: left;
        max-width: 80%;
        margin-left: 10%;
        margin-top: 300px;
    }

    .bg-hero-title .title-container, .bg-hero-title .title-support {
        text-align: left;
        margin-left: 0px;
        width: unset;
    }

    .text-s-container {
        position: relative;
        /*height: 100vh;*/
        margin-top: -575px;
        padding-top: 400px;
    }

    @media (max-width: 768px) {
        .text-s-container {
            margin-top: -600px;
        }
    }

    .text-hero {
        position: absolute;
        left: 0px;
        top: 0px;
        height: 100vh;
        z-index: -2;
    }
</style>