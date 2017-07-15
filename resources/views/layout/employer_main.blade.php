<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/custom.css">
</head>

<body>
    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-fixed-top navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><i class="fa fa-suitcase"></i> Job Board</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-3">
                                <ul class="nav navbar-nav ">
                                    <li class=""><a href="#">Home <span class="sr-only">(current)</span></a></li>
                                    <li><a href="">Dashboard</a></li>
                                    <li><a href="">Post a Job</a></li>
                                    <li><a href="#">CV Search</a></li>
                                    <li><a href="#">Company profile</a></li>
                                    <li><a href="#">Job journal</a></li>
                                </ul>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Sign up</a></li>
                                <li><a href="#">Log in</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
        <!-- first .contaienr-fluid ends here -->
    </header>
    <!--Nav Ends Here -->

    @section('content')
        @show


   <!-- -Footer tarts here- -->
    <footer>
        <div class="container-fluid">
            <h2><i class="fa fa-suitcase"></i> Job Board</h2>
            <div class="row foot_links">
                <div class="col-lg-3">
                    <h5>Job Seekers</h5>
                    <p><a href="">Post your CV</a></p>
                    <p><a href="">Advanced job search</a></p>
                    <p><a href="">Tips for finding jobs</a></p>
                    <p> <a href="">Create a perfect CV</a></p>
                    <p><a href="">Terms of service for job seekers</a></p>
                </div>
                <div class="col-lg-3">
                    <h5>Employers</h5>
                    <p><a href="">Post a job</a></p>
                    <p><a href="">CV search</a></p>
                    <p><a href="">Tips for recruiting</a></p>
                    <p><a href="">Terms of service for employers</a></p>
                </div>
                <div class="col-lg-3">
                    <h5>About Us</h5>
                    <p><a href="">About us</a></p>
                    <p><a href="">Privacy policy</a></p>
                    <p><a href="">Contact Us</a></p>
                </div>
                 <div class="col-lg-3 social">
                    <a href="https://www.facebook.com/smkpobonru" target="_blank" id="a1"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.twitter.com/smkpobon" target="_blank" id="a2"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.google-plus.com/smkpobonru" target="_blank" id="a3"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 copyright">
                    <p>&copy; 2017 - Smk Pobon. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>