<?php include('admin/partials/indexnav.php'); ?>
<style> 
.login form label {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
   height: 50px;
    background-color: #3274d6;
    color: #ffffff;
    border-radius: 12px;
  }
</style>
		<div class="login">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>

		</div>
</body>

<?php include('admin/partials/footer.php'); ?>