<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Riwayatkerja;

/**
 * RiwayatkerjaSearch represents the model behind the search form of `backend\models\Riwayatkerja`.
 */
class RiwayatkerjaSearch extends Riwayatkerja
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idpegawai', 'idsk', 'golongan', 'status'], 'integer'],
            [['tglmulai'], 'safe'],
            [['gapok'], 'number'],
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
        $query = Riwayatkerja::find();

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
            'idpegawai' => $this->idpegawai,
            'idsk' => $this->idsk,
            'tglmulai' => $this->tglmulai,
            'golongan' => $this->golongan,
            'gapok' => $this->gapok,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
