@include('header');

<div class="container">
<form method="POST" action="/Update/<?php echo $Quote->id?>">
  {{csrf_field()}}
  <div class="form-group">
    <label >Show</label>
    <input type="text" name="Show" class="form-control"  placeholder="Enter Show name" value="<?php echo $Quote->Show?>" required>
  </div>

<div class="row">
<div class="form-group col-lg-6 col-md-6">
    <label >Season</label>
    <input type="number" min="1" name="Season" class="form-control"  placeholder="Enter Season Number" value="<?php echo $Quote->season?>" required>
  </div>

  <div class="form-group col-lg-6 col-md-6">
    <label >Episode</label>
    <input type="Number" min="1" name="Episode" class="form-control"  placeholder="Enter Episode" value="<?php echo $Quote->Episode?>" required>
  </div>
</div>
 
  
  <div class="form-group">
    <label>Quote</label>
    <textarea  name="Quote"  placeholder="Enter the Quote" class="form-control"  required><?php echo $Quote->Quote?></textarea>
  </div>
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <button  class="btn"><a href="{{url('/')}}">Back</a></button>
</form>
</div>

@include('footer');
