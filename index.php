<!DOCTYPE html>
<html>
<head>
    <title>Data Makanan</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    $data_makanan = [
        [
            "makanan" => "bakwan",
            "jumlah" => 5,
            "gambar" => "https://img.kurio.network/oOm4zN412XXketNyk0z6AR6S4qk=/1200x1200/filters:quality(80)/https://kurio-img.kurioapps.com/21/09/17/b7c480f3-295f-4db7-aeaf-9ba22d7ca018.jpe",
            "deskripsi" => "Bakwan adalah sejenis makanan gorengan yang berasal dari Indonesia. Makanan ini terbuat dari campuran sayuran cincang seperti wortel, kacang polong, bawang daun, dan bawang merah yang dicampur dengan adonan tepung terigu dan bumbu-bumbu. Adonan ini kemudian digoreng hingga berwarna keemasan dan renyah. Bakwan sering disajikan sebagai camilan atau pendamping makanan utama. Kelezatannya terletak pada kombinasi rasa gurih dan renyahnya tekstur luar, serta cita rasa segar dari sayuran di dalamnya."
        ],
        [
            "makanan" => "tahu goreng",
            "jumlah" => 6,
            "gambar" => "https://img.kurio.network/8Y1NcvkSecPevE7WNypRVZimAPY=/1200x1200/filters:quality(80)/https://kurio-img.kurioapps.com/21/09/16/e1224c22-f372-4a63-a593-1fd5c80f94d1.jpe",
            "deskripsi" => "Tahu goreng adalah hidangan Indonesia yang terbuat dari tahu yang digoreng hingga renyah. Tahu dipotong dan digoreng dalam minyak panas hingga kecokelatan. Hidangan ini disajikan dengan saus kacang, sambal, atau bumbu kecap, seringkali ditambahkan dengan bawang goreng dan irisan cabai untuk memberikan variasi rasa dan tekstur. Tahu goreng memiliki kontras antara luar yang renyah dan dalam yang lembut, serta menggabungkan rasa gurih tahu dengan citarasa bumbu penyajiannya."
        ],
        [
            "makanan" => "tempe goreng",
            "jumlah" => 8,
            "gambar" => "https://asset.kompas.com/crops/1q6VFyePEWS4MPP4U7TlEHDfvzM=/32x3:1000x649/750x500/data/photo/2023/03/01/63fede97899d6.jpg",
            "deskripsi" => "Tempe goreng adalah hidangan Indonesia yang terbuat dari potongan tempe yang digoreng hingga renyah dan berwarna kecokelatan. Tempe, yang dibuat dari fermentasi biji kedelai yang dikemas rapat, memiliki tekstur padat dan cita rasa khas hasil fermentasi. Setelah diiris atau dipotong sesuai ukuran, potongan tempe digoreng dalam minyak panas hingga kulit luar menjadi krispi sementara bagian dalamnya tetap lembut."
        ],
        [
            "makanan" => "tahu bakso",
            "jumlah" => 3,
            "gambar" => "https://img.kurio.network/lYwBzz92m-dohKshoboOx3DQJhw=/1200x1200/filters:quality(80)/https://kurio-img.kurioapps.com/21/05/11/60ab8d9c-ebfa-4703-ad1b-7a5c89c57ae3.jpe",
            "deskripsi" => "Hidangan tahu bakso memberikan variasi yang menarik dari bakso konvensional dengan menggantikan bola daging dengan tahu, yang memberikan tekstur dan rasa yang berbeda. Kaldu yang harum dan sayuran pelengkap menjadikan hidangan ini nikmat dan memuaskan. Tahu bakso adalah pilihan yang populer dalam berbagai menu masakan Indonesia."
        ],
        [
            "makanan" => "mendoan",
            "jumlah" => 7,
            "gambar" => "https://img.kurio.network/QH1TeX-2eRQ559hB1dTfR4ZEcBs=/320x320/filters:quality(80)/https://kurio-img.kurioapps.com/21/02/24/4f99af33-b3c1-47cd-a219-f1a5289f8b29.jpe",
            "deskripsi" => "Keunikan mendoan terletak pada kombinasi antara tahu yang lembut di dalam dengan lapisan luar yang renyah, serta cita rasa khas bumbu-bumbu yang digunakan. Hidangan ini sering dijadikan camilan atau lauk pendamping makanan utama.





"
        ],
    ];
    ?>

    <h1>Data Makanan</h1>

    <table>
        <tr>
            <th>Makanan</th>
            <th>Jumlah</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
        </tr>
        <?php foreach ($data_makanan as $makanan): ?>
            <tr>
                <td><?php echo $makanan['makanan']; ?></td>
                <td><?php echo $makanan['jumlah']; ?></td>
                <td><img src="<?php echo $makanan['gambar']; ?>" alt="<?php echo $makanan['makanan']; ?>" width="100"></td>
                <td><?php echo $makanan['deskripsi']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
