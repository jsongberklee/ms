<?php if (!defined('PATH')) { exit; } ?>
  <div class="container margin-top-container min-height-container" id="mscontainer">

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <?php echo $this->TXT[1]; ?>
			<div class="No-display">
			<?php
			/* Begin: mdev modification */
				echo '<a class="btn btn-primary btn-lg btn-front-new-ticket" href="http://local.mdev-sandbox.berklee.net/?p=open" role="button" rel="nofollow"><i class="fa fa-pencil fa-fw"></i> <span class="">Open New Ticket</span></a>';
			/* End: mdev modification */
			?>
			</div>
			<!-- Begin: mdev modification--
			<div class="panel panel-default create-ticket">
				 <div class="panel-heading">CREATE TICKETS FOR</div>
				<div class="mdev-ticket-shortcut">
					<div class="btn-group">
					  <button type="button" class="btn btn-primary">General Tickets</button>
					</div>
					<div class="btn-group">
					  <button type="button" class="btn btn-success">Purchase Request</button>
					</div>
					<div class="btn-group">
					  <button type="button" class="btn btn-danger">Order Office Supplis</button>
					</div>
					<div class="btn-group">
					  <button type="button" class="btn btn-danger">Order Physical Work</button>
					</div>
					<div class="btn-group tech">
					  <button type="button" class="btn btn-info">Technical Support</button>
					  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					     <span class="caret"></span>
					     <span class="sr-only">Toggle Dropdown</span>
					   </button>
					   <ul class="dropdown-menu">
					     <li><a href="/?p=open&cat1=3&cat2=KYB">KYB</a></li>
					     <li><a href="#">Mouse</a></li>
					     <li><a href="#">Audio Interface</a></li>
					   </ul>
					</div>
					<div class="btn-group web-site">
					  <button type="button" class="btn btn-warning">Web site/application</button>
					  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					     <span class="caret"></span>
					     <span class="sr-only">Toggle Dropdown</span>
					   </button>
					   <ul class="dropdown-menu">
					     <li><a href="/?p=open&cat1=5&cat2=Bug Report">Bug Report</a></li>
					     <li><a href="#">UX Design</a></li>
					     <li><a href="#">Feature Request</a></li>
						 <li><a href="#">Suggestion/Feedback</a></li>
					     <li role="separator" class="divider"></li>
					     <li><a href="#">Other</a></li>
					   </ul>
					</div>
				</div>
			</div>
			-- End: mdev modification -->
          </div>
        </div>
      </div>
    </div>

    <?php
	  // Show if FAQ is enabled...
	  if ($this->SETTINGS->kbase == 'yes') {
	  ?>
    <form method="get" action="index.php" id="sform">
    <div class="row">
      <div class="col-lg-8">

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mstabmenuarea">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#one" data-toggle="tab"><i class="fa fa-paperclip fa-fw"></i> <span class="hidden-sm hidden-xs"><?php echo $this->TXT[4]; ?></span></a></li>
              <li><a href="#two" data-toggle="tab"><i class="fa fa-heart-o fa-fw"></i> <span class="hidden-sm hidden-xs"><?php echo $this->TXT[2]; ?></span></a></li>
              <li><a href="#three" data-toggle="tab"><i class="fa fa-calendar fa-fw"></i> <span class="hidden-sm hidden-xs"><?php echo $this->TXT[3]; ?></span></a></li>
              <li><a href="#four" data-toggle="tab"><i class="fa fa-search fa-fw"></i> <span class="hidden-sm hidden-xs"><?php echo $this->TXT[6]; ?></span></a></li>
            </ul>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_top_10">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="tab-content">
                  <div class="tab-pane active in" id="one">

                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <tbody>
                        <?php
                        // FEATURED QUESTIONS
                        // html/faq-question-link.htm
                        // html/nothing-found.htm
                        echo $this->FEATURED;
                        ?>
                        </tbody>
                      </table>
                    </div>

                  </div>
                  <div class="tab-pane fade" id="two">

                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <tbody>
                        <?php
                        // POPULAR QUESTIONS
                        // html/faq-question-link.htm
                        // html/nothing-found.htm
                        echo $this->POPULAR;
                        ?>
                        </tbody>
                      </table>
                    </div>

                  </div>
                  <div class="tab-pane fade" id="three">

                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <tbody>
                        <?php
                        // LATEST QUESTIONS
                        // html/faq-question-link.htm
                        // html/nothing-found.htm
                        echo $this->LATEST;
                        ?>
                        </tbody>
                      </table>
                    </div>

                  </div>
                  <div class="tab-pane fade" id="four">

                    <div class="form-group">
                      <div class="form-group input-group">
                       <input type="hidden" name="p" value="faq-search">
                       <input type="text" placeholder="<?php echo $this->TXT[7]; ?>" name="q" value="" class="form-control" onkeypress="if(mswKeyCode(event)==13){mswSearchAction()}">
                       <span class="input-group-addon"><i class="fa fa-chevron-right fa-fw cursor_pointer" onclick="mswSearchAction()"></i></span>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-4">

        <div class="panel panel-default">
          <div class="panel-heading mswforceleftalign">
            <i class="fa fa-folder-o fa-fw"></i> <?php echo $this->TXT[5]; ?>
          </div>
          <div class="panel-body text_height_25" id="mswfaqcatarea">

            <?php
            // CATEGORIES
            // html/faq-cat-menu-link.htm
            // html/faq-sub-menu-link.htm
            echo $this->CATEGORIES;
            ?>

          </div>
        </div>

        <?php
        // CUSTOM PAGES
        // html/custom-pages.htm
        // html/custom-pages-link.htm
        echo $this->OTHER_PAGES;
        ?>

      </div>
    </div>
    </form>
    <?php
    } else {

      // CUSTOM PAGES
      // html/custom-pages.htm
      // html/custom-pages-link.htm
      echo $this->OTHER_PAGES;

    }
    ?>

  </div>