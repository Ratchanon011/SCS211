<!DOCTYPE html>
<html lang="en">

<head>
    <title>หลักสูตรวิทยาการคอมพิวเตอร์</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:url" content="http://cs.vru.ac.th" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ " />
    <meta property="og:description" content="หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ " />
    <meta property="og:image" content="http://cs.vru.ac.th/images/logo5.png" />
<!--CSS-->
    <?php include("layouts/cs-css.php") ?>
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
</head>
<!--Header-->
    <?php include("layouts/cs-header.php") ?>
    <!-- start of content , see end in footer -->
    <div class="content">
        <div class="container">
            <br />
            <h2>&starf;&nbsp;ติดต่อเรา</h2>
            <hr>

            <style>
                #map_container {
                    height: 250px;
                    margin-bottom: 10px;
                }

                #map {
                    width: 100%;
                    height: 100%;
                }
            </style>
            <div id="map_container">
                <div id="map"></div>
            </div>
            <script>
                var map;

                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: {
                            lat: 14.132371,
                            lng: 100.616594
                        },
                        zoom: 15
                    });
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(14.132371, 100.616594),
                        map: map,
                        title: 'หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ฯ'
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoZlRLPlMJTXe38xtlDFiyI9rj6BoG10M&callback=initMap" async defer></script>

            <p></p>
            <h4>หลักสูตรวิทยาการคอมพิวเตอร์</h4>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;อาคาร 75 ปี วไลยอลงกรณ์ </p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;เลขที่ 1 หมู่ 20 ถนนพหลโยธิน กม. 48 ต.คลองหนึ่ง อ.คลองหลวง จ.ปทุมธานี 13180</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;โทรศัพท์ 0-2529-0674-7 ต่อ 365 โทรสาร 02-909-3029</p>
            &nbsp; &nbsp; &nbsp; &nbsp;<a href="https://www.facebook.com/profile.php?id=100008113098809&fref=ts"><img src="http://cs.vru.ac.th/images/facebook-icon-preview-1.png" width="50" height="50"> FACEBOOK หลักสูตรวิทยาการคอมพิวเตอร์</a>
        </div>
    </div>
    <!-- end of content, see start in header -->
    <style>
        .site-footer,
        .footer-heading,
        .site-footer .p {
            font-size: 16px;
            text-align: center !important;
            background: #8e24aa !important;
            /*color: #fff!important;*/
        }

        .site-footer p,
        .site-footer a {
            color: #bbb !important;
        }

        .site-footer .border-top {
            border-top: 1px solid #bbb !important;
        }

        .site-footer {
            padding: 0 !important;
            padding-top: 4em !important;
            padding-bottom: 4em !important;

        }
    </style>
    <div class="container-fluid bg-light  p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pl-4">
                    <h3>สมัครเรียนกับเรา</h3>
                    <h5 id="schedule">สอบถามข้อมูลการรับสมัครเพิ่มเติม</h5>
                    <p>โทร. 02-909-1432 ต่อ 322 หรือ 323</p>
                </div>
                <div class="col-md-6 text-right">
                    <div class="py-4">
                        <a class="btn btn-primary" href="tcas.php">รายะละเอียดสมัครเรียน</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <footer class="site-footer">
    <?php include("layouts/cs-footer.php") ?>
    </footer>
    <!-- Cookie Consent by https://www.cookiewow.com -->
    <script type="text/javascript" src="https://cookiecdn.com/cwc.js"></script>
    <script id="cookieWow" type="text/javascript" src="https://cookiecdn.com/configs/K3VSC9aVmgw2NmDbj3aosHyc" data-cwcid="K3VSC9aVmgw2NmDbj3aosHyc"></script>

    <!--script src="js/jquery-3.3.1.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--script src="js/jquery-ui.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!--script src="js/popper.min.js"></script-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!--script src="js/bootstrap.min.js"></script-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!--script src="js/owl.carousel.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!--script src="js/jquery.countdown.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <!--script src="js/bootstrap-datepicker.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!--script src="js/jquery.easing.1.3.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!--script src="js/aos.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!--script src="js/jquery.fancybox.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <!--script src="js/jquery.sticky.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/brands.min.js"></script>

    <!--script src="https://kit.fontawesome.com/d59a8a2721.js"></script-->
    <!--script src="js/main.js"></script-->
    <?php include("layouts/cs-script.php") ?>
</body>

</html>