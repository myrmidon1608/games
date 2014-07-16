		
        	<div data-role="header" data-theme="a" class="center">
			<img src="../../../images/logo/sideQUEST-logo.png" style="width:240px; height:75px;" alt="sideQUEST" />
			</div>
			<div data-role="content" data-theme="a" class="center">
				<fieldset>
					<form method="post" action="index.php">
						<table class="center" style="margin:0 auto;">
                        	<tr>
                            	<td colspan="2">
                                {if $echo}
                                <h4>{$echo}</h4><br />
                                {/if}
                                </td>
                            </tr>
							<tr>
								<td style="width:100px;"><label>Username:</label></td>
								<td><input type="text" name="username" /></td>
							</tr>
							<tr>
								<td><label>Password:</label></td>
								<td><input type="password" name="password" /></td>
							</tr>
							<tr>
								<td colspan="2" height="100px"><input type="submit" name="login" value="Login" /></td>
							</tr>
                            
						</table>
					</form>
				</fieldset>
				
			</div>
			<div data-role="footer" class="center">
			<p>&copy; 2012</p>
			</div>
            