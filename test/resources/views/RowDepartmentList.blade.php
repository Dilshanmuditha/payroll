<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($item as $item)
        <tr>
            <td>{{$item['dpartid']}}</td>
            <td>{{$item['dpartcode']}}</td>
            <td>{{$item['dpartname']}}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Name</th>
        </tr>
    </tfoot>
</table>
