<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Skppnonaktifsupplier;

/**
 * SkppnonaktifsupplierSearch represents the model behind the search form of `backend\models\Skppnonaktifsupplier`.
 */
class SkppnonaktifsupplierSearch extends Skppnonaktifsupplier
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_instansi', 'no_register_supplier', 'id_pegawai', 'id_sk', 'id_pegawai_kpa'], 'integer'],
            [['nomor_surat', 'lampiran', 'hal', 'tanggal_surat', 'kepada', 'no_dirjen_bendahara', 'nama_bank', 'no_rekening'], 'safe'],
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
        $query = Skppnonaktifsupplier::find();

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
            'tanggal_surat' => $this->tanggal_surat,
            'id_instansi' => $this->id_instansi,
            'no_register_supplier' => $this->no_register_supplier,
            'id_pegawai' => $this->id_pegawai,
            'id_sk' => $this->id_sk,
            'id_pegawai_kpa' => $this->id_pegawai_kpa,
        ]);

        $query->andFilterWhere(['like', 'nomor_surat', $this->nomor_surat])
            ->andFilterWhere(['like', 'lampiran', $this->lampiran])
            ->andFilterWhere(['like', 'hal', $this->hal])
            ->andFilterWhere(['like', 'kepada', $this->kepada])
            ->andFilterWhere(['like', 'no_dirjen_bendahara', $this->no_dirjen_bendahara])
            ->andFilterWhere(['like', 'nama_bank', $this->nama_bank])
            ->andFilterWhere(['like', 'no_rekening', $this->no_rekening]);

        return $dataProvider;
    }
}
