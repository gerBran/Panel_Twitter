@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Lista de todos los tweets del usuario</h3>
                </div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <tr>
                        <th>Created at</th>
                        <th>Tweets</th>
                      </tr>
                      @foreach($tweets as $tw)
                        <tr>
                          <td>{{ $tw->created_at }}</td>
                          <td>{{ $tw->tweet }}</td>
                        </tr>
                      @endforeach
                    </table>
                    {{$tweets->links()}}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
