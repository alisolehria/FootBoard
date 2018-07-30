<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		
		<?php
		session_start();
			$username=$_SESSION['accountName'];
			$q =$_GET['q'];
			
			include "dbConnect.php";
			$ajax="$q";			
			$sql=$conn->prepare("SELECT * FROM data WHERE account =? AND username =?");

			$sql->execute(array($username,$ajax));
		
			$value= $sql->fetch();
				
		
			
		?>
		<div class="col-lg-8 col-lg-offset-1">
			
			
			<div class="row">
				<div class="form-group has-success has-feedback">
					<div class="col-xs-8">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="name" id="name" value="<?php echo ($value['name']);?>"required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group has-success has-feedback">
					<div class="col-xs-8">
						<label for="description">Description:</label>
						<input type="text" class="form-control" name="description" id="description" value="<?php echo $value['description']?>"required>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="form-group has-success has-feedback">
					<div class="col-xs-8">
					<label for="url">URL:</label>
					<input type="url" class="form-control" name="url" id="url" value="<?php echo $value['url']?>"required>
					
					</div>
					</div>
					</div>
						<div class="row">
							<div class="form-group has-success has-feedback">
								<div class="col-xs-8">
									<label for="Category">Category:</label>
									<select class='form-control' name='category' >
										<option>Club</option>
										<option>News</option>
										<option>Player</option>
										</select>
									
								</div>
							</div>
						</div>
					
						<div class="row">
							<div class="form-group has-success has-feedback">
								<div class="col-xs-8">
									<label for="logo">Logo URL:</label>
									<input type="url" class="form-control" name="logo" value="<?php echo $value['logo']?>" id="logo" required>
									
								</div>
							</div>
						</div>
					</br>
					<div class ="row">
					<div class="col-xs-4">
					<label for="fav">Favourite</label>
					<div class="radio">
					<label><input type="radio" name="fav" value="YES" required>Yes</label>
					</div>
					<div class="radio">
					<label><input type="radio" name="fav" value="NO">No</label>
					</div>
					</div>
					</div>
					<br>
					<div class = "row">
					<div class="col-lg-4 col-lg-offset-5">
					<input type="submit" class="btn btn-info btn-lg" value="Submit">
					</div>
					</div>
					
					
					</form>
					</body>
					</html>					