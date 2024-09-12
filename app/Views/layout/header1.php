<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Task</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo base_url(); ?>home">Task Management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
          <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>dashboard">Home</a> <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>newtask">Add Task</a> <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>login">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
