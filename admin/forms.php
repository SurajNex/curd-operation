<?php include 'function/haeder.php'; ?>
	
<form action="#">
  <h1>Fancy Inputs</h1>   
  <div class="row">
    <input type="text" name="fancy-text" id="fancy-text"/>
    <label for="fancy-text">Name</label>
  </div>
  
  <div class="row">
    <textarea name="fancy-textarea" id="fancy-textarea"></textarea>
    <label for="fancy-textarea">Description</label>
  </div>
  
  <button type="submit" tabindex="0">Submit</button>
</form>

<?php include 'function/footer.php'; ?>