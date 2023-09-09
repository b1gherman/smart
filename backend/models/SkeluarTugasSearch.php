<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SkeluarTugas;

/**
 * SkeluarTugasSearch represents the model behind the search form of `backend\models\SkeluarTugas`.
 */
class SkeluarTugasSearch extends SkeluarTugas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idpemberi', 'iduser'], 'integer'],
            [['nomor', 'penerima', 'tugas', 'tanggal_tugas', 'selama', 'lokasi', 'keterangan', 'tempat', 'tanggal', 'status', 'file_upload', 'create_at', 'update_at'], 'safe'],
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
        $query = SkeluarTugas::find();

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
            'tanggal' => $this->tanggal,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'iduser' => $this->iduser,
        ]);

        $query->andFilterWhere(['like', 'nomor', $this->nomor])
            ->andFilterWhere(['like', 'penerima', $this->penerima])
            ->andFilterWhere(['like', 'tugas', $this->tugas])
            ->andFilterWhere(['like', 'tanggal_tugas', $this->tanggal_tugas])
            ->andFilterWhere(['like', 'selama', $this->selama])
            ->andFilterWhere(['like', 'lokasi', $this->lokasi])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'tempat', $this->tempat])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'file_upload', $this->file_upload]);

        return $dataProvider;
    }
}
