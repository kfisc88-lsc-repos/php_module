<?php include 'templates/header.html'; ?>
<?php include 'templates/navbar.html'; ?>
<main id="home-main">
    <h2 class="heading" id="home_heading">Visit Littlefork</h2>
    <div class="container">
        <img id="home_image" src="assets/littlefork1.jpg"
        alt="whiteout at lake Kabetogama"/>
        <h1 id="slide-title">What up</h1>
        <div class="bottom-center">
            <a href="#"><img src="assets/littlefork1tn.jpg"
            alt="Kabetogama Whiteout1" class="img-thumb" data-id="1"/></a>

            <a href="#"><img src="assets/littlefork2tn.jpg"
            alt="Kabetogama Whiteout2" class="img-thumb" data-id="2"/></a>

            <a href="#"><img src="assets/littlefork3tn.jpg"
            alt="Someones husky" class="img-thumb"  data-id="3"/></a>

            <a href="#"><img src="assets/littlefork4tn.jpg"
            alt="Logging path" class="img-thumb" data-id="4"/></a>
        </div>
    </div>
</main>
<aside>
</aside>
<script>
    var imgCounter = 1;

    function slideShowChange() {
        if (imgCounter == 4) {
            imgCounter = 1;
        } else  {
            imgCounter++;
        }
        $('#home_image').attr('src','assets/littlefork'+imgCounter+'.jpg');
    }

    $(document).ready(function() {
        setInterval(slideShowChange, 5000);
        changeTitle(imgCounter);

        function changeTitle(title_num) {
            var str = ""

            $('#slide-title').slideUp(500);

            if (title_num==1) {
                str = "Whiteout";
            } else if (title_num==2) {
                str = "Snowy Resort";
            } else if (title_num==3) {
                str = "Someone's Husky";
            } else {
                str = "Logging Road";
            }
            $('#slide-title').html(str);

            $('#slide-title').slideDown(1000);
        }

        /* Change main > div > img element to the user selected image */
        $('.img-thumb').on('click', function() {
            var slide_num = $(this).data('id');
            imgCounter = slide_num;
            $('#home_image').attr('src','assets/littlefork'+slide_num+'.jpg');
        });
    });
</script>
<?php include 'templates/footer.html'; ?>
