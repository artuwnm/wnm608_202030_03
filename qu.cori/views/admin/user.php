<?php 
	$router = '../../';
	$url = '../../data/user.json'; // path to your JSON file
	$data = file_get_contents($url); // put the contents of the file into a variable
	$users = json_decode($data); // decode the JSON feed
?>
<?php
	// define variables and set to empty values
	// $name = $email = $gender = $comment = $website = "";

	// if ($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST['user'])) {
	//   $user = test_input($_POST["user"]);
	//   $email = test_input($_POST["email"]);
	//   // $website = test_input($_POST["website"]);
	//   // $comment = test_input($_POST["comment"]);
	//   // $gender = test_input($_POST["gender"]);
	// }

	
	// function test_input($data) {
	// 	$data = trim($data);
	// 	$data = stripslashes($data);
	// 	$data = htmlspecialchars($data);
	// 	return $data;
	// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>admin-user</title>
	<?php include "../parts/meta.php" ?>
	<script src="<?php echo $router; ?>public/js/util.js"></script>
	
</head>
<body>
	
	<div class="container">
		<div class="menu">
			<a href="<?php echo $router; ?>index.php">
				<span class="menu-title">coriq_</span>
			</a>
			<div class="burger" id="menu_open" style="display: block;">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>
			<div class="burger" id="menu_close" style="display: none;">
				<div class="line"></div>
				<div class="line"></div>
			</div>
	        <div class="menu-inner">
	            <nav>
	                <ul>
	                	<li><a href="<?php echo $router; ?>user.php">Users</a></li>
	                	<li><a href="<?php echo $router; ?>product.php">Products</a></li>
	                </ul>
	            </nav>
	        </div>
	    </div>


		<div class="img-container">
			<div>
				<h3>User List</h3>
			</div>
			<table width="100%" class="userList">
				<thead>
					<tr>
						<th>User</th>
						<th>Email</th>
						<th colspan="2">Operation</th>
					</tr>
				</thead>
				<tbody id="myTable">
					
					<?php foreach ($users as $i=>$users) : ?>
			        <tr>
			        
			        	<td index=<?php echo $i ?>>
			        		<a href=<?php echo "?id=$i" ?>> <?php echo $users->user; ?></a>
			        	</td>
			        	<!-- <td index=<?php echo $i ?>> <?php echo $users->user; ?> </td> -->
			            <td index=<?php echo $i ?>> <?php echo $users->email; ?> </td>
			            <td index=<?php echo $i ?> class='textright'>
			            	<!-- <a href=<?php echo '?id=$i' ?>> -->
			            	<form method="get">
			            		<button value=<?php echo $i ?> class="btn edit" name="edit">Edit</button>
			            	</form>
			            	<!-- </a> -->
			            </td> 
			            <form action="user.php" method="post">
			            <td index=<?php echo $i ?>> <button class="btn delete" name="delete">Delete</button></td>
						</form>
			        </tr>
					<?php endforeach; ?>
				</tbody>
				<tbody>
					<form method="get">
					<tr><button class="btn btn-add-bag add" id="addUser" name="add">Add more user</button></tr>
					</form>
				</tbody>
			</table>
			
		</div>

		<?php //delete



		?>


		<div id="list-popup" class="item-popup-cover flex-center">
			
			<div class="item-popup-box flex">				
			
				<div class="item-info-box" style="margin:auto;">
					<table width="100%" class="userList" style="min-width: 380px;">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					        <tr>
					            <td>User</td>
					            <td>
					            	<input id="user" type="text" name="user">
					            </td>
					        </tr>
					        <tr>
					            <td>Email</td>
					            <td>
					            	<input id="email" type="text" name="email">
					            </td>
					        </tr>
					        <tr>
					            <td class="textright"><button class="btn cancel" >Cancel</button></td> 
					            <td><button class="btn submit" id="ajaxButton">Submit</button></td>
					        </tr>
						</form>
					</table>
					
					
					
				</div>
			</div>
		</div>
		<?php //update
				if(isset($_GET['edit'])) {
				$edit = $_GET['edit'];

				echo "<script>let user = $('#myTable')[0].getElementsByTagName('tr')[$edit].getElementsByTagName('a')[0].innerHTML;
        let email = $('#myTable')[0].getElementsByTagName('tr')[$edit].getElementsByTagName('td')[1].innerHTML;
        console.log(user,email);
        $('#user')[0].value = user;
        $('#email')[0].value = email;</script>";
				echo "<style>#list-popup {display: flex;}</style>";
				// echo "<script>userList.edit();</script>";
				
				// echo "<script>userList.openPopup();$('#list-popup')[0].style.display  = 'flex';</script>";
			}
			if(isset($_GET['add'])){
				// print_r($_GET['id']);
				// print_r($users2[$_GET['id']]);
				echo "<style>#list-popup {display: flex;}</style>";

			}
	
		?>
	</div>
	
	<script src="<?php echo $router; ?>public/js/function.js"></script>
