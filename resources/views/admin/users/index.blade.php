@extends('layouts.admin')
@section('title','Users')
@section('styles')
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
<section>
    <div class="row p-3">
        <div class="col-12 col-sm-6 col-md-3 col-lg-3 mx-auto m-2">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-title">
                        <h1>{{$users->count()}}</h1>
                    </div>
                    <h5>Total Users</h5>
                </div>

            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3 mx-auto m-2">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-title">
                        <h1>{{$users->where('created_at', date('m'))->count()}}</h1>
                    </div>
                    <h5>New Users</h5>
                </div>

            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3 mx-auto m-2">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-title">
                        <h1>{{$activeUsers}}</h1>
                    </div>
                    <h5>Active Users</h5>
                </div>

            </div>
        </div>
        @can('See-managers')
        <div class="col-12 col-sm-6 col-md-3 col-lg-3 mx-auto m-2">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-title">
                        <h1>{{$managers->count()}}</h1>
                    </div>
                    <h5>Total Managers</h5>
                </div>

            </div>
        </div>
        @endcan
    </div>
</section>
    <section>
        <div class="row mt-3 p-3">
            <div class="col-12 mx-auto">
                @include('includes.status')
                <div class="card shadow-sm">
                    <div class="card-header p-3">
                        <h5 style="font-size: 18px">Users<span class="float-end fw-bold">Total:
                                            {{$users->count()}}</span></h5>
                    </div>
                    <div class="card-body">
                        <table id="table_id4" class="display">
                            <thead>
                            <tr>
                                <th>User Id</th>
                                <th>Name</th>
                                <th>Registration date</th>
                                <th>Email</th>
                                <th>Cellphone</th>
                                <th>Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($users->count()>0)
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->created_at->isoFormat('MMM Do Y')}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->cellphone}}</td>
                                        <td>
                                            <!---remember to use auth for super admin-->
                                            <div class="dropdown">
                                                <button class="btn p-0 m-0 dropdown-toggle" type="button"
                                                        id="message1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    See action
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="message1">
                                                    <li><a class="dropdown-item" href="{{route('users.show',
                                                        $user->id)}}">View <i
                                                                class="fas fa-external-link-square-alt
                                                                    ms-2"></i></a></li>
                                                    @can('edit-users')
                                                    <li><a class="dropdown-item" href="{{route('users.edit',
                                                       $user->id)}}">Edit <i
                                                                class="fas fa-bookmark ms-2"></i></a></li>

                                                    <li>
                                                        <form method="POST" action="{{route('users.destroy',
                                                            $user->id)}}">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="hidden" name="user_id"
                                                                   value="{{$user->id}}">
                                                            <button type="submit" class="btn text-danger">Delete <i
                                                                    class="far fa-trash-alt ms-2"></i></button>
                                                        </form>
                                                    </li>
                                                        @endcan
                                                </ul>
                                            </div>

                                        </td>



                                    </tr>

                                @endforeach
                            @endif
                            </tbody>
                            <tfoot>
                            <th>User Id</th>
                            <th>Name</th>
                            <th>Registration date</th>
                            <th>Email</th>
                            <th>Cellphone</th>
                            <th>Action </th>
                            </tfoot>

                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('users.create')}}">Add User</a>
                    </div>
                </div>
                @can('see-managers')
                    <div class="card shadow-sm mt-5">
                        <div class="card-header p-3">
                            <h5 style="font-size: 18px">Managers<span class="float-end fw-bold">Total:
                                            {{$managers->count()}}</span></h5>
                        </div>
                        <div class="card-body">
                            <table id="table_id5" class="display">
                                <thead>
                                <tr>
                                    <th>User Id</th>
                                    <th>Name</th>
                                    <th>Registration date</th>
                                    <th>Email</th>
                                    <th>Cellphone</th>
                                    <th>Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($managers->count()>0)
                                    @foreach($managers as $manager)
                                        <tr>
                                            <td>{{$manager->id}}</td>
                                            <td>{{$manager->name}}</td>
                                            <td>{{$manager->created_at->isoFormat('MMM Do Y')}}</td>
                                            <td>{{$manager->email}}</td>
                                            <td>{{$manager->cellphone}}</td>
                                            <td>
                                                <!---remember to use auth for super admin-->
                                                <div class="dropdown">
                                                    <button class="btn p-0 m-0 dropdown-toggle" type="button"
                                                            id="message1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        See action
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="message1">
                                                        <li><a class="dropdown-item" href="{{route('users.show',
                                                        $manager->id)}}">View <i
                                                                    class="fas fa-external-link-square-alt
                                                                    ms-2"></i></a></li>
                                                        @can('edit-users')
                                                        <li><a class="dropdown-item" href="{{route('users.edit',
                                                      $manager->id)}}">Edit <i
                                                                    class="fas fa-bookmark ms-2"></i></a></li>

                                                        <li>
                                                            <form method="POST" action="{{route('users.destroy',
                                                            $manager->id)}}">
                                                                @method('DELETE')
                                                                @csrf
                                                                <input type="hidden" name="user_id"
                                                                       value="{{$manager->id}}">
                                                                <button type="submit" class="btn text-danger">Delete <i
                                                                        class="far fa-trash-alt ms-2"></i></button>
                                                            </form>
                                                        </li>
                                                            @endcan
                                                    </ul>
                                                </div>

                                            </td>



                                        </tr>

                                    @endforeach
                                @endif
                                </tbody>
                                <tfoot>
                                <th>User Id</th>
                                <th>Name</th>
                                <th>Registration date</th>
                                <th>Email</th>
                                <th>Cellphone</th>
                                <th>Action </th>
                                </tfoot>

                            </table>
                        </div>

                    </div>
                    @endcan

            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#table_id4').DataTable();
            $('#table_id5').DataTable();
        } );
    </script>
@endsection
