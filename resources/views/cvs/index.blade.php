@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession

        <div class="card">
            <div class="card-header">CV List</div>
            <div class="card-body">
                <a href="{{ route('cvs.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Create a CV</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">List</th>
                        <th scope="col">Name</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Age</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Your E-mail</th>
                        <th scope="col">Education</th>
                        <th scope="col">Job Experience</th>
                        <th scope="col">Practical skills</th>
                        <th scope="col">Language</th>
                        <th scope="col">Second Language</th>
                        <th scope="col">Third Language</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($cvs as $cv)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $cv->name }}</td>
                            <td>{{ $cv->surname }}</td>
                            <td>{{ $cv->age }}</td>
                            <td>{{ $cv->phone }}</td>
                            <td>{{ $cv->email }}</td>
                            <td>{{ $cv->education }}</td>
                            <td>{{ $cv->experience }}</td>
                            <td>{{ $cv->skills }}</td>
                            <td>{{ $cv->language1 }}</td>
                            <td>{{ $cv->language2 }}</td>
                            <td>{{ $cv->language3 }}</td>
                            <td>
                                <form action="{{ route('cvs.destroy', $cv->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('cvs.show', $cv->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show CV</a>

                                    <a href="{{ route('cvs.edit', $cv->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit CV</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this Cv?');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No CV Found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

                  {{ $cvs->links() }}

            </div>
        </div>
    </div>    
</div>
    
@endsection