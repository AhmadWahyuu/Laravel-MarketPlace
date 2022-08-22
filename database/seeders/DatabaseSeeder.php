<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\AlamatPengirim;
use Illuminate\Database\Seeder;
use App\Models\Market;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama'=>'Ahmad Wahyu',
            'username'=>'Wakmber',
            'email'=>'Ahmad@gmail.com',
            'password'=>bcrypt('123123'),
            'role_as'=>'0'
        ]);

        User::create([
            'nama'=>'Admin',
            'username'=>'Administrator',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin123'),
            'role_as'=>'1'
        ]);


        Market::create([
            'nama'=>'Deepcool Gammaxx300',
            'category_id'=>1,
            'slug'=>'deepcool-gammax300',
            'image'=>'kipas/deepcool-gammax300.jpg',
            'harga'=> 'Rp 295.000',
            'deskripsi'=> '<p><b>Fitur Menarik Dan Performa Tinggi</b></p>
            <p>DEEPCOOL Gammaxx 300 adalah HSF terjangkau dari Deepcool yang ditujukan untuk pengguna pemula ataupun menengah. Tampilan pendingin CPU ini terbilang sederhana, namun didukung dengan kipas berukuran besar yang jelas akan membantu pendinginan komponen CPU. Digunakan 3 heatpipe yang bersentuhan langsung dengan prosesor untuk mencegah terjadinya panas berlebihan atau overheating.</p>
            <p>Pihak pabrikan menggunakan teknologi CCT (Core Touch Technology) untuk penggunaan yang lebih maksimal baik ketika prosesor bekerja dalam kecepatan standar maupun kecepatan tinggi. Jenis kipas yang digunakan pada produk ini adalah Kipas dengan fitur PWM dengan ukuran 120 mm. Penggunaan kipas dengan ukuran besar akan membantu menurunkan suhu prosesor secara lebih efektif. Untuk dukungan soket yang dimiliki, produk ini telah mendukung beragam soket prosesor populer baik dari AMD maupun Intel.</p>',
            'spesifikasi'=>'<p><b>Info Basic</b></p>
            <p>Nama Produk :	Gammaxx 300</p>
            <p>Kategori:	Heatsink & Kipas CPU</p>
            <p>Brand:	DEEPCOOL</p>
            <p>Tahun: Rilis	2015</p>
            <p><b>Hardware</b></p>
            <p>Power Consumption:	- W</p>
            <p>Min Fan Speed:	900 RPM</p>
            <p>Max Fan Speed:	1600 RPM</p>
            <p>Fan Noise:	17.8 - 21 dB</p>
            <p>Max Airflow:	55.5 CFM</p>
            <p>Fan Rated Current:	0.13 A</p>
            <p>Bearing Type:	Hydraulic Bearing</p>
            <p><b>Design</b></p>
            <p>Overall Dimension:	121 x 75.5 x 135.7 mm</p>
            <p>Weight:	429 g</p>
            <p>Fan Dimension:	120 x 25 mm</p>'
        ]);

        Market::create([
            'nama'=>'Sekai VFN-1212',
            'category_id'=>1,
            'slug'=>'sekai-vfn-1212',
            'image'=>'kipas/sekai-vfn-1212.jpg',
            'harga'=>'Rp 94.400',
            'deskripsi'=>'<p><b>Murah dan Kencang</b></p>
            <p>Sekai VFN-1212 adalah sebuah produk kipas dengan potensi kinerja yang sangat baik. Anda bisa mendapatkan produk ini dengan harga yang sangat terjangkau dan jelas jadi solusi menarik untuk mengatasi dan mengusir panas berlebihan pada komponen penting yang anda miliki. Tampilan minimalis yang digunakan dipadukan dengan ukuran yang tidak terlalu besar dari kipas ini memudahkan penempatan. Warna hitam yang menjadi pilihan pada produk ini juga membuatnya tampak lebih menarik serta elegan.</p>
            <p>Sekai VFN-1212 didukung dengan frame metal yang membuatnya memiliki durabilitas kinerja tinggi. Lalu untuk semakin meningkatkan kinerjanya, digunakan grill khusus di bagian belakangnya. Putaran kipas yang kencang didukung dengan performa tinggi jelas membuatnya menjadi sebuah produk yang sangat menarik untuk dimiliki.</p>',
            'spesifikasi'=>'<p><b>Basic Info</b></p>
            <p>Nama Produk:	VFN-1212</p>
            <p>Kategori:	Heatsink & Kipas CPU</p>
            <p>Brand:	Sekai</p>
            <p>Tahun Rilis:	2014</p>
            <p><b>Hardware</b></p>
            <p>Power Consumption:	- W</p>
            <p>Min Fan Speed:	2000 RPM</p>
            <p>Max Airflow:	50 CFM</p>
            <p>Fan Rated Current:	0.1 A</p>
            <p>Bearing Type:	Hydraulic Bearing</p>
            <p><b>Design</b></p>
            <p>Overall Dimension:	- mm</p>
            <p>Weight:	- g</p>
            <p>Fan Dimension:	- mm</p>'
        ]);

        Market::create([
            'nama'=>'Deepcool Gammax 400',
            'category_id'=>1,
            'slug'=>'deepcool-gammax-400',
            'image'=>'kipas/deepcool-gammax-400.jpg',
            'harga'=>'Rp 298.500',
            'deskripsi'=>'',
            'spesifikasi'=>'<p><b>Basic Info</b></p>
            <p>Nama Produk:	Gammaxx 400</p>
            <p>Kategori:	Heatsink & Kipas CPU</p>
            <p>Brand:	DEEPCOOL</p>
            <p>Tahun Rilis:	2012</p>
            <p><b>Hardware</b></p>
            <p>Fan Rated Voltage:	12 VDC</p>
            <p>Power Consumption:	3 W</p>
            <p>Min Fan Speed:	900 RPM</p>
            <p>Max Fan Speed:	1500 RPM</p>
            <p>Fan Noise:	17.8-30 dB</p>
            <p>Max Airflow:	74.34 CFM</p>
            <p>Fan Rated Current:	0.25 A</p>
            <p>Bearing Type:	Hydraulic Bearing</p>
            <p>CPU Support:	Intel LGA 775, Intel LGA 115X, Intel LGA 1366, Intel LGA 2011, Intel LGA 2011-v3, AMD AM2, AMD AM2+, AMD AM3, AMD AM3+</p>
            <p><b>Design</b></p>
            <p>Overall Dimension:	135 x 80 x 154.5 mm</p>
            <p>Weight:	670 g</p>
            <p>Fan Dimension:	120 x 120 x 25 mm</p>'
        ]);

        Market::create([
            'nama'=>'Corsair H45',
            'category_id'=>1,
            'slug'=>'corsair-h45',
            'image'=>'kipas/corsair-h45.jpg',
            'harga'=>'Rp 799.000',
            'deskripsi'=>'',
            'spesifikasi'=>'<p><b>Basic Info</b><p>
            <p>Nama Produk:	H45</p>
            <p>Kategori:	Heatsink & Kipas CPU</p>
            <p>Brand:	Corsair</p>
            <p>Tahun Rilis:	2016</p>
            <p><b>Hardware</b></p>
            <p>Min Fan Speed:	2300 RPM</p>
            <p>Fan Noise:	31 dB</p>
            <p>Max Airflow:	94 CFM</p>
            <p>Bearing Type:	Sleeve Bearing</p>
            <p>CPU Support:	AMD AM2, AMD AM3, AMD FM1, AMD FM2, Intel LGA 1150, Intel LGA 1151, Intel LGA 1155, Intel LGA 1156, Intel LGA 1366, Intel LGA 2011, Intel LGA 2011-v3</p>
            <p><b>Design</b></p>
            <p>Overall Dimension:	168.5 x 120 x 71 mm</p>
            <p>Weight:	500 g</p>
            <p>Fan Dimension:	120 x 120 x 25 mm<p>
            <p>Material:	Alumunium</p>'
        ]);

        Market::create([
            'nama'=>'Cooler Master MasterLiquid ML240L RGB',
            'category_id'=>1,
            'slug'=>'cooler-master-masterliquid-ml240l-rgb',
            'image'=>'kipas/cooler-master-masterliquid-ml240l-rgb.jpg',
            'harga'=>'Rp 1.065.000',
            'deskripsi'=>'',
            'spesifikasi'=>'<p><b>Basic Info</b></p>
            <p>Nama Produk:	MasterLiquid ML240L RGB</p>
            <p>Kategori:	Heatsink & Kipas CPU</p>
            <p>Brand:	Cooler Master</p>
            <p>Tahun Rilis:	2017</p>
            <p><b>Hardware</b></p>
            <p>Fan Rated Voltage:	12 VDC</p>
            <p>Power Consumption:	2.4 W</p>
            <p>Min Fan Speed:	650 RPM</p>
            <p>Max Fan Speed:	2000 RPM</p>
            <p>Fan Noise:	28 dB</p>
            <p>Max Airflow:	66.7 CFM</p>
            <p>Fan Rated Current:	0.37 A</p>
            <p>Bearing Type:	Rifle Bearing</p>
            <p>CPU Support:	Intel LGA 775, Intel LGA 115X, Intel LGA 1366, Intel LGA 2011, Intel LGA 2011-v3, Intel LGA 2066, AMD AM2, AMD AM3, AMD AM4, AMD FM1, AMD FM2</p>
            <p><b>Design</b></p>
            <p>Overall Dimension:	277 x 119.6 x 27 mm</p>
            <p>Weight:	289 g</p>
            <p>Fan Dimension:	120 x 120 x 25 mm</p>
            <p>Material:	Alumunium</p>'
        ]);
        Market::create([
            'nama'=>'Kingston 8GB DDR3 PC12800',
            'category_id'=>2,
            'slug'=>'kingston-8gb-ddr3-pc12800',
            'image'=>'ram/kingston-8gb-ddr3-pc12800.jpg',
            'harga'=>'Rp 320.000',
            'deskripsi'=>'<p><b>RAM KINGSTON 8GB UNTUK APPLE MACBOOK</b></p>
            <p>RAM Kingston 8GB DDR3 PC12800 merupakan memori jenis DDR3 berkapasitas 8GB yang mendukung sistem single channel. Memori ini berdimensi 3,8 x 1,8 x 0,3 inci dengan bobot 0,3 ons dan dirancang khusus untuk laptop Apple Macbook. RAM ini membutuhkan energi listrik 1,3 volt untuk bekerja maksimal</p>.
            <p>RAM Kingston 8GB DDR3 PC12800 berkecepatan 1600MHz dan diperkuat dengan bandwith memory data 12800MB per detik. Tipe modul memori ini adalah 204-Pin. Memori ini terbukti kualitasnya karena diproduksi oleh merek terdepan dalam industri memori PC. Anda akan mendapatkan garansi yang berlaku sesuai dengan usia hidup memori ini, jika membelinya dalam kondisi baru.</p>',
            'spesifikasi'=>'<p><b>Basic Info</b></p>
            <p>Product Name:	8GB DDR3 PC12800</p>
            <p>Kategori:	Memory RAM Komputer</p>
            <p>Brand:	Kingston</p>
            <p>Tahun Rilis:	2013</p>
            <p><b>Hardware</b><p>
            <p>Memory Module:	DIMM</p>
            <p>Compatible Device:	Desktop</p>
            <p>Multi-Channel:	Dual Channel Channel</p>
            <p><b>Memory</b></p>
            <p>Kapasitas Memori:	8 GB</p>
            <p>Frekuensi:	1600 MHz</p>
            <p>Memory Type:	DDR3</p>
            <p>Latency:	CL 11</p>
            <p><b>Power Consumption</b></p>
            <p>Specified Voltage:	1.5 V</p>
            <p>Tested Voltage:	1.5 V</p>'
        ]);

        Market::create([
            'nama'=>'Corsair Dominator Platinum 32GB (2X16GB) DDR4 PC24000',
            'category_id'=>2,
            'slug'=>'corsair-dominator-platinum-32gb-(2X16GB)-ddr4-pc24000',
            'image'=>'ram/corsair-dominator-platinum-32gb-(2X16GB)-ddr4-pc24000.jpg',
            'harga'=>'Rp 3.150.000',
            'deskripsi'=>'',
            'spesifikasi'=>'<p><b>Basic Info</b><p>
            <p>Product Name:	Dominator Platinum 32GB (2X16GB) DDR4 PC24000</p>
            <p>Kategori:	Memory RAM Komputer</p>
            <p>Brand:	Corsair</p>
            <p>Tahun Rilis:	2012</p>
            <p><b>Hardware</b></p>
            <p>Memory Module:	DIMM</p>
            <p>Compatible Device:	Desktop</p>
            <p>Multi-Channel:	Dual Channel Channel</p>
            <p><b>Memory</b></p>
            <p>Kapasitas Memori:	32 GB</p>
            <p>Frekuensi:	3000 MHz</p>
            <p>Memory Type:	DDR4</p>
            <p>Latency:	CL 15</p>
            <p><b>Power Consumption</b></p>
            <p>Specified Voltage:	1.2 V</p>
            <p>Tested Voltage:	1.35 V</p>'
        ]);

        Market::create([
            'nama'=>'V-Gen 8GB DDR3 PC12800',
            'category_id'=>2,
            'slug'=>'v-gen-8gb-ddr3-pc12800',
            'image'=>'ram/v-gen-8gb-ddr3-pc12800.jpg',
            'harga'=>'Rp 178.000',
            'deskripsi'=>'<p>V-Gen 8GB DDR3 PC12800</p>
            <p>Memori RAM yang satu ini cukup di kenal oleh masyarakat Indonesia dengan performanya yang baik. Dengan bermodalkan kapasitas memori seesar 8GB maka tentu saja kelancaran akses yang di tawarkan sangat menggiurkan, dimana anda dapat mengakses berbagai program dan aplikasi dengan lebih nyaman. Kecepatan V-Gen 8GB DDR3 PC12800 ini tergolong tinggi di tandai dengan 1,600 MHz.</p>
            <p>Memori DDR3 nya pun tentu saja lebih hemat energi hanya dengan 1,5 volt, memang tidak berbeda jauh dengan DDR2 yang membutuhkan energi 1,8 volt. Dan bagi anda pengguna komputer dengan tuntutan performa yang tinggi maka V-Gen 8GB DDR3 PC12800 ini merupakan memori RAM yang tepat bagi anda.</p>',
            'spesifikasi'=>'<p><b>Basic Info</b></p>
            <p>Product Name:	8GB DDR3 PC12800</p>
            <p>Kategori:	Memory RAM Komputer</p>
            <p>Brand:	V-Gen</p>
            <p>Tahun Rilis:	2012</p>
            <p><b>Hardware</b></p>
            <p>Memory Module:	DIMM</p>
            <p>Compatible Device:	Desktop</p>
            <p>Multi-Channel:	Dual Channel Channel</p>
            <p><b>Memory</b><p>
            <p>Kapasitas Memori:	8 GB</p>
            <p>Frekuensi:	1600 MHz</p>
            <p>Memory Type:	DDR3</p>
            <p><b>Power Consumption</b></p>
            <p>Specified Voltage:	1.5 V</p>
            <p>Tested Voltage:	1.5 V</p>'
        ]);

        Market::create([
            'nama'=>'Kingston KVR1333D3N9 4GB DDR3 1333 MHz',
            'category_id'=>2,
            'slug'=>'kingston-kvr1333d3n9-4gb-ddr3-1333-mhz',
            'image'=>'ram/kingston-kvr1333d3n9-4gb-ddr3-1333-mhz.jpg',
            'harga'=>'Rp 165.000',
            'deskripsi'=>'MEMORI 4GB DDR3 DARI KINGSTON
            RAM Kingston KVR1333D3N9 4GB DDR3 1333 MHz adalah memori tipe DDR3 dengan kapasitas 4GB yang mendukung sistem single channel. Produk ini berdimensi 6,3 x 1,6 x 0,4 inci dan berat 0,6 ons. Produk ini mampu bekerja maksimal dengan membutuhkan tenaga listrik sebesar 1,5 volt.
            RAM Kingston KVR1333D3N9 4GB DDR3 1333 MHz berkecepatan 1333MHz dengan timing 9-9-9 dan didukung tipe modul 240-Pin. Telah diperkuat juga dengan memory data bandwith 10600MB per detik. Cocok untuk komputer desktop yang banyak digunakan untuk memainkan game. Anda juga akan mendapatkan garansi yang berlaku selama usia hidup memori, atau lifetime warranty, jika membeli perangkat ini dalam kondisi baru.',
            'spesifikasi'=>'<p><b>Basic Info</b></p>
            <p>Product Name:	KVR1333D3N9 4GB DDR3 1333 MHz</p>
            <p>Kategori:	Memory RAM Komputer</p>
            <p>Brand:	Kingston</p>
            <p>Tahun Rilis:	2010</p>
            <p><b>Hardware</b></p>
            <p>Memory Module:	DIMM</p>
            <p>Compatible Device:	Desktop</p>
            <p>Multi-Channel:	Dual Channel Channel</p>
            <p><b>Memory</b></p>
            <p>Kapasitas Memori:	4 GB</p>
            <p>Frekuensi:	1333 MHz</p>
            <p>Memory Type:	DDR3</p>
            <p>Latency:	CL 9</p>
            <p><b>Power Consumption</b></p>
            <p>Specified Voltage:	1.5 V</p>
            <p>Tested Voltage:	1.5 V</p>'
        ]);

        Market::create([
            'nama'=>'Corsair Vengeance LPX 32GB (2X16GB) DDR4 PC25600',
            'category_id'=>2,
            'slug'=>'corsair-vengeance-lpx-32gb-(2X16gb)-ddr4-pc25600',
            'image'=>'ram/corsair-vengeance-lpx-32gb-(2X16gb)-ddr4-pc25600.jpg',
            'harga'=>'Rp 2.029.000',
            'deskripsi'=>'<p>RAM Crosair Vengeance LPX 32GB (2X16GB) DDR4 PC25600, Melengkapi Motherboard dengan Kartu RAM Berkualitas
            Gaming dan Multimedia</p>
            <p>RAM Crosair Vengeance LPX 32GB dirancang sebagai sebuah kartu RAM dengan desain tipis dan mudah dipasangkan dengan motherboard Anda. RAM Crosair Vengeance LPX 32GB menggunakan elemen terbaik dengan kemampuan yang stabil dan performa yang handal. Harga RAM Crosair Vengeance LPX 32GB terbilang murah di kelasnya</p>.
            <p><b>Kualitas Nomor Satu</b></p>
            <p>Untuk RAM kelas premium harga RAM Crosair Vengeance LPX 32GB dapat dikatakan muah dan menggiurkan. harga RAM Crosair Vengeance LPX 32GB yang murah menjadi salah satu faktor pendukung selain faktor kualitas yang utama. Dengan harga RAM Crosair Vengeance LPX 32GB yang murah dan rasional kini konsumen semakin pintar memilih perangkat berkualitas dengan harga yang bersaing.</p>',
            'spesifikasi'=>'<p><b>Basic Info</b></p>
            <p>Product: Name	Vengeance LPX 32GB (2X16GB) DDR4 PC25600</p>
            <p>Kategori:Memory RAM Komputer</p>
            <p>Brand:	Corsair</p>
            <p><b>Hardware</b></p>
            <p>Memory Module:	DIMM<p>
            <p>Compatible Device:	Desktop<p>
            <p>Multi-Channel:	Dual Channel Channel<p>
            <p><b>Memory</b></p>
            <p>Kapasitas Memori:	31.25 GB</p>
            <p>Frekuensi:	3200 MHz</p>
            <p>Memory Type:	DDR4</p>
            <p>Latency:	CL 16</p>
            <p>Power Consumption</p>
            <p>Specified Voltage:	1.35 V</p>'
        ]);

        Category::create([
            'nama'=>'Heatsink & Kipas CPU',
            'slug'=>'heatsink-n-kipas-cpu'
        ]);

        Category::create([
            'nama'=>'RAM',
            'slug'=>'ram'
        ]);
        Category::create([
            'nama'=>'Keyboard',
            'slug'=>'keyboard'
        ]);
        Category::create([
            'nama'=>'Laptop',
            'slug'=>'laptop'
        ]);
        Category::create([
            'nama'=>'Mouse',
            'slug'=>'mouse'
        ]);
        Category::create([
            'nama'=>'Printer',
            'slug'=>'printer'
        ]);
        Category::create([
            'nama'=>'VGA',
            'slug'=>'vga'
        ]);

        AlamatPengirim::create([
            'nama_penerima'=>'Wahyu',
            'user_id'=>1,
            'status'=>'Utama',
            'alamat'=>'RT 10 RW 04',
            'no_tlp'=>'088801522260',
            'provinsi'=>'Jawa Timur',
            'kota'=>'Kab. Mojokerto',
            'kecamatan'=>'Kec. Sooko',
            'kelurahan'=>'Desa Kedungmaling III',
            'kodepos'=>'61361'
        ]);
    }
}
