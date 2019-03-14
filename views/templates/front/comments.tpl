{extends file='page.tpl'}

{block name='page_content'}


<form>
  <div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text">Votre commentaire</span>
    </div>
  <textarea value="{if isset($commentary)}{$commentary}{/if}" 
            class="form-control" 
            aria-label="With textarea" 
            placeholder="Dites nous tout !"></textarea>
</div>

<div class="dropdown">
  <button   value="rate" 
            class="btn btn-secondary dropdown-toggle" 
            type="button" 
            id="dropdownMenuButton" 
            data-toggle="dropdown" 
            aria-haspopup="true" 
            aria-expanded="false">
    Donnez nous une note !
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" value="1" href="#">1</a>
    <a class="dropdown-item" value="2" href="#">2</a>
    <a class="dropdown-item" value="3" href="#">3</a>
    <a class="dropdown-item" value="4" href="#">4</a>
    <a class="dropdown-item" value="5" href="#">5</a>
  </div>
</div>

<button type="button" 
        name="Envoyer" 
        value="submit" 
        class="btn btn-primary">Envoyer</button>
</form>
{/block}