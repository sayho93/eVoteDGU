<?include_once $_SERVER["DOCUMENT_ROOT"]. "/shared/bases/Const.php";?>

<?
    $CONST_PROJECT_NAME = "풀링폴링";
    $CONST_TITLE_POSTFIX = " :: 깨끗하고 빠른 의견수렴 서비스";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=$CONST_PROJECT_NAME.$CONST_TITLE_POSTFIX?></title>
    <script type="text/javascript" src="<?=URL_PATH_WEB?>/js/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?=URL_PATH_WEB?>/css/bootstrap.min.css" />
    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="<?=URL_PATH_WEB?>/css/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="<?=URL_PATH_WEB?>/css/owl.theme.default.css" />
    <!-- Magnific Popup -->
    <link type="text/css" rel="stylesheet" href="<?=URL_PATH_WEB?>/css/magnific-popup.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?=URL_PATH_WEB?>/css/font-awesome.min.css">
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?=URL_PATH_WEB?>/css/style.css" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script type="text/javascript" src="<?=URL_PATH_SHARED?>/shared/modules/ajaxCall/ajaxClass.js"></script>
    <script type="text/javascript" src="<?=URL_PATH_SHARED?>/shared/modules/sehoMap/sehoMap.js"></script>
    <script type="text/javascript" src="<?=URL_PATH_SHARED?>/shared/modules/utils/PValidation.js"></script>
    <script type="text/javascript" src="<?=URL_PATH_SHARED?>/shared/modules/valueSetter/sayhoValueSetter.js"></script>
</head>