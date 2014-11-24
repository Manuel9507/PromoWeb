<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>PromoWeb</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="/assets/css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="main_bg">
<div id="main">
<!-- header begins -->
<div id="header">
<br></br>
   <div id="buttons">
      <a href="index.html" class="but_home"  title=""></a><div class="but_razd"></div>
      <a href="blog.html" class="but" title="">Publicidad</a><div class="but_razd"></div>
      <a href="gallery.html"  class="but" title="">Gallery</a><div class="but_razd"></div>
    </div>
</div>
<!-- header ends -->
<div class="top">

<ul class="round">
			<li><img src=" " alt="" /></li>
			<li><img src=" " alt="" /></li>
			<li><img src=" " alt="" /></li>
			<li><img src=" " alt="" /></li>
			<li><img src=" " alt="" /></li>
			<li><img src=" " alt="" /></li>
</ul>
@yield('main')
<script type="text/javascript" src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="/assets/js/jquery.roundabout.js"></script>
<script type="text/javascript">
			
			$(document).ready(function() {
				$('.round').roundabout();
			});
		
		</script>
</div>

        <!-- content begins -->
        		<div class="cont_top"></div>
       			
                <div class="cont_bot"></div>
    <!-- content ends --> 
    <div style="height:15px"></div>
    <!-- bottom begin -->
    <div id="bottom">
    	<div style="height:10px"></div>
    </div>
    <div class="cont_bot"></div>
    
<!-- bottom end --> 
<!-- footer begins -->
            <div id="footer">
          Copyright  2011.<a href="#" title="  "> </a><br />
                <a href="#">Privacy Policy</a> | <a href="#">PromoWeb</a> </abbr></a></div>
        <!-- footer ends -->
</div>

</div>
<script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>

