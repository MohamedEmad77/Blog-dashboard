@extends('layouts.app')

@section('content')

      <div class="panel panel-default">
            <div class="panel-heading">
                  posts
            </div>
            <div class="panel-body">
                  <table class="table table-hover">
                        <thead>
                              <th>
                                    Image
                              </th>
                              <th>
                                    Title
                              </th>

                              <th>
                                    Editing 
                              </th>
                              <th>
                                    Trash
                              </th>
                        </thead>

                        <tbody>
                              @if($posts->count() > 0)
                                    @foreach($posts as $post)
                                          <tr>
                                                <td>
                                                      <img src="{{$post->image}}" width="90" height="60" alt="{{$post->title}}">
                                                </td> 
                                                 <td>
                                                      {{$post->title}}
                                                </td>

                                                <td>
                                                      <a href="{{ route('post.edit', ['id' => $post->id ]) }}" class="btn btn-info">
                                                            Edit
                                                      </a>
                                                </td>

                                                <td>
                                                      <a href="{{ route('post.delete', ['id' => $post->id ]) }}" class="btn btn-danger">
                                                            Trash
                                                      </a>
                                                </td>
                                          </tr>
                                    @endforeach
                              @else
                                     <tr>
                                          <th colspan="5" class="text-center">No posts yet.</th>
                                    </tr>
                              @endif
                        </tbody>
                  </table>
            </div>
      </div>

@stop