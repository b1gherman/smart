<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Riwayatpendidikan;

/**
 * RiwayatpendidikanSearch represents the model behind the search form of `backend\models\Riwayatpendidikan`.
 */
class RiwayatpendidikanSearch extends Riwayatpendidikan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idpegawai', 'idtingkatansekolah', 'idjurusan', 'tahunlulus', 'status'], 'integer'],
            [['namasekolah'], 'safe'],
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
        $query = Riwayatpendidikan::find();

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
            'idtingkatansekolah' => $this->idtingkatansekolah,
            'idjurusan' => $this->idjurusan,
            'tahunlulus' => $this->tahunlulus,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'namasekolah', $this->namasekolah]);

        return $dataProvider;
    }
}
