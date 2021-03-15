<?php
	session_start(); // open session
	require "assets/php/connection.php";



	if(isset($_SESSION['id'])){  // if session['id'] is not open

		echo  $_SESSION["id"] ;
		echo  $_SESSION["position"] ;
		// header('Location:login.php');
	}

	// else{
	// header('Location:profil_st_pr.php');
 	// }

?>

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

	<?php include "assets/php/header.php";

		$user_id =  $_SESSION["id"] ;
		$position_user = $_SESSION["position"] ;

		$slq_requet = mysqli_query($connection_DB,"SELECT * FROM $position_user WHERE id = '$user_id' ");
		$row = mysqli_fetch_array($slq_requet);	
		$name_user = $row["nom"];
		
	?>


    <main class="profil">
        <div class="container">
            <div class="zone_main_profil">
                <h1>Hi <?php echo $row["nom"]?> welcome in  your profil !</h1>
                <div class="zone_informations">
                    <div class="info_personel">
                        <div class=" name_prenom">
                            <p><span>Nom : </span><?php echo $row["nom"] ?></p>
                            <p><span>prénom : </span><?php echo $row["prenom"] ?> </p>
                        </div>
                        <div class="email_password">
                            <p><span>Email : </span><?php echo $row["email"] ?></p>
                            <p><span>Class : </span>Adalovelace </p>
                        </div>
                    </div>
                    <div class="btn_logout">
					<a href="login.php" onclick="<?php session_destroy();?>">
							<button>Logout</button>
						</a>
                    </div>

                </div>
            </div>

			<?Php 
				if($position_user == "student")
				{
			?>
			<div class="zone_student">
				<h1>Your notes</h1>
				<div class="all_note">
								<div class="card_notes">
										<H1>HTML</H1>
										<H2><?php echo $row["Html"] . "/20" ?></H2>
								</div>
								<div class="card_notes">
										<H1>CSS</H1>
										<H2><?php echo $row["Css"] . "/20" ?></H2>
								</div>
								<div class="card_notes">
										<H1>JS</H1>
										<H2><?php echo $row["Javascript"] . "/20" ?></H2>
								</div>
								<div class="card_notes">
										<H1>PHP</H1>
										<H2><?php echo $row["Php"] . "/20" ?></H2>
								</div>
							</div>
			</div>


			<?php
				}
			?>

			<?Php 
				if($position_user == "formateur")
				{
			?>

			
			<div class="zone_formateur">
				<div class="btn_add">
					<a href="#validee" onclick="imported_void()" ><button >Add student</button></a>

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
											<td class="id"><?php echo $value["id"]; ?>									
											</td>
											<td class="nom"><?php echo $value["nom"]; ?></td>
											<td class="prenom"><?php echo $value["prenom"]; ?></td>
											<?php  $value["id"]?>
											<?php  $value["email"]?>
											<?php  $value["password"]?>
											<td class="html"><?php echo $value["Html"]; ?></td>
											<td  class="css"><?php echo $value["Css"]; ?></td>
											<td class="java"><?php echo $value["Javascript"]; ?></td>
											<td class="php"><?php echo $value["Php"]; ?></td>
											<td>
												<div class="icon_crud">
													<a  onclick="see_data(<?php echo $value['id']?> ,'<?php echo $value['nom']?>','<?php echo $value['prenom']?>','<?php echo $value['email']?>','<?php echo $value['password']?>','<?php echo $value['Html']?>','<?php echo $value['Css']?>','<?php echo $value['Javascript']?>','<?php echo $value['Php']?>') ">
														<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
													</a>
													<a onclick="imported('<?php echo $value['id']?>','<?php echo $value['nom']?>','<?php echo $value['prenom']?>','<?php echo $value['email']?>','<?php echo $value['password']?>','<?php echo $value['Html']?>','<?php echo $value['Css']?>','<?php echo $value['Javascript']?>','<?php echo $value['Php']?>')" class="update_icon" type="submit" name="update" href='#validee'>
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
				</div>

							

				<form id="validee"  action="assets/php/crud.php?id="  class="place_validation"  method="POST">
						<h1>Student informations</h1>
						<div class="zone_input">
							<input id="id_user"  name="id_user" placeholder="0" type="hidden"  >
							<input  id="name" type="text" name="name" placeholder="First Name" id="name"	 >
							<input id="prenom" type="text" id="prenom" name="prenom" placeholder="Last name"   >
							<input id="email" type="Email" name="email" id="email" placeholder="Email"   >
							<input id="password" type="text" id="password" name="password" placeholder="Password"   >
						</div>
						<?php
			$id_select = $_POST["id_select"];
			echo $id


	?>
						<h1>Student notes </h1>
						<div class="zone_input_note">
							<div class="place_not">
								<label >Html</label>
								<input id="html" type="text" name="html" placeholder="0"   >
							</div>
							<div class="place_not">
							<input  id="css" type="text" name="Css" placeholder="0"   >
								<label >Css</label>
							</div>
							<div class="place_not">
								<label >Js</label>
								<input id="js" type="text" name="Js" placeholder="0"  >	

							</div>
							<div class="place_not">
							<input id="php" type="text" name="Php" placeholder="0"   >
								<label >Php</label>
							</div>
						</div>	
						<?php


							
						?>


							<div class="btn_valide"  >
								<button type="submit"  id="valide"  name="submit" disabled >valide</button>
							</div>							

							<div class="btn_valide " >
								<button id="update_btn" name="update" type="submit" style="display:none">Update</button>
							</div>

						
						
				</div>
			</form>

        </div>
    </main>

	

	<?php
		}
	?>
