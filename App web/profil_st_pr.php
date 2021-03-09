<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PROFIL</title>
</head>
<body>
<section class="haeder_main">
	<?php include "assets/php/header.php"  ?>
    <main class="profil">
        <div class="container">
            <div class="zone_main_profil">
                <h1>Hi Faical welcome in  your profil !</h1>
                <div class="zone_informations">
                    <div class="info_personel">
                        <div class=" name_prenom">
                            <p><span>Nom : </span>Faical </p>
                            <p><span>prénom : </span>Bahsis </p>
                        </div>
                        <div class="email_password">
                            <p><span>Email : </span>Faissalabr@gmail.com</p>
                            <p><span>Class : </span>Adalovelace </p>
                        </div>
                    </div>
                    <div class="btn_logout">
                            <button>Logout</button>
                    </div>

                </div>
            </div>
			<!-- <div class="zone_student">
				<h1>Your notes</h1>
				<div class="all_note">
								<div class="card_notes">
										<H1>HTML</H1>
										<H2>16/20</H2>
								</div>
								<div class="card_notes">
										<H1>CSS</H1>
										<H2>16/20</H2>
								</div>
								<div class="card_notes">
										<H1>JS</H1>
										<H2>16/20</H2>
								</div>
								<div class="card_notes">
										<H1>PHP</H1>
										<H2>16/20</H2>
								</div>
							</div>
			</div> -->
			<div class="zone_formateur">
				<div class="btn_add">
					<a href="profil_st_pr.php?id=&name=&prenom=&email=&password=&html=&css=&js=&php&btn=#validee" ><button >Add student</button></a>

					<div class="space_student">
					<table cellspacing="0" cellpadding="0">
						<tr>
						<th>Id</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Html</th>
						<th>Css</th>
						<th>Js</th>
						<th>Php</th>
						<th>Action</th>
						</tr>
						<?php 
							require "assets/php/connection.php";
							$student = mysqli_query($connection_DB,"SELECT * FROM student");

							if(mysqli_num_rows($student) > 0)
							{
						?>


							<?php
										foreach($student as $value)
										{
							?>
									<tr>
										<td><?php echo $value["id"]; ?></td>
										<td><?php echo $value["nom"]; ?></td>
										<td><?php echo $value["prenom"]; ?></td>
										<?php  $value["email"]?>
										<?php  $value["password_student"]?>
										<td><?php echo $value["Html"]; ?></td>
										<td><?php echo $value["Css"]; ?></td>
										<td><?php echo $value["Javascript"]; ?></td>
										<td><?php echo $value["Php"]; ?></td>
										<td>
											<div class="icon_crud">
												<a onclick="see_data(<?php echo $value['id']?> ,'<?php echo $value['nom']?>','<?php echo $value['prenom']?>','<?php echo $value['email']?>','<?php echo $value['password_student']?>','<?php echo $value['Html']?>','<?php echo $value['Css']?>','<?php echo $value['Javascript']?>','<?php echo $value['Php']?>') ">
													<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
												</a>
												<a class="update_icon" name="update" href='profil_st_pr.php?id=<?php echo $value["id"]?>&name=<?php echo $value["nom"]?>&prenom=<?php echo $value["prenom"]?>&email=<?php echo $value["email"]?>&password=<?php echo $value["password_student"]?>&html=<?php echo $value["Html"]; ?>&css=<?php echo $value["Css"]?>&js=<?php echo $value["Javascript"]?>&php=<?php echo $value["Php"];?>&btn=true#validee'>
													<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"/></svg>
												</a>
												<a class="delete_icon" onclick="delete_popup(<?php echo $value['id'] ;?>)">
													<svg  xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg>
												</a>
											</div>
										</td>
									</tr>

							<?php
									}
							}
								
							
							?>
				</table>
					</div>					
				</div>
				<div class="popup_see_note">
				</div>

				<form id="validee" class="place_validation" action="assets/php/crud.php?id=<?php echo $_GET["id"];?>" method="POST">
						<h1>Student informations</h1>
						<div class="zone_input">
							<input type="text" name="name" placeholder="First Name"	value="<?php echo $_GET["name"]?>">
							<input type="text" name="prénom" placeholder="Last name"  value="<?php echo $_GET["prenom"]?>"  >
							<input type="Email" name="email" placeholder="Email"  value="<?php echo $_GET["email"]?>"  >
							<input type="text" name="password" placeholder="Password"   value="<?php echo $_GET["password"]?>" >
						</div>
						<h1>Student notes</h1>
						<div class="zone_input_note">
							<div class="place_not">
								<label >Html</label>
								<input type="text" name="html" placeholder="0"   value="<?php echo $_GET["html"]?>">
							</div>
							<div class="place_not">
							<input type="text" name="Css" placeholder="0"  value="<?php echo $_GET["css"]?>" >
								<label >Css</label>
							</div>
							<div class="place_not">
								<label >Js</label>
								<input type="text" name="Js" placeholder="0"  value="<?php echo $_GET["js"]?>" >	

							</div>
							<div class="place_not">
							<input type="text" name="Php" placeholder="0"   value="<?php echo $_GET["php"]?>" >
								<label >Php</label>
							</div>
						</div>	
						<?php


							
						?>
						<?php
						$btn = $_GET['btn'];
						if($btn == false)
						{
						?>
							<div class="btn_valide"  id="btn_valide_on">
								<button id="valide" name="submit" >valide</button>
							</div>							
						<?php
						}else{
						?>

							<div class="btn_valide " id="btn_update_off" >
								<button id="update" name="update">Update</button>
							</div>
						<?php
						}
						?>
						
				</form>
			</div>

        </div>
    </main>
</section>

<?php include "assets/php/footer.php"?>
<script src="assets/js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

see_data = (id_user , name  , prenom ,email , password , html , css , js , php) =>{
	// swal(name + " " + prenom , " email " + email + " password : " +  password + " note : " + html + css + js + php);
	swal({
		title: name + " " + prenom,
		text: "Email : " + email + "<br/>" + password,
		// text: "Password : " + password,
		// title: "Notes",
		// text: " HTML : " + html,
		// text: " CSS : " + css,
		// text: " JAVASCRIPT : " + js,
		// text: " PHP : " + php,
	});
}


function delete_popup(id_user){


		swal({
		title: "Are you sure?",
		text: "Once deleted, you will not be able to recover this imaginary file!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
		})
		.then((willDelete) => {
		if (willDelete) {
			window.location.href = `assets/php/delete.php?id=${id_user}`;
			// swal("Poof! Your imaginary file has been deleted!", {
			// icon: "success",
			// }			
			// );
		} else {
			swal("Your imaginary file is safe!");
		}
		});

}


	



</script>

</body>
</html>