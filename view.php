<!DOCTYPE html>
<html>
  <head>
    <title>Processing.js Example Page</title>
    <meta charset="UTF-8">
    <link rel=stylesheet href=styles.css>
	
    <script type="text/javascript" src="processing-1.4.1.js"></script>
	<script src=script.js></script>
	<script src=canvas_stuff.js></script>
	
    <!--
        This is a source-file-less sketch, loaded from inline source code in
        the html header. This only works if the script specifies a data-processing-target
    -->
    <script type="text/processing" data-processing-target="targetcanvas">
      //  Processing.js example sketch
     
      int fontsize = 24;

      void setup() {
        size(568, 380);
        stroke(0);
        fill(0);
        textFont(createFont("Arial",fontsize));
        noLoop();
      }

      void draw() {
      background(#F0F0E0);
    //    String textstring = "inner example";
   //     float twidth = textWidth(textstring);
   //     text(textstring, (width-twidth)/2, height/2);
    
     
     
     
    // array for y values (input y values here)
var yValues = [1,4,2,8,3,6,2,3];
var sections = yValues.length;

// define starting point and bar sizes
var startX = 0;
var space = 0;
var sectionWidth = 640 / sections;
var sectionHeight = sectionWidth * 0.75;
var startY = 480 - sectionHeight - space;

// draw background and x-axis
//background(143, 55, 14);
strokeWeight(0);
line(0 ,480 ,startX + sections * (sectionWidth + space), 480);

// draw graph
noStroke();

for (var i = 0; i < sections; i += 1) {
    
    for (var j = 1; j <= yValues[i]; j += 1) {
        fill(139, j/8*255, 204);
        rect(startX,startY,sectionWidth,sectionHeight);
        startY -= sectionHeight + space;
    }    
    
    startX += sectionWidth + space;
    startY += (sectionHeight + space)*yValues[i];
}
     
      }
      
      
      
      
    </script>
  </head>

<body>

<div id="container">
<h3 id="title">Battle</h3>


  <canvas id="targetcanvas" style="border: 1px solid #ccc;"></canvas>

<div id ="float_left">
-x-
</div>

<div id ="float_right">
-x-
</div>

</div><!-- end container -->


</body>
</html>
