<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Skeluarmemo;

/**
 * SkeluarmemoSearch represents the model behind the search form of `backend\models\Skeluarmemo`.
 */
class SkeluarmemoSearch extends Skeluarmemo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idkepada', 'iddari', 'idttd' , 'idtemplate', 'iduser'], 'integer'],
            [['nomor', 'hal', 'tanggal', 'isi', 'tembusan', 'create_at', 'update_at'], 'safe'],
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
        $query = Skeluarmemo::find();

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
            'idkepada' => $this->idkepada,
            'iddari' => $this->iddari,
            'tanggal' => $this->tanggal,
            'idttd' => $this->idttd,
            'idtemplate' => $this->idtemplate,
            'status' => $this->status,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ]);

        $query->andFilterWhere(['like', 'nomor', $this->nomor])
            ->andFilterWhere(['like', 'hal', $this->hal])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'tembusan', $this->tembusan]);

        return $dataProvider;
    }
}
