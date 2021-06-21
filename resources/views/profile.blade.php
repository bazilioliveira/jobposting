<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="container">
                        <div class="main-body">
                            <div class="row gutters-sm">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-column align-items-center text-center">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                                <div class="mt-3">
                                                    <h4>{{$user->name}}</h4>
                                                    <p class="text-secondary mb-1">{{$user->position}}</p>
                                                    <p class="text-muted font-size-sm">{{$user->city}}</p>
                                                </div>
                                            </div>

                                            <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
                                            <hr>
                                                @csrf
                                                @if ($message = Session::get('success'))
                                                    <div class="alert alert-success">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @endif

                                                @if (count($errors) > 0)
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                            <div class="row">
                                                <div class="col-sm-12 d-flex justify-content-center">
                                                    <input class="btn btn-info" type="file" value="Upload Resume" name="resume">
                                                </div>
                                            </div>
                                                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                                                    Upload Files
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Full Name</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{$user->name}}
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{$user->email}}
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Phone</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{$user->phone}}
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Address</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{$user->city}}
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Skills</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{$user->skills}}
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Education</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{$user->education}}
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Experience</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{$user->experience}}
                                                </div>
                                            </div>



                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <a class="btn btn-info" href="/edit-user">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row gutters-sm">
                                        <div class="col-sm-6 mb-3">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Jobs applied</i></h6>
                                                    <small>Restaurant Manager</small>
                                                    <div class="progress mb-3" style="height: 5px">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
