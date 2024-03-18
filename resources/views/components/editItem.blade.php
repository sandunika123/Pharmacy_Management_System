

<h1><b> Item Details<b></h1>
<br>
<div class="datatablearea">
    <div class="row">
        <div class="col md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Manufacturer</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <th scope="row">{{ $item->name }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->manufacturer }}</td>
                            <td>{{ $item->phonei }}</td>
                            <td>{{ $item->description }}</td>
                            <td>

                                <a href="{{route('item.updateitem',$item->id)}}"><i class="bi bi-pencil"></i></a>
                                |
                                <a href="{{route('item.deleteitem',$item->id)}}"> <i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
</div>
