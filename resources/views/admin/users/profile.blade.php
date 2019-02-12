@extends('layouts.app')

@section('content')

      @include('admin.includes.errors')

      <div class="panel panel-default">
            <div class="panel-heading">
                  Edit your profile 
            </div>

            <div class="panel-body">
                  <form action="{{route('user.profile.update', ['id' => $user->id])}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                              <label for="name">name</label>
                              <input type="text" name="name" class="form-control" value="{{$user->name}}">
                        </div>


                        <div class="form-group">
                              <label for="email">email</label>
                              <input type="email" name="email" class="form-control" value="{{$user->email}}">
                        </div>

                        <div class="form-group">
                              <label for="password">password</label>
                              <input type="password" name="password" class="form-control" >
                        </div>

                        <div class="form-group">
                              <label for="facebook">facebook</label>
                              <input type="text" name="facebook" class="form-control" value="{{$user->profile->facebook}}">
                        </div>

                        <div class="form-group">
                              <label for="youtube">youtube</label>
                              <input type="text" name="youtube" class="form-control" value="{{$user->profile->youtube}}">
                        </div>

                        <div class="form-group">
                              <label for="avatar">avatar</label>
                              <input type="file" name="avatar" class="form-control" >
                        </div>

                        <div class="form-group">
                              <label for="about">About You</label>
                              <textarea name="about" class="form-control" cols="6" rows="6">{{$user->profile->about}}</textarea>
                        </div>

                        <div class="form-group">
                              <div class="text-center">
                                    <button class="btn btn-success" type="submit">
                                          Edit profile
                                    </button>
                              </div>
                        </div>
                  </form>
            </div>
      </div>
@stop



