
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Pets</title>

    <!-- Meta -->
    <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- <link rel="shortcut icon" href="favicon.ico?v=2"> -->

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css?20180914">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/headers/header-v6.css">
    <link rel="stylesheet" href="assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/plugins/parallax-slider/css/parallax-slider.css">
    <link rel="stylesheet" href="assets/plugins/animated-headline/css/animated-headline.css">

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="assets/css/pages/profile.css?20180914">
    <link rel="stylesheet" href="assets/css/pages/shortcode_timeline2.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/cust.css?20180917">
    <link rel="stylesheet" href="assets/css/custFooter.css?20180914">

    <style>
        .pet-body{
            padding-top:100px;
            height:600px;
        }
    </style>

    <?php
        //require_once "config.php";
    ?>
</head>

<body class="header-fixed">

<div class="wrapper">

    <div id="includedHeader"></div>
    <div class="pet-body">
    <?php
        $inserSql = "INSERT INTO `p_info`(`P_ID`, `P_NAME`, `P_SEX`, `P_BIRTH`, `P_SAVE_TIME`) VALUES ('3','happy','母','2018-5-05','2018-5-05')";

        $deleteSql = "DELETE FROM `p_info` WHERE P_ID = 3";
        $updateSql = "UPDATE `p_info` SET `P_NAME`= '母咪母' WHERE P_ID=3";


        $sql = "SELECT * FROM p_info ";
        $utfsetSql = "set names 'utf8'";
        $conn->query($utfsetSql);
        $conn->query($updateSql);
        $result = $conn->query($sql);

        // if (!$result) {
        //     trigger_error('Invalid query: ' . $conn->error);
        // }

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc() ){
                echo "id: ".$row["P_ID"]."  -Name: ".$row["P_NAME"]."  -Sex: ".$row["P_SEX"]."<br>";
            }
        }
        else {
            echo "0 results";
        }

        echo "Connected successfully";

        $conn->close();
    ?>
    </div>
    <div id="includedFooter"></div>
</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/smoothScroll.js?20180911"></script>
<script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/plugins/circles-master/circles.js"></script>
<script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/plugins/animated-headline/js/modernizr.js"></script>
<script src="assets/plugins/animated-headline/js/animated-headline.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/plugins/datepicker.js"></script>
<script type="text/javascript" src="assets/js/plugins/circles-master.js?20180910"></script>
<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initScrollBar();
        App.initParallaxBg();
        Datepicker.initDatepicker();
        CirclesMaster.initCirclesMaster1();
        StyleSwitcher.initStyleSwitcher();

        $("#includedHeader").load("header.html");
        $("#includedFooter").load("footer.html");
        $(document).ajaxComplete(function(){
            $("#headerProfile").addClass('active');
        });
    });
    window.history.pushState("", "", 'http://wikitechy.com/test');
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>
