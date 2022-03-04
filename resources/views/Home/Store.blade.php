@extends('layouts.mainlayout')
@section('title', 'Store')
@section('content')
<table>
<tr>
    <th>Last Name</th>
    <th>First Name</th>
    <th>Birthday</th>
    <th>Status</th>
</tr>
    <tr>
        <td>
            <p>{{  $student['lastname'] }}</p>
        </td>
        <td>
            <p>{{  $student['firstname'] }}</p>
        </td>
        <td>
            <p>{{  $student['birthday'] }}</p>
        </td>
        <td>
            @if($student['isnewstudent']==true)
            <p>New Student</p>
            @else
            <p>Old Student</p>
            @endif
        </td>
    </tr>

</table>
@endsection