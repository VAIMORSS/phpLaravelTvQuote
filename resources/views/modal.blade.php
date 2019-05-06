@include('header');



<div class="container">
<legend class="legend">TV Show Quotes</legend>
@if(session('info'))
<div class="alert alert-success">
    {{session('info')}}
    </div>
@endif

@if(count($Quotes)>0)
        
        <div class="row">
        @foreach($Quotes->all() as $Quote)
        <div class="card card-background col-xs-5 col-sm-4 col-md-3 col-lg-2">
                        <div class="user-info-btn">
                                <button type="button" 
                                class=" btn-primary glyphicon glyphicon-info-sign" 
                                data-toggle="modal"
                                data-target="#myModal-<?php echo $Quote->id?>">i</button>
                        </div>
                        
                        <div class="image">

                        <?php
                        
                        $json = (array) json_decode(file_get_contents('https://picsum.photos/v2/list'), true);

                        $file_path=$json[mt_rand(0, sizeof($json)-1)];

                        echo "<img src='" . $file_path['download_url'] . "' alt='error'  width='150' height='100'> ";
                        
                        
                        ?>

                        </div>
        
                        <div class="Quote">
                            <h4> {{$Quote->Show}}</h4>
                            <h5> S:{{$Quote->season}}/E:{{$Quote->Episode}}</h5>
                        </div>
        
                    </div>
                    <div class="modal fade" id="myModal-<?php echo $Quote->id?>" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"></h4>
                                </div>
                                <div class="modal-body">
                                    <h3>Quote of {{$Quote->Show}}</h3> <h7> S:{{$Quote->season}}/E:{{$Quote->Episode}}</h7>
                                    <hr />
                                    <p class="container">{{$Quote->Quote}}</p>
                                </div>
                                <tr class="modal-footer">
                                    <div class="user-popup-links">
                                            <td class="dropDown-fields"><a class="glyphicon glyphicon-edit" href='{{url("/update/{$Quote->id}")}}'>
                                            Edit</a></td>

                                            <td class="dropDown-fields"><a class=" glyphicon glyphicon-trash"
                                                    href='{{url("/remove/{$Quote->id}")}}'> remove</a>
                                            </td>
                                            
                                    </div>
                                </tr>
                            </div>
                        </div>
                    </div>
                    @endforeach
</div>


@endif

@include('footer');
