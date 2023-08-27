<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Skpputang;

/**
 * SkpputangSearch represents the model behind the search form of `backend\models\Skpputang`.
 */
class SkpputangSearch extends Skpputang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_skpp'], 'integer'],
            [['uraianpotongan', 'akunpenerimaan'], 'safe'],
            [['jumlah', 'potongan'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Skpputang::find();

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
            'id' => $this->id,
            'id_skpp' => $this->id_skpp,
            'jumlah' => $this->jumlah,
            'potongan' => $this->potongan,
        ]);

        $query->andFilterWhere(['like', 'uraianpotongan', $this->uraianpotongan])
            ->andFilterWhere(['like', 'akunpenerimaan', $this->akunpenerimaan]);

        return $dataProvider;
    }
}
