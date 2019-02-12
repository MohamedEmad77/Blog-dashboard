@extends('layouts.app')

@section('content')

      <div class="panel panel-default">
            <div class="panel-heading">
                  Users
            </div>
            <div class="panel-body">
                  <table class="table table-hover">
                        <thead>
                              <th>
                                    Image
                              </th>
                              <th>
                                    Name
                              </th>

                              <th>
                                    Permissions
                              </th>
                              <th>
                                    Delete
                              </th>
                        </thead>

                        <tbody>
                              @if($users->count() > 0)
                                    @foreach($users as $user)
                                          <tr>
                                                <td>
                                                      <img src="{{asset($user->profile->avatar)}}" width="60" height="60" style="border-radius: 50%">
                                                </td> 
                                                 <td>
                                                      {{$user->name}}
                                                </td>

                                                <td>
                                                      @if($user->admin)
                                                            <a href="{{ route('user.removeadmin', ['id' => $user->id ]) }}" class="btn btn-danger btn-xs">
                                                                  Remove admin
                                                            </a>
                                                      @else
                                                            <a href="{{ route('user.makeadmin', ['id' => $user->id ]) }}" class="btn btn-success btn-xs">
                                                                  Make admin
                                                            </a>
                                                      @endif
                                                </td>

                                                <td>
                                                      @if(Auth::user()->id != $user->id)
                                                            <a href="{{ route('user.delete', ['id' => $user->id ]) }}" class="btn btn-danger btn-xs">
                                                                  Delete
                                                            </a>
                                                      @endif      
                                                </td>
                                          </tr>
                                    @endforeach
                              @else
                                     <tr>
                                          <th colspan="5" class="text-center">No users yet.</th>
                                    </tr>
                              @endif
                        </tbody>
                  </table>
            </div>
      </div>

@stop