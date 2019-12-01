@extends('templates.home') @section('content')

<table border=2px width="100%" class="table-responsive-md" style="margin-top: 50px;">
    <tr>
        <th>Môn học</th>
        <th>Phòng thi</th>
        <th>Ngày thi</th>
        <th>Ca thi</th>
        <th>số lượng</th>
        <th>Đã đăng kí</th>
        <th>Đăng kí</th>
    </tr>
    @foreach($users as $row)
    <tr>
        <td>{{$row->tenmh}}</td>
        <td>{{$row->phongthi}}</td>
        <td>{{$row->ngaythi}}</td>
        <td>{{$row->cathi}}</td>
        <td>{{$row->soluongmay}}</td>
        <td>{{$row->somaydk}}</td>
        <td><input type="checkbox"></td>
    </tr>
    @endforeach
</table>
<button type="submit" value="submit" id="submit" style="float: right; margin-top:5px">Ghi nhận</button>
@endsection
