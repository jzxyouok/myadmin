@extends('main')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">用户列表</h3>
        </div>
        <div class="box-body no-padding">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th style="width: 10%">序号</th>
                        <th style="width: 35%">用户名</th>
                        <th style="width: 35%">邮箱</th>
                        <th style="width: 20%">注册时间</th>
                    </tr>
                    <?php $i=1; ?>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{--{{ $users->links() }}--}}

@endsection