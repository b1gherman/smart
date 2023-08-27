<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Naikpangkat;

/**
 * NaikpangkatSearch represents the model behind the search form of `backend\models\Naikpangkat`.
 */
class NaikpangkatSearch extends Naikpangkat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'jumlahberkas', 'idpegawai', 'idpangkatbaru'], 'integer'],
            [['nomor'], 'safe'],
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
        $query = Naikpangkat::find();

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
            'jumlahberkas' => $this->jumlahberkas,
            'idpegawai' => $this->idpegawai,
            'idpangkatbaru' => $this->idpangkatbaru,
        ]);

        $query->andFilterWhere(['like', 'nomor', $this->nomor]);

        return $dataProvider;
    }
}
