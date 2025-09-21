<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Santri;

/**
 * SantriSearch represents the model behind the search form about `common\models\Santri`.
 */
class SantriSearch extends Santri
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no_induk', 'posisi', 'tarif'], 'integer'],
            [['nama', 'alamat', 'tmp_lahir', 'tgl_lahir', 'wali', 'masuk', 'foto'], 'safe'],
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
        $query = Santri::find();

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
            'no_induk' => $this->no_induk,
            'tgl_lahir' => $this->tgl_lahir,
            'masuk' => $this->masuk,
            'posisi' => $this->posisi,
            'tarif' => $this->tarif,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'tmp_lahir', $this->tmp_lahir])
            ->andFilterWhere(['like', 'wali', $this->wali])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
