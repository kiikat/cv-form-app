@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit CV
                </div>
                <div class="float-end">
                    <a href="{{ route('cvs.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('cvs.update', $cv->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $cv->name }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="surname" class="col-md-4 col-form-label text-md-end text-start">Surname</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname" value="{{ $cv->surname }}">
                            @error('surname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="age" class="col-md-4 col-form-label text-md-end text-start">Age</label>
                        <div class="col-md-6">
                          <input type="age" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ $cv->age }}">
                            @error('age')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">E-mail</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $cv->email }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end text-start">Phone Number</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $cv->phone }}">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="education" class="col-md-4 col-form-label text-md-end text-start">Education</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('education') is-invalid @enderror" id="education" name="education">{{ $cv->education }}</textarea>
                            @error('education')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    
                    <div class="mb-3 row">
                        <label for="experience" class="col-md-4 col-form-label text-md-end text-start">Job Experience</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('experience') is-invalid @enderror" id="experience" name="experience">{{ $cv->experience }}</textarea>
                            @error('experience')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    
                    <div class="mb-3 row">
                        <label for="skills" class="col-md-4 col-form-label text-md-end text-start">Practical skills</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('skills') is-invalid @enderror" id="skills" name="skills">{{ $cv->skills }}</textarea>
                            @error('skills')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="language1" class="col-md-4 col-form-label text-md-end text-start">First Language</label>
                        <div class="col-md-6">
                          <input type="language1" class="form-control @error('language1') is-invalid @enderror" id="language1" name="language1" value="{{ $cv->language1 }}">
                            @error('language1')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="language2" class="col-md-4 col-form-label text-md-end text-start">Second Language </label>
                        <div class="col-md-6">
                          <input type="language2" class="form-control @error('language2') is-invalid @enderror" id="language2" name="language2" value="{{ $cv->language2 }}">
                            @error('language2')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="language3" class="col-md-4 col-form-label text-md-end text-start">Third Language </label>
                        <div class="col-md-6">
                          <input type="language3" class="form-control @error('language3') is-invalid @enderror" id="language3" name="language3" value="{{ $cv->language3 }}">
                            @error('language3')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>

                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection