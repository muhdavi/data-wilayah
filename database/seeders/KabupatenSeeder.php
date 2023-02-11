<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kabupatens')->insert([
            // Aceh
            ['provinsi_id' => '11', 'id' => '1101', 'kabupaten' => 'Kab. Aceh Selatan'],
            ['provinsi_id' => '11', 'id' => '1102', 'kabupaten' => 'Kab. Aceh Tenggara'],
            ['provinsi_id' => '11', 'id' => '1103', 'kabupaten' => 'Kab. Aceh Timur'],
            ['provinsi_id' => '11', 'id' => '1104', 'kabupaten' => 'Kab. Aceh Tengah'],
            ['provinsi_id' => '11', 'id' => '1105', 'kabupaten' => 'Kab. Aceh Barat'],
            ['provinsi_id' => '11', 'id' => '1106', 'kabupaten' => 'Kab. Aceh Besar'],
            ['provinsi_id' => '11', 'id' => '1107', 'kabupaten' => 'Kab. Pidie'],
            ['provinsi_id' => '11', 'id' => '1108', 'kabupaten' => 'Kab. Aceh Utara'],
            ['provinsi_id' => '11', 'id' => '1109', 'kabupaten' => 'Kab. Simeulue'],
            ['provinsi_id' => '11', 'id' => '1110', 'kabupaten' => 'Kab. Aceh Singkil'],
            ['provinsi_id' => '11', 'id' => '1111', 'kabupaten' => 'Kab. Bireuen'],
            ['provinsi_id' => '11', 'id' => '1112', 'kabupaten' => 'Kab. Aceh Barat Daya'],
            ['provinsi_id' => '11', 'id' => '1113', 'kabupaten' => 'Kab. Gayo Lues'],
            ['provinsi_id' => '11', 'id' => '1114', 'kabupaten' => 'Kab. Aceh Jaya'],
            ['provinsi_id' => '11', 'id' => '1115', 'kabupaten' => 'Kab. Nagan Raya'],
            ['provinsi_id' => '11', 'id' => '1116', 'kabupaten' => 'Kab. Aceh Tamiang'],
            ['provinsi_id' => '11', 'id' => '1117', 'kabupaten' => 'Kab. Bener Meriah'],
            ['provinsi_id' => '11', 'id' => '1118', 'kabupaten' => 'Kab. Pidie Jaya'],
            ['provinsi_id' => '11', 'id' => '1171', 'kabupaten' => 'Kota Banda Aceh'],
            ['provinsi_id' => '11', 'id' => '1172', 'kabupaten' => 'Kota Sabang'],
            ['provinsi_id' => '11', 'id' => '1174', 'kabupaten' => 'Kota Langsa'],
            ['provinsi_id' => '11', 'id' => '1173', 'kabupaten' => 'Kota Lhokseumawe'],
            ['provinsi_id' => '11', 'id' => '1175', 'kabupaten' => 'Kota Subulussalam'],
            // Sumatera Utara
            ['provinsi_id' => '12', 'id' => '1201', 'kabupaten' => 'Kab. Tapanuli Tengah'],
            ['provinsi_id' => '12', 'id' => '1202', 'kabupaten' => 'Kab. Tapanuli Utara'],
            ['provinsi_id' => '12', 'id' => '1203', 'kabupaten' => 'Kab. Tapanuli Selatan'],
            ['provinsi_id' => '12', 'id' => '1204', 'kabupaten' => 'Kab. Nias'],
            ['provinsi_id' => '12', 'id' => '1205', 'kabupaten' => 'Kab. Langkat'],
            ['provinsi_id' => '12', 'id' => '1206', 'kabupaten' => 'Kab. Karo'],
            ['provinsi_id' => '12', 'id' => '1207', 'kabupaten' => 'Kab. Deli Serdang'],
            ['provinsi_id' => '12', 'id' => '1208', 'kabupaten' => 'Kab. Simalungun'],
            ['provinsi_id' => '12', 'id' => '1209', 'kabupaten' => 'Kab. Asahan'],
            ['provinsi_id' => '12', 'id' => '1210', 'kabupaten' => 'Kab. Labuhanbatu'],
            ['provinsi_id' => '12', 'id' => '1211', 'kabupaten' => 'Kab. Dairi'],
            ['provinsi_id' => '12', 'id' => '1212', 'kabupaten' => 'Kab. Toba Samosir'],
            ['provinsi_id' => '12', 'id' => '1213', 'kabupaten' => 'Kab. Mandailing Natal'],
            ['provinsi_id' => '12', 'id' => '1214', 'kabupaten' => 'Kab. Nias Selatan'],
            ['provinsi_id' => '12', 'id' => '1215', 'kabupaten' => 'Kab. Pakpak Bharat'],
            ['provinsi_id' => '12', 'id' => '1216', 'kabupaten' => 'Kab. Humbang Hasundutan'],
            ['provinsi_id' => '12', 'id' => '1217', 'kabupaten' => 'Kab. Samosir'],
            ['provinsi_id' => '12', 'id' => '1218', 'kabupaten' => 'Kab. Serdang Bedagai'],
            ['provinsi_id' => '12', 'id' => '1219', 'kabupaten' => 'Kab. Batu Bara'],
            ['provinsi_id' => '12', 'id' => '1220', 'kabupaten' => 'Kab. Padang Lawas Utara'],
            ['provinsi_id' => '12', 'id' => '1221', 'kabupaten' => 'Kab. Padang Lawas'],
            ['provinsi_id' => '12', 'id' => '1222', 'kabupaten' => 'Kab. Labuhanbatu Selatan'],
            ['provinsi_id' => '12', 'id' => '1223', 'kabupaten' => 'Kab. Labuhanbatu Utara'],
            ['provinsi_id' => '12', 'id' => '1224', 'kabupaten' => 'Kab. Nias Utara'],
            ['provinsi_id' => '12', 'id' => '1225', 'kabupaten' => 'Kab. Nias Barat'],
            ['provinsi_id' => '12', 'id' => '1271', 'kabupaten' => 'Kota Medan'],
            ['provinsi_id' => '12', 'id' => '1272', 'kabupaten' => 'Kota Pematangsiantar'],
            ['provinsi_id' => '12', 'id' => '1273', 'kabupaten' => 'Kota Sibolga'],
            ['provinsi_id' => '12', 'id' => '1274', 'kabupaten' => 'Kota Tanjung Balai'],
            ['provinsi_id' => '12', 'id' => '1275', 'kabupaten' => 'Kota Binjai'],
            ['provinsi_id' => '12', 'id' => '1276', 'kabupaten' => 'Kota Tebing Tinggi'],
            ['provinsi_id' => '12', 'id' => '1277', 'kabupaten' => 'Kota Padang Sidempuan'],
            ['provinsi_id' => '12', 'id' => '1278', 'kabupaten' => 'Kota Gunungsitoli'],
        ]);
    }
}
//=CONCATENATE("[kab, ", "'id' => '",E3, "', 'kabupaten' => '",D3, "'],")
