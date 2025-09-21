<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kas".
 *
 * @property integer $id_transaksi
 * @property string $tgl
 * @property integer $debet
 * @property integer $kredit
 * @property string $ket
 */
class Kas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tgl', 'debet', 'kredit', 'ket'], 'required'],
            [['tgl'], 'safe'],
            [['debet', 'kredit'], 'integer'],
            [['ket'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'tgl' => 'Tgl',
            'debet' => 'Debet',
            'kredit' => 'Kredit',
            'ket' => 'Ket',
        ];
    }
}
