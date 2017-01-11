					<?php
						if(isset($_SESSION['pseudo'])){
							echo' Bienvenue' .stripslashes(htmlspecialchars($_SESSION['pseudo'])).
								' <form class="logout" method="post" action=" ">
									<input type="submit" class="logout" title="déconnexion" />
								</form>';
						}else{
							echo'<form class="connect" method="post" action="login.php">
								<div class="form-group"> 
									<div class="form-group">
										<label for="connexion" class="connexion connect">Connexion</label>
										<input class="form-control" type="text" name="login" placeholder="Login"/>
										</br>
										<input class="form-control" type="password" name="password" placeholder="Mot de passe"/>
										</br>
										<div class="center"><button type="submit" class="buttonlogin">se connecter</button></div> 
										<div class="passforget"><a class="linkmdp" href="recupmail.php">Identifiant ou mot de passe oublié</a></div>
									</div>
								</div>
							</form>';
						}
					?>
