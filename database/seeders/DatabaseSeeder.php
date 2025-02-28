<?php

/*
 * File ini bagian dari:
 *
 * OpenDK
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2017 - 2024 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package    OpenDK
 * @author     Tim Pengembang OpenDesa
 * @copyright  Hak Cipta 2017 - 2024 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license    http://www.gnu.org/licenses/gpl.html    GPL V3
 * @link       https://github.com/OpenSID/opendk
 */

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(RoleSpatieSeeder::class);
        $this->call(RefKategori::class);
        $this->call(RefPekerjaanTableSeeder::class);
        $this->call(RefAgamaTableSeeder::class);
        $this->call(RefKawinTableSeeder::class);
        $this->call(RefHubunganKeluargaTableSeeder::class);
        $this->call(RefPendidikanTableSeeder::class);
        $this->call(RefPendidikanKkTableSeeder::class);
        $this->call(RefGolonganDarahTableSeeder::class);
        $this->call(RefCaraKbTableSeeder::class);
        $this->call(RefWarganegaraTableSeeder::class);
        $this->call(RefCacatTableSeeder::class);
        $this->call(RefSakitMenahunTableSeeder::class);
        $this->call(RefUmurTableSeeder::class);
        $this->call(DasKategoriKomplainTableSeeder::class);
        $this->call(DasTipeRegulasiTableSeeder::class);
        $this->call(RefPenyakitTableSeeder::class);
        $this->call(RefCoaTypeTableSeeder::class);
        $this->call(RefSubCoaTableSeeder::class);
        $this->call(RefSubSubCoaTableSeeder::class);
        $this->call(RefCoaTableSeeder::class);
        $this->call(DasMenuTableSeeder::class);
        $this->call(DasSettingTableSeeder::class);
        $this->call(DasNavigationTableSeeder::class);
        // Other
        $this->call(DasProfilTableSeeder::class);
        $this->call(DasDataUmumTableSeeder::class);
        $this->call(PendudukSexSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
