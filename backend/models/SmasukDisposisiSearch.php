<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SmasukDisposisi;

/**
 * SmasukDisposisiSearch represents the model behind the search form of `backend\models\SmasukDisposisi`.
 */
class SmasukDisposisiSearch extends SmasukDisposisi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'iduser'], 'integer'],
            [['nomor_agenda', 'tanggal_terima', 'nomor', 'tanggal', 'asal_surat', 'hal', 'idditeruskan', 'idketdisposisi', 'idpildisposisi', 'file_upload', 'create_at', 'update_at'], 'safe'],
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
        $query = SmasukDisposisi::find();

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
            'tanggal_terima' => $this->tanggal_terima,
            'tanggal' => $this->tanggal,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'iduser' => $this->iduser,
        ]);

        $query->andFilterWhere(['like', 'nomor_agenda', $this->nomor_agenda])
            ->andFilterWhere(['like', 'nomor', $this->nomor])
            ->andFilterWhere(['like', 'asal_surat', $this->asal_surat])
            ->andFilterWhere(['like', 'hal', $this->hal])
            ->andFilterWhere(['like', 'idditeruskan', $this->idditeruskan])
            ->andFilterWhere(['like', 'idketdisposisi', $this->idketdisposisi])
            ->andFilterWhere(['like', 'idpildisposisi', $this->idpildisposisi])
            ->andFilterWhere(['like', 'file_upload', $this->file_upload]);

        return $dataProvider;
    }
}
