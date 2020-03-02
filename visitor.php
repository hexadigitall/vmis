<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Visitor's Form</title>
    <link rel="stylesheet" href="visitor.css" />
    <link href="https://fonts.googleapis.com/css?family=Alef&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/glacial-indifference" type="text/css"/>
    <script
      src="https://kit.fontawesome.com/2b9385dd69.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
        <div class="title">Visitor's Form</div>
      <div class="form_box">
            <form action="visitor.html" method="POST">
               <div class="card_content">
                 <label for="card_no">Card No<i class="fas fa-id-card-alt"></i></label>
                 <input required name="card_No" type="text" placeholder="Card No" id="card_no">
                 <label for="card_Type">Card Type</label>
                 <select required name="card_Type" id="card_Type">
                    <option>--Select Card Type --</option>
                    <option value="Open Cafe">Open Cafe</option>
                    <option value="Co-Work">Co-Work</option>
                    <option value="Lessee">Lessee</option>
                    <option value="Admin">Admin</option>
                </select><br>
                <label for="full_Name">Full Name</label><input required name="full_Name" type="text" placeholder="Full Name" id="full_name">
            </div>
            
            
               <div class="card_content_two"> <label for="gender">Gender</label> <select required name="gender" id="gender" aria-placeholder="">
                    <option value="">-- Select Gender --</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Others</option>
                </select>
                <label for="phone_no">Phone No <i class="fas fa-phone-square-alt"></i></label><input required class="small_input" type="text" name="phone_No" placeholder="Phone No" id="phone_no">
                <label for="onAppointment">On Appointment</label> <select required name="onAppointment" id="onAppointment">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
              </select>
            </div>

            <div class="card_content_three">
              <label for="">Address <i class="fas fa-map-marker-alt"></i></label><input required type="text"name="address" placeholder="Address">
              <label for="">Whom to see <i class="far fa-sticky-note"></i></label><input required type="text" name="whom_to_see">
              <label for="">Purpose <i class="far fa-sticky-note"></i></label><input required type="text" name="purpose" placeholder="Purpose">
            </div>

            <div class="card_content_four">
              <label for="">Visit Date <i class="fas fa-calendar-alt"></i></label> <input required type="date" class="small_input" id="date" name="visit_Date">
              <label for="">Items with <i class="far fa-sticky-note"></i></label> <input required type="text" name="items_With" placeholder="Items With">
              <label for="">Model Nos</label> <input required type="text" name="model_Nos" placeholder="Model Nos">
            </div>

            <div class="card_content_five">
              <label for="">Time In <i class="fas fa-hourglass-start"></i></label> <input required type="datetime" name="time_In">
              <label for="">Attended to ?</label> <input required type="checkbox" name="attended_to" id="checked">
              <label for="">Time Out <i class="fas fa-hourglass-end"></i></label> <input required type="datetime" name="time_Out">
            </div>
            <button type="submit">Register</button>
            </form>
            
      </div>
     
    </div>
  </body>
</html>
