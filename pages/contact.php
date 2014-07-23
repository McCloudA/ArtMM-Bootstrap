<?php
$pageKeywords = "art modeling, model, art class";
$pageDescription = "Contact Aaron about me e-book, Art Modeling Mastery.";
$pageTitle = "Contact Aaron";
$section="contact";
include('../includes/header.php');
include('../includes/nav.php');
?>

<div class="container-fluid top-space">
  <div class="row">

    <div class="col-sm-2">
    </div>

    <div class="col-sm-8">
      <div class="page-header">
        <h1>Ask Me Questions!</h1>
      </div>
      <p class="lead">Have questions about the e-book? Ask me!</p> 
      <p class="lead">While I reserve coaching help for people who've bought the e-book, I'd love to answer your questions. If art modeling isn't right for you, I want you to know and not waste your money.</p>
      <p class="lead">Once you've bought the book, I'd love to help you get your career started. If you have any questions about book content, a specific situation you've run into, or web research - I want to help!</p>
      <p class="lead"><strong>NOTE:</strong> Please include your PayPal transaction number in the message.</p>
      <p class="lead">I will respond to your message within 48 hours during normal business hours.</p>
    </div>

    <div class="col-sm-2">
    </div>

  </div>
</div>




    <!-- Contact Form
    ================================================== -->
<div class="container-fluid top-space">
  <div class="row">

    <div class="col-sm-2">
    </div>

    <div class="col-sm-8">

      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Your Message</h3>
        </div>
        <div class="panel-body">

          <form role="form" method="post" action="contact_me.php">

            <fieldset>
              <div class="form-group">
                <label for="full_name">Name</label>
                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Name">
              </div>

              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" rows="7" name="message" id="message" placeholder="Your message here..."></textarea>
              </div>
            </fieldset>

            <div class="form-group">
              <input type="submit" class="btn btn-warning" value="Send&#33;">
            </div>

          </form>

        </div>
      </div>

    </div>

    <div class="col-sm-2">
    </div>

  <div class="row">
</div>









<?php
include('../includes/footer.php');
include('../includes/closing.php');
?>
