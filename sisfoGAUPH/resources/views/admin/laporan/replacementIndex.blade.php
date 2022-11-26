<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Pengajuan Replacement Class</title>

    <style>
        body {
            padding: 15px;
        }

        p {
            font-size: 19px;
            margin-top: -10px;
            margin-left: 20px;
        }

        td {
            font-size: 19px;
        }

        table {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <p style="margin-top: 10px">Hal: Permohonan pengganti waktu kuliah, kuliah tambahan dan perubahan jadwal kelas</p>
    <br>
    <p>Kepada Yth.</p>
    <p>Kaprodi Sistem Informasi (Kampus Kota Medan)</p>
    <p>Fakultas Ilmu Komputer</p>
    <p>Universitas Pelita Harapan Medan <i>Campus</i></p>
    <br>
    <p>Dengan ini memberitahukan bahwa</p>


    @foreach ($replacement as $x)
        <table>
            <tr>
                <td>Nama Dosen</td>
                <td>&emsp;&emsp;&emsp;: {{ $x->nama_lengkap }}</td>
            </tr>

            <tr>
                <td>Mata Kuliah</td>
                <td>&emsp;&emsp;&emsp;: {{ $x->mata_kuliah }}</td>
            </tr>

            <tr>
                <td>Prodi</td>
                <td>&emsp;&emsp;&emsp;: Sistem Informasi</td>
            </tr>

            <tr>
                <td>Kelas</td>
                <td>&emsp;&emsp;&emsp;: {{ $x->kelas }}</td>
            </tr>

            <tr>
                <td>Semester</td>
                <td>&emsp;&emsp;&emsp;: Ganjil</td>
            </tr>

            <tr>
                <td>Tahun Akademik</td>
                <td>&emsp;&emsp;&emsp;: 2022/2023</td>
            </tr>

            <tr>
                <td>Bermasuk untuk</td>
                <td>&emsp;&emsp;&emsp;: {{ $x->alasan }}</td>
            </tr>

        </table>
        <br>
        <p style="font-size: 18px">&nbsp; Syarat: Dosen bertanggung-jawab memastikan semua mahasiswa dapat menghadiri
            kelas pengganti</p>
        <table>
            <tr>
                <td>Yang semula pada</td>
                <td>&emsp;&emsp;&emsp;: Tanggal</td>
                <td>&emsp;&emsp;: {{ date('d M Y', strtotime($x->jadwal_kuliah)) }}</td>
            </tr>

            <tr>
                <td></td>
                <td>&emsp;&emsp;&emsp;&nbsp; Waktu</td>
                <td>&emsp;&emsp;: {{ $x->jam_kuliah }}</td>
            </tr>

            <tr>
                <td>Menjadi</td>
                <td>&emsp;&emsp;&emsp;: Tanggal</td>
                <td>&emsp;&emsp;: {{ date('d M Y', strtotime($x->tanggal_replacement)) }}</td>
            </tr>

            <tr>
                <td></td>
                <td>&emsp;&emsp;&emsp;&nbsp; Waktu</td>
                <td>&emsp;&emsp;: {{ $x->jam_replacement }}</td>
            </tr>
        </table>
    @endforeach
    <br>
</body>

</html>
