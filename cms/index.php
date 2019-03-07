<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="images/idea.png">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet'>
 <link href='style.css' rel='stylesheet'>
 <link href='animated.css' rel='stylesheet'>
  <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <div class="col-xs-3"><img src="images/Globe-icon.png" alt="Logo" width="30px"></div>
        <div class="col-xs-9">Global Institute</div></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-file"></i> Pages<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">page1</a></li>
            <li><a href="#">Page2</a></li>
           
          </ul>
        </li>

        <li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list"></i> Categories<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Category1</a></li>
            <li><a href="#">Category2</a></li>
            
          </ul>
        </li>

        <li><a href="contact.php"><i class="fa fa-phone"></i> ContactUs</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
  <div class="container">
    <div id="details" class="animated fadeInLeft">
  <h1>Global Institute <span>Blog</span></h1>
  <p>This is some text.</p>
</div>
</div>

  <img src="images/slider2.jpg" alt="technology"> 
</div>
  <section>

<div class="container">
  <div class="row">
    <div class="col-md-8"><div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slider1.jpg" alt="slider 1">
      <div class="carousel-caption">
        First slide
      </div>
    </div>
    <div class="item">
      <img src="images/slider2.jpg" alt="slider 2">
      <div class="carousel-caption">
        Second slide
      </div>
    </div>
    <div class="item">
      <img src="images/slider3.jpg" alt="slider 3">
      <div class="carousel-caption">
        Third slide
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="post">
  <div class="row">
<div class="col-md-2 post-date">
  <div class="day">15</div>
  <div class="month">may</div>
  <div class="year">2018</div>
</div>
<div class="col-md-8 post-title">
<a href="#"><h2>This is demo heading....</h2></a>
<p>written by: <span>Shama Mustafa</span></p>
</div>
<div class="col-md-2 profile-picture">
  <img src="images/student2.jpg" alt="profile-picture" class="img-circle">
</div>
  </div>
  <a href="#"><img src="images/slider1.jpg" alt="post image"></a>
  <p class="desc">
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  </p>
  <a href="#" class="btn btn-primary">Read More...</a>
  <div class="bottom"><span class="first"><i class="fa fa-folder"></i><a href="#">Category</a></span>|<span class="sec"><i class="fa fa-comment"></i><a href="#">Comment</a></span>
  </div>
</div>
<div class="post">
  <div class="row">
<div class="col-md-2 post-date">
  <div class="day">15</div>
  <div class="month">may</div>
  <div class="year">2018</div>
</div>
<div class="col-md-8 post-title">
<a href="#"><h2>This is demo heading....</h2></a>
<p>written by: <span>Shama Mustafa</span></p>
</div>
<div class="col-md-2 profile-picture">
  <img src="images/student2.jpg" alt="profile-picture" class="img-circle">
</div>
  </div>
  <a href="#"><img src="images/slider2.jpg" alt="post image"></a>
  <p class="desc">
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  </p>
  <a href="#" class="btn btn-primary">Read More...</a>
  <div class="bottom"><span class="first"><i class="fa fa-folder"></i><a href="#">Category</a></span>|<span class="sec"><i class="fa fa-comment"></i><a href="#">Comment</a></span>
  </div>
</div>
<div class="post">
  <div class="row">
<div class="col-md-2 post-date">
  <div class="day">15</div>
  <div class="month">may</div>
  <div class="year">2018</div>
</div>
<div class="col-md-8 post-title">
<a href="#"><h2>This is demo heading....</h2></a>
<p>written by: <span>Shama Mustafa</span></p>
</div>
<div class="col-md-2 profile-picture">
  <img src="images/student2.jpg" alt="profile-picture" class="img-circle">
</div>
  </div>
  <a href="#"><img src="images/slider3.jpg" alt="post image"></a>
  <p class="desc">
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  </p>
  <a href="#" class="btn btn-primary">Read More...</a>
  <div class="bottom"><span class="first"><i class="fa fa-folder"></i><a href="#">Category</a></span>|<span class="sec"><i class="fa fa-comment"></i><a href="#">Comment</a></span>
  </div>
