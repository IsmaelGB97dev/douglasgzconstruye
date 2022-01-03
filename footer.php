    
    <?php include 'php/sections/menu-mobile1.php'; ?>

    <script defer src="<?php echo JS; ?>aos.js"></script>
    <script defer src="<?php echo JS; ?>script.js"></script>
    <script defer src="<?php echo JS; ?>bootstrap.bundle.min.js"></script>

    <noscript id="deferred-styles">
        <link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>styles.css"/>
        <link rel="stylesheet" href="<?php echo CSS; ?>animate.min.css">
        <link rel="stylesheet" href="src/fontawesome/css/all.css">
    </noscript>
    <script>
      var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
      };
      var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
          window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
      if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
      else window.addEventListener('load', loadDeferredStyles);
    </script>
    </body>
</html>
