@extends('layouts.app')

@section('title')
    Home - TODO.LIST
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-block">
            <h3 class="card-title">TODOS</h3>

            <h6 class="card-subtitle mb-2 text-muted">Latest todos</h6>

            <div class="divider" style="margin-top: 1rem;"></div>


            <div class="articles-container">
                @foreach($todos as $todo)
                    <div class="article">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-2 date">
                                <div class="large">30</div>

                                <div class="text-muted">Jun</div>
                            </div>

                            <div class="col-10">
                                <h4><a href="{{ $todo->url }}">{{ $todo->title }}</a></h4>

                                <p>{{ $todo->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div><!--End .article-->
                @endforeach
            </div>
            <div class="card-footer todo-list-footer">
                {!! Form::open(['route' => ['todos.store'], 'method' => 'POST']) !!}
                    <div class="input-group">
                        <input name='title' type="text" class="form-control input-md" placeholder="Add new todo" />
                    </div>
                    <br>
                    <div class="input-group">
                        <input name='description' type="text" class="form-control input-md" placeholder="Add a description" />
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-md" id="btn-todo">Save</button>
                    </span>
                    </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
