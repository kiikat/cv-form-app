@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    CV info
                </div>
                <div class="float-end">
                    <a href="{{ route('cvs.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cv->name }}
                        </div>
                    </div>
                    
                    <div class="row">
                        <label for="surname" class="col-md-4 col-form-label text-md-end text-start"><strong>Surname:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cv->surname }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="age" class="col-md-4 col-form-label text-md-end text-start"><strong>Age:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cv->age }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end text-start"><strong>Phone Number:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cv->phone }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>E-mail:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cv->email }}
                        </div>
                    </div>

                    
                    <div class="row">
                        <label for="education" class="col-md-4 col-form-label text-md-end text-start"><strong>Education:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cv->education }}
                        </div>
                    </div>

                    
                    <div class="row">
                        <label for="experience" class="col-md-4 col-form-label text-md-end text-start"><strong>Job experience:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cv->experience }}
                        </div>
                    </div>

                    
                    <div class="row">
                        <label for="skills" class="col-md-4 col-form-label text-md-end text-start"><strong>Practical skills:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cv->skills }}
                        </div>
                    </div>

                    
                    <div class="row">
                        <label for="language1" class="col-md-4 col-form-label text-md-end text-start"><strong>First Language:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cv->language1}}
                        </div>
                    </div>

                    
                    <div class="row">
                        <label for="language2" class="col-md-4 col-form-label text-md-end text-start"><strong>Second Language:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cv->language2 }}
                        </div>
                    </div>

                    
                    <div class="row">
                        <label for="language3" class="col-md-4 col-form-label text-md-end text-start"><strong>Third language:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cv->language3 }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection