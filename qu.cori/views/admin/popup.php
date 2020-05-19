<div id="list-popup" class="item-popup-cover flex-center">
			
			<div class="item-popup-box flex-width-60 grid">
				<div id="close-popup" class="col-12 flex-justify-end" >
					<i class="fas fa-times fa-lg"></i>
				</div>
				
			
				<div class="item-info-box col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12">
					<table width="100%" class="userList">
						<tbody>
					        <tr>
					            <td>User</td>
					            <td id="userShow"></td>
					        </tr>
					        <tr>
					            <td>Password</td>
					            <td id="passwordShow"></td>
					        </tr>
						</tbody>
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					        <tr>
					            <td>User</td>
					            <td>
					            	<input id="user" type="text" name="user">
					            </td>
					        </tr>
					        <tr>
					            <td>Password</td>
					            <td>
					            	<input id="password" type="text" name="password">
					            </td>
					        </tr>
					        <tr>
					            <td class="textright"><button class="btn cancel">Cancel</button></td> 
					            <td><button class="btn submit">Submit</button></td>
					        </tr>
						</form>
					</table>
					
				</div>
			</div>
		</div>