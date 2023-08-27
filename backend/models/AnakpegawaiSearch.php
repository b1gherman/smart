<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Anakpegawai;

/**
 * AnakpegawaiSearch represents the model behind the search form of `backend\models\Anakpegawai`.
 */
class AnakpegawaiSearch extends Anakpegawai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_pegawai', 'idstatusanak', 'id_pekerjaan'], 'integer'],
            [['namaanak', 'tgl_lahir'], 'safe'],
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
        $query = Anakpegawai::find();

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
            'idstatusanak' => $this->idstatusanak,
            'tgl_lahir' => $this->tgl_lahir,
            'id_pekerjaan' => $this->id_pekerjaan,
        ]);

        $query->andFilterWhere(['like', 'namaanak', $this->namaanak]);

        return $dataProvider;
    }
}
