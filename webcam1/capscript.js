window.addEventListener("load", function () {
  // [1] GET ALL THE HTML ELEMENTS
  var video = document.getElementById("vid-show"),
    canvas = document.getElementById("vid-canvas"),
    take = document.getElementById("vid-take"),
    upload = document.getElementById("vid-save");

  // [2] ASK FOR USER PERMISSION TO ACCESS CAMERA
  // WILL FAIL IF NO CAMERA IS ATTACHED TO COMPUTER
  navigator.mediaDevices
    .getUserMedia({ video: true })
    .then(function (stream) {
      // [3] SHOW VIDEO STREAM ON VIDEO TAG
      video.srcObject = stream;
      video.play();

      // [4] WHEN WE CLICK ON "TAKE PHOTO" BUTTON
      take.addEventListener("click", function () {
        // Create snapshot from video i.e Draw the image from the video on the canvas
        var draw = document.createElement("canvas");
        draw.width = video.videoWidth;
        draw.height = video.videoHeight;
        var context2D = draw.getContext("2d");
        context2D.drawImage(video, 0, 0, video.videoWidth, video.videoHeight);
        // Put into canvas container
        canvas.style.display = "block";
        canvas.innerHTML = "";
        canvas.appendChild(draw);
        let anchor = document.createElement("button");
        anchor.innerHTML = "Click to save";
        anchor.setAttribute("id", "vid-save");
        canvas.appendChild(anchor);
      });

      upload.addEventListener("click", function () {
        // Create snapshot from video
        var draw = document.createElement("canvas");
        draw.width = video.videoWidth;
        draw.height = video.videoHeight;
        var context2D = draw.getContext("2d");
        context2D.drawImage(video, 0, 0, video.videoWidth, video.videoHeight);

        // Convert the data so it can be saved as a file
        let picture = canvas.toDataURL();

        // Sending the converted URL format into the server via Ajax
        $.ajax({
          type: "POST",
          url: "script.php",
          data: {
            imageBase64: dataURL,
          },
        });

        // Save the file by posting it to the server
        var fd = new FormData(document.forms["regForm"]);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "upload_data.php", true);

        xhr.upload.onprogress = function (e) {
          if (e.lengthComputable) {
            var percentComplete = (e.loaded / e.total) * 100;
            console.log(percentComplete + "% uploaded");
            alert("Successfully uploaded");
          }
        };

        xhr.onload = function () {};
        xhr.send(fd);

        // Upload blob to server
        draw.toBlob(function (blob) {
          var data = new FormData();
          data.append("upimage", blob);
          //Use jQuery.ajax method
          $.ajax("upload.php", {
            method: "POST",
            data: FormData,
            processData: false,
            contentType: false,
            success: function (response) {},
            error: function () {},
          });
        });

        // Upload to server
        // draw.toBlob(function (blob) {
        //   var data = new FormData();
        //   data.append("upimage", blob);
        //   var xhr = new XMLHttpRequest();
        //   xhr.open("POST", "3-upload.php", true);
        //   xhr.onload = function () {
        //     if (xhr.status == 403 || xhr.status == 404) {
        //       alert("ERROR LOADING 3-UPLOAD.PHP");
        //     } else {
        //       alert(this.response);
        //     }
        //   };
        //   xhr.send(data);
        // });
      });
    })
    .catch(function (err) {
      document.getElementById("vid-controls").innerHTML =
        "Please enable access and attach a camera";
    });
});
