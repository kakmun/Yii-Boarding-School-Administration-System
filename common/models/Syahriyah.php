<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "syahriyah".
 *
 * @property integer $no_syahriyah
 * @property integer $no_induk
 * @property integer $banyak
 * @property string $tgl
 *
 * @property Santri $noInduk
 */
class Syahriyah extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'syahriyah';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no_induk', 'banyak', 'tgl'], 'required'],
            [['no_induk', 'banyak'], 'integer'],
            [['tgl'], 'safe'],
            [['no_induk'], 'exist', 'skipOnError' => true, 'targetClass' => Santri::className(), 'targetAttribute' => ['no_induk' => 'no_induk']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'no_syahriyah' => 'No Syahriyah',
            'no_induk' => 'No Induk',
            'banyak' => 'Banyak',
            'tgl' => 'Tgl',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNoInduk()
    {
        return $this->hasOne(Santri::className(), ['no_induk' => 'no_induk']);
    }
}
