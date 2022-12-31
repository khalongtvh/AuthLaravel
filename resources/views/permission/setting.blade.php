<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
    <table>
        @foreach($list as $route)
        <tr>
            <td id="route_id">{{$route['route_id']}}</td>
            <td>{{$route['route_title']}}</td>
            <td>
                <select id="status" onchange="updatePermission(this, {{$route['route_id']}}, {{$role_id}})">
                    <option value="0" {{$route['status'] == 0 ?'selected':''}}>Disable - 0</option>
                    <option value="1" {{$route['status'] == 1 ?'selected':''}}>Enable - 1</option>  
                </select>
            </td>
        </tr>
        @endforeach
    </table>
</body>
<script type="text/javascript">
    function updatePermission(that, routeId, roleId) {
        status = $(that).val();
        // alert(status);
        $.post('{{route('savePermission')}}', {
                '_token': '{{csrf_token()}}',
                'routeId': routeId,
                'roleId': roleId,
                'status': status,
            },
            function(data) {});
    }
</script>

</html>