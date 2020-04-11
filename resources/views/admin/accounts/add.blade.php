@extends('layouts.element.main')

@section('title', 'Akun - Add')

@section('custom-css')
    <style>
        .breadcrumb-item + .breadcrumb-item::before{
            content: '-';
            color: #5e72e4;
        }
    </style>
@endsection

@section('content')

<!-- Navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
  <div class="container-fluid">
    <!-- Brand -->
    <a class="h4 mb-0 mt-3 text-white text-uppercase d-none d-lg-inline-block" href="javascript:;">
      Dashboard
    </a>
  </div>
</nav>
<!-- End Navbar -->
<!-- Header -->
<div class="header bg-gradient-info pb-8 pt-5 pt-md-8">
</div>
<div class="container-fluid mt--7">
          <!-- Table -->
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-bottom-1">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-links" style="background:none;">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">
                                    <i class="fa fa-home text-info"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a class="text-info" href="{{ route('adminAccount.index') }}">
                                    Akun
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Add
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-auto text-right">

                </div>
            </div>
        </div>
        <div class="card-body" style="background: #f7f8f9;">
            <form action="{{ route('adminAccount.store') }}" method="POST">
            @csrf
            <div class="row p-2">
                <div class="col-6 p-2">
                    <div class="form-group">
                        <label class="form-control-label">
                            Name
                        </label>
                        <input type="text" name="name" required="" class="form-control form-control-alternative" placeholder="Name">
                    </div>
                </div>
                <div class="col-6 p-2">
                    <div class="form-group">
                        <label class="form-control-label">
                            Email
                        </label>
                        <input type="email" name="email" required="" class="form-control form-control-alternative" placeholder="Email">
                    </div>
                </div>
                <div class="col-6 p-2">
                    <div class="form-group">
                        <label class="form-control-label">
                            Password
                        </label>
                        <input type="password" required="" name="password" class="form-control form-control-alternative" placeholder="Password">
                    </div>
                </div>
                <div class="col-6 p-2">
                    <div class="form-group">
                        <label class="form-control-label">
                            Ulangi Password
                        </label>
                        <input type="password" required="" name="password_confirmation" class="form-control form-control-alternative" placeholder="Ulangin Password">
                    </div>
                </div>
                <div class="col-6 p-2">
                    <div class="form-group">
                        <label class="form-control-label">
                            Hak Akses
                        </label>
                        <select name="role_id" required="" class="form-control form-control-alternative">
                            <option value="">Pilih Hak Akses</option>
                            @foreach ($roles as $r)
                            <option value="{{ $r->id }}">{{ $r->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-footer py-4">
            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-icon btn-info" style="border-radius: 22px;">
                    <span class="btn-inner--text">Submit</span>
                </button>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
