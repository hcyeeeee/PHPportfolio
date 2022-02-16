<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.1/css/all.min.css"
        integrity="sha512-9my9Mb2+0YO+I4PUCSwUYO7sEK21Y0STBAiFEYoWtd2VzLEZZ4QARDrZ30hdM1GlioHJ8o8cWQiy8IAb1hy/Hg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="col col-6  ">
            <a class="navbar-brand" href="#"><img src="./img/logo.jpg" width="250" height="150" alt=""></a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!-- 側邊按鈕 -->
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="col col-6 mr-5">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">



                    <!-- home -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><img src="./img/home.png" width="110"
                                height="75" class="mt-2" alt=""></a>
                        </a>
                    </li>
                    <!-- aboutme -->
                    <li class="nav-item">
                        <a class="nav-link" href="#about">
                            <img src="./img/about.png" width="120" height="55" class="mt-3" alt="">
                        </a>
                    </li>
                    <!-- project -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            <img src="./img/project.png" width="120" height="80" alt="" class="mt-2">

                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#link-tabs"><img src="./img/illustration.png" width="100"
                                    height="20" alt=""></a>
                            <a class="dropdown-item" href="#link-tabs"><img src="./img/webdesign.png" width="100"
                                    height="20" alt=""></a>
                            <a class="dropdown-item" href="#link-tabs"><img src="./img/textiledesign.png" width="100"
                                    height="20" alt=""></a>
                        </div>
                    </li>
                    <!-- contact -->
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"> <img src="./img/contact.png" width="170" height="65"
                                class="mt-2" alt=""></a>
                    </li>
                    <br> <br> <br>
                    <!-- login -->
                    <li class="nav-item">
                        <a href="./login.html" class="nav-link mt-1 "> <img src="./img/login.png" width="110"
                                height="75" alt=""></a>
                    </li>



                </ul>
            </div>
        </div>
        </div>
        </div>

    </nav>
    <!-- nav end -->









    <!-- about -->

    <div class="container-fluid" id="about">

        <div class="row">
            <div class="col col-12 d-flex justify-content-center align-items-center">
                <img src="./img/me.png" class="d-flex " width="450" height="450" alt="about me">
            </div>
            <div class="col col-12 d-flex justify-content-center align-items-center">
                <p class="display-5"><em> - About me -</em></p>
            </div>
            <div class="col col-12 d-flex justify-content-center align-items-center">
                </p>
                <p class="display-5">
                    <i class="fas fa-envelope-square"></i>&nbsp;
                    <i class="fab fa-github-square"></i>&nbsp;
                    <i class="fab fa-behance-square"></i>&nbsp;
                    <i class="fab fa-instagram-square"></i> &nbsp;
            </div>

        </div>
        <br><br>

        <div class="row">
            <div class="col col-12 d-flex justify-content-center align-items-center">
                <p class="card-text">
                   i'm hcy
                    
                </p>

                <p class="card-text">
                   
                    2020年畢業於輔大織品系，主修布料設計。<br>
                    在工作中偶然接觸網頁設計，<br>
                    因而進入泰山職業訓練場學習，<br>
                    從此深深著迷於視覺呈現及程式邏輯的世界之中。<br>
                    持續積極學習視覺傳達及網頁設計中！<br>
                </p>
            </div>

          
            <!-- 短的 -->
            <!-- <div class="col col-12 d-flex justify-content-center">
                <p><img src="./line3.png"  alt=""></p>
            </div>-->

            <img class="line" src="./img/line3.png" width="100" height="250" alt="">
        </div>

        <div class="row  d-flex justify-content-center ">
            <div class="col col-8 d-flex justify-content-center ">
                <p class="display-3 ml-0 "><em> - Skills -</em></p>
            </div>
            <!-- <div class="col col-12 d-flex justify-content-center">
                <p><img src="./line3.png"  alt=""></p>
            </div> -->

            <!-- <div class="col col-2 text-center" style="background-image: url(./skills.png);"> -->
            <div class="skillscol col col-6 text-center mt-5">
                <h2 class="card-title">
                    <img src="./img/del2.png" class="skills" height="80px" width="180px" alt="">
                </h2>
                <br>
                <h4>AI</h4>
                <h4>PS</h4>
                <h4>InDesign</h4>

            </div>
            <div class="skillscol col col-6 text-center mt-5">
                <h2 class="card-title"> <img class="skills" src="./img/del4.png" height="80px" width="180px" alt="">
                </h2>
                <br>
                <h4>Html</h4>
                <h4>Css</h4>
                <h4>Javascript</h4>
                <h4>jquery</h4>
            </div>
            <div class="skillscol col col-6 text-center mt-5">
                <h2 class="card-title"><img class="skills" src="./img/del3.png" height="80px" width="180px" alt=""></h2>
                <br>
                <h4>PHP</h4>
                <h4>MySQL</h4>

            </div>
            <div class="skillscol col col-6 text-center mt-5">
                <h2 class="card-title"><img class="skills2" src="./img/del5.png" height="80px" width="230px" alt="">
                </h2>
                <br>
                <h4>pattern design</h4>
                <h4>weaving</h4>
                <h4>knitting</h4>
            </div>

        </div>


    </div>


    <br><br><br>


    <!-- 背景 -->
    <div class="row">
        <img src="./img/line6.png" width="150" height="300" alt="">
    </div>
    <!-- about me end-->







    <div style="background-color:black;">
        <div class="container">
            <p class="display-3 d-flex justify-content-center align-items-cente" style="color: rgb(248, 236, 213);"><em>
                    - Profolio -</em></p>

        </div>










        <!-- project  -->
        <div style="background-color:black;">
            <div class="container mt-5" id="link-tabs">

                <br>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs justify-content-around">

                    <li class=" nav-item">
                        <a class=" portfolio nav-link " href="#page1">illustration</a>
                        <!-- <a class="nav-link" href="#page1">Page 1</a> -->
                    </li>
                    <li class=" nav-item">
                        <a class="portfolio nav-link" href="#page2">webdesign</a>
                        <!-- <a class="nav-link active" href="#page2">Page 2</a> -->
                    </li>
                    <li class="nav-item">
                        <a class="portfolio nav-link" href="#page3">textile design</a>
                    </li>

                </ul>
                <!-- Nav tabs end -->


                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- active 預設顯示 -->
                    <div id="page1" class="container tab-pane active"><br>

                        <!-- 第二排 -->
                        <div class="row mt-5">
                            <!-- col-md-4 -->
                            <div class="col-md-4">
                                <div class="card w-100">
                                    <img src="./img/1.jpg" class="card-img-top" width="150" height="300" alt="...">
                                    <div>
                                        <span>hi</span>
                                    </div>
                                </div>
                            </div>
                            <!-- col-md-4 end-->
                            <!-- col-md-4 -->
                            <div class="col-md-4">
                                <div class="card w-80">
                                    <img src="./img/4.jpg" class="card-img-top" width="150" height="300" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title
                                            and
                                            make up the
                                            bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- col-md-4 end-->
                            <!-- col-md-4 -->
                            <div class="col-md-4">
                                <div class="card w-80">
                                    <img src="./img/3.jpg" class="card-img-top" width="150" height="300" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title
                                            and
                                            make up the
                                            bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- col-md-4 end-->



                        </div>
                        <!-- 第二排end -->
                    </div>

                    <!-- page2 -->
                    <div id="page2" class="container tab-pane fade"><br>

                        <!-- 第一排 -->
                        <div class="row d-flex justify-content-around">
                            <!-- col-md-4 -->

                            <div class="col-md-4">
                                <div class="card w-80"> <a href="http://220.128.133.15/s1100426/vote/" target="">
                                        <img src="./img/vote.png" class="card-img-top" width="150" height="300"
                                            alt="..."></a>
                                    <div class="card-body">
                                        <h2>投票系統</h2>
                                        <p class="card-text">PHP.MySQL</p>
                                    </div>
                                </div>
                            </div>
                            <!-- col-md-4 end-->
                            <!-- col-md-4 -->

                            <div class="col-md-4">
                                <div class="card w-80"><a
                                        href="http://220.128.133.15/s1100426/calender/index.php?year=2022&month=1"
                                        target=""></a>
                                    <img src="./img/calender.png" class="card-img-top" width="150" height="300"
                                        alt="...">
                                    <div class="card-body">
                                        <h2>萬年曆</h2>
                                        <p class="card-text">PHP.MySQL</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="card w-80"><a
                                        href="http://220.128.133.15/s1100426/calender/index.php?year=2022&month=1"
                                        target=""></a>
                                    <img src="./calender.png" class="card-img-top" width="150" height="300" alt="...">
                                    <div class="card-body">
                                        <h2>萬年曆</h2>
                                        <p class="card-text">PHP.MySQL</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="page3" class="container tab-pane fade"><br>

                        <div class="row d-flex justify-content-around mt-5">
                            <!-- col-md-4 -->
                            <div class="col-md-4">
                                <div class="card w-80">
                                    <img src="./img/12.jpg" class="card-img-top" width="150" height="300" alt="...">
                                    <div class="card-body">
                                        <p class="card-text ">Some quick example text to build on the card title
                                            and
                                            make up the
                                            bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- col-md-4 end-->
                            <!-- col-md-4 -->
                            <div class="col-md-4">
                                <div class="card w-80">
                                    <img src="./img/13.jpg" class="card-img-top" width="150" height="300" alt="...">
                                    <div class="card-body">
                                        <p class="card-text ">Some quick example text to build on the card title
                                            and
                                            make up the
                                            bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- col-md-4 end-->
                            <!-- col-md-4 -->
                            <div class="col-md-4">
                                <div class="card w-80">
                                    <img src="./img/11.jpg" class="card-img-top" width="150" height="300" alt="...">
                                    <div class="card-body">
                                        <p class="card-text ">Some quick example text to build on the card title
                                            and
                                            make up the
                                            bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- col-md-4 end-->


                        </div>
                    </div>
                    <!-- portfolio end -->

                </div>

            </div>

            <!-- contact  -->
            <div style="background-image:url('./img/bg6.png')" width=100%>
                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="container-fluid" id="contact">
                    <div class="d-flex justify-content-center align-items-center  ">
                        <form class="contact row ">
                            <div class="col col-12 d-flex justify-content-center align-items-center mt-5">
                                <p class="display-3"><em>contact me </em></p>
                            </div>

                            <div class="col " style="background-image:url('./img/bg6.png')">




                                <div class="col-12 mb-1">
                                    <label for="inputEmail4" class="form-label">Name</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>

                                <div class="col-12 mb-1">
                                    <label for="inputEmail4" class="form-label">Phone</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>

                                <div class="col-12 mb-1">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>

                                <div class="col-12 mb-1">
                                    <label for="inputCity" class="form-label ">留言</label>
                                    <input type="text" class="form-control" id="inputCity" placeholder="留下些什麼．．．">
                                </div>


                                <div class="col-12 mb-5 mt-3">
                                    <button type="submit" class="btn btn-dark">送出</button>
                                </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>

        <!-- contact end-->

    </div>
    </div>




    <!-- footer -->
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center bg-green mx-5 my-3 ">
            © 2022 Copyright All Rights Reserved Designed by &nbsp;
            <!-- <img src="./img/copyright.png" width="600px" height="40" alt=""> -->
            <img src="./img/黃莘懿.jpeg" style="width: 25px;">
        </div>
    </div>

    <!-- footer end-->






    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>

    <!-- tabs js -->
    <script>
        $(document).ready(function () {
            $(".nav-tabs a").click(function () {
                $(this).tab('show');
            });
        });
        var tabEl = document.querySelector('button[data-bs-toggle="tab"]')
        tabEl.addEventListener('shown.bs.tab', function (event) {
            event.target // newly activated tab
            event.relatedTarget // previous active tab
        })
    </script>


</body>

</html>