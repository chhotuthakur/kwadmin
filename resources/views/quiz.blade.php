@extends('layouts.app')
@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('quiz.store') }}" method="POST">
            @csrf
            <div class="card-body">
                Question:

                <div class="form-group">
                    <labelfor="question">Question</label> 
                    <input type="text" class="form-control" id="question" placeholder="Enter question"> </div>
                Option A:
                
                <div class="form-group"> 
                    <label for="optionA">Option A</label> 
                    <input type="text" class="form-control" id="optionA" placeholder="Enter option A"> </div>
                Option B:
                
                <div class="form-group"> 
                    <label for="optionB">Option B</label> 
                    <input type="text" class="form-control" id="optionB" placeholder="Enter option B"> </div>
                Option C:
                
                <div class="form-group"> 
                    <label for="optionC">Option C</label> 
                    <input type="text" class="form-control" id="optionC" placeholder="Enter option C"> </div>
                Option D:
                
                <div class="form-group"> 
                    <label for="optionD">Option D</label> 
                    <input type="text" class="form-control" id="optionD" placeholder="Enter option D"> </div>
                Correct Option:
                
                <div class="form-group"> 
                    <label for="correctOption">Correct Option</label> 
                    <input type="text" class="form-control" id="correctOption" placeholder="Enter correct option (A, B, C, or D)"> 
                </div>
                Note:
                
                <div class="form-group"> 
                    <label for="note">Note</label> 
                    <input type="text" class="form-control" id="note" placeholder="Enter note"> </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
