<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elite Tailoring</title>
    <link rel="stylesheet" href="../style.css" />
    <script src="../script.js"></script>

    <!--Font_Awesome library importing-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
    <div>
      <!--Navigation Bar Start-->

      <?php include 'navbar.php';?>

      <!--Navigation Bar End-->
    </div>

    <div class="booking-container">

      <div class="booking-para-container">
        <p class ="booking-para">
          To submit an enquiry or to arrange an appointment with one of our
          tailors<br />
          please call us on
          <strong>
            <a href="tel:+919311357353">+91-9311357353</a>
          </strong>
          , or alternatively please complete the form below.<br />
          We will call you back as soon as possible.
        </p>
      </div>

      <div class="booking-form-container">

        <h2 class="booking-form-title">Book an Appointment</h2>

        <div class="booking-form">
      
        <form
          method="post"
          action="file:///D:/SLIIT%20SAW/1st%20year/2%20SEMESTER/Projects/IWT/book_appointment.php"
        >
          <div class="form-element">
            <label for="firstname" class="form-label">First Name:</label>
            <input type="text" id="firstname" name="firstname" required="" class="form-input" />
          </div>
          

          <div class="form-element">
            <label for="lastname" class="form-label">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required="" class="form-input" />
          </div>

          <div class="form-element">
            <label for="email" class="form-label">Email Address:</label>
            <input type="email" id="email" name="email" required="" class="form-input" />
          </div>

          <div class="form-element">
            <label for="mobile" class="form-label">Mobile Number:</label>
            <input type="tel" id="mobile" name="mobile" required="" class="form-input" />
          </div>

          <div class="form-element">
            <label for="address" class="form-label">Full Address:</label>
            <textarea id="address" name="address" required=""></textarea>
          </div>

          <div class="form-element">
            <label for="city" class="form-label">City:</label>
            <input type="text" id="city" name="city" required="" class="form-input" />
          </div>

          <div class="form-element">
            <label for="service" class="form-label">Select Service:</label>
          <select id="service" name="service" required="">
            <option value="Service 1">---</option>
            <option value="Service 2">Custom Tailoring For Women</option>
            <option value="Service 3">Custom Tailoring For Kids</option>
            <option value="Service 4">Custom Tailoring For Men</option>
          </select>
          </div>
          

          <div class="form-element">
            <label for="appointment_date" class="form-label">Appointment Date:</label>
            <input
            type="date"
            id="appointment_date"
            name="appointment_date"
            required=""
            class="form-input"
          />
          </div>

          <div class="form-element">
            <label for="time" class="form-label">Select Time:</label>
            <input type="time" id="time" name="time" required="" class="form-input" />
          </div>

          <div class="form-element">
            <label for="message" class="form-label">Message:</label>
            <textarea id="message" name="message" required="" ></textarea>
          </div>

          <input type="submit" value="Book Appointment" />
        </form>
    </div>
      
      </div>
    </div>

    <script src="file:///D:/SLIIT%20SAW/1st%20year/2%20SEMESTER/Projects/IWT/script.js"></script>
  </body>
</html>
