<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbpegawai".
 *
 * @property int $id
 * @property string $nip
 * @property string|null $nidn
 * @property string|null $noktp
 * @property string|null $noktp_upload
 * @property string|null $tgl_ktp_terbit
 * @property string|null $tgl_ktp_habis
 * @property string|null $npwp
 * @property string|null $npwp_upload
 * @property string|null $id_status
 * @property int|null $id_tipe
 * @property string|null $nama
 * @property int|null $id_propinsi_dom
 * @property int|null $id_kabupaten_dom
 * @property int|null $id_kecamatan_dom
 * @property int|null $id_kelurahan_dom
 * @property int|null $kodepos_dom
 * @property string|null $alamat_domisili
 * @property string|null $alamat_ktp
 * @property int|null $id_propinsi_ktp
 * @property int|null $id_kabkota_ktp
 * @property int|null $id_kecamatan_ktp
 * @property int|null $id_kelurahan_ktp
 * @property int|null $kodepos_ktp
 * @property int|null $id_agama
 * @property int|null $status_perkawinan
 * @property string|null $jenis_kelamin
 * @property string|null $tempat_lahir
 * @property string|null $tgl_lahir
 * @property int|null $tinggi
 * @property int|null $berat_badan
 * @property string|null $rambut
 * @property string|null $bentuk_muka
 * @property string|null $warna_kulit
 * @property string|null $ciri
 * @property string|null $cacat
 * @property int|null $id_jafung
 * @property int|null $id_jastruk
 * @property string|null $foto
 * @property string|null $telp
 * @property string|null $hp
 * @property string|null $email
 * @property string|null $warganegara
 * @property string|null $homepage
 * @property string|null $nopaspor_upload
 * @property string|null $nopaspor
 * @property string|null $tgl_paspor
 * @property string|null $negara_penerbit_paspor
 * @property string|null $gol_darah
 * @property string|null $hobi
 * @property int|null $id_status_aktif
 * @property int|null $id_rumpun_sub_bidang
 * @property int|null $id_rumpun_sub
 * @property int|null $id_rumpun
 * @property string|null $kk
 * @property int $id_unitkerja
 * @property string|null $no_sertifikat_dosen
 * @property int $id_tugastambahan
 * @property int $id_unittugastambahan
 * @property int|null $id_pangkat
 * @property string|null $biografi
 * @property string|null $peminatan
 * @property int|null $grade
 * @property int|null $keterangan_aktif
 * @property int|null $is_dpk 1= DPK 0=Bukan DPK
 * @property int|null $is_serdos 1=serdos
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbpegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'id_unitkerja'], 'required'],
            [['tgl_ktp_terbit', 'tgl_ktp_habis', 'tgl_lahir', 'tgl_paspor'], 'safe'],
            [['id_status', 'jenis_kelamin', 'warganegara', 'gol_darah', 'biografi', 'peminatan'], 'string'],
            [['id_tipe', 'id_propinsi_dom', 'id_kabupaten_dom', 'id_kecamatan_dom', 'id_kelurahan_dom', 'kodepos_dom', 'id_propinsi_ktp', 'id_kabkota_ktp', 'id_kecamatan_ktp', 'id_kelurahan_ktp', 'kodepos_ktp', 'id_agama', 'status_perkawinan', 'tinggi', 'berat_badan', 'id_jafung', 'id_jastruk', 'id_status_aktif', 'id_rumpun_sub_bidang', 'id_rumpun_sub', 'id_rumpun', 'id_unitkerja', 'id_tugastambahan', 'id_unittugastambahan', 'id_pangkat', 'grade', 'keterangan_aktif', 'is_dpk', 'is_serdos'], 'integer'],
            [['nip', 'npwp', 'tempat_lahir'], 'string', 'max' => 50],
            [['nidn', 'ciri', 'cacat', 'foto', 'email', 'homepage', 'negara_penerbit_paspor', 'hobi', 'kk'], 'string', 'max' => 100],
            [['noktp', 'telp', 'hp'], 'string', 'max' => 25],
            [['noktp_upload', 'npwp_upload', 'alamat_domisili', 'alamat_ktp', 'nopaspor_upload'], 'string', 'max' => 255],
            [['nama', 'no_sertifikat_dosen'], 'string', 'max' => 200],
            [['rambut', 'bentuk_muka', 'warna_kulit', 'nopaspor'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nip' => 'Nip',
            'nidn' => 'Nidn',
            'noktp' => 'Noktp',
            'noktp_upload' => 'Noktp Upload',
            'tgl_ktp_terbit' => 'Tgl Ktp Terbit',
            'tgl_ktp_habis' => 'Tgl Ktp Habis',
            'npwp' => 'Npwp',
            'npwp_upload' => 'Npwp Upload',
            'id_status' => 'Id Status',
            'id_tipe' => 'Id Tipe',
            'nama' => 'Nama',
            'id_propinsi_dom' => 'Id Propinsi Dom',
            'id_kabupaten_dom' => 'Id Kabupaten Dom',
            'id_kecamatan_dom' => 'Id Kecamatan Dom',
            'id_kelurahan_dom' => 'Id Kelurahan Dom',
            'kodepos_dom' => 'Kodepos Dom',
            'alamat_domisili' => 'Alamat Domisili',
            'alamat_ktp' => 'Alamat Ktp',
            'id_propinsi_ktp' => 'Id Propinsi Ktp',
            'id_kabkota_ktp' => 'Id Kabkota Ktp',
            'id_kecamatan_ktp' => 'Id Kecamatan Ktp',
            'id_kelurahan_ktp' => 'Id Kelurahan Ktp',
            'kodepos_ktp' => 'Kodepos Ktp',
            'id_agama' => 'Id Agama',
            'status_perkawinan' => 'Status Perkawinan',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'tinggi' => 'Tinggi',
            'berat_badan' => 'Berat Badan',
            'rambut' => 'Rambut',
            'bentuk_muka' => 'Bentuk Muka',
            'warna_kulit' => 'Warna Kulit',
            'ciri' => 'Ciri',
            'cacat' => 'Cacat',
            'id_jafung' => 'Id Jafung',
            'id_jastruk' => 'Id Jastruk',
            'foto' => 'Foto',
            'telp' => 'Telp',
            'hp' => 'Hp',
            'email' => 'Email',
            'warganegara' => 'Warganegara',
            'homepage' => 'Homepage',
            'nopaspor_upload' => 'Nopaspor Upload',
            'nopaspor' => 'Nopaspor',
            'tgl_paspor' => 'Tgl Paspor',
            'negara_penerbit_paspor' => 'Negara Penerbit Paspor',
            'gol_darah' => 'Gol Darah',
            'hobi' => 'Hobi',
            'id_status_aktif' => 'Id Status Aktif',
            'id_rumpun_sub_bidang' => 'Id Rumpun Sub Bidang',
            'id_rumpun_sub' => 'Id Rumpun Sub',
            'id_rumpun' => 'Id Rumpun',
            'kk' => 'Kk',
            'id_unitkerja' => 'Id Unitkerja',
            'no_sertifikat_dosen' => 'No Sertifikat Dosen',
            'id_tugastambahan' => 'Id Tugastambahan',
            'id_unittugastambahan' => 'Id Unittugastambahan',
            'id_pangkat' => 'Id Pangkat',
            'biografi' => 'Biografi',
            'peminatan' => 'Peminatan',
            'grade' => 'Grade',
            'keterangan_aktif' => 'Keterangan Aktif',
            'is_dpk' => 'Is Dpk',
            'is_serdos' => 'Is Serdos',
        ];
    }
}
