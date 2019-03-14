{extends file='page.tpl'}

{block name='page_content'}

<form action="" method="post">
  <input placeholder="Votre commentaire" 
        type="text" 
        name="comment"/>
  <input placeholder="Votre note" 
        type="text" 
        name="rate"/>
        
<button name="submitSend"
        class="btn btn-primary">Envoyer</button>
</form>
{/block}