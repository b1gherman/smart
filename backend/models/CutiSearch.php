<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Cuti;

/**
 * CutiSearch represents the model behind the search form of `backend\models\Cuti`.
 */
class CutiSearch extends Cuti
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_pegawai', 'id_jeniscuti', 'iduser'], 'integer'],
            [['nomor', 'alasan', 'tglmulaicuti', 'tglakhircuti', 'catatancuti', 'alamatselamacuti', 'telpon', 'create_at', 'update_at'], 'safe'],
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
        $query = Cuti::find();

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
            'id_pegawai' => $this->id_pegawai,
            'id_jeniscuti' => $this->id_jeniscuti,
            'tglmulaicuti' => $this->tglmulaicuti,
            'tglakhircuti' => $this->tglakhircuti,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'iduser' => $this->iduser,
        ]);

        $query->andFilterWhere(['like', 'nomor', $this->nomor])
            ->andFilterWhere(['like', 'alasan', $this->alasan])
            ->andFilterWhere(['like', 'catatancuti', $this->catatancuti])
            ->andFilterWhere(['like', 'alamatselamacuti', $this->alamatselamacuti])
            ->andFilterWhere(['like', 'telpon', $this->telpon]);

        return $dataProvider;
    }
}
