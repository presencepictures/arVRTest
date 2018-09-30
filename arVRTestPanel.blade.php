<html>
  <head>
    <script src="https://presence.pictures/public/javascript/aframe.min.0.8.0.js"></script>
    <?php // <script src="https://presence.pictures/public/javascript/build/aframe-ar.min.js"></script> ?>
    <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.5.0/aframe/build/aframe-ar.js"></script>

  </head>
  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs>
      <!-- create your content here. just a box for now -->
      <a-box position='0 0.5 0' material='opacity: 0.5;'></a-box>
      <!-- define a camera which will move according to the marker position -->
      <a-marker-camera type='pattern' url='http://presence.pictures/public/arTestPattern/amelieTest.patt'></a-marker-camera>
    </a-scene>
  </body>
      
</html>