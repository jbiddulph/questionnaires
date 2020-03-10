@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Questionnaires</div>
                        <div class="card-body">
                            @foreach($questionnaires as $completed)
                                <p>User: {{ $completed->user_id }}</p>
                                <p>Answer 1: {{ $completed->answer1 }}</p>
                                <p>Answer 2: {{ $completed->answer2 }}</p>
                                <p>Answer 3: {{ $completed->answer3 }}</p>
                                <p>Answer 4: {{ $completed->answer4 }}</p>
                                <p>Answer 5: {{ $completed->answer5 }}</p>
                                <p>Answer 6: {{ $completed->answer6 }}</p>
                                <p>Answer 7: {{ $completed->answer7 }}</p>
                                <p>Answer 8: {{ $completed->answer8 }}</p>
                                <p>Answer 9: {{ $completed->answer9 }}</p>
                                <p>Answer 10: {{ $completed->answer10 }}</p>
                                <hr>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
