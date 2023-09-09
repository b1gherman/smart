<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SkeluarPengantar;

/**
 * SkeluarPengantarSearch represents the model behind the search form of `backend\models\SkeluarPengantar`.
 */
class SkeluarPengantarSearch extends SkeluarPengantar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idpengirim', 'iduser'], 'integer'],
            [['nomor', 'tempat', 'tanggal', 'kepada', 'isi', 'status', 'file_upload', 'create_at', 'update_at'], 'safe'],
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
        $query = SkeluarPengantar::find();

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
            'idpengirim' => $this->idpengirim,
            'tanggal' => $this->tanggal,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'iduser' => $this->iduser,
        ]);

        $query->andFilterWhere(['like', 'nomor', $this->nomor])
            ->andFilterWhere(['like', 'tempat', $this->tempat])
            ->andFilterWhere(['like', 'kepada', $this->kepada])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'file_upload', $this->file_upload]);

        return $dataProvider;
    }
}
