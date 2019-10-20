<div id="container-view" class="admin_middle">
        <div class="form_box">
            <h1>Ajouter un article</h1>
            <form method="post" action="./app/controler/adm_add_item.php">
                <div class="form-group">
                    <label>nom</label>
                    <input type="text" class="form-control" name="name" value="">
                </div>
                <div class="form-group">
                    <label>référence</label>
                    <input type="text" class="form-control" name="ref" value="">
				</div>
				<div class="form-group">
                    <label>taille</label>
                    <input type="number" class="form-control" name="taille" value="">
                </div>
                <div class="form-group">
                    <label>couleur</label>
                    <input type="text" class="form-control" name="couleur" value="">
                </div>
                <div class="form-group">
                    <label>prix</label>
                    <input type="number" class="form-control" name="price" value="">
				</div>
				<div class="form-group">
                    <label>description</label>
                    <input type="text" class="form-control" name="descript" value="">
				</div>
				<div class="form-group">
                    <label>image</label>
                    <input type="url" class="form-control" name="src_img" value="">
				</div>
				<div class="form-group">
                    <label>catégorie</label>
                    <input type="text" class="form-control" name="categorie" value="">
				</div>
				<div class="form-group">
                    <label>stock</label>
                    <input type="number" class="form-control" name="stock" value="">
				</div>
				<br />
                <button type="submit" name="submit" class="btn-primary" value="OK">Valider</button>
            </form>
		</div>
</div>
