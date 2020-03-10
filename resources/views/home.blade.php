@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="{{route('completed.questionnaires')}}" class="btn btn-dark btn-block">Completed Questionnaires</a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <form action="{{route('questionnaire.create')}}" method="post">@csrf
                            <div class="form-group">
                                <label for="answer1">What is the capital of Hungary?</label>
                                <select name="answer1" id="answer1" class="form-control">
                                    <option value="">Please select</option>
                                    <option value="Warsaw">Warsaw</option>
                                    <option value="Stockholm">Stockholm</option>
                                    <option value="Budapest">Budapest</option>
                                    <option value="Bucharest">Bucharest</option>
                                </select>
                                @error('answer1')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="answer2">2 + 1 = ?</label>
                                <select name="answer2" id="answer2" class="form-control">
                                    <option value="">Please select</option>
                                    <option value="3">3</option>
                                    <option value="-3">-3</option>
                                    <option value="0">0</option>
                                    <option value="2">2</option>
                                </select>
                                @error('answer2')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="answer3">What numbers are less than 3?</label><br />
                                <div class="form-check form-check-inline">
                                    <input name="answer3" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="answer3" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="answer3" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">3</label>
                                </div>
                                @error('answer3')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="answer4">What color are prawns?</label>
                                <select name="answer4" id="answer4" class="form-control">
                                    <option value="">Please select</option>
                                    <option value="red">red</option>
                                    <option value="Pink">Pink</option>
                                    <option value="Grey">Grey</option>
                                </select>
                                @error('answer4')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="answer5">How many days in a leap year?</label>
                                <select name="answer5" id="answer5" class="form-control">
                                    <option value="">Please select</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                </select>
                                @error('answer5')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="answer6">What is the first day of the week?</label>
                                <select name="answer6" id="answer6" class="form-control">
                                    <option value="">Please select</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Sunday">Sunday</option>
                                    <option value="Friday">Friday</option>
                                </select>
                                @error('answer6')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="answer7">What kind of animal can change colour?</label>
                                <select name="answer7" id="answer7" class="form-control">
                                    <option value="">Please select</option>
                                    <option value="Kangaroo">Kangaroo</option>
                                    <option value="Giraffe">Giraffe</option>
                                    <option value="Cameleon">Cameleon</option>
                                    <option value="Frog">Frog</option>
                                </select>
                                @error('answer7')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="answer8">What color is the sea?</label>
                                <select name="answer8" id="answer8" class="form-control">
                                    <option value="">Please select</option>
                                    <option value="green">green</option>
                                    <option value="blue">blue</option>
                                    <option value="clear">clear</option>
                                </select>
                                @error('answer8')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="answer9">What color is the sky?</label>
                                <select name="answer9" id="answer9" class="form-control">
                                    <option value="">Please select</option>
                                    <option value="green">green</option>
                                    <option value="blue">blue</option>
                                    <option value="clear">clear</option>
                                </select>
                                @error('answer9')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="answer10">What color is the sun?</label>
                                <select name="answer10" id="answer10" class="form-control">
                                    <option value="">Please select</option>
                                    <option value="yellow">yellow</option>
                                    <option value="orange">orange</option>
                                    <option value="red">red</option>
                                    <option value="white">white</option>
                                </select>
                                @error('answer10')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-dark">Submit questions</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
