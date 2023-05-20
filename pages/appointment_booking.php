<!DOCTYPE html>
<!-- saved from url=(0088)file:///D:/SLIIT%20SAW/1st%20year/2%20SEMESTER/Projects/IWT/book%20an%20appointment.html -->
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <title>Book an Appointment</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="./Book an Appointment-elite_files/styles.css"
    />
  </head>
  <body>
    <div>
      <!--Navigation Bar Start-->

      <?php include 'navbar.php';?>

      <!--Navigation Bar End-->
    </div>

    <p>
      To submit an enquiry or to arrange an appointment with one of our
      tailors<br />
      please call us on
      <strong>
        <a href="tel:+919311357353">+91-9311357353</a>
      </strong>
      , or alternatively please complete the form<br />
      below. We will call you back as soon as possible.
    </p>
    <div class="container">
      <h2>Book an Appointment</h2>
      <form
        method="post"
        action="file:///D:/SLIIT%20SAW/1st%20year/2%20SEMESTER/Projects/IWT/book_appointment.php"
      >
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required="" />

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required="" />

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required="" />

        <label for="mobile">Mobile Number:</label>
        <input type="tel" id="mobile" name="mobile" required="" />

        <label for="address">Full Address:</label>
        <textarea id="address" name="address" required=""></textarea>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required="" />

        <label for="service">Select Service:</label>
        <select id="service" name="service" required="">
          <option value="Service 1">---</option>
          <option value="Service 2">Custom Tailoring For Women</option>
          <option value="Service 3">Custom Tailoring For Kids</option>
          <option value="Service 4">Custom Tailoring For Men</option>
        </select>

        <label for="appointment_date">Appointment Date:</label>
        <input
          type="date"
          id="appointment_date"
          name="appointment_date"
          required=""
        />

        <label for="time">Select Time:</label>
        <input type="time" id="time" name="time" required="" />

        <label for="message">Message:</label>
        <textarea id="message" name="message" required=""></textarea>

        <input type="submit" value="Book Appointment" />
      </form>
    </div>

    <script src="file:///D:/SLIIT%20SAW/1st%20year/2%20SEMESTER/Projects/IWT/script.js"></script>
  </body>
</html>