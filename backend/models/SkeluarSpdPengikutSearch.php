<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SkeluarSpdPengikut;

/**
 * SkeluarSpdPengikutSearch represents the model behind the search form of `backend\models\SkeluarSpdPengikut`.
 */
class SkeluarSpdPengikutSearch extends SkeluarSpdPengikut
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idspd', 'iduser'], 'integer'],
            [['nama', 'tanggal_lahir', 'keterangan', 'create_at', 'update_at'], 'safe'],
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
        $query = SkeluarSpdPengikut::find();

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
            'idspd' => $this->idspd,
            'tanggal_lahir' => $this->tanggal_lahir,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'iduser' => $this->iduser,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
