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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url(); ?>home"> <img src="<?= base_url(); ?>public/assets/images/medicalteam.png" alt="Logo" width="50px" height="50px"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>home">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?= base_url(); ?>home/patients">Patients List</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>home/reports">Reports List</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>home/doctors">Doctors List</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>home/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<?= $this->renderSection("content"); ?>




<footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50 mt-5">
        <div class="container text-center">
        <blockquote class="blockquote text-center">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <strong class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></strong>
        </blockquote>
        <small>Copyright &copy; Clinic Management System</small>
        </div>
    </footer>

</body>
</html>