</section>

<?php include "assets/php/footer.php"?>

<script src="assets/js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>




// 	/*  validation regix */

// 	var inputName = document.getElementById("name")
// 	var inputPrenom = document.getElementById("prenom")
// 	var inputEmail = document.getElementById("email")
// 	var inputPassword = document.getElementById("password")
	
// 	function validation_Name(par,regix , nmber_char){
// 		var input_name = document.querySelector(`#${par}`);
// 		var input_name_value = input_name.value; 
// 		console.log("true");
// 		console.log(input_name_value);
// 		input_name.style="border:1px solid red ";

// 			if(input_name_value .match(regix) && input_name_value .length >= nmber_char) { 
// 				document.getElementById("valide").disabled = false; 
// 				input_name.style="border:1px solid green ";

// 			}
// 			else{
// 				document.getElementById("valide").disabled = true; 
// 			}

// 	}
// 		inputName.addEventListener('keyup', () => {
// 			validation_Name('name' , /^[a-zA-Z ]+$/ ,4)
// 		})
// 		inputPrenom.addEventListener('keyup', () => {
// 			validation_Name('prenom' , /^[a-zA-Z ]+$/ ,4)
// 		})
// 		inputEmail.addEventListener('keyup', () => {
// 			validation_Name('email' , /^[^ ]+@[^ ]+\.[a-z]{2,3}$/ , 5)
// 		})
// 		inputPassword.addEventListener('keyup', () => {
// 			validation_Name('password' , /^[A-Za-z0-9]\w{5,}$/ , 5)
// 		})


	
// /* show popup data */

// 	var popup_see_note = document.querySelector(".popup_see_note");

// 	var pop_up_show = true 

// var see_data = (id_user , name  , prenom ,email , password , html , css , js , php) =>{

// 	if(pop_up_show == true)
// 	{

// 		popup_see_note.style="display:grid !important";

// 		popup_see_note.innerHTML = `<h1>${name} ${prenom}</h1>
// 								<p>Class : <span>Adalovelace</span></p>
// 								<p>Email : <span>${email}</span></p>
// 								<p>Password : <span>${password}</span></p>
// 								<h2>Notes</h2>
// 								<p>HTML : <span>${html}</span></p>
// 								<p>CSS : <span>${css}</span></p>
// 								<p>JAVASCRIPT : <span>${js}</span></p>
// 								<p>PHP : <span>${php}</span></p>

// 								<div class="btn_popup_okey">
// 									<button class="button_okey" onclick="pop_up_display()">Okey</button>
// 						</div>`;


// 	}

// }
// var button_okey = document.querySelector(".button_okey");

// pop_up_display = () =>{
// 	popup_see_note.style="display:none !important";
// }


// /* delete data */

// function delete_popup(id_user){


// 		swal({
// 		title: "Are you sure?",
// 		text: "Once deleted, you will not be able to recover this imaginary file!",
// 		icon: "warning",
// 		buttons: true,
// 		dangerMode: true,
// 		})
// 		.then((willDelete) => {
// 		if (willDelete) {
// 			window.location.href = `assets/php/delete.php?id=${id_user}`;
// 		} else {
// 			swal("Your imaginary file is safe!");
// 		}
// 		});

// }

// /* get data to update  */

// var imported = (user_id,user_name , user_prenom , user_email , user_pass , user_html ,user_css,user_js , user_php) =>{

// 	console.log(user_id);

// 	document.getElementById("id_user").value=user_id;
// 	document.getElementById("name").value=user_name;
// 	document.getElementById("prenom").value=user_prenom;
// 	document.getElementById("email").value=user_email;
// 	document.getElementById("password").value=user_pass;
// 	document.getElementById("html").value=user_html;
// 	document.getElementById("css").value=user_css;
// 	document.getElementById("js").value=user_js;
// 	document.getElementById("php").value=user_php;
// 	document.getElementById("update_btn").style="display:block";
// 	document.getElementById("valide").style="display:none";		

// }
// var imported_void = () =>{

// document.getElementById("id_user").value="";
// document.getElementById("name").value="";
// document.getElementById("prenom").value="";
// document.getElementById("email").value="";
// document.getElementById("password").value="";
	

// }



</script>



</body>
</html>