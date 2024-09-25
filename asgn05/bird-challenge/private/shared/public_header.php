<!doctype html>

<html lang="en">

<head>
  <title>WNC Birds <?php if (isset($page_title)) {
                      echo '- ' . h($page_title);
                    } ?></title>
  <meta charset="utf-8">
  <style>
    th,
    td {
      padding: 5px;
    }

    th {
      background-color: greenyellow;
      text-transform: uppercase;
    }
  </style>
</head>

<body>

  <header>
    <h1>
      <a href="<?php echo url_for('/index.php'); ?>">
        WNC Birds
      </a>
    </h1>
  </header>
