<?php  

	require_once("lib/php/koneksi.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Soal 6</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		
		<div class="card" style="margin-top: 16px">
			<div class="card-header">
				List Programmers
			</div>

			<div class="card-body">
				<div class="input-group mb-3">
  					<input type="text" class="form-control" placeholder="Programmers Name" id="inputNameProg">

  					<div class="input-group-append">
    					<button class="btn btn-sm btn-primary addProg" >Add Programmer</button>
  					</div>
				</div>
				
				<div class="wadah-list">
					<?php

						$stmt = $db->prepare("SELECT * FROM users");
						$stmt->execute();

						$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

						foreach ($users as $user) {
							$user_id = $user['id'];
					?>

					<div class="row" style="margin-bottom: 20px">
						<div class="col-md-6 col-sm-12">
							<div class="card">
								<div class="card-header">
									<?php echo $user['name'] ?>
								</div>
								<div class="card-body">
									<span class="skil" data-id="<?php echo $user_id ?>">
										<?php  

											$st = $db->prepare("SELECT * FROM skills WHERE user_id = $user_id");

											$st->execute();

											$skills = $st->fetchAll(PDO::FETCH_ASSOC);
											// Declare a counter variable and 
											// initialize it with 0 
											$counter = 0; 

											foreach ($skills as $skill) {
												echo $skill['name'];

												// cek apakah array terakhir
												if( $counter != count( $skills ) - 1) { 
											        echo ", ";
											    } 

											    $counter++;
											}
										?>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="input-group mb-3">
			  					<input type="text" class="form-control" placeholder="Skill Name" id="inputSkill<?php echo $user['id'] ?>">

			  					<div class="input-group-append">
			    					<button class="btn btn-sm btn-primary addSkills" data-id="<?php echo $user['id'] ?>">Add Skill</button>
			  					</div>
							</div>
						</div>
					</div>

					<?php  
						}
					?>

				</div>
			</div>
		</div>

	</div>

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		
		$(function(){

			$.get("lib/php/select-users.php", function(data, status){
				
				var users = JSON.stringify(data);

				console.log(users);
			});

			// tambah skills
			$(document).on("click",".addSkills",function(){
				
				var id=$(this).attr("data-id");
				var nameSkill = $("#inputSkill"+id).val();

				if (nameSkill != "") {
					$.ajax({
						url: 'lib/php/add-skill.php',
						type: 'post',
						cache: false,
						dataType: "json",
						data: {
							id : id,
	                        nameSkill : nameSkill
	                    },
						success: function(response){
							
							alert("Add skill success");
							location.reload();	

						}
					});
				}	
				else {
					alert('input required!');
				}
				
			});

			// tambah programmers
			$(document).on("click",".addProg",function(){
				
				var name = $("#inputNameProg").val();

				if (name != "") {
					$.ajax({
						url: 'lib/php/add-prog.php',
						type: 'post',
						cache: false,
						dataType: "json",
						data: {
	                        name : name
	                    },
						success: function(response){
							
							alert("Add programmers success");
							location.reload();	

						}
					});
				}	
				else {
					alert('input required!');
				}
				
			});

		});

	</script>
</body>
</html>