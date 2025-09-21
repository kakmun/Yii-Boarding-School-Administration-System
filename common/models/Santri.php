<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "santri".
 *
 * @property integer $no_induk
 * @property string $nama
 * @property string $alamat
 * @property string $tmp_lahir
 * @property string $tgl_lahir
 * @property string $wali
 * @property string $masuk
 * @property integer $posisi
 * @property integer $tarif
 * @property string $foto
 *
 * @property Syahriyah[] $syahriyahs
 */
class Santri extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	 
	public $file; 
    public static function tableName()
    {
        return 'santri';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'tmp_lahir', 'tgl_lahir', 'foto', 'wali', 'masuk', 'posisi', 'tarif'], 'required'],
            [['tgl_lahir', 'masuk'], 'safe'],
            [['posisi', 'tarif'], 'integer'],
            [['nama'], 'string', 'max' => 25],
            [['alamat'], 'string', 'max' => 30],
            [['tmp_lahir'], 'string', 'max' => 10],
            [['wali'], 'string', 'max' => 20],
            [['foto'], 'string', 'max' => 30],
            [['file'], 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'no_induk' => 'No Induk',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'tmp_lahir' => 'Tmp Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'wali' => 'Wali',
            'masuk' => 'Masuk',
            'posisi' => 'Posisi',
            'tarif' => 'Tarif',
            'foto' => 'Foto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSyahriyahs()
    {
        return $this->hasMany(Syahriyah::className(), ['no_induk' => 'no_induk']);
    }
}
