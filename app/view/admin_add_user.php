<div id="container-view" class="admin_middle">
        <div class="form_box">
            <h1>Ajouter un utilisateur</h1>
            <form method="post" action="./app/controler/adm_add_user.php">
			<div class="form-group">
                    <label>Adresse mail</label>
                    <input type="text" class="form-control" name="mail" value="">
                </div>
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" class="form-control" name="name" value="" >
				</div>
				<div class="form-group">
                    <label>Prénom</label>
                    <input type="text" class="form-control" name="surname" value="" >
                </div>
                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" class="form-control" name="passwd" value="">
                </div>
                <div class="form-group">
                    <label>Confirmer mot de passe</label>
                    <input type="password" class="form-control" name="confirm_passwd" value="">
				</div>
				<div class="form-group">
                    <label>Adresse</label>
                    <input type="text" class="form-control" name="adresse" value="">
				</div>
				<br />
                <button type="submit" name="submit" class="btn-primary" value="OK">Valider</button>
            </form>
		</div>
</div>
