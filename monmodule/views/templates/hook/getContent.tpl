<fieldset> 
<h2>Formulaire pour l'admin</h2>
<div>
<form action="" method="post">
<label for="title">title:</label>
  <input type="text" name="title" id="title" maxlength="40" required="required" autofocus/><br /><br />
  
    <label for="text">Avis du client :</label><br />
       <textarea name="content" id="content" rows="10" cols="50" maxlength="1500" ></textarea>

  <button type="submit"  name="valid">Enregistrer</button>
  
  {if isset($confirmation)}
	<div class="alert alert_success">Settings updated</div>
	{/if}
  
</form>
</div>
</fieldset>