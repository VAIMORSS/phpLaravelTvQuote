@include('header');

<div class="container">
<form method="POST" action="/create">
  {{csrf_field()}}
  <div class="form-group">
    <label >Show</label>
    <input type="text" name="Show" class="form-control"  placeholder="Enter Show name" required>
  </div>

<div class="row">
<div class="form-group col-lg-6 col-md-6">
    <label >Season</label>
    <input type="number" min="1" name="Season" class="form-control"  placeholder="Enter Season Number" required>
  </div>

  <div class="form-group col-lg-6 col-md-6">
    <label >Episode</label>
    <input type="Number" min="1" name="Episode" class="form-control"  placeholder="Enter Episode" required>
  </div>
</div>
 
  
  <div class="form-group">
    <label>Quote</label>
    <textarea  name="Quote"  placeholder="Enter the Quote" class="form-control"  required></textarea>
  </div>
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <button  class="btn"><a href="{{url('/')}}">Back</a></button>
</form>
</div>

@include('footer');
