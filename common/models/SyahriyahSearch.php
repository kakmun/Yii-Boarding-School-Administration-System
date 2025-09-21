<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Syahriyah;

/**
 * SyahriyahSearch represents the model behind the search form about `common\models\Syahriyah`.
 */
class SyahriyahSearch extends Syahriyah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no_syahriyah', 'no_induk', 'banyak'], 'integer'],
            [['tgl'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Syahriyah::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'no_syahriyah' => $this->no_syahriyah,
            'no_induk' => $this->no_induk,
            'banyak' => $this->banyak,
            'tgl' => $this->tgl,
        ]);

        return $dataProvider;
    }
}
