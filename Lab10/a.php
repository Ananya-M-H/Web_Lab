<!DOCTYPE html>
<html>
<head>
<title>Date</title>

<style>
h1 {
  text-align: center;
}

.date {
  color: green;
  font-weight: bold;
}
</style>

</head>

<body>

<h1>
  Today's date is
  <span class="date">
    <?php
      $today = date("d-m-Y");
      echo $today;
    ?>
  </span>
</h1>

</body>
</html>