<script>
(function() {
	function getQueryString(name) {
	    let reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
	    let r = window.location.search.substr(1).match(reg);
	    if (r != null) {
	        return decodeURIComponent(r[2]);
	    };
	    return null;
	}
  	var httpRequest;
  	var hpr;

  	document.getElementById("ajaxButton").onclick = function() { 
      	var userName = document.getElementById("user").value;
      	var email = document.getElementById("email").value;
		var search = document.location.search;
		var matcher;
		console.log(search);
		if(search=='?add=') {
			// matcher = getQueryString("add");
			console.log('hhhhhhhhhhhhhhhh');
			makeRequestAdd('add.php',userName,email); 
		} else {
			matcher = getQueryString("edit");
			console.log(matcher);
			makeRequest('update.php',userName,email,matcher); 
		}
		
		
 	};
 	$.delegate($("#myTable")[0], "button", "click", function(e) {
 			if(e.target&&( e.target.classList.contains("delete")|| e.target.classList.contains("edit"))) {
 				let a = e.target;
           
	            if(a.classList.contains("delete")) {
	            	let num = a.parentNode.getAttribute("index");
	            	console.log(num);
	                makeRequestDelete('delete.php',num); 

	            }
	            // else if(a.classList.contains("edit")) {

	            // 	var search = document.location.search;
	            // 	let num = a.getAttribute("value");
	            // 	// console.log(search);
	            //     makeRequestEdit(search+'?edit='+num,num); 

	            // }
 			}
            
            
            
        });

 	function makeRequestDelete(url, num) {
 		let httpRequest = new XMLHttpRequest();
	    console.log("makeRequestDelete",num);
	    if (!httpRequest) {
			alert('Giving up :( Cannot create an XMLHTTP instance');
			return false;
	    }
	    // httpRequest.onreadystatechange = alertContents;
	    httpRequest.open('POST', url);
	    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	    httpRequest.send('num='+encodeURIComponent(num));
	    location.reload();
 	}
 	function makeRequestAdd(url, userName,email) {
 		var httpRequest = new XMLHttpRequest();
	    // console.log("makeRequestAdd",num);
	    if (!httpRequest) {
			alert('Giving up :( Cannot create an XMLHTTP instance');
			return false;
	    }
	    // httpRequest.onreadystatechange = alertContents;
	    httpRequest.open('POST', url);
	    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	    httpRequest.send('userName='+encodeURIComponent(userName)+'&email='+encodeURIComponent(email));
	    location.reload();
 	}
 	function makeRequest(url, userName,email, num) {
	    let httpRequest = new XMLHttpRequest();
	    console.log("makeRequest");
	    if (!httpRequest) {
			alert('Giving up :( Cannot create an XMLHTTP instance');
			return false;
	    }
	    // httpRequest.onreadystatechange = alertContents;
	    httpRequest.open('POST', url);
	    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	    httpRequest.send('userName=' + encodeURIComponent(userName)+'&email='+encodeURIComponent(email)+'&num='+encodeURIComponent(num));
	    location.reload();
	}
	
  	function alertContents() {
  		console.log("alertContents");
	  	if (httpRequest.readyState === XMLHttpRequest.DONE) {
		    if (httpRequest.status === 200) {
		    	var response = JSON.parse(httpRequest.responseText);
		      	// console.log(response,response.computedString)
		      	// alert(response.userName+response.num);
		      	alert(response.userName);

		    } else {
		      	alert('There was a problem with the request.');
		    }
	  	}
	}

})();
</script>

	
	<script>
		userList.init();
	</script>
	<iframe name="votar" style="display:none;"></iframe>
</body>
</html>