</div>
<nav id="pagination">

  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="active"><a class="page-link" href="#">1</a></li>
    <li class=""><a class="page-link" href="#">2</a></li>
    <li class=""><a class="page-link" href="#">3</a></li>
    <li class=""><a class="page-link" href="#">4</a></li>
    <li class=""><a class="page-link" href="#">5</a></li>
    <li class="">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
</div>
    <div class="col-md-4">
    <div class="widgets">
    <div class="input-group">
      <input type="text" class="form-control">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div>
    </div>
 <div class="widgets">
<div class="popular">
  <h4>Popular Posts</h4>
  <hr>
<div class="row">
<div class="col-xs-4"><a href="#"><img src="images/science.jpg" alt="science"><a/></div>
<div class="col-xs-8">
  <h4>Heading for Post</h4>
  <p><i class="fa fa-clock-o"></i> 9 March, 2018</p>
</div>
</div>

<hr>
<div class="row">
<div class="col-xs-4"><a href="#"><img src="images/science.jpg" alt="science"><a/></div>
<div class="col-xs-8">
  <h4>Heading for Post</h4>
  <p><i class="fa fa-clock-o"></i> 9 March, 2018</p>
</div>
</div>

<hr>
<div class="row">
<div class="col-xs-4"><a href="#"><img src="images/science.jpg" alt="science"><a/></div>
<div class="col-xs-8">
  <h4>Heading for Post</h4>
  <p><i class="fa fa-clock-o"></i> 9 March, 2018</p>
</div>
</div>
    </div>

    </div>

 <div class="widgets">
<div class="popular">
  <h4>Popular Posts</h4>
  <hr>
<div class="row">
<div class="col-xs-4"><a href="#"><img src="images/science.jpg" alt="science"><a/></div>
<div class="col-xs-8">
  <h4>Heading for Post</h4>
  <p><i class="fa fa-clock-o"></i> 9 March, 2018</p>
</div>
</div>

<hr>
<div class="row">
<div class="col-xs-4"><a href="#"><img src="images/science.jpg" alt="science"><a/></div>
<div class="col-xs-8">
  <h4>Heading for Post</h4>
  <p><i class="fa fa-clock-o"></i> 9 March, 2018</p>
</div>
</div>

<hr>
<div class="row">
<div class="col-xs-4"><a href="#"><img src="images/science.jpg" alt="science"><a/></div>
<div class="col-xs-8">
  <h4>Heading for Post</h4>
  <p><i class="fa fa-clock-o"></i> 9 March, 2018</p>
</div>
</div>
    </div>

    </div>

<div class="widgets">
  <div class="popular">
  <h4>Popular Posts</h4>
  <hr>
  <div class="row">
    <div class="col-xs-6">
<ul>
<li><a href="">category</a></li>
<li><a href="">category</a></li>
<li><a href="">category</a></li>
<li><a href="">category</a></li>
</ul>
    </div>
    <div class="col-xs-6">
<ul>
<li><a href="">category</a></li>
<li><a href="">category</a></li>
<li><a href="">category</a></li>
<li><a href="">category</a></li>
</ul>
    </div>
  </div>
</div>

  </div>

  <div class="widgets">
  <div class="popular">
  <h4>Social Icons</h4>
  <hr>
  <div class="row">
    <div class="col-xs-4"><a href="#" class="fa fa-facebook"></a></div>
    <div class="col-xs-4"><a href="#" class="fa fa-twitter"></a></div>
    <div class="col-xs-4"><a href="#" class="fa fa-google"></a></div>
</div>
<div class="row">
    <div class="col-xs-4"><a href="#" class="fa fa-linkedin"></a></div>
    <div class="col-xs-4"><a href="#" class="fa fa-youtube"></a></div>
    <div class="col-xs-4"><a href="#" class="fa fa-instagram"></a></div>
</div>
</div>

  </div>
</div>
</div>
  </section>

  <footer>Copyright &copy; by developer All Rights Reserved by 2011-2016</footer>
<p>2005</p>
</body>
</html>