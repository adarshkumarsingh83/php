    <html> 
         <form class="form-horizontal" action="Requestposter.php" method="Post" >
                <div class="control-group">
                    <label class="control-label" for="inputEmail">User ID</label>
                    <div class="controls">
                        <input type="text" id="userName" name="userName" placeholder="User ID">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword">Password</label>
                    <div class="controls">
                        <input type="password" id="userPwd" name="userPwd" placeholder="Password">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
						<label class="checkbox"><input type="checkbox">Remember me </label>
						<button id="LoginBnt" type="submit" class="btn btn-primary">
                        Sign in
						</button>
                    </div>
                </div>
        </form>
	</html>	