@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 131.33px;">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <!-- nickname 表示 -->
                    <h3 class="panel-title">{{ $user->nickname }}</h3>
                </div>
                <div class="panel-body">
                <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->nickname, 262) }}" alt="">
                </div>
            </div>
            <div>
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">いつもタバコを吸う場所</th>
                            <td>{{ $user->place }}</td>
                        </tr>
                        <tr>
                            <th scope="row">一日に吸う本数</th>
                            <td>{{ $user->tabaco }}</td>
                        </tr>
                        <tr>
                            <th scope="row">いつも吸うたばこの種類</th>
                            <td>{{ $user->brand }}</td>
                        </tr>
                    </tbody>
                </table>
               
                
              
            </div>
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li>Tweet<span class="badge" >{{ $count_microposts }}</span></li>
                
            </ul>
            
             @if (Auth::id() == $user->id)
                  {!! Form::open(['route' => 'microposts.store']) !!}
                      <div class="form-group">
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            @endif
            @if (count($microposts) > 0)
                @include('microposts.microposts', ['microposts' => $microposts])
            @endif
        </div>
    </div>
@endsection