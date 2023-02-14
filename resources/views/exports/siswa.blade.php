<table>
    <thead>
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Jurusan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siswas as $siswa)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $siswa->nis }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->kelas->kelas }}</td>
            <td>{{ $siswa->proli->proli }}</td>
        </tr>
        @endforeach
    </tbody>
</table>