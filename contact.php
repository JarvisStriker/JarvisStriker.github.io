
<?php
	$name=$_REQUEST['Name'];
    $email=$_REQUEST['Email'];
    $message=$_REQUEST['Message'];
    $phone=$_REQUEST['Mobile'];
   if (($name=="")||($email=="")||($message=="")||($phone==""))
        {
		echo "All fields are required, please fill the form again.";
	    }
    else{		
	 
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        $message="$message \n\n $phone";
        mail("kushal.st@hotmail.com", $subject, $message, $from);
		?>
<html>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style type="text/css">
  #snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
    font-family: 'Raleway', sans-serif;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}


@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

*, *:before, *:after {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.heart-loader {
  position: absolute;
  display: block;
  left: 50%;
  top: 50%;
  margin-top: -90px;
  width: 180px;
  height: 180px;
  overflow: visible;
}

.heart-loader__group {
  -webkit-transform-origin: 0 90px;
          transform-origin: 0 90px;
  -webkit-animation: group-anim 7s 1s infinite;
          animation: group-anim 7s 1s infinite;
}
.heart-loader__square {
  stroke: #B8B8B8;
  stroke-dasharray: 240, 240;
  stroke-dashoffset: 240;
  -webkit-animation: square-anim 7s 1s infinite;
          animation: square-anim 7s 1s infinite;
}
.heart-loader__circle {
  stroke: #B8B8B8;
  stroke-dasharray: 188.522, 188.522;
  stroke-dashoffset: 188.522;
  -webkit-transform-origin: 60px 30px;
          transform-origin: 60px 30px;
}
.heart-loader__circle.m--left {
  -webkit-animation: left-circle-anim 7s 1s infinite;
          animation: left-circle-anim 7s 1s infinite;
}
.heart-loader__circle.m--right {
  -webkit-animation: right-circle-anim 7s 1s infinite;
          animation: right-circle-anim 7s 1s infinite;
}
.heart-loader__heartPath {
  stroke: #E21737;
  fill: transparent;
  stroke-dasharray: 308.522, 308.522;
  stroke-dashoffset: 308.522;
  -webkit-animation: heart-anim 7s 1s infinite;
          animation: heart-anim 7s 1s infinite;
}

@-webkit-keyframes square-anim {
  12% {
    stroke-dashoffset: 0;
  }
  43% {
    stroke-dashoffset: 0;
    opacity: 1;
  }
  85% {
    stroke-dashoffset: 0;
    opacity: 0;
  }
  100% {
    stroke-dashoffset: 0;
    opacity: 0;
  }
}

@keyframes square-anim {
  12% {
    stroke-dashoffset: 0;
  }
  43% {
    stroke-dashoffset: 0;
    opacity: 1;
  }
  85% {
    stroke-dashoffset: 0;
    opacity: 0;
  }
  100% {
    stroke-dashoffset: 0;
    opacity: 0;
  }
}
@-webkit-keyframes left-circle-anim {
  12% {
    stroke-dashoffset: 188.522;
  }
  31% {
    stroke-dashoffset: 0;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  41% {
    stroke-dashoffset: 0;
    -webkit-transform: translateY(-30px);
            transform: translateY(-30px);
  }
  43% {
    stroke-dashoffset: 0;
    -webkit-transform: translateY(-30px);
            transform: translateY(-30px);
    opacity: 1;
  }
  85% {
    stroke-dashoffset: 0;
    -webkit-transform: translateY(-30px);
            transform: translateY(-30px);
    opacity: 0;
  }
  100% {
    stroke-dashoffset: 0;
    -webkit-transform: translateY(-30px);
            transform: translateY(-30px);
    opacity: 0;
  }
}
@keyframes left-circle-anim {
  12% {
    stroke-dashoffset: 188.522;
  }
  31% {
    stroke-dashoffset: 0;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  41% {
    stroke-dashoffset: 0;
    -webkit-transform: translateY(-30px);
            transform: translateY(-30px);
  }
  43% {
    stroke-dashoffset: 0;
    -webkit-transform: translateY(-30px);
            transform: translateY(-30px);
    opacity: 1;
  }
  85% {
    stroke-dashoffset: 0;
    -webkit-transform: translateY(-30px);
            transform: translateY(-30px);
    opacity: 0;
  }
  100% {
    stroke-dashoffset: 0;
    -webkit-transform: translateY(-30px);
            transform: translateY(-30px);
    opacity: 0;
  }
}
@-webkit-keyframes right-circle-anim {
  12% {
    stroke-dashoffset: 188.522;
  }
  31% {
    stroke-dashoffset: 0;
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  41% {
    stroke-dashoffset: 0;
    -webkit-transform: translateX(30px);
            transform: translateX(30px);
  }
  43% {
    stroke-dashoffset: 0;
    -webkit-transform: translateX(30px);
            transform: translateX(30px);
    opacity: 1;
  }
  85% {
    stroke-dashoffset: 0;
    -webkit-transform: translateX(30px);
            transform: translateX(30px);
    opacity: 0;
  }
  100% {
    stroke-dashoffset: 0;
    -webkit-transform: translateX(30px);
            transform: translateX(30px);
    opacity: 0;
  }
}
@keyframes right-circle-anim {
  12% {
    stroke-dashoffset: 188.522;
  }
  31% {
    stroke-dashoffset: 0;
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  41% {
    stroke-dashoffset: 0;
    -webkit-transform: translateX(30px);
            transform: translateX(30px);
  }
  43% {
    stroke-dashoffset: 0;
    -webkit-transform: translateX(30px);
            transform: translateX(30px);
    opacity: 1;
  }
  85% {
    stroke-dashoffset: 0;
    -webkit-transform: translateX(30px);
            transform: translateX(30px);
    opacity: 0;
  }
  100% {
    stroke-dashoffset: 0;
    -webkit-transform: translateX(30px);
            transform: translateX(30px);
    opacity: 0;
  }
}
@-webkit-keyframes group-anim {
  43% {
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }
  54% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
  }
  90% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
    opacity: 1;
  }
  97% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
    opacity: 0;
  }
  100% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
    opacity: 0;
  }
}
@keyframes group-anim {
  43% {
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }
  54% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
  }
  90% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
    opacity: 1;
  }
  97% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
    opacity: 0;
  }
  100% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
    opacity: 0;
  }
}
@-webkit-keyframes heart-anim {
  55% {
    stroke-dashoffset: 308.522;
    fill: transparent;
  }
  70% {
    stroke-dashoffset: 0;
    fill: transparent;
  }
  87% {
    stroke-dashoffset: 0;
    fill: #E21737;
  }
  100% {
    stroke-dashoffset: 0;
    fill: #E21737;
  }
}
@keyframes heart-anim {
  55% {
    stroke-dashoffset: 308.522;
    fill: transparent;
  }
  70% {
    stroke-dashoffset: 0;
    fill: transparent;
  }
  87% {
    stroke-dashoffset: 0;
    fill: #E21737;
  }
  100% {
    stroke-dashoffset: 0;
    fill: #E21737;
  }
}
.other {
  position: absolute;
  left: 0;
  bottom: 0.5rem;
  width: 100%;
  text-align: right;
}
.other__link {
  font-size: 1.3rem;
  margin: 0 1rem;
}

</style>
<body>




<svg class="heart-loader" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 90 90" version="1.1">  <g class="heart-loader__group">    <path class="heart-loader__square" stroke-width="1" fill="none" d="M0,30 0,90 60,90 60,30z"/>    <path class="heart-loader__circle m--left" stroke-width="1" fill="none" d="M60,60 a30,30 0 0,1 -60,0 a30,30 0 0,1 60,0"/>    <path class="heart-loader__circle m--right" stroke-width="1" fill="none" d="M60,60 a30,30 0 0,1 -60,0 a30,30 0 0,1 60,0"/>    <path class="heart-loader__heartPath" stroke-width="2" d="M60,30 a30,30 0 0,1 0,60 L0,90 0,30 a30,30 0 0,1 60,0" />  </g></svg>

<script>
  setTimeout(function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    //setTimeout(function(){ x.className = x.className.replace("show", ""); 
  setTimeout(function(){ location.href="./index.html#contactMe"; },3000);   //}, 4000);
  },4800);
</script>
<div id="snackbar">Successfully Sent! <br> Going back in 3..2..1..</div>  
 <script src="js/bootstrap.js"></script>
</body>
</html>
		<?php
	}
?>