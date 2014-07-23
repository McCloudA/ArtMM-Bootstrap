<!-- NAVBAR
================================================== -->
  <body>
    <?php include_once("analyticstracking.php") ?>
    <div class="navbar-wrapper" id="top">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/index.php">Art Modeling Mastery</a>
          </div>

            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">

                <li class="<?php if ($section == "about-me") { echo "active"; } ?>"><a href="/pages/about-me.php">About Me</a></li>
                <li class="hidden-sm <?php if ($section == "ebook") { echo "active"; } ?>"><a href="/pages/ebook.php">About The E-Book</a></li>
                <li class="hidden-sm <?php if ($section == "why-model") { echo "active"; } ?>"><a href="/pages/why-model.php">Why Model?</a></li>
                <!-- <li class="hidden-sm <?php if ($section == "excerpts") { echo "active"; } ?>"><a href="/pages/excerpts.php">Excerpt</a></li> -->
                <li class="<?php if ($section == "buy") { echo "active"; } ?>"><a href="/pages/buy.php">Buy E-Book!</a></li>

                <li class="dropdown visible-sm
                <?php if ($section == "ebook") { echo "active"; } ?>
                <?php if ($section == "why-model") { echo "active"; } ?>
                <?php if ($section == "excerpts") { echo "active"; } ?>
                ">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="<?php if ($section == "ebook") { echo "active"; } ?>"><a href="/pages/ebook.php">About The E-Book</a></li>
                    <li class="<?php if ($section == "why-model") { echo "active"; } ?>"><a href="/pages/why-model.php">Why Model?</a></li>
                    <li class="<?php if ($section == "excerpts") { echo "active"; } ?>"><a href="/pages/excerpts.php">Excerpts</a></li>
                  </ul>
                </li>


              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li class="<?php if ($section == "contact") { echo "active"; } ?>"><a href="/pages/contact.php" >Contact</a></li>
              </ul>

            </div>
          </div>
        </div>

      </div>
    </div>
