<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Mgmt |<?= $page_title; ?></title>

    <?= $this->include("partials/allCDNs"); ?>

    

</head>
<body>

<div class="ui sidebar vertical left menu overlay visible" style="-webkit-transition-duration: 0.1s; overflow: visible !important;">
  <div class="item logo">
    <img src="<?= base_url(); ?>public/assets/images/medicalteam.png" alt="Logo" /><img src="<?= base_url(); ?>public/assets/images/medicalteam.png" style="display: none" />
  </div>
  <div class="ui accordion">
    <a class="title item" href="<?= base_url(); ?>home">Dashboard 
                </a>

    <div class="title item">
     <a class="title item" href="<?= base_url(); ?>home/patients" class=""> Patients List <i class="dropdown icon"></i> </a> 
    </div>
    <!-- <div class="content">
      <a class="item" href="inbox.html">Inbox
                    </a>
      <a class="item" href="mail.html">Mailbox
                    </a>
      <a class="item" href="chat.html">Chat
                    </a>
      <a class="item" href="contacts.html">Contacts
                    </a>
      <a class="item" href="photoeditor.html">Photo Editor
                    </a>
      <a class="item" href="calendar.html">Calendar
                    </a>
      <a class="item" href="filter.html">Filter
                    </a>
      <a class="item" href="todo.html">Todo
                    </a>
    </div> -->

    <div class="title item">
      <a class="title item" href="<?= base_url(); ?>home/reports" class=""> Reports List <i class="dropdown icon"></i> </a> 
    </div>

    <div class="title item">
      <a class="title item" href="<?= base_url(); ?>home/doctors" class=""> Doctors List <i class="dropdown icon"></i> </a> 
    </div>
    <!-- <div class="content">
      <a class="item" href="sidebar.html">Sidebar
                    </a>
      <a class="item" href="menu.html">Nav
                    </a>
      <a class="item" href="animatedicon.html">Animated Icon
                    </a>
      <a class="item" href="box.html">Box
                    </a>
      <a class="item" href="cards.html">Cards
                    </a>
      <a class="item" href="color.html">Colors
                    </a>
      <a class="item" href="comment.html">Comment
                    </a>
      <a class="item" href="embed.html">Embed
                    </a>
      <a class="item" href="faq.html">Faq
                    </a>
      <a class="item" href="feed.html">Feed
                    </a>
      <a class="item" href="gallery.html">Gallery
                    </a>
      <a class="item" href="grid.html">Grid
                    </a>
      <a class="item" href="header.html">Header
                    </a>
      <a class="item" href="timeline.html">Timeline
                    </a>
      <a class="item" href="message.html">Message
                    </a>
      <a class="item" href="price.html">Price
                    </a>
    </div> -->

    <div class="title item">
      <a class="title item" href="<?= base_url(); ?>home/admin" class=""> <b>Admin Panel</b>  </a> 
    </div>

    <div class="title item">
      <a class="title item" href="<?= base_url(); ?>contact" class=""> Contact Us </a> 
    </div>
    

    
  </div>
  <div class="ui dropdown item displaynone">
    <z>Dashboard</z>
    <a href="<?= base_url(); ?>home"> <i class="fa fa-tachometer" aria-hidden="true"></i></a>

    <div class="menu">
      <div class="header">
        Dashboard
      </div>
      <div class="ui divider"></div>
      <a class="item" href="dashboard.html">Dashboard
                    </a>
    </div>
  </div>

  <div class="ui dropdown item displaynone">
    <z>Patients</z>
    <a href="<?= base_url(); ?>home/patients"> <i class="fa fa-user-plus" aria-hidden="true"></i></a>

  </div>

  <div class="ui dropdown item displaynone">
    <z>Reports</z>
    <a href="<?= base_url(); ?>home/reports"> <i class="fa fa-list-ul" aria-hidden="true"></i></a>

  </div>

  <div class="ui dropdown item displaynone">
    <z>Doctors</z>
    <a href="<?= base_url(); ?>home/doctors"> <i class="fa fa-user-md" aria-hidden="true"></i></a>

  </div>
  
  <div class="ui dropdown item displaynone">
    <z>Admin Panel</z>
    <a href="<?= base_url(); ?>home/admin"> <i class="fa fa-lock" aria-hidden="true"></i></a>

  </div>

  <div class="ui dropdown item displaynone">
    <z>Contact Us</z>
    <a href="<?= base_url(); ?>contact"> <i class="fa fa-comments" aria-hidden="true"></i></a>

  </div>


</div>
<div class="pusher">
  <div class="ui menu asd borderless" style="border-radius: 0!important; border: 0; margin-left: 260px; -webkit-transition-duration: 0.1s;">
    <a class="item openbtn">
      <i class="icon content"></i>
    </a>
    <a class="item">Clinic Management System
                </a>
    <div class="right menu">
      <!-- <div class="ui dropdown item">
        Language <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item">English</a>
          <a class="item">Russian</a>
          <a class="item">Spanish</a>
        </div>
      </div> -->
      <div class="item">
        <div class="ui primary button">Sign Up</div>
        <div class="ui primary button">Login</div>
      </div>
    </div>
  </div>
</div>

<?= $this->renderSection("content"); ?>




<footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50 mt-5">
        <div class="container text-center">
        <blockquote class="blockquote text-center">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <strong class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></strong>
        </blockquote>
        <small>Copyright &copy; Clinic Management System</small><br>
        <small>Designed and Develpoed by Sk Rajesh</small>
        </div>
    </footer>

</body>
</html>