<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Sk;

/**
 * SkSearch represents the model behind the search form of `backend\models\Sk`.
 */
class SkSearch extends Sk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','idpegawai'], 'integer'],
            [['nosk', 'tgl', 'pejabat', 'dokumen'], 'safe'],
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
        $query = Sk::find();

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
            'tgl' => $this->tgl,
        ]);

        $query->andFilterWhere(['like', 'nosk', $this->nosk])
            ->andFilterWhere(['like', 'pejabat', $this->pejabat])
            ->andFilterWhere(['like', 'dokumen', $this->dokumen]);

        return $dataProvider;
    }
}
