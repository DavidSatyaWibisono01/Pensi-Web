        // Get the modal
        var modalvidpensi = document.getElementById("myModalsk");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImgsk");
        var captionText = document.getElementById("captionsk");
        img.onclick = function(){
          modalvidpensi.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("closed")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modalvidpensi.style.display = "none";
        }

      window.onclick = function(event) {
        if (event.target == modalvidpensi) {
          modalvidpensi.style.display = "none";
        }
      }