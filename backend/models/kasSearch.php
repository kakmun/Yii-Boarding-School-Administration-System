<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Kas;

/**
 * kasSearch represents the model behind the search form about `common\models\Kas`.
 */
class kasSearch extends Kas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_transaksi', 'nominal', 'debet', 'kredit', 'saldo'], 'integer'],
            [['tgl', 'ket'], 'safe'],
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
        $query = Kas::find();

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
            'id_transaksi' => $this->id_transaksi,
            'nominal' => $this->nominal,
            'tgl' => $this->tgl,
            'debet' => $this->debet,
            'kredit' => $this->kredit,
            'saldo' => $this->saldo,
        ]);

        $query->andFilterWhere(['like', 'ket', $this->ket]);

        return $dataProvider;
    }
}
