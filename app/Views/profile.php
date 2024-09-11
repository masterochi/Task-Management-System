<header class="bg-primary text-center text-white py-5 bg-gradient">
        <div>
            <h1>Profile</h1>
            <p>It's quick and easy</p>
        </div>
        </div>
    </header>
    <section>
    <form action="">
        <div class="container mb-3 mt-5">
        <label for="fname" class="form-label fw-bold">Full Name</label>
        <br>
        <input type="text" class="form-control" name="fname" id="fname" placeholder="Please Enter your full name" value="<?=$name?>">
        <br>
        <label for="usname" class="form-label fw-bold">Username</label>
        <br>
        <input type="text" class="form-control" name="usname" id="usname" placeholder="Please Enter your Username" value="<?=$username?>">
        <br>
        <label for="email" class="form-label fw-bold">Email</label>
        <br>
        <input type="email" class="form-control" name="email" id="email" placeholder="Please Enter your Email" value="<?=$email?>">
        <br>
        <label for="pass" class="form-label fw-bold">Password</label>
        <br>
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Please Enter your Password" value="<?=$password?>">
        <br><br>
        <a href="" class="btn btn-primary">Sign Up</a>
        </form>
    </section>
