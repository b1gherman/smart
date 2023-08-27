<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Instansi;

/**
 * InstansiSearch represents the model behind the search form of `backend\models\Instansi`.
 */
class InstansiSearch extends Instansi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kodesatuan'], 'integer'],
            [['namainstansi', 'satuanorganisasi'], 'safe'],
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
        $query = Instansi::find();

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
            'kodesatuan' => $this->kodesatuan,
        ]);

        $query->andFilterWhere(['like', 'namainstansi', $this->namainstansi])
            ->andFilterWhere(['like', 'satuanorganisasi', $this->satuanorganisasi]);

        return $dataProvider;
    }
}
