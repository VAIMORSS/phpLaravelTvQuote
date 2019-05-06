<div class="container">
<legend class="legend">TV Show Quotes</legend>
@if(session('info'))
<div class="alert alert-success">
    {{session('info')}}
    </div>
@endif
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Show </th>
      <th scope="col">Season </th>
      <th scope="col">Episode</th>
      <th scope="col">Quote</th>
      <th class="action" scope="col">Update | Remove</th>

    </tr>
  </thead>
  <tbody>
    @if(count($Quotes)>0)
        @foreach($Quotes->all() as $Quote)
            <tr class="table">
                    <td>{{$Quote->id}}</td>
                    <td>{{$Quote->Show}}</td>
                    <td>{{$Quote->season}}</td>
                    <td>{{$Quote->Episode}}</td>
                    <td>{{$Quote->Quote}}</td>
                    <td>
                        <div class="actions">
                        <a href='{{url("/update/{$Quote->id}")}}'>
                        <span class="btn btn-warning">Update</span>
                        </a> | 
                        <a href='{{url("/remove/{$Quote->id}")}}'>
                            <span class="btn btn-danger">Remove</span>
                        </a>
                        </div>
                    </td>
            </tr>


            

        @endforeach

    @endif
  </tbody>
</table> 
</div>