{extends file='page.tpl'}

{block name='page_content'}


<form>
  <div class="form-group">
    <label for="exampleInputEmail1">De quel produit souhaitez vous nous parler ?</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre produit">
  </div>
  <div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text">Votre commentaire</span>
    </div>
  <textarea class="form-control" aria-label="With textarea" placeholder="Dites nous tout !"></textarea>
</div>

  
  <button type="submit" class="btn btn-primary">Envoyer !</button>
</form>
{/block}