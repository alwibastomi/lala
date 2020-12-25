      </div>
    </div>

    <!-- JS -->

    <!-- Custom Theme Scripts -->
    <script src="<?php echo site_url('assets/js/custom.js'); ?>"></script>
    <script>
      
  $(document).ready(function(){

    
  // hide #back-top first
  $("#back-top").hide();
  
  // fade in #back-top
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 300) {
        $('#back-top').fadeIn();
      } else {
        $('#back-top').fadeOut();
      }
    });

    // scroll body to 0px on click
    $('#back-top a').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  });

});

    // Get the modal
  var modal = document.getElementById('myModal');

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function() {
      modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
      modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }

  
    </script>

    <script type="text/javascript">
      function runpro(){
        var shell = new ActiveXObject("WScript.Shell");
        var le = "\"C:\\Program Files\\Microsoft Office\\Office15\\OUTLOOK.exe\" ";
        shell.Run(le);
      }
    </script>
  </body>
</html>
