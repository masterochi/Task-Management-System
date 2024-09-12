<header class="bg-primary text-center text-white py-5 bg-gradient ">
        <div class="container">
            <h1 class="text-center">Login</h1>
            <p class="lead">It's quick and easy</p>
        </div>
    </header>
    <section>
    <div class="container md-3 mt-5 card py-2">
        <form method="post" action="<?php echo base_url();?>login">
            <label for="username" class="form-label">Username</label>
        <br>
        <input type="text" placeholder="Enter Username" class="form-control" name="username">
        <br>
        <label for="password" class="form-label">Password</label>
        <br>
        <input type="password" placeholder="Enter Password"  class="form-control" name="password">
        <br>
        <button type="submit" class="btn btn-primary">Login</button> 
    </form>
</div>
</section>

<?php if (session()->getFlashdata('error')) { ?>


<script>
    Swal.fire({
  icon: "error",
  title: "Oops...",
  text: " <?php echo session()->getFlashdata('error'); ?>",
});</script>
<?php } ?>