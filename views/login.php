<?php
/**
 * Created by PhpStorm.
 * User: wt
 * Date: 2018/8/13
 * Time: 22:26
 */
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <base href="<?php  echo base_url();?>"/>
    <link href="views/css/bootstrap.css" rel="stylesheet">
    <link href="views/css/signin.css" rel="stylesheet">

    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="views/js/head.js"></script>

	<title>login</title>
</head>
<body>

<div class="container">
    <form class="form-signin" action="index.php/login/check" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div> <!-- /container -->
</body>
</html>