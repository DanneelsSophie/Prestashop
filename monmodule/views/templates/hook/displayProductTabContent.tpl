<fieldset>
<h2>Formulaire pour l'admin</h2>
<div>
<form action="" method="post">
<label for="title">title:</label>
  <input type="text" name="title" id="title" maxlength="40" required="required" autofocus/><br /><br />
  
    <label for="text">Avis du client :</label><br />
       <textarea name="text" id="text" rows="10" cols="50" maxlength="1500" ></textarea>
	   
	   <input type="hidden" name="dateajout" id="dateajout" /><br /><br />
	   <input type="hidden" name="dateupdate" id="dateupdate" /><br /><br />

  <button type="submit" id="submit" name="valid">Enregistrer</button>
  
  {if isset($valid)}
	<div class="alert alert_success">Settings updated</div>
	{/if}
  }
</form>
</div>
</fieldset>