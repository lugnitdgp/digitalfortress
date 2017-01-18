@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="card-header" data-background-color="red">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-controls="collapseOne"><h4 class="card-title text-center" id="roundtitle">Round {{$round}} - {{$roundDetails['round_name'] }}&nbsp;<i class="material-icons">keyboard_arrow_down</i></h4></a>
            </div>
            <div class="card-content">
                <div class="" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default" style="margin-bottom: 0px;">
                        
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-hidden="true" aria-labelledby="headingOne">
                            <div class="panel-heading">
                                <h5 class="panel-title text-center">{!! $roundDetails['question'] !!}</h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-8">
                                    <div id="roundqlabel" class="form-group label-floating is-empty">
                                        <label class="control-label">My Answer</label>
                                        <input type="text" class="form-control" id="roundQuesAns">
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <input type="hidden" id="token1" value="{{ csrf_token() }}">
                                    <input type="hidden" id="roundid" value="{{$round}}">
                                    <button style="margin-bottom: 0px; margin-top: 20px;" type="button" id="roundQuesSubmit" class="btn btn-default btn-primary">Submit Answer</button>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header" data-background-color="red">
                <h4 class="title text-center">Hint Question</h4>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-bordered">
                    <thead class="text-primary">
                            <th width="10%">Id</th>
                            <th width="70%">Question</th>
                            <th width="20%">Status</th>
                    </thead>
                    <tbody>
                        @foreach ($question as $key=>$value)
                        <tr class="cent">
                            <td value="{{ $value['question_no'] }} ">{{ $key+1 }}</td>
                            <td style="cursor: pointer;" class="question" data-qno="{{ $value['question_no'] }}">{{ $value['title'] }}</td>
                            <td>
                                @if ($value['solved']==1)
                                <i class="text-success fa fa-check-square-o fa-2x   "></i>
                                @else
                                <i class="text-warning fa fa-window-close-o fa-2x"></i>
                                @endif
                            </td>
                        </tr>
                        @endforeach    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="red">
                <i class="material-icons">add_location</i>
            </div>
            <div class="card-content">
                <h4 class="card-title" style="margin-top: 0px; margin-bottom: 0px;">Hint Map Mini-View&nbsp;&nbsp;&nbsp;
                <button class="btn btn-primary btn-xs" style="margin-top: 5px; margin-bottom: 5px;" id="enlargemap">Enlarge</button></h4>

                <div id="map" class="map" style="height: 250px;"></div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
<div class="modal fade" id="questionBox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <p class="question-content"></p>
                <div id="qlabel" class="form-group label-floating is-empty">
                    <label class="control-label">My Answer</label>
                    <input type="text" class="form-control" id="hintQuesAns">
                    <span class="material-input"></span>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="qno" value=""></input>
                <button type="button" id="quesSubmit" class="btn btn-default btn-primary">Submit Answer</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mymapmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog modal-lg" style="width: 95%;margin-top:10px">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-5">
                        <div id="roundqlabel" class="form-group label-floating is-empty" style="margin-top:0px;">
                            <label class="control-label">Search here!</label>
                            <input type="text" class="form-control" id="searchbar">
                            <span class="material-input"></span>
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button style="margin-top:0px; margin-bottom:0px;" type="button" id="searchmap" class="btn btn-default btn-primary">Search</button>
                    </div>
                    <div id="loader" class="pull-right" style="padding-right:10px">
                        <img src="{{ URL::asset('assets/img/gps.gif') }}" style="width:41px;height:41px">
                    </div>
                </div>
                
            </div>
            <div class="modal-body" style="margin-top:0px;padding-top:0px">
                <div id="map2" class="map" style="height: 70vh;"></div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('externcss')
    <link href="{{ URL::asset('assets/css/sweetalert.css') }}" rel="stylesheet" />
@endsection


@section('myjs')

<script src="http://maps.google.com/maps/api/js?key=AIzaSyB8VUmzsg1xJKrNDqFlnbBiYAwWEWmkfe8"></script>
<script src="{{ URL::asset('assets/js/gmaps.js') }}"></script>

<script src="{{ URL::asset('assets/js/sweetalert.min.js') }}"></script>

<script type="text/javascript">

function showGoogleMap(e)
 {


    locations = <?php echo json_encode($locations); ?>;

    var settings = {
              paths: locations,
              strokeColor: 'orange',
              strokeOpacity: 1,
              strokeWeight: 3,
              fillColor: 'green',
              fillOpacity: 0.4
            };


    polygon = e.drawPolygon(settings);

    bounds = [];
     for (var i in locations) {
      var latlng = new google.maps.LatLng(locations[i][0], locations[i][1]);
      bounds.push(latlng);
      e.addMarker({
        lat: locations[i][0],
        lng: locations[i][1],
        title: 'Question '+(parseInt(i)+1).toString()
      });
    }
    if(locations.length>0)
        e.fitLatLngBounds(bounds);
 }


