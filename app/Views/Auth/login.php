<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login & Register | MyApp</title>
<link rel="stylesheet" href="<?= base_url('assets/auth/style.css') ?>">
</head>
<body>

<div class="container <?= old('show_register') ? 'right-panel-active' : '' ?>" id="container">

    <!-- REGISTER -->
    <div class="form-container sign-up-container">
       <form action="<?= base_url('register') ?>" method="post">

            <?= csrf_field() ?>
            <h1>Create Account</h1>

            <!-- Show registration errors -->
            <?php if (session()->has('errors')): ?>
                <div class="alert alert-danger" style="color: red;">
                    <?php foreach ((array) session('errors') as $err): ?>
                        <?= $err ?><br>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if (session()->has('message')): ?>
                <div class="alert alert-success" style="color: green;">
                    <?= session('message') ?>
                </div>
            <?php endif; ?>

            <input type="text" name="username" placeholder="Username" value="<?= old('username') ?>" required />
            <input type="email" name="email" placeholder="Email" value="<?= old('email') ?>" required />
            <input type="password" name="password" placeholder="Password" required />
            <input type="password" name="password_confirm" placeholder="Confirm Password" required />

            <button type="submit">Sign Up</button>
        </form>
    </div>

    <!-- LOGIN -->
    <div class="form-container sign-in-container">
        <form action="<?= url_to('login') ?>" method="post">
            <?= csrf_field() ?>
            <h1>Sign In</h1>

            <!-- Show login errors -->
            <?php if (session()->has('error')): ?>
                <div class="alert alert-danger" style="color: red;">
                    <?= session('error') ?>
                </div>
            <?php endif; ?>

            <?php if (session()->has('errors')): ?>
                <div class="alert alert-danger" style="color: red;">
                    <?php foreach ((array) session('errors') as $err): ?>
                        <?= $err ?><br>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <input type="email" name="email" placeholder="Email" value="<?= old('email') ?>" required />
            <input type="password" name="password" placeholder="Password" required />

            <button type="submit">Sign In</button>
        </form>
    </div>

    <!-- SLIDER -->
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>Please sign in to access the admin panel</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello Admin!</h1>
                <p>Create a new account to manage the admin panel</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/auth/script.js') ?>"></script>
</body>
</html>
