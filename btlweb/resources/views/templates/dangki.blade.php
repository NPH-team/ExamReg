@extends('templates.home')
 @section('content')

<table border="1px" width="100%" id="loadata"class="table-responsive-md" style="margin-top: 50px;font-family: 'times new roman';">
    <tr>
    <th style="text-align: center;">Đăng kí</th>
        <th style="text-align: center;">Môn học</th>
        <th style="text-align: center;">Phòng thi</th>
        <th style="text-align: center;">Ngày thi</th>
        <th style="text-align: center;">Ca thi</th>
        <th style="text-align: center;">Số lượng</th>
        <th style="text-align: center;">Đã đăng kí</th>
        
    </tr>
    @foreach($users as $row)
    <tr>
    <td style="text-align: center;"><input type="checkbox" class="choose"></td>
        <td style="text-align: center;" class="ngay">{{$row->tenmh}}</td>
        <td style="text-align: center;">{{$row->phongthi}}</td>
        <td style="text-align: center;">{{$row->ngaythi}}</td>
        <td style="text-align: center;">{{$row->cathi}}</td>
        <td style="text-align: center;">{{$row->soluongmay}}</td>
        <td style="text-align: center;">{{$row->somaydk}}</td>
        
    </tr>
    @endforeach
</table>
<button type="submit" value="submit" id="submit" style="float: right; margin-top:5px; background-color: green;">Ghi nhận</button>
@endsection
