<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Surattugas;

/**
 * SurattugasSearch represents the model behind the search form of `backend\models\Surattugas`.
 */
class SurattugasSearch extends Surattugas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idpemberi', 'idpenerima', 'waktu'], 'integer'],
            [['nomor', 'namatugas', 'lokasi', 'daritgl', 'sampaitgl', 'sumberdana', 'create_at', 'update_at'], 'safe'],
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
        $query = Surattugas::find();

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
            'idpemberi' => $this->idpemberi,
            'idpenerima' => $this->idpenerima,
            'waktu' => $this->waktu,
            'daritgl' => $this->daritgl,
            'sampaitgl' => $this->sampaitgl,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ]);

        $query->andFilterWhere(['like', 'nomor', $this->nomor])
            ->andFilterWhere(['like', 'namatugas', $this->namatugas])
            ->andFilterWhere(['like', 'lokasi', $this->lokasi])
            ->andFilterWhere(['like', 'sumberdana', $this->sumberdana]);

        return $dataProvider;
    }
}
