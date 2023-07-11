<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\StatusAttendance;
use App\Models\StatusDoc;
use App\Models\Subdistrict;
use App\Models\User;
use App\Models\Village;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusAttendance::create([
            'name' => 'Ijin'
        ]);
        StatusAttendance::create([
            'name' => 'Sakit'
        ]);
        StatusAttendance::create([
            'name' => 'Hari Libur'
        ]);

        Status::create([
            'name' => 'Belum Entri'
        ]);
        Status::create([
            'name' => 'Sedang Entri'
        ]);
        Status::create([
            'name' => 'Selesai Entri'
        ]);

        StatusDoc::create([
            'name' => 'Clean'
        ]);
        StatusDoc::create([
            'name' => 'Warning'
        ]);
        StatusDoc::create([
            'name' => 'Error'
        ]);

        Role::create(['name' => 'admin', 'guard_name' => 'web']);
        Role::create(['name' => 'user', 'guard_name' => 'web']);

        $superuser = User::create([
            "name" => 'Administrator',
            "email" => "admin",
            "password" => bcrypt('123456')
        ]);
        $superuser->assignRole('admin');

        $user1 = User::create([
            "name" => 'User 1',
            "email" => "user1",
            "password" => bcrypt('123456')
        ]);
        $user1->assignRole('user');

        $user2 = User::create([
            "name" => 'User 2',
            "email" => "user2",
            "password" => bcrypt('123456')
        ]);
        $user2->assignRole('user');

        $user3 = User::create([
            "name" => 'User 3',
            "email" => "user3",
            "password" => bcrypt('123456')
        ]);
        $user3->assignRole('user');


        $superuser = User::create(['name' => "FATICHATURROHMAH ISLAMIYAH", 'email' => "fatichlamiy@gmail.com", 'password' => bcrypt("351322010008"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "S.Teguh Ekarzaen", 'email' => "ekarzaen@gmail.com", 'password' => bcrypt("351322050002"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Deny Indra Lukmana", 'email' => "denyindralukmana@gmail.com", 'password' => bcrypt("357422090033"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Amar Ma'ruf", 'email' => "amar.maruf1924@gmail.com", 'password' => bcrypt("357422020023"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Ari Mulyanto", 'email' => "arimulya69@gmail.com", 'password' => bcrypt("357422020051"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "DONNY PRATAMA YUNIOR", 'email' => "donnypratama4@gmail.com", 'password' => bcrypt("351122020102"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Ahmad fausi", 'email' => "Afausi45@gmail.com", 'password' => bcrypt("357422030008"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Ayuli Arta Winiarti", 'email' => "ayuliarta9099@gmail.com", 'password' => bcrypt("357422030039"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "M. Kamil", 'email' => "muhammadkamil877@gmail.com", 'password' => bcrypt("357422050008"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Eka Yuniar Lestari", 'email' => "ekaayuniiar@gmail.com", 'password' => bcrypt("351322040030"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "DANDY PROBOWIJAYANTO", 'email' => "dandyprob1991@gmail.com", 'password' => bcrypt("351322040032"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "diana puji rahayu", 'email' => "dianapuji41@gmail.com", 'password' => bcrypt("351322040029"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Diana Noviarika", 'email' => "diananoviarika1@gmail.com", 'password' => bcrypt("351322040028"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Firdha Nur Maghfira", 'email' => "cahayafirdha@gmail.com", 'password' => bcrypt("357422050002"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "IKA SEPTIANA PUTRI", 'email' => "ch407203@gmail.com", 'password' => bcrypt("351322050005"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Farah Jihan Khairun Nisa'", 'email' => "farahjihan921@gmail.com", 'password' => bcrypt("351322050006"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "maulana ishak wibawa mukti", 'email' => "maulanaishak866@gmail.cpm", 'password' => bcrypt("351322050009"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Muhammad Cahyo Saputro", 'email' => "cahfcn27@gmail.com", 'password' => bcrypt("351322050008"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Yossy Adin Medyanti", 'email' => "yossyadin0605@gmail.com", 'password' => bcrypt("351322050007"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Isnaini Abdillah", 'email' => "isnaini.spaja1@gmail.com", 'password' => bcrypt("351322090156"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "ISMAIL ANWAR", 'email' => "ekonomalbes@gmail.com", 'password' => bcrypt("351322090027"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Lita Septiani", 'email' => "litaseptiani25@gmail.com", 'password' => bcrypt("351322090025"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "M HASAN ZAINAL ABIDIN", 'email' => "hasanzainal92@gmail.com", 'password' => bcrypt("351322091369"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Imelia Rosita Dewi", 'email' => "imeliarosita26@gmail.com", 'password' => bcrypt("351322090096"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Ivan Budi Tantra", 'email' => "ivantantra85@gmail.com", 'password' => bcrypt("351322090605"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Ginanjar Samodro Widodo", 'email' => "anjars4n@gmail.com", 'password' => bcrypt("351322090219"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Sahrul Hidayati", 'email' => "sahrulhidayati51@gmail.com", 'password' => bcrypt("351322091120"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Pitra Surya Pradipta", 'email' => "pitrasurya16@gmail.com", 'password' => bcrypt("357422090223"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Faradila Sahara", 'email' => "faradila.sahara@gmail.com", 'password' => bcrypt("351322110034"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Dewi Triyani", 'email' => "dtriyani40@gmail.com", 'password' => bcrypt("351323070006"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Ilham Aldin Hidayat", 'email' => "IlhamAldinHidayataldin@gmail.com", 'password' => bcrypt("351322090584"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Moh. Nanang Qosyim", 'email' => "mohnanangqosyim@gmail.com", 'password' => bcrypt("351322090644"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Syamsudin", 'email' => "juniorpebe@gmail.com", 'password' => bcrypt("351322120002"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "DANI SUKRI HANAPI", 'email' => "danidecko@gmail.com", 'password' => bcrypt("351322120001"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Lesdi Harto Irawan", 'email' => "lesdihartoirawan@gmail.com", 'password' => bcrypt("357422090034"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Hozin Zaini", 'email' => "Hozin.zaini55@gmail.com", 'password' => bcrypt("351323060005"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "MUDRIKAH", 'email' => "cimutsstuff@gmail.com", 'password' => bcrypt("357422090125"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Muhammad Iqbal Sukarno Putra", 'email' => "iqbalsukarnoputra@gmail.com", 'password' => bcrypt("351323060054"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "TOTOK ISWANTO", 'email' => "totokisw09@gmail.com", 'password' => bcrypt("351323060042"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Nurhudah Kamarullah", 'email' => "nurhudahkamarullah@gmail.com", 'password' => bcrypt("357422090091"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Dia Islamiyah", 'email' => "diaislamiyah90@gmail.com", 'password' => bcrypt("357422090094"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Fitriatul Mukarromah", 'email' => "fitriatulmukarromah1230@gmail.com", 'password' => bcrypt("357422090103"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Muhammad Sholehudin", 'email' => "udiens10@gmail.com", 'password' => bcrypt("351322110002"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Diky Arisman Adi putra", 'email' => "leosackjacsion@gmail.com", 'password' => bcrypt("351323060055"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Endang Pujiastuti", 'email' => "endunk1012@gmail.com", 'password' => bcrypt("357422090144"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Hari Qomarus Syamsi", 'email' => "hari.qomarus@gmail.com", 'password' => bcrypt("357422110019"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Anik Ikawati", 'email' => "anikikawati7@gmail.com", 'password' => bcrypt("357422090236"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Yossi Bella Efriliana", 'email' => "yosibela8@gmail.com", 'password' => bcrypt("357422090142"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Fenty Indriyani", 'email' => "fentyindriyani123@gmail.com", 'password' => bcrypt("357422090177"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "fitria suryaningsih", 'email' => "fitriasuryaningsih9@gmail.com", 'password' => bcrypt("351323060056"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Rendy Perdana Arizona", 'email' => "rendyperdanaarizona70168@gmail.com", 'password' => bcrypt("357422090247"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Dewi Qomara Dona", 'email' => "donnadewi255@gmail.com", 'password' => bcrypt("351322100145"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Dery Budi Bimantara", 'email' => "derybimantara1996@gmail.com", 'password' => bcrypt("357422090264"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Erlina", 'email' => "erlinaook@gmail.com", 'password' => bcrypt("357422090276"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Zulfa Camilah Islamiyah", 'email' => "zulfacamilah128@gmail.com", 'password' => bcrypt("351322110027"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Zacky Azriel Bakti", 'email' => "zacky.abakti@gmail.com", 'password' => bcrypt("357422100006"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Abbas Al Faruqy", 'email' => "abbasalfaruqy@gmail.com", 'password' => bcrypt("351322110054"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Agustin Tria Wulandari", 'email' => "wulandariagustin435@gmail.com", 'password' => bcrypt("357422110021"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Frisilia Eka Fitriani", 'email' => "frisiliaeka74@gmail.com", 'password' => bcrypt("351322110006"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "FAJRIYATUL MUTAMMIMAH", 'email' => "fajrimarch@gmail.com", 'password' => bcrypt("351322110004"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Achmad Ridlo Ilahi", 'email' => "achmadridloilahi@gmail.com", 'password' => bcrypt("351322110008"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "FIRMANSYAH ALDILLAH", 'email' => "firmansyahaldillah@gmail.com", 'password' => bcrypt("351322110052"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Mufidatun Nisa'", 'email' => "mufidatunnisa19@gmail.com", 'password' => bcrypt("351322110010"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Amirul hariyanto", 'email' => "amirulhariyanto@gmail.com", 'password' => bcrypt("351322110012"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Wiwik hulaifah", 'email' => "wiwik.hulaifah@gmail.com", 'password' => bcrypt("351322110018"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "MAULANA JIBRIL AL ISA", 'email' => "mjibril402@gmail.com", 'password' => bcrypt("351322110013"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Dewi Amira", 'email' => "dewiamira07@gmail.com", 'password' => bcrypt("351322110017"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Irvan Rachmad Ananto", 'email' => "irvanrachmadananto@gmail.com", 'password' => bcrypt("351322110014"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "nabila nur faizah", 'email' => "12nabilafaizah@gmail.com", 'password' => bcrypt("351322110020"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Andi Cahya Santoso", 'email' => "andikpokang@gmail.com", 'password' => bcrypt("351322110022"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Dwi Rizqi Anjirfaghnawi", 'email' => "dwirizqianjir@gmail.com", 'password' => bcrypt("351322110016"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Muh. Hasan Digo Firnando", 'email' => "Hasanfernan72@gmail.com", 'password' => bcrypt("351322110045"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "MOH. FIKRI DERMAWAN", 'email' => "fikridermawan112@gmail.com", 'password' => bcrypt("351322110050"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Enis Wulandari", 'email' => "Niniswulandari0@gmail.com", 'password' => bcrypt("351322110019"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Nurul Azizah", 'email' => "azizahnurul8998@gmail.com", 'password' => bcrypt("351322110021"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "NADYA MAURENA WAFIYANTI", 'email' => "nadyarena70@gmail.com", 'password' => bcrypt("351322110036"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Odelia Eka Prameswari", 'email' => "odeliaeka30@gmail.com", 'password' => bcrypt("351322110040"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Nadia Fahira Salsabila", 'email' => "nadiafahiras14@gmail.com", 'password' => bcrypt("351322110047"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Rias Kusumawati", 'email' => "riaskusumawati@gmail.com", 'password' => bcrypt("351322110043"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Eva Novita", 'email' => "Pamungkasprasetyo70@gmail.com", 'password' => bcrypt("351323060022"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Rafri Bayu Raharjo", 'email' => "rbayu311927@gmail.com", 'password' => bcrypt("351322110029"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Muhammad Rido Hartono", 'email' => "ridohartono98@gmail.com", 'password' => bcrypt("351322110028"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Alvin Kurnia Hamdana", 'email' => "alvinkurniahamdana@gmail.com", 'password' => bcrypt("351322110038"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Deviana Novita Sari", 'email' => "deviana010313@gmail.com", 'password' => bcrypt("351322110044"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Indrawati", 'email' => "iinwati114@gmail.com", 'password' => bcrypt("351323060053"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Fina Rohmatul Ummah", 'email' => "finarohmatul2000@gmail.com", 'password' => bcrypt("351322110033"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Yohanes Sulistyo Hadi Prabowo", 'email' => "prabowo.yohanes@gmail.com", 'password' => bcrypt("357422110003"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Nining Ayu Widiastuti", 'email' => "niningayu044@gmail.com", 'password' => bcrypt("351322110031"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Miftahul Lutmin", 'email' => "lutmin12@gmail.com", 'password' => bcrypt("357422110013"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Dita Ayu Lutfiana", 'email' => "ditayuu17@gmail.com", 'password' => bcrypt("351322110032"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "NURRAMADHAN ARWINDA", 'email' => "dhaninurramadhan091@gmail.com", 'password' => bcrypt("351322110049"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "alvira devi karina hakim", 'email' => "alviradevi29@gmail.com", 'password' => bcrypt("351322110055"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Bambang Mudiono", 'email' => "bambangm762@gmail.com", 'password' => bcrypt("351322120007"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "M. CHOIRUL AMIN AL HAKIKI", 'email' => "meganewatashiwa@gmail.com", 'password' => bcrypt("351322110056"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "M. Lukas", 'email' => "m.lukas.181199@gmail.com", 'password' => bcrypt("351323010001"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Annisa fitriana", 'email' => "annisafitriana95@gmail.com", 'password' => bcrypt("351323010004"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Miftahul ilmih", 'email' => "Miftahulilmih6@gmail.com", 'password' => bcrypt("351323060030"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Foni miliana sandra", 'email' => "fonimiliana@gmail.com", 'password' => bcrypt("351323010007"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Khusnul Arifin", 'email' => "khusnularifinxmia4@gmail.com", 'password' => bcrypt("351322120008"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Mohammad Yuda Irwansah", 'email' => "Dwi732318@gmail.com", 'password' => bcrypt("351323010011"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Muski", 'email' => "muski1905@gmail.com", 'password' => bcrypt("351323060057"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Abd.Holiq", 'email' => "abdholiq29@gmail.com", 'password' => bcrypt("351323010010"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Agung Muhammad Zahid", 'email' => "agungzahid8@gmail.com", 'password' => bcrypt("351323010005"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Riza Dwi Safitri", 'email' => "ramaliash.1212@gmail.com", 'password' => bcrypt("351323060137"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Florentina Adriana", 'email' => "florentinaadriana11@gmail.com", 'password' => bcrypt("351323060058"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Ahmad Taufik Hamzah", 'email' => "taufikhamzahh26@gmail.com", 'password' => bcrypt("351323060059"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Naghma Saniyyah", 'email' => "naghma.saniyyah@gmail.com", 'password' => bcrypt("351323060060"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Adela Kristiani", 'email' => "adelakristiani6@gmail.com", 'password' => bcrypt("351323060061"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Nando eka ramadhan", 'email' => "nandoekaramdhan@gmail.com", 'password' => bcrypt("351323060044"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "ROFIL ALFA RIDWAN", 'email' => "rofil.ridwan123@gmail.com", 'password' => bcrypt("351323060051"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "SYAIFUL ARIF", 'email' => "syaifularif2101@gmail.com", 'password' => bcrypt("351323060062"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Ika indri yati", 'email' => "cantikika027@gmail.com", 'password' => bcrypt("351323060043"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Muhammad Marsa Kamal Setiawan", 'email' => "setiawanmarsa388@gmail.com", 'password' => bcrypt("351323060063"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Desy Qomariyatul Maghfirah", 'email' => "desyqomariya@gmail.com", 'password' => bcrypt("351323060064"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Trienty ningchristmas", 'email' => "Trientygrady@gmail.com", 'password' => bcrypt("351323060031"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Danang Dwijayatiana", 'email' => "danang.dwijayatiana83@gmail.com", 'password' => bcrypt("351323060065"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Achmad Adam Daffa", 'email' => "damdaff29@gmail.com", 'password' => bcrypt("351323060066"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Gita Widyanti Ramadhani", 'email' => "gitawidyanti.work@gmail.com", 'password' => bcrypt("351323060067"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Yahya Yulianto", 'email' => "yahyayulianto27@gmail.com", 'password' => bcrypt("351323060068"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Kaira Nessa Kencana Ramadhanti", 'email' => "kairanessa@gmail.com", 'password' => bcrypt("351323060069"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Milda Aditia Putra", 'email' => "aditia.putra100@gmail.com", 'password' => bcrypt("351323060070"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Firdaus Fathiyyah Basagili", 'email' => "firdausfb04@gmail.com", 'password' => bcrypt("351323060071"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Arinda Novia Irmandhani", 'email' => "arindanoviairmandhani2611@gmail.com", 'password' => bcrypt("351323060072"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "RACHMA SUFINA", 'email' => "rachmasufina13@gmail.com", 'password' => bcrypt("351323060028"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Luthfiyah Inas", 'email' => "luthfiyaahh@gmail.com", 'password' => bcrypt("351323060021"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "SAFIYRABALDAH NURUZZAMAN", 'email' => "nsafiyra1@gmail.com", 'password' => bcrypt("351323060006"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Kurnia Suciningrum", 'email' => "suciningrumkurnia@gmail.com", 'password' => bcrypt("351323060073"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Ryan Prayuga Ardiansyah", 'email' => "ryanprayuga77@gmail.com", 'password' => bcrypt("351323060007"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Fitri", 'email' => "pitricomel123@gmail.com", 'password' => bcrypt("351323060034"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Alsih Nika Widia Puji", 'email' => "alsihnikawp@gmail.com", 'password' => bcrypt("351323060008"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Agus Surahman", 'email' => "gusurgusur@gmail.com", 'password' => bcrypt("351323060040"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Imratul Mukdalifah", 'email' => "imratulmukdalifahmei@gmail.com", 'password' => bcrypt("351323060009"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Dina Kurniawati", 'email' => "Kurniawatidina1008@gmail.com", 'password' => bcrypt("351323060074"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "CHOIRUL WAHYUDI", 'email' => "whydakmj@gmail.com", 'password' => bcrypt("351323060075"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "ahmad fadoli", 'email' => "fadoli7431@gmail.com", 'password' => bcrypt("351323060039"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Lindratina M Agustin", 'email' => "lindratina111@gmail.com", 'password' => bcrypt("351323060076"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Vina Panduwinata", 'email' => "vinapanduwinata515@gmail.com", 'password' => bcrypt("351323060029"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Julilyta Noer Amanda", 'email' => "litamanda1234@gmail.com", 'password' => bcrypt("351323060077"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "WAHYUDI", 'email' => "yudye46@gmail.com", 'password' => bcrypt("351323060049"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Alfia ningsih", 'email' => "alfianingsih97@gmail.com", 'password' => bcrypt("351323060078"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Muhammad Viqih Zamzami", 'email' => "viqih999@gmail.com", 'password' => bcrypt("351323060079"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Maulana Muhammad Hamzah", 'email' => "febringok@gmail.com", 'password' => bcrypt("351323060033"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Tsaqib Raihan Khairy", 'email' => "trk77123@gmail.com", 'password' => bcrypt("351323060080"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Rendy Razie Hendrawan", 'email' => "rendyrazie@gmail.com", 'password' => bcrypt("351323060050"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Hilda Ainur Rahma", 'email' => "hildaainurrahma@gmail.com", 'password' => bcrypt("351323060081"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "M ZAINUL ABIDIN", 'email' => "zainul.abidin2603@gmail.com", 'password' => bcrypt("351323060082"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "fahmi andrianto", 'email' => "fahmiandrianto4@gmail.com", 'password' => bcrypt("351323060083"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "INDAH YULIA MAULIDA", 'email' => "Indahyuliamaulida@gmail.com", 'password' => bcrypt("351323060010"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Julia Dwi Isnaini", 'email' => "julia.isnaini@gmail.com", 'password' => bcrypt("351323060011"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Putri Oktaviana Priandani", 'email' => "putripriandani1159@gmail.com", 'password' => bcrypt("351323060084"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "M. SYAHID SYAFAAT", 'email' => "msyahid.syafaat@gmail.com", 'password' => bcrypt("351323060041"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Alfina ananda putri", 'email' => "putrialnanda12@gmail.com", 'password' => bcrypt("351323060012"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Novia Krisna Istifarah", 'email' => "noviakrisna.istifarah@gmail.com", 'password' => bcrypt("351323060085"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Lutfi Chyntia Angraeni", 'email' => "lutfi.chyntiaa@gmail.com", 'password' => bcrypt("351323060086"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Anggrika Amelia Yuliastanti", 'email' => "anggrikaamelia238@gmail.com", 'password' => bcrypt("351323060013"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Bayu setyo ady", 'email' => "bayusetio.bs@gmail.com", 'password' => bcrypt("351323060023"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Rahema Widyanti", 'email' => "hema.wd79@gmail.com", 'password' => bcrypt("351323060087"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Achmad Hikam Suryacipta", 'email' => "hikamcipta47@gmail.com", 'password' => bcrypt("351323060088"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Imas Cik Hanun", 'email' => "cikhanun@gmail.com", 'password' => bcrypt("351323060014"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Gitara syandra syabina", 'email' => "gitarasandrasyabina@gmail.com", 'password' => bcrypt("351323060089"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Siti Khodijah", 'email' => "khodijah20feb@gmail.com", 'password' => bcrypt("351323060090"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Yahya ubaidillah zulkarnain", 'email' => "yubaidillahz@gmail.com", 'password' => bcrypt("351323060091"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Alaikal Fauzi", 'email' => "alaikal2001@gmail.com", 'password' => bcrypt("351323060035"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Fifi Utaryanti", 'email' => "fifiuyaryanti@gmail.com", 'password' => bcrypt("351323060092"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Khoirul Umam", 'email' => "khoirulu474@gmail.com", 'password' => bcrypt("351323060093"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Zidan Abdallah Maulana Rahman", 'email' => "zidanamr08@gmail.com", 'password' => bcrypt("351323060094"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Mochammad Darul Al Faudri", 'email' => "darulprobb@gmail.com", 'password' => bcrypt("351323060095"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Muhammad Jamalludin", 'email' => "mochjamalludin@gmail.com", 'password' => bcrypt("351323060096"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "RODITYA MULTI NUGRAHA", 'email' => "roditya93@gmail.com", 'password' => bcrypt("351323060015"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Yeni Widi Astutik", 'email' => "yeniwidi026@gmail.com", 'password' => bcrypt("351323060026"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Robiatul Awwaliyah", 'email' => "robiatulawwaliyah8@gmail.com", 'password' => bcrypt("351323060097"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Maulana Alif Rozi Al Fiansyah", 'email' => "pocielajhe12@gmail.com", 'password' => bcrypt("351323060098"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Betriek Dwi Septiana", 'email' => "betriekdwi15@gmail.com", 'password' => bcrypt("351323060099"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Tri Agustiningsih", 'email' => "triagustiningsih86@gmail.com", 'password' => bcrypt("351323060100"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Indra", 'email' => "indraalizqi57@gmail.com", 'password' => bcrypt("351323060101"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Renata Sita Windria", 'email' => "sitawindria25@gmail.com", 'password' => bcrypt("351323070007"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Mohammad Farhan Rizqur Rohman", 'email' => "mfarhanrizqurr@gmail.com", 'password' => bcrypt("351323060102"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Nur rizqiyah", 'email' => "nurrizqiyah51@gmail.com", 'password' => bcrypt("351323060103"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "MUHAMMAD AGUS SALIM", 'email' => "m.agussalim028@gmail.com", 'password' => bcrypt("351323060045"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Muhamad Ja'far Sodiq", 'email' => "jafars2604@gmail.com", 'password' => bcrypt("351323060052"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Faqih Hidayatullah", 'email' => "diamondrey91@gmail.com", 'password' => bcrypt("351323060104"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Ravita Kusuma Dewi", 'email' => "Ravitakusumadewi1830@gmail.com", 'password' => bcrypt("351323060105"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Siti Hopsah", 'email' => "siti1927hopsah@gmail.com", 'password' => bcrypt("351323060106"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "YULIA SUHARTINI", 'email' => "Yuliasuhartini07@gmail.com", 'password' => bcrypt("351323060107"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Alviatul Lutviah", 'email' => "alviatullutviah5@gmail.com", 'password' => bcrypt("351323060016"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Bella galu maya ria kusmala", 'email' => "bellagalu08@gmail.com", 'password' => bcrypt("351323060027"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Brian Vidyanjaya", 'email' => "vidyanjaya35@gmail.com", 'password' => bcrypt("351323060108"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "ADITYA PUTRA DARMAWAN", 'email' => "darmawanadityaputra@gmail.com", 'password' => bcrypt("351323060109"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Tommy Rahmad Dzulkifli", 'email' => "tommyrahmaddzulkifli@gmail.com", 'password' => bcrypt("351323060110"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Asep Syaifullah", 'email' => "asepsyaifullah871@gmail.com", 'password' => bcrypt("351323060048"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "ANIK NURFAIDAH", 'email' => "aniknurfaidah286@gmail.com", 'password' => bcrypt("351323060111"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Ony Haycal Ardiansyah", 'email' => "ohaycal@gmail.com", 'password' => bcrypt("351323060112"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Nainul Huda", 'email' => "nainulhuda00@gmail.com", 'password' => bcrypt("351323060113"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Viras Fizilmi Janwar", 'email' => "virasjanwar01@gmail.com", 'password' => bcrypt("351323060114"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Sherli Widya Santi", 'email' => "shrlwdys@gmail.com", 'password' => bcrypt("351323060115"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Azmi nur Faradilah", 'email' => "faradila1446@gmail.com", 'password' => bcrypt("351323060116"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Ukik mia agustin", 'email' => "tatajayanta5@gmail.com", 'password' => bcrypt("351323060117"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Esti Danti Kandina Puteri", 'email' => "estykandina@gmail.com", 'password' => bcrypt("351323060118"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Sandy Reza Amaliyah", 'email' => "sandyrezaamaliyah08@gmail.com", 'password' => bcrypt("351323060119"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Dita Dwi Pratiwi", 'email' => "ditadp733@gmail.com", 'password' => bcrypt("351323060120"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "SITTATUZZAHRO", 'email' => "sittatuzzahro04@gmail.com", 'password' => bcrypt("351323060025"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Busyriatul Hasanah", 'email' => "hasanahbusyriatul@gmail.com", 'password' => bcrypt("351323060121"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Alifia Wahyuni Choirun Nisa", 'email' => "alifiawahyuni641@gmail.com", 'password' => bcrypt("351323060017"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Husnul Khotimah", 'email' => "husnulkhotim98@gmail.com", 'password' => bcrypt("351323060047"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Robi Maulana", 'email' => "Robimln30@gmail.com", 'password' => bcrypt("351323060024"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Nur Hasanah", 'email' => "nurhasanahbisa@gmail.com", 'password' => bcrypt("351323060046"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Dina Nirmala Hidayah", 'email' => "dinanirmala0404@gmail.com", 'password' => bcrypt("351323060122"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "DEWI WULANDARI", 'email' => "dewi39683@gmail.com", 'password' => bcrypt("351323060123"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Reno Rinaldi Pradana", 'email' => "reno.r.pradana@gmail.com", 'password' => bcrypt("351323060032"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Muhammad Farhan", 'email' => "farhandudun@gmail.com", 'password' => bcrypt("351323060036"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Rini Agustin", 'email' => "riniagusti13@gmail.com", 'password' => bcrypt("351323060020"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Edo Zulfiqar Rozaq", 'email' => "edozulfiqarrozaq@gmail.com", 'password' => bcrypt("351323060124"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Dimas Permadi", 'email' => "dimaspermadi082@gmail.com", 'password' => bcrypt("351323060038"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "siti nurnisa", 'email' => "sitinurnisa30@gmail.com", 'password' => bcrypt("351323060125"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Ari Amal Firdaus", 'email' => "arfir28@gmail.com", 'password' => bcrypt("351323060037"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "MOH HUSAIN", 'email' => "mohhusain456789@gmail.com", 'password' => bcrypt("351323060126"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Iswanto", 'email' => "iwan.yuli3110@gmail.com", 'password' => bcrypt("351323060127"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Deni prayoga", 'email' => "deni29prayoga@gmail.com", 'password' => bcrypt("351323060128"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "MIQDAD ILMAN HUDA", 'email' => "miqdadilman02@gmail.com", 'password' => bcrypt("351323060129"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Icuk sukartono", 'email' => "hebatticuk@gmail.com", 'password' => bcrypt("351323060018"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Neni Dwi Lestari", 'email' => "Lestari.neni17@gmail.com", 'password' => bcrypt("351323060130"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "SUSI NANDA RESTA", 'email' => "susinandaresta5@gmail.com", 'password' => bcrypt("351323060131"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Dany Agung Suroso", 'email' => "danyagung4@gmail.com", 'password' => bcrypt("351323060132"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Ibnu Aqil Rahmat Ramadhani", 'email' => "ibnuaqil582@gmail.com", 'password' => bcrypt("351323060133"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Ahmad Sofyan Muzaki", 'email' => "ahmadsofyanmuzaki@gmail.com", 'password' => bcrypt("351323060134"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Rohmat marjuki", 'email' => "Rohmatmarjuk23@gmail.com", 'password' => bcrypt("351323060019"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Novita Dewi Wardani", 'email' => "kibtiyatussholeha37@gmail.com", 'password' => bcrypt("351323060136"),]);
        $superuser->assignRole('user');
        $superuser = User::create(['name' => "Nuriyah", 'email' => "nuriyahpoppy@gmail.com", 'password' => bcrypt("351323060135"),]);
        $superuser->assignRole('user');

        $sukapura = Subdistrict::create([
            'code' => '010',
            'name' => 'Sukapura'
        ]);

        Village::create([
            'name' => 'Ngadisari',
            'code' => '001',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Sariwani',
            'code' => '002',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Kedasih',
            'code' => '003',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Pakel',
            'code' => '004',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Ngepung',
            'code' => '005',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Sukapura',
            'code' => '006',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Sapikerep',
            'code' => '007',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Wonokerto',
            'code' => '008',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Ngadirejo',
            'code' => '009',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Ngadas',
            'code' => '010',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Jetak',
            'code' => '011',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Wonoroto',
            'code' => '012',
            'subdistrict_id' => $sukapura->id
        ]);

        $sumber = Subdistrict::create([
            'code' => '020',
            'name' => 'Sumber'
        ]);
        Village::create([
            'name' => 'Ledokombo',
            'code' => '001',
            'subdistrict_id' => $sumber->id
        ]);
        Village::create([
            'name' => 'Pandansari',
            'code' => '002',
            'subdistrict_id' => $sumber->id
        ]);
        Village::create([
            'name' => 'Sumberanom',
            'code' => '003',
            'subdistrict_id' => $sumber->id
        ]);
        Village::create([
            'name' => 'Wonokerso',
            'code' => '004',
            'subdistrict_id' => $sumber->id
        ]);
        Village::create([
            'name' => 'Gemito',
            'code' => '005',
            'subdistrict_id' => $sumber->id
        ]);
        Village::create([
            'name' => 'Tukul',
            'code' => '006',
            'subdistrict_id' => $sumber->id
        ]);
        Village::create([
            'name' => 'Sumber',
            'code' => '007',
            'subdistrict_id' => $sumber->id
        ]);
        Village::create([
            'name' => 'Cepoko',
            'code' => '008',
            'subdistrict_id' => $sumber->id
        ]);
        Village::create([
            'name' => 'Rambaan',
            'code' => '009',
            'subdistrict_id' => $sumber->id
        ]);

        $kuripan = Subdistrict::create([
            'code' => '030',
            'name' => 'Kuripan'
        ]);
        Village::create([
            'name' => 'Wonosari',
            'code' => '001',
            'subdistrict_id' => $kuripan->id
        ]);
        Village::create([
            'name' => 'Jatisari',
            'code' => '002',
            'subdistrict_id' => $kuripan->id
        ]);
        Village::create([
            'name' => 'Kedawung',
            'code' => '003',
            'subdistrict_id' => $kuripan->id
        ]);
        Village::create([
            'name' => 'Karangrejo',
            'code' => '004',
            'subdistrict_id' => $kuripan->id
        ]);
        Village::create([
            'name' => 'Resongo',
            'code' => '005',
            'subdistrict_id' => $kuripan->id
        ]);
        Village::create([
            'name' => 'Wringinanom',
            'code' => '006',
            'subdistrict_id' => $kuripan->id
        ]);
        Village::create([
            'name' => 'Menyono',
            'code' => '007',
            'subdistrict_id' => $kuripan->id
        ]);

        $bantaran = Subdistrict::create([
            'code' => '040',
            'name' => 'Bantaran'
        ]);
        Village::create([
            'name' => 'Karanganyar',
            'code' => '001',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Bantaran',
            'code' => '002',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Gunung Tugel',
            'code' => '003',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Kedungrejo',
            'code' => '004',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Besuk',
            'code' => '005',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Patokan',
            'code' => '006',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Legundi',
            'code' => '007',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Tempuran',
            'code' => '008',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Kropak',
            'code' => '009',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Kramatagung',
            'code' => '010',
            'subdistrict_id' => $bantaran->id
        ]);
        $leces = Subdistrict::create([
            'code' => '050',
            'name' => 'Leces'
        ]);
        Village::create([
            'name' => 'Tigasan Kulon',
            'code' => '001',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Tigasan Wetan',
            'code' => '002',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Malasan Kulon',
            'code' => '003',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Leces',
            'code' => '004',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Pondok Wuluh',
            'code' => '005',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Kerpangan',
            'code' => '006',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Sumber Kedawung',
            'code' => '007',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Clarak',
            'code' => '008',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Jorongan',
            'code' => '009',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Warujinggo',
            'code' => '010',
            'subdistrict_id' => $leces->id
        ]);
        $tegalsiwalan = Subdistrict::create([
            'code' => '060',
            'name' => 'Tegal Siwalan'
        ]);
        Village::create([
            'name' => 'Malasan Wetan',
            'code' => '001',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Gunung Bekel',
            'code' => '002',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Tegalsono',
            'code' => '003',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Bulujaran Kidul',
            'code' => '004',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Bulujaran Lor',
            'code' => '005',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Paras',
            'code' => '006',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Tegalsiwalan',
            'code' => '007',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Banjarsawah',
            'code' => '008',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Sumber Bulu',
            'code' => '009',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Sumber Kledung',
            'code' => '010',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Blado Kulon',
            'code' => '011',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Tegal Mojo',
            'code' => '012',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        $banyuanyar = Subdistrict::create([
            'code' => '070',
            'name' => 'Banyuanyar'
        ]);
        Village::create([
            'name' => 'Gunung Geni',
            'code' => '001',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Liprak Kidul',
            'code' => '002',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Sentulan',
            'code' => '003',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Gading Kulon',
            'code' => '004',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Klenang Kidul',
            'code' => '005',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Klenang Lor',
            'code' => '006',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Tarokan',
            'code' => '007',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Liprak Wetan',
            'code' => '008',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Liprak Kulon',
            'code' => '009',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Banyuanyar Kidul',
            'code' => '010',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Blado Wetan',
            'code' => '011',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Banyuanyar Tengah',
            'code' => '012',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Pendil',
            'code' => '013',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Alas Sapi',
            'code' => '014',
            'subdistrict_id' => $banyuanyar->id
        ]);

        $tiris = Subdistrict::create([
            'code' => '080',
            'name' => 'Tiris'
        ]);
        Village::create([
            'name' => 'Tlogosari',
            'code' => '001',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Andungsari',
            'code' => '002',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Tlogoargo',
            'code' => '003',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Andungbiru',
            'code' => '004',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Tiris',
            'code' => '005',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Ranuagung',
            'code' => '006',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Segaran',
            'code' => '007',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Ranugedang',
            'code' => '008',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Jangkang',
            'code' => '009',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Wedusan',
            'code' => '010',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Racek',
            'code' => '011',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Pesawahan',
            'code' => '012',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Pedagangan',
            'code' => '013',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Rejing',
            'code' => '014',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Tegalwatu',
            'code' => '015',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Tulupari',
            'code' => '016',
            'subdistrict_id' => $tiris->id
        ]);
        $krucil = Subdistrict::create([
            'code' => '090',
            'name' => 'Krucil'
        ]);
        Village::create([
            'name' => 'Sumberduren',
            'code' => '001',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Roto',
            'code' => '002',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Kertosuko',
            'code' => '003',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Tambelang',
            'code' => '004',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Krucil',
            'code' => '005',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Bermi',
            'code' => '006',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Kalianan',
            'code' => '007',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Watu Panjang',
            'code' => '008',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Guyangan',
            'code' => '009',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Betek',
            'code' => '010',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Krobongan',
            'code' => '011',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Seneng',
            'code' => '012',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Pandanlaras',
            'code' => '013',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Plaosan',
            'code' => '014',
            'subdistrict_id' => $krucil->id
        ]);
        $gading = Subdistrict::create([
            'code' => '100',
            'name' => 'Gading'
        ]);
        Village::create([
            'name' => 'Condong',
            'code' => '001',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Jurangrejo',
            'code' => '002',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Ranuwurung',
            'code' => '003',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Gading Wetan',
            'code' => '004',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Bulupandak',
            'code' => '005',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Keben',
            'code' => '006',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Renteng',
            'code' => '007',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Duren',
            'code' => '008',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Betek Taman',
            'code' => '009',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Batur',
            'code' => '010',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Sentul',
            'code' => '011',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Dandang',
            'code' => '012',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Kertosono',
            'code' => '013',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Prasi',
            'code' => '014',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Nogosaren',
            'code' => '015',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Wangkal',
            'code' => '016',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Mojolegi',
            'code' => '017',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Kaliacar',
            'code' => '018',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Sumbersecang',
            'code' => '019',
            'subdistrict_id' => $gading->id
        ]);
        $pakuniran = Subdistrict::create([
            'code' => '110',
            'name' => 'Pakuniran'
        ]);
        Village::create([
            'name' => 'Ranon',
            'code' => '001',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Kedungsumur',
            'code' => '002',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Gunggungan Kidul',
            'code' => '003',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Kalidandan',
            'code' => '004',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Blimbing',
            'code' => '005',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Gondosuli',
            'code' => '006',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Kertonegoro',
            'code' => '007',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Bimo',
            'code' => '008',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Pakuniran',
            'code' => '009',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Patemon',
            'code' => '010',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Gunggungan Lor',
            'code' => '011',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Sogaan',
            'code' => '012',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Sumberkembar',
            'code' => '013',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Alaspandan',
            'code' => '014',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Bucor Wetan',
            'code' => '015',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Bucor Kulon',
            'code' => '016',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Glagah',
            'code' => '017',
            'subdistrict_id' => $pakuniran->id
        ]);
        $kotaanyar = Subdistrict::create([
            'code' => '120',
            'name' => 'Kota Anyar'
        ]);
        Village::create([
            'name' => 'Sumbercenteng',
            'code' => '001',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Sambirapak Kidul',
            'code' => '002',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Sidomulyo',
            'code' => '003',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Tambakukir',
            'code' => '004',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Curahtemu',
            'code' => '005',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Pasembon',
            'code' => '006',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Sidorejo',
            'code' => '007',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Sambirampak Lor',
            'code' => '008',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Sukorejo',
            'code' => '009',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Talkandang',
            'code' => '010',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Kedungrejoso',
            'code' => '011',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Triwungan',
            'code' => '012',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Kotaanyar',
            'code' => '013',
            'subdistrict_id' => $kotaanyar->id
        ]);
        $paiton = Subdistrict::create([
            'code' => '130',
            'name' => 'Paiton'
        ]);
        Village::create([
            'name' => 'Jabungwetan',
            'code' => '001',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Kalikajar Kulon',
            'code' => '002',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Kalikajar Wetan',
            'code' => '003',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Alas Tengah',
            'code' => '004',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Pandean',
            'code' => '005',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Patunjungan',
            'code' => '006',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Taman',
            'code' => '007',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Plampang',
            'code' => '008',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Sidodadi',
            'code' => '009',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Jabung Candi',
            'code' => '010',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Jabung Sisir',
            'code' => '011',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Randumerak',
            'code' => '012',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Randudatah',
            'code' => '013',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Karanganyar',
            'code' => '014',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Pondok Kelor',
            'code' => '015',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Sukodadi',
            'code' => '016',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Paiton',
            'code' => '017',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Sumberanyar',
            'code' => '018',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Sumberejo',
            'code' => '019',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Bhinar',
            'code' => '020',
            'subdistrict_id' => $paiton->id
        ]);
        $besuk = Subdistrict::create([
            'code' => '140',
            'name' => 'Besuk'
        ]);
        Village::create([
            'name' => 'Matekan',
            'code' => '001',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Krampilan',
            'code' => '002',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Klampokan',
            'code' => '003',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Jambangan',
            'code' => '004',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Kecik',
            'code' => '005',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Bago',
            'code' => '006',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Alasnyiur',
            'code' => '007',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Sindetanyar',
            'code' => '008',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Sindetlami',
            'code' => '009',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Sumurdalam',
            'code' => '010',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Besuk Kidul',
            'code' => '011',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Besuk Agung',
            'code' => '012',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Randujalak',
            'code' => '013',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Alas Tengah',
            'code' => '014',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Alas Kandang',
            'code' => '015',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Alas Sumur Lor',
            'code' => '016',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Sumberan',
            'code' => '017',
            'subdistrict_id' => $besuk->id
        ]);
        $kraksaan = Subdistrict::create([
            'code' => '150',
            'name' => 'Kraksaan'
        ]);
        Village::create([
            'name' => 'Kregenan',
            'code' => '001',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Rondokuning',
            'code' => '002',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Semampir',
            'code' => '003',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Bulu',
            'code' => '004',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Sidomukti',
            'code' => '005',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Kraksaan Wetan',
            'code' => '006',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Rangkang',
            'code' => '007',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Kandangjati Kulon',
            'code' => '008',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Kandangjati Wetan',
            'code' => '009',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Alassumur Kulon',
            'code' => '010',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Sumberlele',
            'code' => '011',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Taman Sari',
            'code' => '012',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Asembakor',
            'code' => '013',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Kebon Agung',
            'code' => '014',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Sidopekso',
            'code' => '015',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Patokan',
            'code' => '016',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Asembagus',
            'code' => '017',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Kalibuntu',
            'code' => '018',
            'subdistrict_id' => $kraksaan->id
        ]);
        $krejengan = Subdistrict::create([
            'code' => '160',
            'name' => 'Krejengan'
        ]);
        Village::create([
            'name' => 'Opo Opo',
            'code' => '001',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Rawan',
            'code' => '002',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Seboro',
            'code' => '003',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Karangren',
            'code' => '004',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Kedungcaluk',
            'code' => '005',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Sokaan',
            'code' => '006',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Dawuhan',
            'code' => '007',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Gebangan',
            'code' => '008',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Widoro',
            'code' => '009',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Sumberkatimoho',
            'code' => '010',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Krejengan',
            'code' => '011',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Kamalkuning',
            'code' => '012',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Tanjungsari',
            'code' => '013',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Patemon',
            'code' => '014',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Temenggungan',
            'code' => '015',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Jatiurip',
            'code' => '016',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Sentong',
            'code' => '017',
            'subdistrict_id' => $krejengan->id
        ]);
        $pajarakan = Subdistrict::create([
            'code' => '170',
            'name' => 'Pajarakan'
        ]);
        Village::create([
            'name' => 'Seloguding Kulon',
            'code' => '001',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Seloguding Wetan',
            'code' => '002',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Ketompen',
            'code' => '003',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Karangbong',
            'code' => '004',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Karang Pranti',
            'code' => '005',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Gejugan',
            'code' => '006',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Karanggeger',
            'code' => '007',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Tanjung',
            'code' => '008',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Pajarakan Kulon',
            'code' => '009',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Sukokerto',
            'code' => '010',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Sukomulyo',
            'code' => '011',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Penambangan',
            'code' => '012',
            'subdistrict_id' => $pajarakan->id
        ]);
        $maron = Subdistrict::create([
            'code' => '180',
            'name' => 'Maron'
        ]);
        Village::create([
            'name' => 'Sumberpoh',
            'code' => '001',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Sumberdawe',
            'code' => '002',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Brabe',
            'code' => '003',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Maron Kidul',
            'code' => '004',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Gerongan',
            'code' => '005',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Satrean',
            'code' => '006',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Brani Wetan',
            'code' => '007',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Brani Kulon',
            'code' => '008',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Maron Wetan',
            'code' => '009',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Maron Kulon',
            'code' => '010',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Kedungsari',
            'code' => '011',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Pegalangan Kidul',
            'code' => '012',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Burmbungan Kidul',
            'code' => '013',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Wonorejo',
            'code' => '014',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Puspan',
            'code' => '015',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Ganting Wetan',
            'code' => '016',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Ganting Kulon',
            'code' => '017',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Suko',
            'code' => '018',
            'subdistrict_id' => $maron->id
        ]);
        $gending = Subdistrict::create([
            'code' => '190',
            'name' => 'Gending'
        ]);
        Village::create([
            'name' => 'Banyuanyar Lor',
            'code' => '001',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Sumber Kerang',
            'code' => '002',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Sebaung',
            'code' => '003',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Pikatan',
            'code' => '004',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Bulang',
            'code' => '005',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Brumbungan Lor',
            'code' => '006',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Jatiadi',
            'code' => '007',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Klaseman',
            'code' => '008',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Pesisir',
            'code' => '009',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Randupitu',
            'code' => '010',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Gending',
            'code' => '011',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Pajurangan',
            'code' => '012',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Curahsawo',
            'code' => '013',
            'subdistrict_id' => $gending->id
        ]);
        $dringu = Subdistrict::create([
            'code' => '200',
            'name' => 'Dringu'
        ]);
        Village::create([
            'name' => 'Ngepoh',
            'code' => '001',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Sumberagung',
            'code' => '002',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Sumbersuko',
            'code' => '003',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Watuwungkuk',
            'code' => '004',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Sekarkare',
            'code' => '005',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Mranggonlawang',
            'code' => '006',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Tegalrejo',
            'code' => '007',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Kalirejo',
            'code' => '008',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Kedungdalem',
            'code' => '009',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Tamansari',
            'code' => '010',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Randuputih',
            'code' => '011',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Kalisalam',
            'code' => '012',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Dringu',
            'code' => '013',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Pabean',
            'code' => '014',
            'subdistrict_id' => $dringu->id
        ]);
        $wonomerto = Subdistrict::create([
            'code' => '210',
            'name' => 'Wonomerto'
        ]);
        Village::create([
            'name' => 'Patalan',
            'code' => '001',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Jrebeng',
            'code' => '002',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Wonorejo',
            'code' => '003',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Tunggak Creme',
            'code' => '004',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Pohsangit Tengah',
            'code' => '005',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Kareng Kidul',
            'code' => '006',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Kedungsupit',
            'code' => '007',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Pohsangit Lor',
            'code' => '008',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Pohsangit Ngisor',
            'code' => '009',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Sepuhgempol',
            'code' => '010',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Sumberkare',
            'code' => '011',
            'subdistrict_id' => $wonomerto->id
        ]);
        $lumbang = Subdistrict::create([
            'code' => '220',
            'name' => 'Lumbang'
        ]);
        Village::create([
            'name' => 'Sapih',
            'code' => '001',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Negororejo',
            'code' => '002',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Branggah',
            'code' => '003',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Lambangkuning',
            'code' => '004',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Palangbesi',
            'code' => '005',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Boto',
            'code' => '006',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Wonogoro',
            'code' => '007',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Lumbang',
            'code' => '008',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Tandon Sentul',
            'code' => '009',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Purut',
            'code' => '010',
            'subdistrict_id' => $lumbang->id
        ]);
        $tongas = Subdistrict::create([
            'code' => '230',
            'name' => 'Tongas'
        ]);
        Village::create([
            'name' => 'Pamatan',
            'code' => '001',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Sumberkramat',
            'code' => '002',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Seumberrejo',
            'code' => '003',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Sumendi',
            'code' => '004',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Bayeman',
            'code' => '005',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Dungun',
            'code' => '006',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Curahdringu',
            'code' => '007',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Wringinanom',
            'code' => '008',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Tongas Wetan',
            'code' => '009',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Tongas Kulon',
            'code' => '010',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Curah Tulis',
            'code' => '011',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Klampok',
            'code' => '012',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Tanjungrejo',
            'code' => '013',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Tambakrejo',
            'code' => '014',
            'subdistrict_id' => $tongas->id
        ]);
        $sumberasih = Subdistrict::create([
            'code' => '240',
            'name' => 'Sumberasih'
        ]);
        Village::create([
            'name' => 'Munengkidul',
            'code' => '001',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Pohsangitleres',
            'code' => '002',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Laweyan',
            'code' => '003',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Muneng',
            'code' => '004',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Jangur',
            'code' => '005',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Sumberbendo',
            'code' => '006',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Mentor',
            'code' => '007',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Sumurmati',
            'code' => '008',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Pesisir',
            'code' => '009',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Lemahkembar',
            'code' => '010',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Ambulu',
            'code' => '011',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Banjarsari',
            'code' => '012',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Gili Ketapang',
            'code' => '013',
            'subdistrict_id' => $sumberasih->id
        ]);
    }
}
