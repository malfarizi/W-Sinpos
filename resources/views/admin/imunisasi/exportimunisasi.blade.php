<table>
    <thead>
        <tr>
            <th colspan="4">Data Imunisasi Kumulatif</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>  
        <tr>
            <td>No.</td>
            <td>Desa</td>
        @foreach($datas as $data)
            <td colspan="2">{{$data->nama_vaksinasi}}</td>
        @endforeach
            <td></td>
            <td></td>
            <td></td>

        </tr>     

        <tr>
            <td></td>
            <td></td>
            <td>L</td>
            <td>P</td>

        </tr>

        <tr>
            <td colspan="2">Puskesmas : {{$items->nama_puskesmas}}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>nama desa</td>
            <td>28</td>
            <td>39</td>
            <td>218</td>
            <td>339</td>


        </tr>
        <tr>
            <td></td>
            <td>Puskesmas</td>
            <td>total L</td>
            <td>total P</td>
        </tr>
    </tbody>
</table>
