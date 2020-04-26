<?php
 
include('admin/include/connect.php');

$con = connectBD();

?>
<!DOCTYPE>

<html>

<head>
    <title>Tech Talk</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/publicstyles.css" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<style>
    .navbar-nav li {
        font-weight: bold;
        font-family: Bitter, Georgia, Times, "Times New Roman", serif;
        font-size: 1.2em;
    }

    .Line {
        margin-top: -20px;
    }

    #Footer {
        padding: 10px;
        border-top: 1px solid black;
        color: #eeeeee;
        background-color: #211f22;
        text-align: center;
    }

    .blogpost {
        background-color: #f5f5f5;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 10px;
        overflow: hidden;
    }

    #heading {
        font-family: Bitter, Georgia, "Times New Roman", Times, serif;
        font-weight: bold;
        color: #005E90;
    }

    #heading:hover {
        color: #0090DB;
    }

    .description {
        color: #868686;
        font-weight: bold;
        margin-top: -2px;
    }

    .post {
        font-size: 1.1em;
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        text-align: justify;
    }

    .btn-info {
        float: right;
    }

</style>

<body>

    <div style="height: 10px; background: #27aae1;"></div>
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.php">
                    <img style="margin-top: -22px;" src="images/logo.png" width=100; height=65;>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="index.php">Blog</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="admin/index.php">Admin</a></li>
                </ul>

                <form action="index.php" class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" name="Search">
                    </div>
                    <button class="btn btn-default" name="SearchButton">Go</button>
                </form>
            </div>

        </div>

    </nav>
    <div class="Line" style="height: 10px; background: #27aae1;"></div>

    <div class="container">
        <!-- container -->
        <div class="blog-header">
            <h1>This is our Complete Blog site.</h1>
            <p class="lead">Its is prepared by Team TachTalk.</p>
        </div>
        <div class="row">
            <!-- Row -->
            <div class="col-sm-8">
                <!-- Main Blog Area -->
                <?php
                    $sql = "SELECT *FROM posts ORDER BY id desc"; 
                    $result = mysqli_query($con, $sql);
                    
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $id = $row['id'];
                        $category_id = $row['category_id'];
                        $title= $row['title'];
                         $description =$row['description'];
                         $image = $row['image'];
                         $date =$row['date'];
                    
                ?>
                <div class="blogpost thumbnail">
                    <img class="img-responsive img-rounded" src="admin/<?php echo $image; ?>" />
                    <div caption="caption">
                        <h1 id="heading"> <?php echo htmlentities($title); ?></h1>
                        <p class="description"> Published on <?php echo htmlentities($date); ?> </p>
                        <p class="post">
                            <?php 
                            
                        if(strlen($description)>150){
                            $description= substr($description,0,150).'...';
                        }
                            echo $description; 
                            ?>
                        </p>
                    </div>
                    <a href="fullpost.php?id=<?php echo $id; ?>"><span class="btn btn-info">Read More &rsaquo; &rsaquo; &rsaquo;</span></a>

                </div>

                <?php } ?>

            </div> <!-- Main Area Ending -->

            <div class="col-sm-offset-1 col-sm-3">
                <!-- Slide Area -->
                <h2 style="text-align:center;"> About Us </h2>

                <img class="img-responsive img-rounded" src="images/abtus.jpg" />
                <p><br>This is a pro-occupied and combined effort of Team Alaadin.Ltd presenting you a professional Blogging 
                Website for all professionals of the IT world. Our team has contributed with various types of other sites , among them this is a renouned operation. And all the blogs are completely authorized by our team ,and always upteded with various new updated contents.</p>
            </div> <!-- Slide Area Ending -->
        </div> <!-- Row ending -->
    </div> <!-- Container ending -->

    <div id="Footer">
        <hr>
        <p>Tech Talk | &copy;2019-2020 --- All right reserved.</p>

        <p>
            This site is only for study.This site is only for study.This site is only for study.This site is only for study.<br>This site is only for study.This site is only for study.This site is only for study.
        </p>
        <hr>
    </div>
    <div style="height: 10px; background: #27AAE1;"></div>
</body>

</html>
