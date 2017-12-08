@extends('layouts.app')

@section('title')
    Home - TODO.LIST
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-block">
            <div class="card mb-4">
                <div class="card-block">
                    <h3 class="card-title">Todo List</h3>

                    <div class="dropdown card-title-btn-container">
                        <button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
                            <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
                            <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
                    </div>

                    <h6 class="card-subtitle mb-2 text-muted">A simple checklist</h6>

                    <div class="divider" style="margin-top: 1rem;"></div>

                    <ul class="todo-list mt-2">
                        <li class="todo-list-item">
                            <div class="form-check">
                                <label for="checkbox-1">Make coffee</label>

                                <div class="float-left action-buttons" ><a href="#" class="trash"><em class="fa fa-check-square-o"></em></a></div>
                            </div>
                        </li>
                    </ul>

                    <div class="card-footer todo-list-footer">
                        <div class="input-group">
                            <input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" /><span class="input-group-btn">
													<button class="btn btn-primary btn-md" id="btn-todo">Add</button>
											</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
