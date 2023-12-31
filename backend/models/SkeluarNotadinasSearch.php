<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SkeluarNotadinas;

/**
 * SkeluarNotadinasSearch represents the model behind the search form of `backend\models\SkeluarNotadinas`.
 */
class SkeluarNotadinasSearch extends SkeluarNotadinas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idkepada', 'iddari', 'idttd', 'iduser'], 'integer'],
            [['nomor', 'hal', 'tanggal', 'isi', 'tembusan', 'status', 'file_upload', 'create_at', 'update_at'], 'safe'],
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
        $query = SkeluarNotadinas::find();

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
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'iduser' => $this->iduser,
        ]);

        $query->andFilterWhere(['like', 'nomor', $this->nomor])
            ->andFilterWhere(['like', 'hal', $this->hal])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'tembusan', $this->tembusan])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'file_upload', $this->file_upload]);

        return $dataProvider;
    }
}