$(document).ready(function(){

    var y = <?php echo json_encode($question); ?>;

     $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content') }
    });

     
    
    
    map = new GMaps({div: '#map',lat:23.5501761,lng:87.2875451});
    showGoogleMap(map);

    

    $("#enlargemap").click(function(){
        $("#mymapmodal").modal({show:true,keyboard:true});

    });
    var map2;
    $('#mymapmodal').on('shown.bs.modal', function (e) {
        map2 = new GMaps({div: '#map2', lat:23.5501761,lng:87.2875451});
        showGoogleMap(map2);
    });



    $('table>tbody>tr .question').click(function() {        
        var qno = $(this).data('qno');
        var key=-1;
        $(y).each(function(index, data){
            if(data.question_no == qno)
                key=index;
        });
        
        if(key>=0){
            $(".modal-title").html(y[key]['title']);
            $(".modal-footer #qno").val(qno);
            $(".question-content").html(y[key]['question']);
            $("#questionBox").modal({show:true,keyboard:true});

        }
    });

    $("#quesSubmit").click(function(){
        var qno = $(this).parent().parent().find("#qno").val();
        var ans = $("#hintQuesAns").val();
        if(ans.length>0)
        {
            $.ajax({
                type:'POST',
                url:'/verifyans',
                data:{
                    'qno':qno,
                    'ans': ans
                },
                success:function(data){
                    if(data=="true")
                    {
                        $("#questionBox").modal('toggle');
                        swal({ title:'Correct Answer',text:'You have unlocked another point in the map !! Go check it out ', type:'success'}, function() { document.location.href = '/round_overview' });
                    }
                    else
                    {
                        swal({ title:'Wrong Answer',text:'Try harder !! Success is all yours', type:'error'});
                        $("#hintQuesAns").val('');
                        $("#qlabel").removeClass('is-focused').addClass('is-empty');
                    }
                }
            });
        }
        else
        {
            swal({title:'Empty Answer',text:"You don't get marks for not attempting the question !! Do you ? ", type:'info'});
        }
    });

    $("#roundQuesSubmit").click(function(){
        
        var rno = '{{$round}}';
        var ans = $("#roundQuesAns").val();
         if(ans.length>0)
        {
            $.ajax({
                type:'POST',
                url:'/verifyroundans',
                data:{
                    'rno':rno,
                    'ans': ans
                },
                success:function(data){
                    if(data=="true")
                    {
                        swal({ title:'Correct Answer',text:'Great Going !! Welcome to a new round', type:'success'}, function() { document.location.href = '/round_overview' });
                    }
                    else if(data=="complete"){
                        swal({ title:'Correct Answer',text:'You have crossed all the rounds availiable till now !! Wait for a new round to be added', type:'success'}, function() { document.location.href = '/round_overview' });
                    }
                    else
                    {
                        swal({ title:'Wrong Answer',text:'Try harder !! Success is all yours', type:'error'});
                        $("#roundQuesAns").val('');
                        $("#roundqlabel").removeClass('is-focused').addClass('is-empty');
                    }
                }
            });
        }
        else
        {
            swal({title:'Empty Answer',text:"You thought an no answer is the answer !! Try harder :p", type:'info'});
        }
    });

    $('table>tbody>tr .question').hover(
        function(){
            $(this).parent().addClass('info');
        },
        function(){
            $(this).parent().removeClass('info');
        }
    );

    $("#roundtitle").click(function(){
        if( $("#collapseOne").hasClass('in') )
        {
            $(this).find(".material-icons").html('keyboard_arrow_down');
        }
        else
        {
            $(this).find(".material-icons").html('keyboard_arrow_up');

        }
    });
    $("#loader").hide();

    $('body').on('keypress', '#searchbar', function(args) {
    if (args.keyCode == 13) {
        $('#searchmap').click();
        return false;
    }
});
    $("#searchmap").click(function(){

        $("#loader").show();
        GMaps.geocode({
          address: $('#searchbar').val(),
          callback: function(results, status) {

            if (status == 'OK') {
                  var latlng = results[0].geometry.location;
                  map2.setCenter(latlng.lat(), latlng.lng());
                  map2.setZoom(17);
            }
            else
            {
                console.log('error');
            }
            $("#loader").hide();
          }
        });
    });
});
</script>
@endsection