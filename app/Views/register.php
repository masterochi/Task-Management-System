<header class="bg-primary text-center text-white py-5 bg-gradient">
        <div>
            <h1>Sign Up</h1>
            <p>It's quick and easy</p>
        </div>
        </div>
    </header>
    <section>
    <form method="post" action="<?php echo base_url();?>register">
        <div class="container mb-3 mt-5">

            <?php if (session()->getFlashdata('error')) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php } ?>

        <form method="post" action="<?php echo base_url(); ?>register">

        <label for="fullname" class="form-label fw-bold">Full Name</label>
        <br>
        <input type="text" class="form-control" name="fullname"  placeholder="Please Enter your full name" required>
        <br>
        <label for="username" class="form-label fw-bold">Username</label>
        <br>
        <input type="text" class="form-control" name="username"  placeholder="Please Enter your Username" required>
        <br>
        <label for="email" class="form-label fw-bold">Email</label>
        <br>
        <input type="email" class="form-control" name="email"  placeholder="Please Enter your Email" required>
        <br>
        <label for="password" class="form-label fw-bold">Password</label>
        <br>
        <input type="password" class="form-control" name="password"  placeholder="Please Enter your Password" required>
        <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</form>
    </section>

<?php if (session()->getFlashdata('error')) { ?>


<script>
    Swal.fire({
  icon: "error",
  title: "Oops...",
  text: " <?php echo session()->getFlashdata('error'); ?>",
});</script>
<?php } ?>
