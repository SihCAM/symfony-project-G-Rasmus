<div class="card">
    <div class="card-header">
		<legend id="add_client_lab">Ajouter un nouveau client</legend>
		<form method="POST" id="ajout_client">
			<div class="form-group row">
				<div class="col-sm-4">
					<label class="col-form-label" for="nom_client">Nom du client :</label>
					<input type="text" name="nom_client" id="nom_client" />
					<div class="retour" id="span_nom_client"></div>
				</div>
				<div class="col-sm-4">
					<label class="col-form-label" for="profession_client">Profession du client :</label>
					<select name="profession_client" id="profession_client">
						<option value="GA">Garagiste</option>
						<option value="DE">Développeur</option>
						<option value="MA">Maître du monde</option>
						<option value="AU">Autre</option>
					</select>
					<div class="retour" id="span_profession"></div>
				</div>
				<div class="col-sm-4">
					<label class="col-form-label" for="date_ajout">Date d'ajout :</label>
					<input type="text" name="date_ajout" id="date_ajout" />
					<div class="retour" id="span_date_ajout"></div>
				</div>
			</div>
			<div>
				<input class="btn btn-primary" type="button" id="bouton_ajout_client" value="Ajouter le client"/>
			</div>
			<div class="retour_formulaire" id="form_ajoute_client"></div>
		</form>
	</div>
</div>