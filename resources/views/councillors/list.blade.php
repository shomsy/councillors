<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
<body>

<h2>Councillors</h2>

<table style="width:100%">
    <tr>
        <th>id</th>
        <th>updated</th>
        <th>active</th>
        <th>code</th>
        <th>firstName</th>
        <th>lastName</th>
        <th>number</th>
        <th>officialDenomination</th>
        <th>salutationLetter</th>
        <th>salutationTitle</th>
    </tr>
    @foreach( $councillors as $councillor )
        <tr>
            <td>{{$councillor['id']}}</td>
            <td>{{$councillor['updated']}}</td>
            <td>{{$councillor['active']}}</td>
            <td>{{$councillor['code']}}</td>
            <td>{{$councillor['firstName']}}</td>
            <td>{{$councillor['lastName']}}</td>
            <td>{{$councillor['number']}}</td>
            <td>{{$councillor['officialDenomination']}}</td>
            <td>{{$councillor['salutationLetter']}}</td>
            <td>{{$councillor['salutationTitle']}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
