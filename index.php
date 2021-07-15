<?php 
session_start();
if (!isset($_SESSION['id']) AND empty($_SESSION['id'])) {
  header("Location: login.php");
}
?>
<?php include 'views/pages/head.php'; ?>
  <div class="wrapper">
    <?php include 'views/pages/header.php'; ?>
    <?php include 'views/pages/aside.php'; ?>
    <div class="content-wrapper">
      <?php include 'views/pages/main.php';?>
    </div>
    <?php include 'views/pages/footer.php'; ?>
  </div>
<?php include 'views/pages/scripts.php'; ?>