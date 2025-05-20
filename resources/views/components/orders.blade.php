@props([
    'id',
    'date',
    'items' ,
    'total' ,
    'status',
    'orderid'
])


<tr>
    <td>#{{ $id }}</td>
    <td>{{ $date }}</td>
    <td>{{ $items }}</td>
    <td>${{ $total }}</td>
    <td><span class="label label-primary">{{ $status }}</span></td>
    <td><a href="{{ route('dashboard.orders.details',$orderid) }}" class="btn btn-default">View</a></td>
</tr>
