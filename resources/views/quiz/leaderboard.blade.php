@extends('layouts.app')

@section('content')
   <div class="col-md-10 col-md-offset-1">
        <div class="card">
            <div class="card-header" data-background-color="red">
                <h4 class="title text-center">Leaderboard</h4>
            </div>
            <div class="card-content">   
                    <div class="form-group" style="margin: 2px">
                        <div class="col-md-3 col-md-offset-9">
                            <select class  ="form-control" name="state" id="maxRows">
                                 <option value="5000">All results</option>
                                 <option value="10">10</option>
                                 <option value="20">20</option>
                                 <option value="50">50</option>
                                 <option value="100">100</option>
                                 <option value="200">200</option>
                            </select>
                        </div>
                    </div>
                    <table class="table" id="myTable">
                        <thead class="text-primary">
                                <th>Rank</th>
                                <th>Email</th>
                                <th>User Name</th>
                                <th>Current Round</th>
                                <th>Solved At</th>
                        </thead>
                        <tbody>
                        @foreach ($stand as $key=>$value)
                            @if ($value['username']==$name)
                                <tr class="active cent">
                            @else
                                <tr class="cent">
                            @endif
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value['username'] }}</td>
                                    <td>{{ $value['email'] }}</td>
                                    <td>{{ $value['round_id'] }}</td>
                                    <td>{{ $value['updated_at'] }}</td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class='pagination-container' id="pagcont" style="display: none;">
                        <nav>
                          <ul class="pagination">
                          </ul>
                        </nav>
                    </div>
            </div>
        </div>
    </div>

@stop

@section('myjs')

<script src="{{ URL::asset('assets/js/pagination.js') }}"></script>

<script>

$(document).ready(function(){
    $("#maxRows").change(function(){
        var y = {{ $sz }};
        var x = $('#maxRows').find(":selected").val();
        if(x>=y){
            $("#pagcont").hide();
        }
        else{
             $("#pagcont").show();
        }
    });
    getPagination('#myTable');
    
});
</script>
@endsection