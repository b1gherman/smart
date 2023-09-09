<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SuratKeterangan;

/**
 * SuratKeteranganSearch represents the model behind the search form of `backend\models\SuratKeterangan`.
 */
class SuratKeteranganSearch extends SuratKeterangan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idunit', 'idttd', 'idterangkan', 'create_by', 'update_by'], 'integer'],
            [['kode', 'tanggal', 'isi', 'idtembusan', 'create_at', 'update_at'], 'safe'],
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
        $query = SuratKeterangan::find();

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
            'idunit' => $this->idunit,
            'idttd' => $this->idttd,
            'idterangkan' => $this->idterangkan,
            'tanggal' => $this->tanggal,
            'create_at' => $this->create_at,
            'create_by' => $this->create_by,
            'update_at' => $this->update_at,
            'update_by' => $this->update_by,
        ]);

        $query->andFilterWhere(['like', 'kode', $this->kode])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'idtembusan', $this->idtembusan]);

        return $dataProvider;
    }
}
