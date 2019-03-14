{extends file='page.tpl'}

{block name='page_content'}

<form action="" method="post">
  <input type="text" name="comment"/>
  <input type="text" name="rate"/>
<button
        name="submitSend"
        class="btn btn-primary">Envoyer</button>
</form>
{/block}