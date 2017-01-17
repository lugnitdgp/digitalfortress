@extends('layouts.app')

@section('content')
    <div class="col-md-10 col-md-offset-1">
        <div class="card" >
            <div class="card-header" data-background-color="red" >
                <h4 class="title" style="text-align:center">Hints and Updates!</h4>
            </div>
            <div class="card-content table-responsive" style="overflow-y:scroll;height:500px">
                <table class="table table-striped" >
                    <thead>
                        <th style=" width:20%; text-align:left;">Hint No</th>
                        <th style=" width:80%; text-align:left;">Hint Content</th>
                    </thead>
                    <tbody >
                    @if(!isset($nohints))
                        @foreach ($hints as $key=>$value)
                           <tr class="cent">
                              <td style="text-align:left">{{ $key+1 }}</td>
                              <td style="text-align:left">{{ $value['hint'] }}</td>
                           </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>           
    </div>

@endsection