<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Penyampaianskpp;

/**
 * PenyampaianskppSearch represents the model behind the search form of `backend\models\Penyampaianskpp`.
 */
class PenyampaianskppSearch extends Penyampaianskpp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','id_jenisskpp', 'id_pegawai', 'id_pegawai_kepala'], 'integer'],
            [['nomor_surat', 'sifat', 'lampiran', 'hal', 'tanggal_surat', 'kepada'], 'safe'],
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
        $query = Penyampaianskpp::find();

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
            'id_jenisskpp' => $this->id_jenisskpp,
            'tanggal_surat' => $this->tanggal_surat,
            'id_pegawai' => $this->id_pegawai,
            'id_pegawai_kepala' => $this->id_pegawai_kepala,
        ]);

        $query->andFilterWhere(['like', 'nomor_surat', $this->nomor_surat])
            ->andFilterWhere(['like', 'sifat', $this->sifat])
            ->andFilterWhere(['like', 'lampiran', $this->lampiran])
            ->andFilterWhere(['like', 'hal', $this->hal])
            ->andFilterWhere(['like', 'kepada', $this->kepada]);

        return $dataProvider;
    }
}
