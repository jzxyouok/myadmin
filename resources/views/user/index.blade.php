@extends('main')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">用户列表</h3>
        </div>
        <div class="box-body no-padding">
            <table class="table table-striped table-bordered">
                <tbody>
                    <tr class="danger">
                        <th style="width: 10%">序号</th>
                        <th style="width: 25%">用户名</th>
                        <th style="width: 25%">邮箱</th>
                        <th style="width: 20%">注册时间</th>
                        <th style="width: 20%">最近一次登录时间</th>
                    </tr>
                    <?php $i=1; ?>
                    @foreach ($users as $user)
                    <tr class="<?php if($i%2==0) echo 'info'; ?>">
                        <td>{{$i++}}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="box-footer clearfix">
            {{ $users->links() }}
        </div>
    </div>



@endsection

@section('js')
    <script src="{{asset('dist/js/pages/addcss.js')}}"></script>
@endsection