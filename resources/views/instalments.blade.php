@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">اقساط فعال عادی</div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                    <tr class="bg-info">
                        <th class="text-center">اصلاح</th>
                        <th class="text-center">حذف قسط</th>
                        <th class="text-center">شماره چک</th>
                        <th class="text-center">شماره ردیف</th>
                        <th class="text-center">تاریخ پایان</th>
                        <th class="text-center">تاریخ شروع</th>
                        <th class="text-center">مبلغ قسط</th>
                        <th class="text-center">نام کاربر</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th class="text-center">
                            <a href="{{route('user_edit',['id' => $user->id])}}">
                                <button type="button" class="btn btn-default">
                                    <span class="glyphicon glyphicon-cog" style="color:darkblue"></span>
                                </button>
                            </a>
                        </th>
                        <th class="text-center">
                            <a onclick="return confirm('از پاک کردن اطلاعات این قسط اطمینان دارید؟')"
                               href="{{route('delete_instalment',['id' => $user->id])}}">
                                <span class="glyphicon glyphicon-trash" style="color:red"></span>
                            </a>
                        </th>
                        <th class="text-center">{{$user->cheque}}</th>
                        <th class="text-center">{{$user->loan_row}}</th>
                        <th class="text-center">{{$user->end_date}}</th>
                        <th class="text-center">{{$user->start_date}}</th>
                        <th class="text-center">{{$user->instalment}}</th>
                        <th class="text-center"><a href="{{ route('user',['id'=>$user->id]) }}">{{$user->f_name." ".$user->l_name}}</a></th>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center"> {{$users->links()}} </div>
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">اقساط فعال ضروری</div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                    <tr class="bg-info">
                        <th class="text-center">اصلاح</th>
                        <th class="text-center">حذف قسط</th>
                        <th class="text-center">شماره چک</th>
                        <th class="text-center">شماره ردیف</th>
                        <th class="text-center">تاریخ پایان</th>
                        <th class="text-center">تاریخ شروع</th>
                        <th class="text-center">مبلغ قسط</th>
                        <th class="text-center">نام کاربر</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users_force as $user_force)
                        <tr>
                            <th class="text-center">
                                <a href="{{route('user_edit',['id' => $user_force->id])}}">
                                    <button type="button" class="btn btn-default">
                                        <span class="glyphicon glyphicon-cog" style="color:darkblue"></span>
                                    </button>
                                </a>
                            </th>
                            <th class="text-center">
                                <a onclick="return confirm('از پاک کردن اطلاعات این قسط اطمینان دارید؟')"
                                   href="{{route('delete_instalment_force',['id' => $user_force->id])}}">
                                    <span class="glyphicon glyphicon-trash" style="color:red"></span>
                                </a>
                            </th>
                            <th class="text-center">{{$user_force->cheque_force}}</th>
                            <th class="text-center">{{$user_force->loan_row_force}}</th>
                            <th class="text-center">{{$user_force->end_date_force}}</th>
                            <th class="text-center">{{$user_force->start_date_force}}</th>
                            <th class="text-center">{{$user_force->instalment_force}}</th>
                            <th class="text-center"><a href="{{ route('user',['id'=>$user_force->id]) }}">{{$user_force->f_name." ".$user_force->l_name}}</a></th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center"> {{$users_force->links()}} </div>
            </div>

        </div>
    </div>
</div>
@endsection