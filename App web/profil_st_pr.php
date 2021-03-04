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
					<button>Add student</button>
					<div class="space_name_student">
						<table>
							<tr class="titre_table">
								<th>id</th>
								<th>Name</th>
								<th>Prénom</th>
								<th>Html</th>
								<th>Css</th>
								<th>Js</th>
								<th>Php</th>
								<th>Action</th>
							</tr>
						</table>
					</div>
					<div class="space_student">
						<table>
							<tr class="student_table">
								<td>1</td>
								<td>Fical</td>
								<td>Bahsis</td>
								<td>18</td>
								<td>17</td>
								<td>15</td>
								<td>13</td>
								<td>
									<div class="crud">
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M3,21l3.75,0L17.81,9.94l-3.75-3.75L3,17.25L3,21z M5,18.08l9.06-9.06l0.92,0.92L5.92,19L5,19L5,18.08z"/></g><g><path d="M18.37,3.29c-0.39-0.39-1.02-0.39-1.41,0l-1.83,1.83l3.75,3.75l1.83-1.83c0.39-0.39,0.39-1.02,0-1.41L18.37,3.29z"/></g></g></g></svg>
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"/></svg>
									</div>
								</td>
							</tr>
						</table>
					</div>					
				</div>
			</div>

        </div>
    </main>
</section>

<?php include "assets/php/footer.php"?>

</body>
</html>