<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pasangan;

/**
 * PasanganSearch represents the model behind the search form of `backend\models\Pasangan`.
 */
class PasanganSearch extends Pasangan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idpegawai', 'idpekerjaan', 'aktif'], 'integer'],
            [['nama', 'tgllahir', 'tglperkawinan', 'tglpisah'], 'safe'],
            [['penghasilan'], 'number'],
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
        $query = Pasangan::find();

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
            'tgllahir' => $this->tgllahir,
            'tglperkawinan' => $this->tglperkawinan,
            'tglpisah' => $this->tglpisah,
            'idpekerjaan' => $this->idpekerjaan,
            'penghasilan' => $this->penghasilan,
            'aktif' => $this->aktif,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama]);

        return $dataProvider;
    }
}
