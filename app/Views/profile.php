<header class="bg-primary text-center text-white py-5 bg-gradient">
        <div>
            <h1>Profile</h1>
            <p>It's quick and easy</p>
        </div>
        </div>
    </header>
    <section>
    <form method="post" action="<?php echo base_url();?>profile">
        <div class="container mb-3 mt-5">
        <label for="fullname" class="form-label fw-bold">Full Name</label>
        <br>
        <input type="text" class="form-control" placeholder="Please Enter your full name" value="<?=$name?>">
        <br>
        <label for="username" class="form-label fw-bold">Username</label>
        <br>
        <input type="text" class="form-control" placeholder="Please Enter your Username" value="<?=$username?>">
        <br>
        <label for="email" class="form-label fw-bold">Email</label>
        <br>
        <input type="email" class="form-control" placeholder="Please Enter your Email" value="<?=$email?>">
        <br>
        <label for="password" class="form-label fw-bold">Password</label>
        <br>
        <input type="password" class="form-control" placeholder="Please Enter your Password" value="<?=$password?>">
        <br>
        </form>
    </section>
