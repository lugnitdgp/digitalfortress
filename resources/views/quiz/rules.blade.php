@extends('layouts.app')

@section('content')
    <div class="col-md-10 col-md-offset-1">
        <div class="card">
            <div class="card-header" data-background-color="red">
                <h4 class="title">How to Play the Game ?</h4>
            </div>
            <div class="card-content table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <th>#</th>
                        <th>Rule</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Each Round has two kinds of questions : Hints Question and Round Question.</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>There will be around 4-6 Hints question per round and 1 Round Question</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Solving an hint question will get you a latitude longitude position unlocked which will be plotted in a google map.</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>After you solve all the questions you will notice that there is a pattern formed in the map, which will be your clue. It maybe any kind of shape or correlation between all the points in the map.</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>All you need to do is zoom into the map or analyse the map or find details about that location,decode the pattern or use all your detective ideas to find a clue. This clue will help you to solve the main question of that round, solving which you proceed to the next round.</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Each round will have a particular theme and questions will be based on that.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>           
    </div>

@endsection