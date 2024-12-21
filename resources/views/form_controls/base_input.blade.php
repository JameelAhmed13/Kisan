@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Base Input</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Controls</li>
                        <li class="breadcrumb-item active">Base Input</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <H4>Simple Example</H4>
                    </div>
                    <div class="card-body">
                        <form class="theme-form">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Email address</label>
                                <input class="form-control" id="exampleFormControlInput1" type="email"
                                    placeholder="name@example.com">
                            </div>
                            <div>
                                <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <H4>Sizing </H4>
                    </div>
                    <div class="card-body">
                        <form class="theme-form">
                            <div class="mb-3">
                                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg"
                                    aria-label=".form-control-lg example">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text" placeholder="Default input"
                                    aria-label="default input example">
                            </div>
                            <div class="mb-3">
                                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"
                                    aria-label=".form-control-sm example">
                            </div>
                            <div class="form-text" id="passwordHelpBlock">Your password must be 8-20 characters long,
                                contain letters and numbers.</div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <H4>Basic Input Type Control </H4>
                    </div>
                    <div class="card-body">
                        <form class="theme-form row g-3">
                            <div class="col-sm-3">
                                <label class="form-label">Place holder</label>
                            </div>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" placeholder="This is for hint only ..!">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Number</label>
                            </div>
                            <div class="col-sm-9">
                                <input class="form-control" type="number" value="50">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Phone Number</label>
                            </div>
                            <div class="col-sm-9">
                                <input class="form-control" type="tel" value="91-(999)-999-999">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">URL</label>
                            </div>
                            <div class="col-sm-9">
                                <input class="form-control" type="url" value="https://themeforest.net">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Date and time</label>
                            </div>
                            <div class="col-sm-9">
                                <input class="form-control" type="datetime-local" value="2024-05-01T00:00"
                                    min="2024-05-01T00:00">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Date</label>
                            </div>
                            <div class="col-sm-9">
                                <input class="form-control" type="date" value="2024-05-01">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Time</label>
                            </div>
                            <div class="col-sm-9">
                                <input class="form-control" type="time" value="00:00">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">File</label>
                            </div>
                            <div class="col-sm-9">
                                <input class="form-control" type="file">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Maximum Length</label>
                            </div>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" maxlength="6"
                                    value="Content must be in 6 characters">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Color</label>
                            </div>
                            <div class="col-sm-9">
                                <input class="form-control form-control-color" type="color" value="#43B9B2">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Read only</label>
                            </div>
                            <div class="col-sm-9">
                                <input class="form-control-plaintext" id="staticEmail" type="text" readonly=""
                                    value="email@example.com">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Textarea</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" cols="5" placeholder="Default textarea"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <H4>Flat Style </H4>
                    </div>
                    <div class="card-body">
                        <form class="form theme-form flat-form">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email address</label>
                                        <input class="form-control" id="email" type="email"
                                            placeholder="name@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="pwd">Password</label>
                                        <input class="form-control mb-3" id="pwd" type="password"
                                            placeholder="Password">
                                        <input class="form-control" id="pwdre" type="password"
                                            placeholder="Re Enter Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="disable">Disabled</label>
                                        <input class="form-control" id="disable" type="text" disabled=""
                                            placeholder="Disabled">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="select">Example select</label>
                                        <select class="form-select" id="select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="multiselect">Example multiple select</label>
                                        <select class="form-select" id="multiselect" multiple="">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="textarea">Example textarea</label>
                                        <textarea class="form-control" id="textarea" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                                <div class="text-end">
                                    <button class="btn btn-primary me-2 btn-square" type="submit">Submit</button>
                                    <input class="btn btn-danger btn-square" type="reset" value="Cancel">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <H4>Edges Style </H4>
                    </div>
                    <div class="card-body">
                        <form class="form theme-form edges-form">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="edgesmail">Email address</label>
                                        <input class="form-control" id="edgesmail" type="email"
                                            placeholder="name@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="edgespwd">Password</label>
                                        <input class="form-control" id="edgespwd" type="password"
                                            placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="edgesdisable">Disabled</label>
                                        <input class="form-control" id="edgesdisable" type="text" disabled=""
                                            placeholder="Disabled">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="edgesselect">Example select</label>
                                        <select class="form-select" id="edgesselect">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="edgesselectmulti">Example multiple select</label>
                                        <select class="form-select" id="edgesselectmulti" multiple="">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="edgestextarea">Example textarea</label>
                                        <textarea class="form-control" id="edgestextarea" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="text-end">
                                        <button class="btn btn-primary me-2" type="submit">Submit</button>
                                        <input class="btn btn-danger" type="reset" value="Cancel">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <H4>Raise Style </H4>
                    </div>
                    <div class="card-body">
                        <form class="form theme-form raise-form">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="raiseemail">Email address</label>
                                        <input class="form-control" id="raiseemail" type="email"
                                            placeholder="name@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                                <div class="mb-3">
                                    <label class="form-label" for="raisepwd">Password</label>
                                    <input class="form-control" id="raisepwd" type="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                                <div class="mb-3">
                                    <label class="form-label" for="raisedisable">Disabled</label>
                                    <input class="form-control" id="raisedisable" type="text" disabled=""
                                        placeholder="Disabled">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="raiseselect">Example select</label>
                                        <select class="form-select" id="raiseselect">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                                <div class="mb-3">
                                    <label class="form-label" for="raiseselectmulti">Example multiple select</label>
                                    <select class="form-select" id="raiseselectmulti" multiple="">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                                <div class="mb-3">
                                    <label class="form-label" for="raisetextarea">Example textarea</label>
                                    <textarea class="form-control" id="raisetextarea" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                                <div class="text-end">
                                    <button class="btn btn-primary btn-air-light me-2" type="submit">Submit</button>
                                    <input class="btn btn-danger btn-air-light" type="reset" value="Cancel">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
@endsection

@section('scripts')
@endsection
